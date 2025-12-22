<?php $pageTitle = "Contact - Esteban Racine"; include __DIR__ . '/partials/header.php'; ?>

<main class="flex-grow">
  <div class="max-w-[1280px] mx-auto px-4 md:px-10 lg:px-20 pb-20">
    
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 md:pt-32 md:pb-24 overflow-hidden">        
        <div class="relative z-10 max-w-5xl mx-auto px-4">
            <div class="flex flex-col items-center text-center">
            
            <div class="reveal inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8 shadow-inner" data-animate style="--delay: 0s;">
                <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                </span>
                <span class="text-xs md:text-sm font-bold uppercase tracking-widest text-white/80">Open to Work</span>
            </div>
            
            <h1 class="text-6xl md:text-8xl font-black tracking-tighter mb-8 reveal" data-animate style="--delay: 0.1s;">
                <span class="text-white">Un projet ?</span><br>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary via-purple-400 to-secondary animate-gradient-x">
                Discutons-en.
                </span>
            </h1>
            
            <p class="text-lg md:text-2xl text-[var(--color-text-muted)] max-w-2xl mx-auto leading-relaxed mb-10 reveal" data-animate style="--delay: 0.2s;">
                À la recherche d'un <span class="text-white border-b-2 border-primary/50">développeur passionné</span> pour booster votre équipe ? Je suis prêt à transformer vos idées en code.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-5 reveal" data-animate style="--delay: 0.3s;">
                <a href="#sectionInfo" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-white text-black font-black hover:bg-primary hover:text-white transition-all duration-300 shadow-[0_0_20px_rgba(255,255,255,0.1)] hover:shadow-primary/40 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">send</span>
                Démarrer une conversation
                </a>
                <a href="assets/docs/CV_Esteban_Racine.pdf" download class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 backdrop-blur-sm transition-all flex items-center justify-center gap-2" title="Télécharger le CV (PDF)">
                <span class="material-symbols-outlined">download</span>
                Mon CV (.pdf)
                </a>
            </div>
            
            </div>
        </div>
        </section>

    <div class="grid lg:grid-cols-2 gap-10 items-start" id="sectionInfo">
      
      <!-- Formulaire de contact -->
      <div class="order-1 lg:order-1 reveal" data-animate style="--delay: 0.24s;">
        <div class="bg-surface-dark rounded-3xl p-8 md:p-10 border border-[var(--color-border-dark)] shadow-2xl relative overflow-hidden">
          <div class="absolute -top-10 -right-10 w-48 h-48 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
          
          <div class="relative z-10">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-2 flex items-center gap-3">
              <span class="material-symbols-outlined text-primary">mail</span>
              Envoyez-moi un message
            </h2>
            <p class="text-[var(--color-text-muted)] mb-8">
              Que ce soit pour une opportunité professionnelle, une collaboration ou simplement pour échanger, je vous répondrai dans les plus brefs délais.
            </p>

            <form id="contactForm" class="space-y-6">
              <div class="grid md:grid-cols-2 gap-4">
                <div>
                  <label for="firstname" class="block text-sm font-medium text-white mb-2">
                    Prénom <span class="text-red-400">*</span>
                  </label>
                  <input
                    type="text"
                    id="firstname"
                    name="firstname"
                    required
                    class="w-full px-4 py-3 bg-[#1a1625] border border-[var(--color-border-dark)] rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                    placeholder="Votre prénom"
                  />
                </div>
                <div>
                  <label for="lastname" class="block text-sm font-medium text-white mb-2">
                    Nom <span class="text-red-400">*</span>
                  </label>
                  <input
                    type="text"
                    id="lastname"
                    name="lastname"
                    required
                    class="w-full px-4 py-3 bg-[#1a1625] border border-[var(--color-border-dark)] rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                    placeholder="Votre nom"
                  />
                </div>
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-white mb-2">
                  Email <span class="text-red-400">*</span>
                </label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  class="w-full px-4 py-3 bg-[#1a1625] border border-[var(--color-border-dark)] rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                  placeholder="votre.email@exemple.com"
                />
              </div>

              <div>
                <label for="subject" class="block text-sm font-medium text-white mb-2">
                  Sujet <span class="text-red-400">*</span>
                </label>
                <input
                  type="text"
                  id="subject"
                  name="subject"
                  required
                  class="w-full px-4 py-3 bg-[#1a1625] border border-[var(--color-border-dark)] rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                  placeholder="Objet de votre message"
                />
              </div>

              <div>
                <label for="message" class="block text-sm font-medium text-white mb-2">
                  Message <span class="text-red-400">*</span>
                </label>
                <textarea
                  id="message"
                  name="message"
                  rows="6"
                  required
                  class="w-full px-4 py-3 bg-[#1a1625] border border-[var(--color-border-dark)] rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all resize-none"
                  placeholder="Décrivez votre projet ou votre demande..."
                ></textarea>
              </div>

              <div>
                <button
                  type="submit"
                  class="w-full px-8 py-4 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-bold shadow-lg shadow-purple-500/25 hover:shadow-purple-500/40 hover:scale-[1.02] transition-all flex items-center justify-center gap-2 group"
                >
                  <span>Envoyer le message</span>
                  <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">send</span>
                </button>
              </div>

              <div id="contactMsg" class="text-center text-sm font-medium"></div>
            </form>
          </div>
        </div>
      </div>

      <!-- Informations & liens -->
      <div class="order-2 lg:order-2 space-y-6 reveal" data-animate style="--delay: 0.32s;">
        
        <!-- Card réseaux sociaux -->
        <div class="bg-surface-dark rounded-3xl p-8 border border-[var(--color-border-dark)] shadow-xl relative overflow-hidden">
          <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>
          
          <div class="relative z-10">
            <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
              <span class="material-symbols-outlined text-primary">share</span>
              Mes liens professionnels
            </h3>
            <p class="text-[var(--color-text-muted)] text-sm mb-6">
              Connectons-nous sur ces plateformes
            </p>

            <div class="flex flex-col gap-4">
              <a href="#" class="flex items-center gap-4 p-4 bg-[#1a1625] rounded-xl border border-[var(--color-border-dark)] hover:border-primary transition-all group">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-primary">code</span>
                </div>
                <div>
                  <p class="font-semibold text-white">GitHub</p>
                  <p class="text-xs text-[var(--color-text-muted)]">Mes projets open source</p>
                </div>
              </a>

              <a href="#" class="flex items-center gap-4 p-4 bg-[#1a1625] rounded-xl border border-[var(--color-border-dark)] hover:border-primary transition-all group">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500/20 to-blue-600/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-blue-400">link</span>
                </div>
                <div>
                  <p class="font-semibold text-white">LinkedIn</p>
                  <p class="text-xs text-[var(--color-text-muted)]">Mon profil professionnel</p>
                </div>
              </a>

              <a href="mailto:contact@estebanracine.fr" class="flex items-center gap-4 p-4 bg-[#1a1625] rounded-xl border border-[var(--color-border-dark)] hover:border-primary transition-all group">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-500/20 to-green-600/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-green-400">mail</span>
                </div>
                <div>
                  <p class="font-semibold text-white">Email direct</p>
                  <p class="text-xs text-[var(--color-text-muted)]">contact@estebanracine.fr</p>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Card disponibilité -->
        <div class="bg-gradient-to-br from-primary/10 to-secondary/10 rounded-3xl p-8 border border-primary/20 shadow-xl relative overflow-hidden">
          <div class="absolute top-0 right-0 w-32 h-32 bg-primary/20 rounded-full blur-2xl pointer-events-none"></div>
          
          <div class="relative z-10">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-3 h-3 rounded-full bg-green-400 animate-pulse"></div>
              <h3 class="text-xl font-bold text-white">Disponibilité</h3>
            </div>
            <p class="text-[var(--color-text-muted)] mb-4">
              Je suis actuellement <span class="text-white font-semibold">disponible</span> pour un poste en CDI, stage ou alternance dans le développement web/applications.
            </p>
            <div class="flex items-center gap-2 text-sm text-[var(--color-text-muted)]">
              <span class="material-symbols-outlined text-primary text-lg">schedule</span>
              <span>Réponse sous 24-48h</span>
            </div>
          </div>
        </div>

        <!-- Card info -->
        <div class="bg-surface-dark rounded-3xl p-8 border border-[var(--color-border-dark)] shadow-xl">
          <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">info</span>
            À propos
          </h3>
          <div class="space-y-3 text-sm text-[var(--color-text-muted)]">
            <div class="flex items-center gap-3">
              <span class="material-symbols-outlined text-primary text-xl flex-shrink-0">location_on</span>
              <p>Basé en Bourgogne-Franche-Comté, France</p>
            </div>
            <div class="flex items-center gap-3">
              <span class="material-symbols-outlined text-primary text-xl flex-shrink-0">school</span>
              <p>Étudiant en développement web et applications</p>
            </div>
            <div class="flex items-center gap-3">
              <span class="material-symbols-outlined text-primary text-xl flex-shrink-0">language</span>
              <p>Français (natif), Anglais (intermédiaire)</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
