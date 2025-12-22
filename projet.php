<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projet - Esteban Racine</title>
  <meta name="description" content="Portfolio moderne d'Esteban Racine : projets, passions, CV et contact." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Noto+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="assets/css/base.css" />
  <link rel="shortcut icon" href="assets/img/LogoOnglet.png">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
  <script>
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
        },
      },
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="assets/js/projets.js"></script>
</head>
<body class="bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] text-slate-900 dark:text-white font-display min-h-screen overflow-x-hidden">

<?php
$current = 'projets.php';
function is_active($name, $current) { return $current === $name ? 'text-white font-bold after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-[var(--color-primary)]' : 'text-slate-300 hover:text-[var(--color-primary)]'; }
?>

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
    <div id="navMenu" class="hidden md:flex items-center gap-8 transition-all">
      <a class="relative text-sm <?= is_active('index.php',$current) ?>" href="index.php">Accueil</a>
      <a class="relative text-sm <?= is_active('projets.php',$current) ?>" href="projets.php">Projets</a>
      <a class="relative text-sm <?= is_active('cv.php',$current) ?>" href="cv.php">CV</a>
      <a class="relative text-sm <?= is_active('passions.php',$current) ?>" href="passions.php">Passions</a>
      <a class="relative text-sm <?= is_active('contact.php',$current) ?>" href="contact.php">Contact</a>
      <button class="flex items-center justify-center gap-2 rounded-lg h-9 px-4 bg-primary hover:bg-primary/90 transition-all text-white text-sm font-bold tracking-wide shadow-[0_0_15px_rgba(238,43,238,0.3)]">
        <span class="material-symbols-outlined text-[18px]">download</span>
        <span>Mon CV</span>
      </button>
    </div>
  </div>
  <div id="navMenuMobile" class="md:hidden hidden border-t border-[var(--color-border-dark)] bg-[#181118]">
    <div class="px-5 py-3 flex flex-col gap-3">
      <a class="text-sm py-2 px-3 rounded-lg transition-colors text-slate-300 hover:bg-white/5" href="index.php">Accueil</a>
      <a class="text-sm py-2 px-3 rounded-lg transition-colors bg-primary/20 text-white font-semibold" href="projets.php">Projets</a>
      <a class="text-sm py-2 px-3 rounded-lg transition-colors text-slate-300 hover:bg-white/5" href="cv.php">CV</a>
      <a class="text-sm py-2 px-3 rounded-lg transition-colors text-slate-300 hover:bg-white/5" href="passions.php">Passions</a>
      <a class="text-sm py-2 px-3 rounded-lg transition-colors text-slate-300 hover:bg-white/5" href="contact.php">Contact</a>
    </div>
  </div>
</nav>

<main class="flex-grow">
  <!-- Hero Section -->
  <section class="relative pt-24 pb-12 md:pt-32 md:pb-16 overflow-hidden bg-gradient-to-b from-[#1a1220] to-[var(--color-bg-dark)]">
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-primary/10 rounded-full blur-[150px]"></div>
      <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-secondary/10 rounded-full blur-[130px]"></div>
    </div>
    
    <div class="max-w-[1200px] mx-auto px-4 md:px-10 relative z-10">
      <a href="projets.php" class="inline-flex items-center gap-2 text-[var(--color-text-muted)] hover:text-primary transition-colors mb-8 reveal" data-animate style="--delay: 0s;">
        <span class="material-symbols-outlined">arrow_back</span>
        <span>Retour aux projets</span>
      </a>
      
      <div class="mb-6 reveal" data-animate style="--delay: 0.08s;">
        <span id="project-category" class="px-4 py-2 rounded-full bg-primary/20 text-primary text-sm font-semibold border border-primary/30"></span>
      </div>
      
      <h1 id="project-title" class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-4 reveal" data-animate style="--delay: 0.16s;"></h1>
      
      <p id="project-subtitle" class="text-xl md:text-2xl text-[var(--color-text-muted)] mb-8 reveal" data-animate style="--delay: 0.24s;"></p>
      
      <div class="flex flex-wrap items-center gap-6 mb-10 reveal" data-animate style="--delay: 0.32s;">
        <div class="flex items-center gap-2 text-sm text-[var(--color-text-muted)]">
          <span class="material-symbols-outlined text-primary">calendar_month</span>
          <span id="project-year"></span>
        </div>
        <div class="flex items-center gap-2 text-sm text-[var(--color-text-muted)]">
          <span class="material-symbols-outlined text-primary">schedule</span>
          <span id="project-duration"></span>
        </div>
        <div class="flex items-center gap-2 text-sm text-[var(--color-text-muted)]">
          <span class="material-symbols-outlined text-primary">person</span>
          <span id="project-role"></span>
        </div>
        <div class="flex items-center gap-2 text-sm text-[var(--color-text-muted)]">
          <span class="material-symbols-outlined text-primary">business</span>
          <span id="project-client"></span>
        </div>
      </div>
      
      <div id="project-links" class="flex flex-wrap gap-4 reveal" data-animate style="--delay: 0.4s;"></div>
    </div>
    
    <!-- Gradient fade -->
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-[var(--color-bg-dark)] pointer-events-none"></div>
  </section>

  <div class="max-w-[1200px] mx-auto px-4 md:px-10 py-16">
    
    <!-- Image principale -->
    <div class="mb-16 reveal" data-animate style="--delay: 0s;">
      <div id="project-image" class="relative aspect-video rounded-3xl overflow-hidden border border-[var(--color-border-dark)] shadow-2xl">
        <div class="absolute inset-0 flex items-center justify-center">
          <span class="material-symbols-outlined text-9xl text-white/20">image</span>
        </div>
      </div>
    </div>

    <!-- Description & Technologies -->
    <div class="grid lg:grid-cols-3 gap-10 mb-16">
      
      <div class="lg:col-span-2 space-y-8">
        <!-- Description -->
        <div class="reveal" data-animate style="--delay: 0.08s;">
          <h2 class="text-3xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="material-symbols-outlined text-primary">description</span>
            À propos du projet
          </h2>
          <p id="project-description" class="text-[var(--color-text-muted)] leading-relaxed text-lg"></p>
        </div>

        <!-- Fonctionnalités -->
        <div class="reveal" data-animate style="--delay: 0.16s;">
          <h2 class="text-3xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="material-symbols-outlined text-primary">featured_play_list</span>
            Fonctionnalités clés
          </h2>
          <div id="project-features" class="grid md:grid-cols-2 gap-4"></div>
        </div>

        <!-- Défis -->
        <div class="reveal" data-animate style="--delay: 0.24s;">
          <h2 class="text-3xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="material-symbols-outlined text-primary">psychology</span>
            Défis techniques
          </h2>
          <div class="p-6 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-2xl border border-primary/20">
            <p id="project-challenges" class="text-[var(--color-text-muted)] leading-relaxed"></p>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="space-y-6">
        
        <!-- Technologies -->
        <div class="bg-surface-dark rounded-2xl p-6 border border-[var(--color-border-dark)] shadow-xl reveal" data-animate style="--delay: 0.32s;">
          <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">build</span>
            Technologies
          </h3>
          <div id="project-technologies" class="space-y-3"></div>
        </div>

        <!-- Tags -->
        <div class="bg-surface-dark rounded-2xl p-6 border border-[var(--color-border-dark)] shadow-xl reveal" data-animate style="--delay: 0.4s;">
          <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">label</span>
            Tags
          </h3>
          <div id="project-tags" class="flex flex-wrap gap-2"></div>
        </div>

        <!-- Info card -->
        <div class="bg-gradient-to-br from-primary/10 to-secondary/10 rounded-2xl p-6 border border-primary/20 shadow-xl reveal" data-animate style="--delay: 0.48s;">
          <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">info</span>
            Informations
          </h3>
          <div class="space-y-3 text-sm">
            <div class="flex justify-between">
              <span class="text-[var(--color-text-muted)]">Année</span>
              <span id="info-year" class="text-white font-semibold"></span>
            </div>
            <div class="flex justify-between">
              <span class="text-[var(--color-text-muted)]">Durée</span>
              <span id="info-duration" class="text-white font-semibold"></span>
            </div>
            <div class="flex justify-between">
              <span class="text-[var(--color-text-muted)]">Client</span>
              <span id="info-client" class="text-white font-semibold text-end"></span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Navigation vers autres projets -->
    <div class="border-t border-white/10 pt-12 reveal" data-animate style="--delay: 0s;">
      <h3 class="text-2xl font-bold text-white mb-8 text-center">Autres projets</h3>
      <div class="flex flex-col sm:flex-row gap-6 justify-center">
        <a href="projets.php" class="flex-1 max-w-sm px-6 py-4 rounded-xl bg-surface-dark border border-[var(--color-border-dark)] hover:border-primary transition-all group">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-xs text-[var(--color-text-muted)] mb-1">Voir tous</p>
              <p class="font-bold text-white group-hover:text-primary transition-colors">Mes projets</p>
            </div>
            <span class="material-symbols-outlined text-primary group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>
        <a href="contact.php" class="flex-1 max-w-sm px-6 py-4 rounded-xl bg-gradient-to-r from-primary to-secondary hover:scale-105 transition-transform group shadow-lg shadow-purple-500/25">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-xs text-white/80 mb-1">Intéressé ?</p>
              <p class="font-bold text-white">Me contacter</p>
            </div>
            <span class="material-symbols-outlined text-white group-hover:translate-x-1 transition-transform">send</span>
          </div>
        </a>
      </div>
    </div>

  </div>
</main>

<!-- Modale pour l'image en grand -->
<div id="image-modal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/90 backdrop-blur-sm p-4 group">
  <button id="close-modal" class="absolute top-6 right-6 z-10 w-12 h-12 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 transition-colors text-white">
    <span class="material-symbols-outlined text-2xl">close</span>
  </button>
  <button id="modal-prev" class="absolute left-6 top-1/2 -translate-y-1/2 z-10 w-12 h-12 flex items-center justify-center rounded-full bg-black/50 hover:bg-black/70 transition-all text-white opacity-100 md:opacity-0 md:group-hover:opacity-100">
    <span class="material-symbols-outlined text-2xl">arrow_back</span>
  </button>
  <button id="modal-next" class="absolute right-6 top-1/2 -translate-y-1/2 z-10 w-12 h-12 flex items-center justify-center rounded-full bg-black/50 hover:bg-black/70 transition-all text-white opacity-100 md:opacity-0 md:group-hover:opacity-100">
    <span class="material-symbols-outlined text-2xl">arrow_forward</span>
  </button>
  <div class="max-w-7xl max-h-[90vh] w-full h-full flex items-center justify-center">
    <img id="modal-image" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl" />
  </div>
  <div id="modal-counter" class="absolute bottom-6 left-1/2 -translate-x-1/2 px-4 py-2 rounded-full bg-white/10 text-white text-sm font-medium"></div>
</div>

<footer class="border-t border-[var(--color-border-dark)] py-8 bg-[#120c12] mt-10">
  <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="text-[var(--color-text-muted)] text-sm">© <?= date('Y') ?> Esteban Racine. Tous droits réservés.</p>
    <div class="flex items-center gap-5">
      <a href="#" aria-label="GitHub" class="text-[var(--color-text-muted)] hover:text-white transition-colors">
        <span class="material-symbols-outlined">code</span>
      </a>
      <a href="#" aria-label="LinkedIn" class="text-[var(--color-text-muted)] hover:text-white transition-colors">
        <span class="material-symbols-outlined">link</span>
      </a>
      <a href="contact.php" aria-label="Email" class="text-[var(--color-text-muted)] hover:text-white transition-colors">
        <span class="material-symbols-outlined">mail</span>
      </a>
    </div>
  </div>
</footer>

<script src="assets/js/script.js"></script>
<script>
$(function() {
  // Récupérer l'ID du projet depuis l'URL
  const urlParams = new URLSearchParams(window.location.search);
  const projectId = parseInt(urlParams.get('id')) || 1;
  
  // Charger le projet
  const project = getProjectById(projectId);
  
  if (!project) {
    window.location.href = 'projets.php';
    return;
  }
  
  // Mettre à jour le titre de la page
  document.title = project.title + ' - Esteban Racine';
  
  // Remplir les informations du projet
  $('#project-category').text(project.category.charAt(0).toUpperCase() + project.category.slice(1));
  $('#project-title').text(project.title);
  $('#project-subtitle').text(project.subtitle);
  $('#project-year').text(project.year);
  $('#project-duration').text(project.duration);
  $('#project-role').text(project.role);
  $('#project-client').text(project.client);
  $('#project-description').text(project.fullDescription);
  $('#project-challenges').text(project.challenges);
  
  // Info sidebar
  $('#info-year').text(project.year);
  $('#info-duration').text(project.duration);
  $('#info-client').text(project.client);
  
  // Images - afficher les images ou le placeholder avec gradient
  const projectImageContainer = $('#project-image');
  let currentImageIndex = 0;
  const projectImages = project.images && project.images.length > 0 ? project.images : [];
  
  if (projectImages.length > 0) {
    // Créer un carrousel avec navigation
    let carouselHtml = `
      <div class="relative w-full h-full group">
        <div id="carousel-track" class="w-full h-full">
          <img src="${projectImages[0]}" alt="${project.title}" class="w-full h-full object-cover cursor-pointer transition-transform hover:scale-105" data-index="0" />
        </div>`;
    
    if (projectImages.length > 1) {
      carouselHtml += `
        <button id="carousel-prev" class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-black/50 hover:bg-black/70 transition-all text-white opacity-100 md:opacity-0 md:group-hover:opacity-100">
          <span class="material-symbols-outlined">arrow_back</span>
        </button>
        <button id="carousel-next" class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-black/50 hover:bg-black/70 transition-all text-white opacity-100 md:opacity-0 md:group-hover:opacity-100">
          <span class="material-symbols-outlined">arrow_forward</span>
        </button>
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">`;
      
      projectImages.forEach((_, index) => {
        carouselHtml += `<div class="carousel-dot w-2 h-2 rounded-full bg-white/50 ${index === 0 ? 'bg-white' : ''}" data-index="${index}"></div>`;
      });
      
      carouselHtml += `</div>`;
    }
    
    carouselHtml += `</div>`;
    projectImageContainer.html(carouselHtml);
    
    // Gestion du carrousel
    function updateCarousel(index) {
      currentImageIndex = index;
      $('#carousel-track img').attr('src', projectImages[index]).attr('data-index', index);
      $('.carousel-dot').removeClass('bg-white').addClass('bg-white/50');
      $(`.carousel-dot[data-index="${index}"]`).removeClass('bg-white/50').addClass('bg-white');
    }
    
    $('#carousel-prev').on('click', function(e) {
      e.stopPropagation();
      const newIndex = (currentImageIndex - 1 + projectImages.length) % projectImages.length;
      updateCarousel(newIndex);
    });
    
    $('#carousel-next').on('click', function(e) {
      e.stopPropagation();
      const newIndex = (currentImageIndex + 1) % projectImages.length;
      updateCarousel(newIndex);
    });
    
    $('.carousel-dot').on('click', function(e) {
      e.stopPropagation();
      const index = parseInt($(this).data('index'));
      updateCarousel(index);
    });
    
    // Ouvrir la modale au clic sur l'image
    $(document).on('click', '#carousel-track img', function() {
      const index = parseInt($(this).data('index'));
      openImageModal(index);
    });
    
  } else {
    // Placeholder avec gradient et icône
    projectImageContainer.addClass('bg-gradient-to-br ' + project.gradient);
    projectImageContainer.html(`
      <div class="absolute inset-0 flex items-center justify-center">
        <span class="material-symbols-outlined text-9xl text-white/20">${project.icon}</span>
      </div>
    `);
  }
  
  // Liens
  let linksHtml = '';
  if (project.link && project.link !== '#') {
    linksHtml += `<a href="${project.link}" target="_blank" class="px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-bold shadow-lg hover:shadow-purple-500/40 hover:scale-105 transition-all flex items-center gap-2">
      <span>Voir le site</span>
      <span class="material-symbols-outlined">open_in_new</span>
    </a>`;
  }
  if (project.github && project.github !== '#') {
    linksHtml += `<a href="${project.github}" target="_blank" class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-all flex items-center gap-2">
      <span class="material-symbols-outlined">code</span>
      <span>Code source</span>
    </a>`;
  }
  $('#project-links').html(linksHtml);
  
  // Fonctionnalités
  let featuresHtml = '';
  project.features.forEach(feature => {
    featuresHtml += `
      <div class="flex items-start gap-3 p-4 bg-surface-dark rounded-xl border border-[var(--color-border-dark)] hover:border-primary/30 transition-colors">
        <span class="material-symbols-outlined text-primary mt-0.5 flex-shrink-0">check_circle</span>
        <span class="text-sm text-[var(--color-text-muted)]">${feature}</span>
      </div>`;
  });
  $('#project-features').html(featuresHtml);
  
  // Technologies
  let techHtml = '';
  project.technologies.forEach(tech => {
    techHtml += `
      <div class="flex items-center gap-3 p-3 bg-[#1a1625] rounded-xl hover:bg-[#201729] transition-colors">
        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center flex-shrink-0">
          <span class="material-symbols-outlined text-primary text-xl">${tech.icon}</span>
        </div>
        <span class="text-sm font-medium text-white">${tech.name}</span>
      </div>`;
  });
  $('#project-technologies').html(techHtml);
  
  // Tags
  let tagsHtml = '';
  project.detailTags.forEach(tag => {
    tagsHtml += `<span class="px-3 py-1.5 rounded-lg bg-[#1a1625] text-[var(--color-text-muted)] text-xs font-medium border border-[var(--color-border-dark)] hover:border-primary/30 transition-colors">${tag}</span>`;
  });
  $('#project-tags').html(tagsHtml);
  
  // Gestion de la modale d'image
  let modalCurrentIndex = 0;
  
  function openImageModal(index) {
    if (projectImages.length === 0) return;
    
    modalCurrentIndex = index;
    $('#modal-image').attr('src', projectImages[index]).attr('alt', project.title);
    $('#modal-counter').text(`${index + 1} / ${projectImages.length}`);
    $('#image-modal').removeClass('hidden').addClass('flex');
    
    // Masquer les boutons prev/next si une seule image
    if (projectImages.length === 1) {
      $('#modal-prev, #modal-next').hide();
    } else {
      $('#modal-prev, #modal-next').show();
    }
    
    // Empêcher le scroll du body
    $('body').css('overflow', 'hidden');
  }
  
  function closeImageModal() {
    $('#image-modal').removeClass('flex').addClass('hidden');
    $('body').css('overflow', '');
  }
  
  function modalPrevImage() {
    modalCurrentIndex = (modalCurrentIndex - 1 + projectImages.length) % projectImages.length;
    $('#modal-image').attr('src', projectImages[modalCurrentIndex]);
    $('#modal-counter').text(`${modalCurrentIndex + 1} / ${projectImages.length}`);
  }
  
  function modalNextImage() {
    modalCurrentIndex = (modalCurrentIndex + 1) % projectImages.length;
    $('#modal-image').attr('src', projectImages[modalCurrentIndex]);
    $('#modal-counter').text(`${modalCurrentIndex + 1} / ${projectImages.length}`);
  }
  
  // Events modale
  $('#close-modal').on('click', closeImageModal);
  $('#image-modal').on('click', function(e) {
    if (e.target.id === 'image-modal') closeImageModal();
  });
  $('#modal-prev').on('click', modalPrevImage);
  $('#modal-next').on('click', modalNextImage);
  
  // Navigation clavier
  $(document).on('keydown', function(e) {
    if (!$('#image-modal').hasClass('hidden')) {
      if (e.key === 'Escape') closeImageModal();
      else if (e.key === 'ArrowLeft') modalPrevImage();
      else if (e.key === 'ArrowRight') modalNextImage();
    }
  });
  
  // Réappliquer les animations reveal
  const revealEls = document.querySelectorAll('[data-animate]');
  if (revealEls.length && window.IntersectionObserver) {
    const observer = new IntersectionObserver(function (entries) {
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
</script>

</body>
</html>
