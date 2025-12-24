<?php $pageTitle = "CV - Esteban Racine"; include __DIR__ . '/partials/header.php'; ?>

<main class="flex-grow">
  <div class="max-w-[1280px] mx-auto px-4 md:px-10 lg:px-40 pb-20">
    <section class="py-16 md:py-24 relative" id="about">
      <div class="absolute top-10 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
      <div class="flex flex-col-reverse md:grid md:grid-cols-2 gap-10 items-center md:mt-6">
        <div class="flex flex-col gap-6 text-left z-10">
          <div class="flex flex-col gap-2">
            <span class="inline-block px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold w-fit uppercase tracking-widest">
              Développeur Web
            </span>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-[1.1] tracking-tighter">
              Esteban <span class="text-gradient">Racine.</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl font-light leading-relaxed max-w-lg mt-4">
              Passionné par le développement web et logiciel. Actuellement en Mastère MAALSI au CESI de Dijon, je perfectionne mes compétences techniques à travers des projets concrets et mon alternance.
            </p>
          </div>
          <div class="flex flex-wrap gap-4 mt-2">
            <a href="projets" class="h-12 px-6 rounded-lg bg-primary hover:bg-primary/90 text-white font-bold transition-all shadow-[0_0_20px_rgba(238,43,238,0.4)] flex items-center gap-2 group">
              <span>Voir mes projets</span>
              <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            <a href="contact" class="h-12 px-6 rounded-lg bg-surface-dark border border-white/10 hover:bg-surface-dark-hover text-white font-medium transition-colors flex items-center justify-center">
              Me contacter
            </a>
          </div>
        </div>
        <div class="w-full h-full flex justify-center md:justify-end relative group">
          <div class="relative w-full max-w-md aspect-square">
            <div class="absolute inset-0 bg-gradient-to-tr from-primary to-purple-600 rounded-2xl opacity-20 blur-xl group-hover:opacity-40 transition-opacity duration-500"></div>
            <div class="absolute -inset-1 border border-primary/30 rounded-2xl z-0 transition-transform duration-500 group-hover:scale-105"></div>
            <div class="relative h-full w-full rounded-2xl overflow-hidden bg-surface-dark border border-white/10 z-10" style="background-image: url('assets/img/profile-cv.jpg'); background-size: cover; background-position: center;">
              <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-60"></div>
            </div>
            <div class="absolute -bottom-6 -left-6 bg-surface-dark border border-white/10 p-4 rounded-xl shadow-xl flex items-center gap-3 z-20 backdrop-blur-md">
              <div class="bg-yellow-500/20 p-2 rounded-lg text-yellow-500">
                <span class="material-symbols-outlined">emoji_events</span>
              </div>
              <div>
                <p class="text-xs text-slate-400">WorldSkills France</p>
                <p class="text-white font-bold text-lg">5ème National</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-12" id="experience">
      <div class="flex items-center gap-4 mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white">Parcours <span class="text-gradient">Professionnel</span></h2>
        <div class="h-[1px] bg-white/10 flex-grow"></div>
      </div>
      <div class="relative max-w-3xl mx-auto">
        <div class="absolute left-4 md:left-6 top-0 bottom-0 w-[2px] bg-white/10"></div>
        <div class="flex flex-col gap-10">
          
          <div class="relative pl-12 md:pl-16 group">
            <div class="absolute left-0 md:left-2 top-2 w-8 h-8 md:w-10 md:h-10 rounded-full bg-background-dark border-2 border-primary z-20 flex items-center justify-center">
              <div class="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
            </div>
            <div class="bg-surface-dark p-6 rounded-2xl border border-white/5 hover:border-primary/30 transition-all duration-300">
              <div class="flex flex-wrap justify-between items-start gap-2 mb-4">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded bg-white/10 p-1 flex items-center justify-center overflow-hidden">
                    <img src="assets/img/logos/fondation_pluriel.jpg" alt="Fondation Pluriel" class="w-full h-full object-contain rounded-sm bg-white">
                  </div>
                  <div>
                    <h3 class="text-xl font-bold text-white">Alternant Développeur Web</h3>
                    <h4 class="text-primary text-sm font-medium">Fondation Pluriel</h4>
                  </div>
                </div>
                <span class="text-slate-500 text-sm font-mono bg-white/5 px-2 py-1 rounded">2023 — Présent</span>
              </div>
              <p class="text-slate-400 text-sm leading-relaxed mb-4">
                Mission principale : création de sites web et d'outils internes comme des systèmes de réservations, des workflows de validation ou des interfaces FALC (Facile A Lire et à Comprendre).
              </p>
              <div class="flex gap-2 flex-wrap">
                <span class="text-[10px] uppercase tracking-wider text-slate-300 bg-white/5 px-2 py-1 rounded-md">Symfony</span>
                <span class="text-[10px] uppercase tracking-wider text-slate-300 bg-white/5 px-2 py-1 rounded-md">PHP</span>
                <span class="text-[10px] uppercase tracking-wider text-slate-300 bg-white/5 px-2 py-1 rounded-md">Microsoft Graph</span>
              </div>
            </div>
          </div>

          <div class="relative pl-12 md:pl-16 group">
            <div class="absolute left-0 md:left-2 top-2 w-8 h-8 md:w-10 md:h-10 rounded-full bg-background-dark border-2 border-slate-600 group-hover:border-primary flex items-center justify-center z-10 transition-colors">
              <span class="material-symbols-outlined text-white text-sm">construction</span>
            </div>
            <div class="bg-surface-dark p-6 rounded-2xl border border-white/5 hover:border-primary/30 transition-all duration-300">
              <div class="flex flex-wrap justify-between items-start gap-2 mb-4">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded bg-white/10 p-1 flex items-center justify-center overflow-hidden">
                    <img src="assets/img/logos/waltefaugle.jpg" alt="Waltefaugle" class="w-full h-full object-contain rounded-sm">
                  </div>
                  <div>
                    <h3 class="text-xl font-bold text-white">Stage & Intérim Développeur</h3>
                    <h4 class="text-slate-300 text-sm font-medium">Waltefaugle</h4>
                  </div>
                </div>
                <span class="text-slate-500 text-sm font-mono px-2 py-1 rounded">2023</span>
              </div>
              <p class="text-slate-400 text-sm leading-relaxed mb-4">
                Développement d'applications sous Windev : outil de vérification de sécurité (PC) et application mobile de gestion de stocks via QR Codes.
              </p>
              <div class="flex gap-2 flex-wrap">
                <span class="text-[10px] uppercase tracking-wider text-slate-300 bg-white/5 px-2 py-1 rounded-md">Windev</span>
                <span class="text-[10px] uppercase tracking-wider text-slate-300 bg-white/5 px-2 py-1 rounded-md">Windev Mobile</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-12" id="education">
        <div class="flex items-center gap-4 mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Formation & <span class="text-gradient">Diplômes</span></h2>
            <div class="h-[1px] bg-white/10 flex-grow"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="group bg-surface-dark rounded-2xl p-1 border border-primary/40 bg-gradient-to-br from-primary/10 to-transparent">
                <div class="bg-background-dark/50 backdrop-blur-sm rounded-xl p-6 h-full">
                    <span class="text-xs font-mono text-primary mb-1 block">2025 — 2027</span>
                    <h3 class="text-lg font-bold text-white group-hover:text-primary transition-colors">Mastère MAALSI</h3>
                    <p class="text-slate-400 text-sm mt-1">CESI, Dijon</p>
                    <p class="text-slate-500 text-xs mt-3 italic">Manager en Architecture Logicielle</p>
                </div>
            </div>
            <div class="group bg-surface-dark rounded-2xl p-1 border border-white/5 hover:border-primary/50 transition-all">
                <div class="bg-background-dark/50 rounded-xl p-6 h-full">
                    <span class="text-xs font-mono text-slate-500 mb-1 block">2024 — 2025</span>
                    <h3 class="text-lg font-bold text-white">Bachelor CDA</h3>
                    <p class="text-slate-400 text-sm mt-1">CESI, Dijon</p>
                    <p class="text-slate-500 text-xs mt-3 italic">Concepteur Développeur d'Applications</p>
                </div>
            </div>
            <div class="group bg-surface-dark rounded-2xl p-1 border border-white/5 hover:border-primary/50 transition-all relative">
                <div class="absolute top-5 right-4 z-10">
                    <span class="bg-primary/10 text-primary border border-primary/20 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">
                        Major Académique
                    </span>
                </div>
                
                <div class="bg-background-dark/50 rounded-xl p-6 h-full">
                    <span class="text-xs font-mono text-slate-500 mb-1 block">2022 — 2024</span>
                    <h3 class="text-lg font-bold text-white">BTS SIO (SLAM)</h3>
                    <p class="text-slate-400 text-sm mt-1">Lycée Louis Pergaud, Besançon</p>
                    <p class="text-slate-500 text-xs mt-3 italic">Services Informatiques aux Organisations</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12" id="skills">
      <div class="flex items-center gap-4 mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white">Expertise & <span class="text-gradient">Skills</span></h2>
        <div class="h-[1px] bg-white/10 flex-grow"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <div class="bg-surface-dark p-6 rounded-2xl border border-white/5 hover:border-primary/50 transition-colors group">
          <div class="flex justify-between items-start mb-4">
            <div class="bg-white/5 p-3 rounded-lg text-blue-400"><span class="material-symbols-outlined">code_blocks</span></div>
          </div>
          <h3 class="text-white font-bold text-lg mb-2">Web / Front</h3>
          <p class="text-slate-400 text-sm">VueJS, Angular, HTML, CSS, JS, Jquery.</p>
        </div>
        <div class="bg-surface-dark p-6 rounded-2xl border border-white/5 hover:border-primary/50 transition-colors group">
          <div class="flex justify-between items-start mb-4">
            <div class="bg-white/5 p-3 rounded-lg text-primary"><span class="material-symbols-outlined">dns</span></div>
          </div>
          <h3 class="text-white font-bold text-lg mb-2">Back-end</h3>
          <p class="text-slate-400 text-sm">PHP, Symfony, Python, MySQL, Postgres, NestJS.</p>
        </div>
        <div class="bg-surface-dark p-6 rounded-2xl border border-white/5 hover:border-primary/50 transition-colors group">
          <div class="flex justify-between items-start text-green-400 mb-4">
            <div class="bg-white/5 p-3 rounded-lg "><span class="material-symbols-outlined">smartphone</span></div>
          </div>
          <h3 class="text-white font-bold text-lg mb-2">Logiciel & Mobile</h3>
          <p class="text-slate-400 text-sm">Windev, Flutter, Electron, Capacitor.</p>
        </div>
        <div class="bg-surface-dark p-6 rounded-2xl border border-white/5 hover:border-primary/50 transition-colors group">
          <div class="flex justify-between items-start mb-4">
            <div class="bg-white/5 p-3 rounded-lg text-yellow-400"><span class="material-symbols-outlined">api</span></div>
          </div>
          <h3 class="text-white font-bold text-lg mb-2">Intégration</h3>
          <p class="text-slate-400 text-sm">API, Microsoft Graph, Odoo.</p>
        </div>
      </div>

      <div class="flex flex-wrap gap-3 justify-center">
        <span class="px-5 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-sm flex items-center gap-2 hover:border-primary hover:text-primary transition-colors">
          <span class="material-symbols-outlined text-xs">done_all</span> Autonome
        </span>
        <span class="px-5 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-sm flex items-center gap-2 hover:border-primary hover:text-primary transition-colors">
          <span class="material-symbols-outlined text-xs">search</span> Curieux
        </span>
        <span class="px-5 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-sm flex items-center gap-2 hover:border-primary hover:text-primary transition-colors">
          <span class="material-symbols-outlined text-xs">bolt</span> Motivé
        </span>
        <span class="px-5 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-sm flex items-center gap-2 hover:border-primary hover:text-primary transition-colors">
          <span class="material-symbols-outlined text-xs">lightbulb</span> Créatif
        </span>
        <span class="px-5 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-sm flex items-center gap-2 hover:border-primary hover:text-primary transition-colors">
          <span class="material-symbols-outlined text-xs">groups</span> Travail en équipe
        </span>
        <span class="px-5 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-sm flex items-center gap-2 hover:border-primary hover:text-primary transition-colors">
          <span class="material-symbols-outlined text-xs">psychology</span> Gestion du stress
        </span>
      </div>
    </section>

    <section class="py-12" id="awards">
    <div class="flex items-center gap-4 mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white uppercase tracking-tighter">
            WORLDSKILLS <span class="text-gradient">WEB TECHNOLOGIES</span>
        </h2>
        <div class="h-[1px] bg-white/10 flex-grow"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 items-stretch">
        <div class="flex flex-col gap-6">
            <div class="bg-surface-dark border border-white/5 p-8 rounded-3xl h-full relative overflow-hidden group">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-primary/10 rounded-full blur-3xl"></div>
                
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-yellow-500 text-4xl">workspace_premium</span>
                            <h3 class="text-2xl font-black text-white uppercase italic">Palmarès National</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-white/5 rounded-2xl border border-white/10">
                                <span class="text-slate-400 font-bold uppercase text-xs tracking-widest">Finale Nationale</span>
                                <span class="text-white font-black text-xl italic">5ème Place</span>
                            </div>
                            <div class="flex items-center justify-between p-4 bg-yellow-500/10 rounded-2xl border border-yellow-500/20">
                                <span class="text-yellow-500 font-bold uppercase text-xs tracking-widest">Régional</span>
                                <span class="text-yellow-500 font-black text-xl italic">Médaillé d'Or</span>
                            </div>
                        </div>
                    </div>

                    <a href="https://dijon.cesi.fr/fr/actualites/deux-etudiants-en-finale-nationale-des-worldskills-2025-a-marseille/" 
                       target="_blank" 
                       class="mt-8 flex items-center justify-between p-4 bg-surface-dark-hover border border-white/10 rounded-2xl group hover:border-primary/50 transition-all">
                        <span class="text-sm font-bold text-white">Lire l'article du CESI</span>
                        <span class="material-symbols-outlined text-primary group-hover:translate-x-1 transition-transform">open_in_new</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="bg-surface-dark border border-white/5 p-4 rounded-3xl h-full group hover:border-primary/30 transition-all">
                <div class="relative aspect-video rounded-2xl overflow-hidden mb-4 shadow-2xl">
                    <iframe 
                        class="absolute inset-0 w-full h-full"
                        src="https://www.youtube.com/embed/i-DwhZL4XMU" 
                        title="Worldskills 2025 : portrait d'Esteban Racine" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="px-2 pb-2">
                    <h4 class="text-white font-bold text-lg mb-1">Portrait de compétiteur</h4>
                    <p class="text-slate-500 text-xs flex items-center gap-2 italic">
                        <span class="material-symbols-outlined text-sm">movie</span>
                        Source : Région Bourgogne-Franche-Comté
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="mt-20 border-t border-white/10 pt-16" id="contact">
      <div class="bg-surface-dark rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden border border-white/5 shadow-2xl">
        <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-primary/20 rounded-full blur-[80px] pointer-events-none"></div>
        <div class="z-10 text-center md:text-left">
          <h2 class="text-3xl font-bold text-white mb-2">Prêt à collaborer ?</h2>
          <p class="text-slate-400">Basé à Besançon, France</p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 z-10">
          <a href="contact" class="flex items-center justify-center gap-2 h-12 px-6 rounded-lg bg-white text-background-dark font-bold hover:bg-slate-200 transition-colors">
            <span class="material-symbols-outlined">mail</span>
            <span>Contact</span>
          </a>
          <a href="https://www.linkedin.com/in/esteban-racine/" target="_blank" class="flex items-center justify-center gap-2 h-12 px-6 rounded-lg border border-white/20 text-white font-medium hover:bg-white/5 transition-colors">
            <span class="material-symbols-outlined">link</span>
            <span>LinkedIn</span>
          </a>
        </div>
      </div>
    </section>
  </div>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>