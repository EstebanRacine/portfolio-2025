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

  $('#themeToggle').on('click', function () {
    var isDark = document.documentElement.classList.contains('dark');
    if (isDark) {
      document.documentElement.classList.remove('dark');
      document.documentElement.classList.add('light');
      localStorage.setItem('theme', 'light');
    } else {
      document.documentElement.classList.add('dark');
      document.documentElement.classList.remove('light');
      localStorage.setItem('theme', 'dark');
    }
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
