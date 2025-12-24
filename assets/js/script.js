(function() {
  var saved = localStorage.getItem('theme');
  var html = document.documentElement;
  if (saved === 'light') { html.classList.remove('dark'); html.classList.add('light'); }
  else { html.classList.add('dark'); html.classList.remove('light'); }
})();

$(function () {
  // Mobile nav: animated open/close with overlay + state guard
  var $menu = $('#navMenuMobile');
  var $toggle = $('#navToggle');
  var isMenuOpen = false;

  function openMenu() {
    if (isMenuOpen) return; // guard against double opens

    // Remove any pending animation listeners from previous close
    $menu.off('animationend webkitAnimationEnd');

    // Ensure overlay exists
    if (!$('#navOverlay').length) {
      $('body').append('<div id="navOverlay" class="nav-overlay"></div>');
    }
    var $ov = $('#navOverlay');
    $ov.addClass('in').off('click').on('click', closeMenu);

    $menu.removeClass('hidden mobile-menu-exit');
    // restart animation
    void $menu[0].offsetWidth;
    $menu.addClass('mobile-menu-enter');
    isMenuOpen = true;
    // Toggle icon to close
    $toggle.find('.material-symbols-outlined').text('close');
  }

  function closeMenu() {
    if (!isMenuOpen) return; // guard against double closes
    
    isMenuOpen = false;
    $('#navOverlay').removeClass('in').one('transitionend animationend', function(){ $(this).remove(); });
    
    $menu.removeClass('mobile-menu-enter').addClass('mobile-menu-exit')
      .one('animationend webkitAnimationEnd', function(){
        // Only add hidden if menu is still closed (not re-opened during animation)
        if (!isMenuOpen) {
          $menu.addClass('hidden').removeClass('mobile-menu-exit');
        }
      });
    
    // Restore icon
    $toggle.find('.material-symbols-outlined').text('menu');
  }

  $('#navToggle').on('click', function () {
    if (!isMenuOpen) { openMenu(); } else { closeMenu(); }
  });
  $(document).on('keydown', function(e){ if (e.key === 'Escape' && !$menu.hasClass('hidden')) { closeMenu(); } });

  $(document).on('click', 'a[href^="#"]', function (e) {
    var href = $(this).attr('href');
    if (href.length > 1 && $(href).length) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $(href).offset().top - 72 }, 500);
      // Close mobile menu on navigation
      if (isMenuOpen) { closeMenu(); }
    }
  });

  // Close menu if viewport switches to desktop
  $(window).on('resize', function(){
    if (window.matchMedia('(min-width: 768px)').matches && isMenuOpen) {
      closeMenu();
    }
  });

  var $form = $('#contactForm');
  if ($form.length) {
    $form.on('submit', function (e) {
      e.preventDefault();
      var $btn = $(this).find('button[type="submit"]');
      var $msg = $('#contactMsg');
      $btn.prop('disabled', true).addClass('opacity-70');
      $msg.text('Envoi en cours...');
      $.ajax({
        url: 'forms/contact.php',
        method: 'POST',
        data: $form.serialize(),
        dataType: 'json'
      }).done(function (res) {
        if (res && res.ok) {
          $msg.text('Merci ! Votre message a été envoyé.');
          $form[0].reset();
        } else {
          $msg.text(res && res.error ? res.error : "Une erreur est survenue. Veuillez réessayer.");
        }
      }).fail(function () {
        $msg.text("Impossible d'envoyer le message pour le moment.");
      }).always(function () {
        $btn.prop('disabled', false).removeClass('opacity-70');
      });
    });
  }

    // Déclenche l'animation d'apparition sur les éléments marqués data-animate
    // Petit délai global pour laisser le visuel charger avant les reveals
    var revealEls = document.querySelectorAll('[data-animate]');
    if (revealEls.length) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
          }
        });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.15 });

      var revealInitDelay = 250; // ms
      setTimeout(function () {
        revealEls.forEach(function (el) { observer.observe(el); });
      }, revealInitDelay);
    }

    // Toggle equalizer play/pause on passions hero
    $(document).on('click', '.js-play-toggle', function(){
      $('#eq-bars').toggleClass('paused');
      var $icon = $(this).find('.material-symbols-outlined');
      if ($('#eq-bars').hasClass('paused')) {
        $icon.text('play_arrow');
      } else {
        $icon.text('pause');
      }
    });
});
