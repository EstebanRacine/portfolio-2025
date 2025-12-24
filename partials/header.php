<?php
if (!isset($pageTitle)) { $pageTitle = "Esteban Racine - Portfolio"; }
$current = basename($_SERVER['SCRIPT_NAME']);
function is_active($name, $current) { return $current === $name ? 'text-white font-bold after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-[var(--color-primary)]' : 'text-slate-300 hover:text-[var(--color-primary)]'; }
?>
<!doctype html>
<html class="dark" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="Portfolio moderne d'Esteban Racine : projets, passions, CV et contact." />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N7MJDM2J');</script>
    <!-- End Google Tag Manager -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Noto+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="assets/img/LogoOnglet.png">
    <link rel="stylesheet" href="assets/css/base.css" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: 'class',
        theme: {
          extend: {
            colors: {
              primary: '#ee2bee',
              secondary: '#9d4edd',
              'background-light': '#f8f6f8',
              'background-dark': '#181118',
              'surface-dark': '#271c27',
              'border-dark': '#392839',
            },
            fontFamily: {
              display: ['Space Grotesk', 'sans-serif'],
              body: ['Noto Sans', 'sans-serif'],
            },
            borderRadius: {
              DEFAULT: '0.25rem',
              lg: '0.5rem',
              xl: '0.75rem',
              full: '9999px',
            },
            animation: {
              "pulse-slow": "pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite",
              float: "float 6s ease-in-out infinite",
              flicker: "flicker 3s linear infinite",
            },
          },
        },
      }
    </script>
  </head>
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DGNMBFFVZ2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-DGNMBFFVZ2');
  </script>

  <body class="bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] text-slate-900 dark:text-white font-display min-h-screen overflow-x-hidden">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7MJDM2J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass-nav border-b border-[var(--color-border-dark)] bg-[#181118]/80">
      <div class="max-w-7xl mx-auto px-5 md:px-8 h-16 flex items-center justify-between">
        <a href="index" class="flex items-center gap-3 text-white">
          <div class="size-8 flex items-center justify-center rounded bg-[var(--color-primary)]/20 text-[var(--color-primary)]">
            <span class="material-symbols-outlined text-[20px]">terminal</span>
          </div>
          <span class="text-lg font-bold tracking-tight">Esteban Racine</span>
        </a>
        <button id="navToggle" class="md:hidden text-white">
          <span class="material-symbols-outlined">menu</span>
        </button>
        <div id="navMenu" class="hidden md:flex items-center gap-8 transition-all">
          <a class="relative text-sm <?= is_active('index.php',$current) ?>" href="index">Accueil</a>
          <a class="relative text-sm <?= is_active('projets.php',$current) ?>" href="projets">Projets</a>
          <a class="relative text-sm <?= is_active('cv.php',$current) ?>" href="cv">CV</a>
          <a class="relative text-sm <?= is_active('passions.php',$current) ?>" href="passions">Passions</a>
          <a class="relative text-sm <?= is_active('contact.php',$current) ?>" href="contact">Contact</a>
          <a
            href="assets/docs/CV_Esteban_Racine.pdf"
            download
            class="flex items-center justify-center gap-2 rounded-lg h-9 px-4 bg-primary hover:bg-primary/90 transition-all text-white text-sm font-bold tracking-wide shadow-[0_0_15px_rgba(238,43,238,0.3)]"
            title="Télécharger le CV (PDF)"
          >
            <span class="material-symbols-outlined text-[18px]">download</span>
            <span>Mon CV</span>
          </a>
        </div>
      </div>
      <div id="navMenuMobile" class="md:hidden hidden border-t border-[var(--color-border-dark)] bg-[#181118]">
        <div class="px-5 py-3 flex flex-col gap-3">
          <a class="text-sm py-2 px-3 rounded-lg transition-colors <?= $current === 'index.php' ? 'bg-primary/20 text-white font-semibold' : 'text-slate-300 hover:bg-white/5' ?>" href="index">Accueil</a>
          <a class="text-sm py-2 px-3 rounded-lg transition-colors <?= $current === 'projets.php' ? 'bg-primary/20 text-white font-semibold' : 'text-slate-300 hover:bg-white/5' ?>" href="projets">Projets</a>
          <a class="text-sm py-2 px-3 rounded-lg transition-colors <?= $current === 'cv.php' ? 'bg-primary/20 text-white font-semibold' : 'text-slate-300 hover:bg-white/5' ?>" href="cv">CV</a>
          <a class="text-sm py-2 px-3 rounded-lg transition-colors <?= $current === 'passions.php' ? 'bg-primary/20 text-white font-semibold' : 'text-slate-300 hover:bg-white/5' ?>" href="passions">Passions</a>
          <a class="text-sm py-2 px-3 rounded-lg transition-colors <?= $current === 'contact.php' ? 'bg-primary/20 text-white font-semibold' : 'text-slate-300 hover:bg-white/5' ?>" href="contact">Contact</a>
        </div>
      </div>
    </nav>
    <main class="">