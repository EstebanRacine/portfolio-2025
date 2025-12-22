<?php $pageTitle = "Accueil - Esteban Racine"; include __DIR__ . '/partials/header.php'; ?>

<section class="relative overflow-hidden min-h-screen flex flex-col items-center justify-center">
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute -top-10 -left-10 w-96 h-96 rounded-full bg-primary/20 blur-3xl"></div>
    <div class="absolute -bottom-10 -right-10 w-96 h-96 rounded-full bg-secondary/20 blur-3xl"></div>
  </div>
  
  <!-- Gradient fade to bottom -->
  <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-[var(--color-bg-dark)] pointer-events-none z-10"></div>
  
  <div class="relative max-w-7xl mx-auto px-6 text-center">
    <p class="text-sm text-[var(--color-text-muted)] font-mono tracking-widest uppercase reveal" data-animate style="--delay: 0s;">Portfolio personnel</p>
    <h1 class="mt-4 text-4xl md:text-6xl lg:text-7xl font-black leading-tight reveal" data-animate style="--delay: 0.08s;">
      <span class="block">Bienvenue sur le portfolio</span>
      <span class="gradient-text">d'Esteban Racine</span>
    </h1>
    <p class="mt-6 max-w-2xl mx-auto text-lg text-[var(--color-text-muted)] reveal" data-animate style="--delay: 0.16s;">
      Étudiant en développement & passionné par l'innovation numérique.
    </p>
    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center reveal" data-animate style="--delay: 0.24s;">
      <a class="px-8 py-3 rounded-full bg-slate-800/50 backdrop-blur-sm border border-slate-600 hover:border-primary text-white font-medium transition-all hover:bg-slate-800/80 group" href="#about">
        En savoir plus
        <i class="fas fa-arrow-down ml-2 group-hover:translate-y-1 transition-transform"></i>
      </a>
      <a class="px-8 py-3 rounded-full bg-gradient-to-r from-primary to-secondary text-white font-bold shadow-lg shadow-purple-500/25 hover:shadow-purple-500/40 hover:scale-105 transition-all" href="projets.php">
        Voir mes projets
      </a>
    </div>
  </div>
  <div class="absolute bottom-10 inset-x-0 mx-auto w-fit flex items-center justify-center animate-bounce text-slate-400">
    <i class="fas fa-chevron-down text-5xl opacity-70"></i>
  </div>
</section>
<section id="about" class="relative py-16">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
    <div class="order-2 md:order-1">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 reveal" data-animate style="--delay: 0s;">Qui suis<span class="text-gradient">-je ?</span></h2>
      <p class="text-[var(--color-text-muted)] leading-relaxed mb-4 reveal" data-animate style="--delay: 0.08s;">
        Développeur Web & Logiciel, je prépare actuellement un <span class="text-white font-medium">Mastère MAALSI</span> au CESI de Dijon et en alternance à la <span class="text-white font-medium">Fondation Pluriel</span>. 
        Médaillé d'or régional et <span class="text-white font-medium">5ème national aux WorldSkills</span> en Web Technologies, je conçois des applications web complètes et évolutives de la gestion de bases de données à la création d'interfaces intuitives.
      </p>

      <div class="mt-6 flex gap-3 reveal" data-animate style="--delay: 0.24s;">
        <a href="cv.php" class="h-10 px-5 rounded-lg bg-primary text-white font-bold flex items-center justify-center hover:bg-primary/90 transition-all">
          Voir mon CV
        </a>
        <a href="contact.php" class="h-10 px-5 rounded-lg bg-surface-dark border border-[var(--color-border-dark)] text-white font-medium flex items-center justify-center hover:border-primary transition-all">
          Me contacter
        </a>
      </div>
    </div>
    <div class="order-1 md:order-2 flex justify-center">
      <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-2xl overflow-hidden border border-[var(--color-border-dark)] shadow-primary reveal scale" data-animate style="--delay: 0.12s;">
        <img src="assets/img/me-index.jpg" alt="Ecran de code dans un environnement sombre" class="w-full h-full object-cover"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
      </div>
    </div>
  </div>
</section>
<section class="py-16 border-t border-[var(--color-border-dark)]">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between mb-8 reveal" data-animate style="--delay: 0s;">
      <h2 class="text-3xl font-bold">Sélection <span class="text-gradient">de projets</span></h2>
      <a href="projets.php" class="text-sm text-[var(--color-text-muted)] hover:text-white">Tout voir</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <a href="projet.php?id=1" class="group relative rounded-xl overflow-hidden border border-[var(--color-border-dark)] bg-surface-dark hover:border-primary transition-all reveal" data-animate style="--delay: 0.08s;">
        <img class="w-full h-56 object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="assets/img/projects/gpao_bts/gpao-home.png" alt="Projet interface"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <h3 class="text-xl font-bold">GPAO BTS</h3>
          <p class="text-sm text-[var(--color-text-muted)]">Web, Symfony, FALC</p>
        </div>
      </a>
      <a href="projet.php?id=2" class="group relative rounded-xl overflow-hidden border border-[var(--color-border-dark)] bg-surface-dark hover:border-primary transition-all reveal" data-animate style="--delay: 0.16s;">
        <img class="w-full h-56 object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="assets/img/projects/repas_siege/rs-home.png" alt="Projet site"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <h3 class="text-xl font-bold">Repas Siège</h3>
          <p class="text-sm text-[var(--color-text-muted)]">Web, Symfony, Management</p>
        </div>
      </a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
