(function() {
  var saved = localStorage.getItem('theme');
  var html = document.documentElement;
  if (saved === 'light') { html.classList.remove('dark'); html.classList.add('light'); }
  else { html.classList.add('dark'); html.classList.remove('light'); }
})();

$(function () {
  $('#navToggle').on('click', function () {
    $('#navMenuMobile').toggleClass('hidden');
  });

  $(document).on('click', 'a[href^="#"]', function (e) {
    var href = $(this).attr('href');
    if (href.length > 1 && $(href).length) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $(href).offset().top - 72 }, 500);
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

      revealEls.forEach(function (el) { observer.observe(el); });
    }
});
