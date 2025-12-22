<?php $pageTitle = "Passions - Esteban Racine"; include __DIR__ . '/partials/header.php'; ?>

    <main class="flex-1 flex flex-col items-center w-full">
        <section class="w-full max-w-[1200px] px-6 py-12 lg:px-10 lg:py-20">
          <div
            class="relative overflow-hidden rounded-2xl bg-surface-dark border border-border-dark shadow-2xl group"
          >
            <div class="absolute inset-0 z-0">
              <img
                alt="Abstract dark bokeh lights and neon atmosphere"
                class="h-full w-full object-cover opacity-40 mix-blend-overlay scale-105 group-hover:scale-110 transition-transform duration-[20s]"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNZu7TkRWO5XEJrYAJDd_6vosq-zBQQf6vafCiQXGVLicNVnX3UPe1LrZecUWd3eKfuQZAtmCUZtnrKqDJnSFU_qvqxaeMaYRmiJW4FxM0NlftDHRPvoVG9P9dgEMbWdUqIwGlpORZtyLzZAf2PN2VYXyrr8xcja_Pw7oxHhn81awFP5ZxMCn8i5U74aXv2mNCLmEtUTqi9uIb712FKz7bD7AEBBcgVJKfSPJ5TVc8LvBVfXcR4h2OCb7YkcFPsL5OwQVj5b328dQm"
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-[#181118] via-[#181118]/80 to-transparent"
              ></div>
            </div>
            <div
              class="relative z-10 flex flex-col items-center justify-center px-4 py-24 text-center lg:py-32"
            >
              <div
                class="mb-6 inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-xs font-bold uppercase tracking-wider text-primary backdrop-blur-sm shadow-[0_0_10px_rgba(238,43,238,0.2)] reveal" data-animate style="--delay: 0s;"
              >
                <span class="relative flex h-2 w-2">
                  <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"
                  ></span>
                  <span
                    class="relative inline-flex rounded-full h-2 w-2 bg-primary"
                  ></span>
                </span>
                Exploration Personnelle
              </div>
              <h1
                class="mb-4 text-5xl font-black uppercase leading-none tracking-tighter text-white sm:text-7xl lg:text-8xl reveal" data-animate style="--delay: 0.08s;"
              >
                Mes
                <span
                  class="bg-gradient-to-r from-[#ee2bee] via-[#bd24bd] to-[#8a1c8a] bg-clip-text text-transparent drop-shadow-[0_0_25px_rgba(238,43,238,0.4)] animate-pulse-slow"
                  >Passions</span
                >
              </h1>
              <p
                class="mb-10 max-w-2xl text-lg text-gray-300 sm:text-xl font-body reveal" data-animate style="--delay: 0.16s;"
              >
                Plongez dans mes univers favoris. Une triade d'inspirations qui
                façonne ma créativité : rythmes, pixels et pellicules.
              </p>
              <div class="animate-bounce mt-5">
                <span class="material-symbols-outlined text-gray-500 text-6xl"
                  >keyboard_arrow_down</span
                >
              </div>
            </div>
          </div>
        </section>
        <section class="w-full max-w-[1200px] px-6 lg:px-10 py-12" id="musique">
          <div
            class="relative rounded-3xl bg-surface-dark border border-border-dark overflow-hidden reveal" data-animate style="--delay: 0s;"
          >
            <div
              class="absolute inset-0 bg-gradient-to-br from-purple-900/20 to-transparent pointer-events-none"
            ></div>
            <div class="grid lg:grid-cols-2 gap-0 lg:gap-8">
              <div
                class="relative h-96 lg:h-auto overflow-hidden bg-black flex items-center justify-center group"
              >
                <div
                  class="absolute inset-0 opacity-40 mix-blend-screen transition-transform duration-700 group-hover:scale-110"
                  style="
                    background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuCIsX9jcm0W3JpFidDdlbvWhg6yoBWFmPnmiNG8Ns4oDnMkzIoKGJXah3zEbqfN3Yat9UG0iHKAlKwK2xuPXHKaA-OrxZtVaBrVNqT93OwSsEnZfTUS-7BmwIKeFn6OxuNN3bI51qaDSbJQRzqid4BBsgeT-3xWnEbwwl0MGXyJafbxg9A2eY63IjCJNYbbjrip9GxXol5ooEbotGRnsQ7iB8bJ4M06q1cvavmplBKBh1lWV-G9aUV2P5j-LJKooaQeGFQr01_ulIXF&quot;);
                    background-size: cover;
                    background-position: center;
                  "
                ></div>
                <div
                  id="eq-bars"
                  class="absolute bottom-0 left-0 right-0 h-1/2 flex items-end justify-center gap-1 px-8 pb-8 z-10 opacity-70"
                >
                  <div
                    class="w-2 bg-primary rounded-t-sm h-12 animate-[pulse_1s_ease-in-out_infinite]"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-24 animate-[pulse_1.2s_ease-in-out_infinite] animation-delay-100"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-16 animate-[pulse_0.8s_ease-in-out_infinite] animation-delay-200"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-32 animate-[pulse_1.5s_ease-in-out_infinite] animation-delay-300"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-20 animate-[pulse_1.1s_ease-in-out_infinite] animation-delay-150"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-40 animate-[pulse_1.3s_ease-in-out_infinite] animation-delay-400"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-28 animate-[pulse_0.9s_ease-in-out_infinite] animation-delay-250"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-14 animate-[pulse_1.4s_ease-in-out_infinite] animation-delay-500"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-22 animate-[pulse_1s_ease-in-out_infinite] animation-delay-350"
                  ></div>
                  <div
                    class="w-2 bg-primary rounded-t-sm h-36 animate-[pulse_1.6s_ease-in-out_infinite] animation-delay-600"
                  ></div>
                </div>
                <div
                  class="relative z-20 size-20 rounded-full border-2 border-primary/50 bg-black/50 backdrop-blur-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-110 hover:border-primary hover:bg-primary/20 shadow-[0_0_30px_rgba(238,43,238,0.3)] js-play-toggle"
                  role="button"
                  aria-label="Mettre en pause ou lire l'animation"
                >
                  <span
                    class="material-symbols-outlined text-4xl text-white ml-1"
                    >pause</span
                  >
                </div>
              </div>
              <div class="p-8 lg:p-12 flex flex-col justify-center">
                <div class="flex items-center gap-3 mb-6">
                  <div
                    class="p-3 rounded-lg bg-surface-highlight border border-border-dark text-primary shadow-[0_0_15px_rgba(238,43,238,0.15)]"
                  >
                    <span class="material-symbols-outlined text-2xl"
                      >equalizer</span
                    >
                  </div>
                  <h2 class="text-3xl font-bold text-white tracking-tight">
                    La Musique
                  </h2>
                </div>
                <h3 class="text-xl font-medium text-gray-200 mb-4 font-body">
                  Architecture Sonore &amp; Émotions
                </h3>
                <p
                  class="text-gray-400 leading-relaxed mb-8 border-l-2 border-primary/30 pl-4 font-body"
                >
                  La musique est bien plus qu’un simple fond sonore, c’est un vecteur d’émotions et de beauté. 
                  J’explore chaque morceau comme un paysage vivant en me laissant transporter par les paroles, les instruments et les ambiances. 
                  Mon approche est guidée par l’émotion et la beauté avec une sensibilité particulière pour le violon et les compositions qui racontent une histoire.
                  (évidemment, j'aime aussi un son bien catchy pour s'amuser)
                </p>
                <div class="flex flex-wrap gap-3 mb-8">
                  <span
                    class="px-3 py-1 rounded-full text-xs font-bold bg-primary/10 text-primary border border-primary/20 hover:bg-primary/20 cursor-default transition-colors"
                    >Pop</span
                  >
                  <span
                    class="px-3 py-1 rounded-full text-xs font-bold bg-purple-500/10 text-purple-400 border border-purple-500/20 hover:bg-purple-500/20 cursor-default transition-colors"
                    >Alternative</span
                  >
                  <span
                    class="px-3 py-1 rounded-full text-xs font-bold bg-blue-500/10 text-blue-400 border border-blue-500/20 hover:bg-blue-500/20 cursor-default transition-colors"
                    >Rock</span
                  >
                </div>
                <button
                  class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-lg bg-white text-black px-6 py-3 text-sm font-bold hover:bg-gray-200 transition-colors shadow-lg shadow-white/10"
                >
                  <span class="material-symbols-outlined">headphones</span>
                  Écouter ma Playlist
                </button>
              </div>
            </div>
          </div>
        </section>
        <section
  class="w-full max-w-[1200px] px-6 lg:px-10 py-12"
  id="jeuxvideo"
>
  <div
    class="relative rounded-3xl bg-[#1a1625] border border-border-dark overflow-hidden p-1 reveal" data-animate style="--delay: 0s;"
  >
    <div
      class="absolute inset-0 bg-gradient-to-r from-blue-500 via-primary to-purple-600 opacity-20 blur-xl"
    ></div>
    <div
      class="relative bg-[#130f1a] rounded-[22px] p-6 lg:p-10 overflow-hidden"
    >
      <div
        class="absolute inset-0 opacity-10"
        style="
          background-image:
            linear-gradient(#392839 1px, transparent 1px),
            linear-gradient(90deg, #392839 1px, transparent 1px);
          background-size: 40px 40px;
        "
      ></div>
      <div
        class="relative flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10 pb-6 border-b border-white/5"
      >
        <div class="flex items-center gap-4">
          <div
            class="relative size-16 rounded-xl bg-gradient-to-br from-blue-600 to-purple-600 p-[2px]"
          >
            <div
              class="h-full w-full rounded-[10px] bg-black flex items-center justify-center overflow-hidden"
            >
              <span
                class="material-symbols-outlined text-3xl text-white"
                >sports_esports</span
              >
            </div>
            <div
              class="absolute -bottom-1 -right-1 size-4 bg-green-500 border-2 border-[#130f1a] rounded-full"
            ></div>
          </div>
          <div>
            <h2
              class="text-3xl font-bold text-white uppercase tracking-wider font-display"
            >
              LES JEUX VIDÉO
            </h2>
            <p class="text-blue-400 text-sm font-mono tracking-widest">
              LEVEL 90 • EXPLORER
            </p>
          </div>
        </div>
        <div class="flex gap-2 sm:gap-6 font-mono text-xs sm:text-sm">
          <div
            class="flex flex-col items-center bg-white/5 p-3 rounded-lg border border-white/5 min-w-[80px]"
          >
            <span class="text-gray-400">XP Total</span>
            <span class="text-primary font-bold text-lg">102,300</span>
          </div>
          <div
            class="flex flex-col items-center bg-white/5 p-3 rounded-lg border border-white/5 min-w-[80px]"
          >
            <span class="text-gray-400">Heures</span>
            <span class="text-blue-400 font-bold text-lg">+10k</span>
          </div>
        </div>
      </div>
      <div class="relative grid md:grid-cols-2 gap-10">
        <div class="space-y-6">
          <div
            class="bg-blue-500/5 border border-blue-500/20 rounded-xl p-6 relative overflow-hidden group hover:border-blue-500/40 transition-colors"
          >
            <div class="absolute top-0 right-0 p-4 opacity-20">
              <span
                class="material-symbols-outlined text-6xl text-blue-500 group-hover:rotate-12 transition-transform duration-500"
                >smart_toy</span
              >
            </div>
            <h3 class="text-xl font-bold text-white mb-2">
              Art Total &amp; Interactivité
            </h3>
            <p
              class="text-gray-400 text-sm leading-relaxed font-body relative z-10"
            >
              Je joue pour m’immerger dans des univers riches et vivre des histoires captivantes. Chaque jeu est une leçon de design, de stratégie et d’émotion. Je recherche la beauté, l’émotion et l’immersion dans chaque expérience.
            </p>
          </div>
          <div class="space-y-4 font-mono text-xs">
            <div>
              <div class="flex justify-between mb-1 text-gray-400">
                <span>Action / Combat</span>
                <span>75%</span>
              </div>
              <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                <div
                  class="h-full bg-gradient-to-r from-blue-500 to-purple-500 w-[75%]"
                ></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-1 text-gray-400">
                <span>Exploration / Lore</span>
                <span>95%</span>
              </div>
              <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                <div
                  class="h-full bg-gradient-to-r from-blue-500 to-purple-500 w-[95%] shadow-[0_0_10px_rgba(59,130,246,0.5)]"
                ></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-1 text-gray-400">
                <span>Stratégie / Compétitif</span>
                <span>65%</span>
              </div>
              <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                <div
                  class="h-full bg-gradient-to-r from-blue-500 to-purple-500 w-[65%]"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-3">
          <h4
            class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-1"
          >
            Derniers Succès Débloqués
          </h4>
          <div
            class="flex items-center gap-4 bg-[#1a1520] border border-white/5 p-3 rounded-lg hover:bg-white/5 hover:border-primary/30 transition-all cursor-pointer group"
          >
            <div
              class="size-12 rounded bg-yellow-500/10 flex items-center justify-center text-yellow-500 border border-yellow-500/20 group-hover:scale-110 transition-transform"
            >
              <span class="material-symbols-outlined">trophy</span>
            </div>
            <div>
              <h5
                class="text-white font-bold text-sm group-hover:text-primary transition-colors"
              >
                Trophy Hunter
              </h5>
              <p class="text-gray-500 text-xs">
                +42 platines débloquées
              </p>
            </div>
          </div>
          <div
            class="flex items-center gap-4 bg-[#1a1520] border border-white/5 p-3 rounded-lg hover:bg-white/5 hover:border-primary/30 transition-all cursor-pointer group"
          >
            <div
              class="size-12 rounded bg-purple-500/10 flex items-center justify-center text-purple-500 border border-purple-500/20 group-hover:scale-110 transition-transform"
            >
              <span class="material-symbols-outlined">explore</span>
            </div>
            <div>
              <h5
                class="text-white font-bold text-sm group-hover:text-primary transition-colors"
              >
                Explorer Supreme
              </h5>
              <p class="text-gray-500 text-xs">
                Explorer tous les mondes et environnements
              </p>
            </div>
          </div>
          <div
            class="flex items-center gap-4 bg-[#1a1520] border border-white/5 p-3 rounded-lg hover:bg-white/5 hover:border-primary/30 transition-all cursor-pointer group"
          >
            <div
              class="size-12 rounded bg-red-500/10 flex items-center justify-center text-red-500 border border-red-500/20 group-hover:scale-110 transition-transform"
            >
              <span class="material-symbols-outlined">history_edu</span>
            </div>
            <div>
              <h5
                class="text-white font-bold text-sm group-hover:text-primary transition-colors"
              >
                Platinum Overwatch
              </h5>
              <p class="text-gray-500 text-xs">
                Atteindre le rang Platine depuis 2020
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        <section
          class="w-full max-w-[1200px] px-6 lg:px-10 py-12 mb-12"
          id="cinema"
        >
          <div
            class="relative bg-black rounded-3xl overflow-hidden border-y-8 border-dashed border-gray-800 shadow-2xl reveal" data-animate style="--delay: 0s;"
          >
            <div
              class="absolute inset-0 opacity-10 pointer-events-none z-10"
              style="
                background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuBbsU8UHN4fmV7qld745NVF4_kSRDabeKTDWjmMplvC5pITuH5P3FYHUjGcHMSF3_8LUQTE7lEpyVxXe6qCM-ACnsFyKSZ5Va7DF97V9mDBfWfpZp6LAKh-FKkL2nOLKrQZNf4aQYc1AIDh0e83qoxtlOX_fe5ZIVQLObvmyG2vtfDrYrtfvEe8tfZaaWgGVeEUD9jQlWkR-IijfGrTaYterHIcpoPFSz13rMXqI6oBx2mtJAtM1sPScEMzbqxIZdtMrU1TFPs61leT&quot;);
              "
            ></div>
            <div
              class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-gradient-to-b from-white/5 via-transparent to-black pointer-events-none z-0"
            ></div>
            <div class="relative z-20 px-6 py-16 lg:px-12 text-center">
              <div class="mb-12 inline-flex flex-col items-center">
                <span
                  class="material-symbols-outlined text-4xl text-white mb-2 animate-flicker"
                  >movie_filter</span
                >
                <h2
                  class="text-4xl md:text-5xl font-black text-white tracking-tighter uppercase text-glow"
                >
                  Le Cinéma
                </h2>
                <div
                  class="h-1 w-24 bg-primary mt-4 rounded-full shadow-[0_0_15px_#ee2bee]"
                ></div>
              </div>
              <p
                class="max-w-3xl mx-auto text-gray-300 text-lg mb-16 font-body"
              >
                Le 7ème art est ma fenêtre sur le monde. Au-delà du
                divertissement, je me passionne pour la grammaire visuelle, la
                photographie et la mise en scène. C'est l'étude de la lumière et
                du cadrage qui nourrit ma vision de designer.
              </p>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div
                  class="group relative aspect-[2/3] rounded-lg overflow-hidden cursor-pointer shadow-xl transition-all duration-500 hover:-translate-y-4 hover:shadow-[0_20px_40px_-15px_rgba(255,255,255,0.2)]"
                >
                  <div class="absolute inset-0 bg-gray-800 animate-pulse"></div>
                  <img
                    alt="Abstract brutalist structure resembling sci-fi movie set"
                    class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-100 grayscale group-hover:grayscale-0"
                    src="assets/img/the-batman.avif"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-60 transition-opacity"
                  ></div>
                  <div
                    class="absolute bottom-0 left-0 p-6 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform"
                  >
                    <div
                      class="text-primary text-xs font-bold uppercase tracking-widest mb-1"
                    >
                      Action
                    </div>
                    <h3 class="text-2xl font-bold text-white leading-none mb-2">
                      The Batman
                    </h3>
                    <p
                      class="text-gray-400 text-xs line-clamp-3 opacity-0 group-hover:opacity-100 transition-opacity delay-100"
                    >
                      Un détective masqué traque un tueur dangereux dans les rues sombres de Gotham. Un combat intense entre justice et vengeance.
                    </p>
                  </div>
                </div>
                <div
                  class="group relative aspect-[2/3] rounded-lg overflow-hidden cursor-pointer shadow-xl transition-all duration-500 hover:-translate-y-4 hover:shadow-[0_20px_40px_-15px_rgba(255,255,255,0.2)]"
                >
                  <div
                    class="absolute inset-0 bg-gray-800 animate-pulse delay-75"
                  ></div>
                  <img
                    alt="Neo noir rain city street"
                    class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-100 grayscale group-hover:grayscale-0"
                    src="assets/img/dragons.jpg"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-60 transition-opacity"
                  ></div>
                  <div
                    class="absolute bottom-0 left-0 p-6 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform"
                  >
                    <div
                      class="text-primary text-xs font-bold uppercase tracking-widest mb-1"
                    >
                      Animation
                    </div>
                    <h3 class="text-2xl font-bold text-white leading-none mb-2">
                      Dragons
                    </h3>
                    <p
                      class="text-gray-400 text-xs line-clamp-3 opacity-0 group-hover:opacity-100 transition-opacity delay-100"
                    >
                      L'histoire d'un jeune garçon qui devient ami avec un dragon blessé. Ensemble, ils vont prouver que leurs deux mondes peuvent vivre en paix.
                    </p>
                  </div>
                </div>
                <div
                  class="group relative aspect-[2/3] rounded-lg overflow-hidden cursor-pointer shadow-xl transition-all duration-500 hover:-translate-y-4 hover:shadow-[0_20px_40px_-15px_rgba(255,255,255,0.2)]"
                >
                  <div
                    class="absolute inset-0 bg-gray-800 animate-pulse delay-150"
                  ></div>
                  <img
                    alt="Dramatic lighting city view"
                    class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-100 grayscale group-hover:grayscale-0"
                    src="assets/img/fight-club.jpg"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-60 transition-opacity"
                  ></div>
                  <div
                    class="absolute bottom-0 left-0 p-6 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform"
                  >
                    <div
                      class="text-primary text-xs font-bold uppercase tracking-widest mb-1"
                    >
                      Thriller
                    </div>
                    <h3 class="text-2xl font-bold text-white leading-none mb-2">
                      Fight Club
                    </h3>
                    <p
                      class="text-gray-400 text-xs line-clamp-3 opacity-0 group-hover:opacity-100 transition-opacity delay-100"
                    >
                      Un homme qui s'ennuie dans sa vie crée un club de combat secret. Un voyage étrange et violent qui change sa vision du monde.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <?php include __DIR__ . '/partials/footer.php'; ?>
