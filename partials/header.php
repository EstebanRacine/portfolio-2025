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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Noto+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/base.css" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
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
          },
        },
      }
    </script>
  </head>
  <body class="bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] text-slate-900 dark:text-white font-display min-h-screen overflow-x-hidden">
    <nav class="fixed top-0 left-0 right-0 z-50 glass-nav border-b border-[var(--color-border-dark)] bg-[#181118]/80">
      <div class="max-w-7xl mx-auto px-5 md:px-8 h-16 flex items-center justify-between">
        <a href="index.php" class="flex items-center gap-3 text-white">
          <div class="size-8 flex items-center justify-center rounded bg-[var(--color-primary)]/20 text-[var(--color-primary)]">
            <span class="material-symbols-outlined text-[20px]">terminal</span>
          </div>
          <span class="text-lg font-bold tracking-tight">Esteban Racine</span>
        </a>
        <button id="navToggle" class="md:hidden text-white">
          <span class="material-symbols-outlined">menu</span>
        </button>
        <div id="navMenu" class="hidden md:flex items-center gap-8">
          <a class="relative text-sm <?= is_active('index.php',$current) ?>" href="index.php">Accueil</a>
          <a class="relative text-sm <?= is_active('projets.php',$current) ?>" href="projets.php">Projets</a>
          <a class="relative text-sm <?= is_active('passions.php',$current) ?>" href="passions.php">Passions</a>
          <a class="relative text-sm <?= is_active('cv.php',$current) ?>" href="cv.php">CV</a>
          <a class="relative text-sm <?= is_active('contact.php',$current) ?>" href="contact.php">Contact</a>
          <button id="themeToggle" class="ml-2 h-9 px-3 rounded-lg bg-[var(--color-primary)]/10 text-[var(--color-primary)] border border-[var(--color-primary)]/30 hover:bg-[var(--color-primary)] hover:text-white transition-all">Thème</button>
        </div>
      </div>
      <div id="navMenuMobile" class="md:hidden hidden border-t border-[var(--color-border-dark)] bg-[#181118]">
        <div class="px-5 py-3 flex flex-col gap-3">
          <a class="text-sm" href="index.php">Accueil</a>
          <a class="text-sm" href="projets.php">Projets</a>
          <a class="text-sm" href="passions.php">Passions</a>
          <a class="text-sm" href="cv.php">CV</a>
          <a class="text-sm" href="contact.php">Contact</a>
        </div>
      </div>
    </nav>
    <main class="pt-20">