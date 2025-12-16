<?php $pageTitle = "Accueil - Esteban Racine"; include __DIR__ . '/partials/header.php'; ?>
<section class="relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute -top-10 -left-10 w-96 h-96 rounded-full bg-primary/20 blur-3xl"></div>
    <div class="absolute -bottom-10 -right-10 w-96 h-96 rounded-full bg-secondary/20 blur-3xl"></div>
  </div>
  <div class="relative max-w-7xl mx-auto px-6 pt-10 pb-16 text-center">
    <p class="text-sm text-[var(--color-text-muted)] font-mono tracking-widest uppercase">Portfolio personnel</p>
    <h1 class="mt-4 text-4xl md:text-6xl lg:text-7xl font-black leading-tight">
      <span class="block">Bienvenue sur le portfolio</span>
      <span class="gradient-text">d'Esteban Racine</span>
    </h1>
    <p class="mt-6 max-w-2xl mx-auto text-lg text-[var(--color-text-muted)]">
      Étudiant en développement & passionné par l'innovation numérique.
    </p>
    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
      <a href="projets.php" class="px-8 py-3 rounded-full bg-gradient-to-r from-primary to-secondary text-white font-bold shadow-lg hover:scale-105 transition-all">Voir mes projets</a>
      <a href="about" class="px-8 py-3 rounded-full bg-surface-dark/50 border border-[var(--color-border-dark)] hover:border-primary text-white">En savoir plus</a>
    </div>
  </div>
</section>
<section id="about" class="relative py-16">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
    <div class="order-2 md:order-1">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Qui suis‑je ?</h2>
      <p class="text-[var(--color-text-muted)] leading-relaxed mb-4">Je conçois des interfaces modernes et des expériences web performantes. J'aime explorer le design, le front‑end et le back‑end pour livrer des produits soignés.</p>
      <p class="text-[var(--color-text-muted)] leading-relaxed">Mon stack favori: HTML, CSS (Tailwind), JavaScript/TypeScript, PHP et un soupçon de UI/UX.</p>
      <div class="mt-6 flex gap-3">
        <a href="cv.php" class="h-10 px-5 rounded-lg bg-primary text-white font-bold hover:bg-primary/90">Voir mon CV</a>
        <a href="contact.php" class="h-10 px-5 rounded-lg bg-surface-dark border border-[var(--color-border-dark)] hover:border-primary">Me contacter</a>
      </div>
    </div>
    <div class="order-1 md:order-2 flex justify-center">
      <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-2xl overflow-hidden border border-[var(--color-border-dark)] shadow-primary">
        <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=1200&auto=format&fit=crop" alt="Ecran de code dans un environnement sombre" class="w-full h-full object-cover"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
      </div>
    </div>
  </div>
</section>
<section class="py-16 border-t border-[var(--color-border-dark)]">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between mb-8">
      <h2 class="text-3xl font-bold">Sélection de projets</h2>
      <a href="projets.php" class="text-sm text-[var(--color-text-muted)] hover:text-white">Tout voir</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <a href="projets.php" class="group relative rounded-xl overflow-hidden border border-[var(--color-border-dark)] bg-surface-dark hover:border-primary transition-all">
        <img class="w-full h-56 object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://images.unsplash.com/photo-1551281044-8eb36db5613a?q=80&w=1200&auto=format&fit=crop" alt="Projet interface"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <h3 class="text-xl font-bold">UI Dashboard</h3>
          <p class="text-sm text-[var(--color-text-muted)]">Design system, accessibilité, performance</p>
        </div>
      </a>
      <a href="projets.php" class="group relative rounded-xl overflow-hidden border border-[var(--color-border-dark)] bg-surface-dark hover:border-primary transition-all">
        <img class="w-full h-56 object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://images.unsplash.com/photo-1518432031352-d6fc5c10da5a?q=80&w=1200&auto=format&fit=crop" alt="Projet site"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <h3 class="text-xl font-bold">Site vitrine moderne</h3>
          <p class="text-sm text-[var(--color-text-muted)]">Tailwind, SEO, animations</p>
        </div>
      </a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
