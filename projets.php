<?php $pageTitle = "Projets - Esteban Racine"; include __DIR__ . '/partials/header.php'; ?>

<main class="flex-grow">
  <div class="max-w-[1400px] mx-auto px-4 md:px-10 lg:px-20 pb-20">
    
    <!-- Hero Section -->
    <section class="relative pt-24 pb-12 md:pt-32 md:pb-24 overflow-hidden">
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[140px]"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-[120px]"></div>
      </div>
      
      <!-- Gradient fade to bottom -->
      <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-[var(--color-bg-dark)] pointer-events-none z-10"></div>
      
      <div class="relative z-10 text-center">
        <p class="text-sm text-[var(--color-text-muted)] font-mono tracking-widest uppercase mb-4 reveal" data-animate style="--delay: 0s;">
          Portfolio & Réalisations
        </p>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6 reveal" data-animate style="--delay: 0.08s;">
          <span class="block text-white mb-2">Mes</span>
          <span class="gradient-text">Projets</span>
        </h1>
        <p class="text-lg md:text-xl text-[var(--color-text-muted)] max-w-3xl mx-auto reveal" data-animate style="--delay: 0.16s;">
          Découvrez une sélection de mes réalisations en développement web, applications et design. Chaque projet reflète ma passion pour le code et l'innovation.
        </p>
      </div>
    </section>

    <!-- Filtres -->
    <section class="mb-12 reveal" data-animate style="--delay: 0.24s;">
      <div class="flex flex-wrap items-center justify-center gap-3">
        <button class="filter-btn active px-6 py-2.5 rounded-full text-sm font-semibold transition-all" data-filter="all">
          Tous les projets
        </button>
        <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-semibold transition-all" data-filter="web">
          Web
        </button>
        <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-semibold transition-all" data-filter="app">
          Applications
        </button>
        <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-semibold transition-all" data-filter="design">
          Design
        </button>
      </div>
    </section>

    <!-- Grille de projets -->
    <section id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Les projets seront chargés dynamiquement via JavaScript -->
    </section>

    <!-- CTA Contact -->
    <section class="mt-20 border-t border-white/10 pt-16">
      <div class="bg-surface-dark rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden border border-white/5 shadow-2xl reveal" data-animate style="--delay: 0s;">
        <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-primary/20 rounded-full blur-[80px] pointer-events-none"></div>
        <div class="z-10 text-center md:text-left">
          <h2 class="text-3xl font-bold text-white mb-2">Un projet en tête ?</h2>
          <p class="text-[var(--color-text-muted)]">Discutons de vos idées et créons quelque chose d'incroyable ensemble.</p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 z-10">
          <a href="contact.php" class="px-8 py-4 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-bold shadow-lg hover:shadow-purple-500/40 hover:scale-105 transition-all flex items-center justify-center gap-2">
            <span>Me contacter</span>
            <span class="material-symbols-outlined">send</span>
          </a>
          <a href="cv.php" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-all flex items-center justify-center gap-2">
            <span>Voir mon CV</span>
            <span class="material-symbols-outlined">description</span>
          </a>
        </div>
      </div>
    </section>

  </div>
</main>

<style>
  .filter-btn {
    background: var(--color-surface-dark);
    border: 1px solid var(--color-border-dark);
    color: var(--color-text-muted);
  }
  .filter-btn:hover {
    border-color: var(--color-primary);
    color: white;
  }
  .filter-btn.active {
    background: linear-gradient(90deg, var(--color-primary), #a855f7);
    border-color: transparent;
    color: white;
  }
  .project-card {
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.3s, transform 0.3s;
  }
  .project-card.hidden {
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
    position: absolute;
  }
</style>

<script src="assets/js/projets.js"></script>

<?php include __DIR__ . '/partials/footer.php'; ?>
