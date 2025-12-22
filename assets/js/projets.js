// Données des projets
// const projets = [
//   {
//     id: 1,
//     title: "Site E-commerce",
//     subtitle: "Plateforme de vente en ligne moderne",
//     description: "Plateforme de vente en ligne complète avec gestion des stocks, paiements sécurisés et interface admin.",
//     fullDescription: "Développement complet d'une plateforme e-commerce avec gestion des stocks, système de paiement sécurisé, interface admin et analytics en temps réel. Le projet inclut un système de panier avancé, des recommandations produits basées sur l'IA, et une expérience utilisateur optimisée pour le mobile.",
//     category: "web",
//     tags: [
//       { label: "Web", color: "primary" },
//       { label: "PHP", color: "blue" }
//     ],
//     detailTags: ['PHP', 'MySQL', 'JavaScript', 'Stripe', 'API REST'],
//     year: "2024",
//     duration: "3 mois",
//     role: "Développeur Full-Stack",
//     client: "Client privé",
//     link: "#",
//     github: "#",
//     icon: "code",
//     gradient: "from-primary/20 to-secondary/20",
//     images: [
//         "assets/img/projects/e-commerce1.jpg",
//         "assets/img/projects/e-commerce2.jpg",
//     ],
//     features: [
//       'Gestion complète des produits et catégories',
//       'Système de panier avec sauvegarde persistante',
//       'Paiements sécurisés via Stripe',
//       'Interface admin pour gestion des commandes',
//       'Système de recherche et filtres avancés',
//       'Notifications email automatiques',
//       'Analytics et statistiques de ventes',
//       'Design responsive et moderne'
//     ],
//     challenges: "L'un des plus grands défis a été d'optimiser les performances pour gérer un catalogue de plus de 10 000 produits tout en maintenant des temps de chargement rapides. J'ai implémenté un système de cache intelligent et utilisé des techniques de lazy loading pour les images.",
//     technologies: [
//       { name: 'PHP 8', icon: 'code' },
//       { name: 'MySQL', icon: 'database' },
//       { name: 'JavaScript', icon: 'javascript' },
//       { name: 'Stripe API', icon: 'payments' },
//       { name: 'Bootstrap', icon: 'design_services' }
//     ]
//   },
//   {
//     id: 2,
//     title: "Application de Gestion",
//     subtitle: "Outil de gestion de projets et équipes",
//     description: "Interface moderne pour gérer les tâches, projets et équipes avec notifications temps réel.",
//     fullDescription: "Application web moderne permettant de gérer des projets, tâches et équipes avec des notifications en temps réel. Interface intuitive avec drag & drop, tableaux Kanban, et système de chat intégré. L'application offre également des fonctionnalités de reporting et d'analytics pour suivre la productivité.",
//     category: "app",
//     tags: [
//       { label: "Application", color: "blue" },
//       { label: "React", color: "cyan" }
//     ],
//     detailTags: ['React', 'Node.js', 'Socket.io', 'MongoDB', 'Express'],
//     year: "2024",
//     duration: "4 mois",
//     role: "Développeur Front-End & Back-End",
//     client: "Startup Tech",
//     link: "#",
//     github: "#",
//     icon: "smartphone",
//     gradient: "from-blue-500/20 to-purple-500/20",
//     images: [],
//     features: [
//       'Tableaux Kanban avec drag & drop',
//       'Notifications en temps réel (WebSocket)',
//       'Système de chat d\'équipe intégré',
//       'Gestion des membres et permissions',
//       'Timeline et calendrier de projet',
//       'Rapports et analytics détaillés',
//       'Intégrations tierces (Slack, GitHub)',
//       'Mode sombre et personnalisation'
//     ],
//     challenges: "La synchronisation en temps réel entre plusieurs utilisateurs a nécessité une architecture WebSocket robuste. J'ai utilisé Socket.io avec Redis pour gérer les connexions multiples et garantir une expérience fluide même avec des dizaines d'utilisateurs simultanés.",
//     technologies: [
//       { name: 'React', icon: 'code' },
//       { name: 'Node.js', icon: 'terminal' },
//       { name: 'MongoDB', icon: 'database' },
//       { name: 'Socket.io', icon: 'cell_tower' },
//       { name: 'Redux', icon: 'storage' }
//     ]
//   },
//   {
//     id: 3,
//     title: "Refonte Identité Visuelle",
//     subtitle: "Design system et charte graphique",
//     description: "Création d'une nouvelle charte graphique complète incluant logo, couleurs et guidelines.",
//     fullDescription: "Création complète d'une nouvelle identité visuelle pour une entreprise de services numériques. Le projet inclut la conception du logo, la palette de couleurs, la typographie, les guidelines et tous les supports de communication (cartes de visite, papeterie, réseaux sociaux).",
//     category: "design",
//     tags: [
//       { label: "Design", color: "purple" },
//       { label: "UI/UX", color: "pink" }
//     ],
//     detailTags: ['Figma', 'Illustrator', 'Photoshop', 'UI/UX', 'Branding'],
//     year: "2023",
//     duration: "2 mois",
//     role: "Designer UI/UX",
//     client: "Agence digitale",
//     link: "#",
//     github: null,
//     icon: "palette",
//     gradient: "from-pink-500/20 to-orange-500/20",
//     images: [],
//     features: [
//       'Création de logo vectoriel',
//       'Palette de couleurs harmonieuse',
//       'Choix et pairing de typographies',
//       'Guidelines détaillées (50+ pages)',
//       'Mockups supports de communication',
//       'Design templates réseaux sociaux',
//       'Iconographie personnalisée',
//       'Prototypes interactifs'
//     ],
//     challenges: "Le principal défi était de créer une identité visuelle moderne tout en respectant les valeurs traditionnelles de l'entreprise. J'ai proposé plusieurs concepts avant de converger vers une solution équilibrée qui satisfait toutes les parties prenantes.",
//     technologies: [
//       { name: 'Figma', icon: 'design_services' },
//       { name: 'Illustrator', icon: 'brush' },
//       { name: 'Photoshop', icon: 'image' },
//       { name: 'InDesign', icon: 'article' },
//       { name: 'After Effects', icon: 'animation' }
//     ]
//   },
//   {
//     id: 4,
//     title: "Blog Technique",
//     subtitle: "Plateforme de partage de connaissances",
//     description: "Plateforme de partage d'articles techniques sur le développement web et les nouvelles technologies.",
//     fullDescription: "Blog personnel dédié au développement web et aux nouvelles technologies. Système de gestion de contenu personnalisé avec éditeur Markdown, système de commentaires, tags, recherche full-text et newsletter automatique.",
//     category: "perso",
//     tags: [
//       { label: "Perso", color: "green" },
//       { label: "Blog", color: "yellow" }
//     ],
//     detailTags: ['Next.js', 'MDX', 'Tailwind', 'PostgreSQL', 'Vercel'],
//     year: "2024",
//     duration: "2 mois",
//     role: "Développeur & Rédacteur",
//     client: "Projet personnel",
//     link: "#",
//     github: "#",
//     icon: "public",
//     gradient: "from-green-500/20 to-blue-500/20",
//     images: [],
//     features: [
//       'Éditeur Markdown avec prévisualisation',
//       'Système de commentaires modéré',
//       'Tags et catégories dynamiques',
//       'Recherche full-text performante',
//       'Newsletter automatique (Mailchimp)',
//       'Optimisation SEO avancée',
//       'Mode lecture et mode sombre',
//       'Partage sur réseaux sociaux'
//     ],
//     challenges: "Optimiser le SEO tout en maintenant des performances excellentes. J'ai utilisé Next.js avec SSG (Static Site Generation) pour générer des pages ultra-rapides et un système de cache intelligent pour les articles populaires.",
//     technologies: [
//       { name: 'Next.js', icon: 'code' },
//       { name: 'TypeScript', icon: 'javascript' },
//       { name: 'Tailwind CSS', icon: 'design_services' },
//       { name: 'PostgreSQL', icon: 'database' },
//       { name: 'Vercel', icon: 'cloud' }
//     ]
//   },
//   {
//     id: 5,
//     title: "Gestionnaire d'Événements",
//     subtitle: "Plateforme de billetterie en ligne",
//     description: "Système complet de création et gestion d'événements avec billetterie intégrée.",
//     fullDescription: "Système complet de création et gestion d'événements avec billetterie intégrée, codes QR, validation à l'entrée, et analytics en temps réel. L'application permet aux organisateurs de créer des événements, gérer les inscriptions et suivre les statistiques.",
//     category: "app",
//     tags: [
//       { label: "Application", color: "blue" },
//       { label: "Vue.js", color: "orange" }
//     ],
//     detailTags: ['Vue.js', 'Firebase', 'Stripe', 'QR Code', 'PWA'],
//     year: "2023",
//     duration: "3 mois",
//     role: "Développeur Full-Stack",
//     client: "Association événementielle",
//     link: "#",
//     github: "#",
//     icon: "event",
//     gradient: "from-purple-500/20 to-pink-500/20",
//     images: [],
//     features: [
//       'Création et gestion d\'événements',
//       'Système de billetterie avec Stripe',
//       'Génération de QR codes uniques',
//       'Application mobile de validation',
//       'Dashboard analytics en temps réel',
//       'Envoi automatique de billets par email',
//       'Gestion des places et capacités',
//       'Mode offline (PWA)'
//     ],
//     challenges: "Gérer des pics de trafic importants lors des ouvertures de billetterie. J'ai mis en place un système de file d'attente avec Firebase Realtime Database et optimisé les transactions de paiement pour éviter les doublons.",
//     technologies: [
//       { name: 'Vue.js 3', icon: 'code' },
//       { name: 'Firebase', icon: 'local_fire_department' },
//       { name: 'Stripe', icon: 'payments' },
//       { name: 'Vuetify', icon: 'design_services' },
//       { name: 'PWA', icon: 'install_mobile' }
//     ]
//   },
//   {
//     id: 6,
//     title: "Portfolio 2025",
//     subtitle: "Site personnel moderne et élégant",
//     description: "Mon portfolio personnel conçu avec des animations modernes et une interface élégante.",
//     fullDescription: "Mon portfolio personnel conçu avec des animations modernes, une interface élégante et une expérience utilisateur soignée. Le site inclut mes projets, compétences, CV et un formulaire de contact fonctionnel. Design responsive avec mode sombre par défaut.",
//     category: "perso",
//     tags: [
//       { label: "Perso", color: "green" },
//       { label: "Portfolio", color: "yellow" }
//     ],
//     detailTags: ['PHP', 'JavaScript', 'Tailwind', 'GSAP', 'jQuery'],
//     year: "2025",
//     duration: "1 mois",
//     role: "Développeur & Designer",
//     client: "Projet personnel",
//     link: "#",
//     github: "#",
//     icon: "terminal",
//     gradient: "from-cyan-500/20 to-blue-500/20",
//     images: [],
//     features: [
//       'Design moderne avec animations GSAP',
//       'Navigation fluide et intuitive',
//       'Sections projets, CV, passions',
//       'Formulaire de contact fonctionnel',
//       'Animations au scroll (Intersection Observer)',
//       'Mode sombre élégant',
//       'Performance optimisée (>95 Lighthouse)',
//       'SEO et accessibilité'
//     ],
//     challenges: "Créer un portfolio qui se démarque tout en restant professionnel et accessible. J'ai mis l'accent sur les animations subtiles et l'expérience utilisateur pour créer un site mémorable qui reflète ma personnalité et mes compétences.",
//     technologies: [
//       { name: 'PHP', icon: 'code' },
//       { name: 'Tailwind CSS', icon: 'design_services' },
//       { name: 'JavaScript', icon: 'javascript' },
//       { name: 'jQuery', icon: 'code' },
//       { name: 'WAMP', icon: 'dns' }
//     ]
//   }
// ];

const projets = [
  {
    id: 1,
    title: "GPAO BTS",
    subtitle: "Gestion de Production Assistée par Ordinateur",
    description: "Refonte complète d'un outil de suivi industriel pour une blanchisserie, intégrant les normes FALC.",
    fullDescription: "Refonte d'une application obsolète vers une architecture moderne découplée (API/Webservice). Le projet permet le suivi du linge sur l'ensemble de la chaîne de production : de la collecte chez le client jusqu'à la livraison, en passant par le lavage, séchage et la couture. L'accent a été mis sur la sécurité (Azure AD, JWT) et l'accessibilité via la méthodologie FALC (Facile À Lire et à Comprendre).",
    category: "web",
    tags: [
      { label : "Web", color: "purple" },
      { label: "Symfony", color: "primary" },
      { label: "FALC", color: "green" }
    ],
    detailTags: ['Symfony', 'PHP', 'MySQL', 'JWT', 'Azure AD'],
    year: "2024-2025",
    duration: "En déploiement",
    role: "Développeur / Chef de projet",
    client: "Blanchisserie Textile Service (Fondation Pluriel)",
    link: "#", 
    github: "#",
    icon: "factory",
    gradient: "from-blue-600/20 to-cyan-500/20",
    images: [
      "assets/img/projects/gpao_bts/gpao-home.png",
      "assets/img/projects/gpao_bts/gpao-livraison.png",
      "assets/img/projects/gpao_bts/gpao-comptoir.png",
    ],
    features: [
      'Architecture découplée API REST & Webservice',
      'Authentification sécurisée via Azure AD (SSO ready)',
      'Suivi du cycle de vie du linge en temps réel',
      'Interface optimisée FALC pour les utilisateurs finaux',
      'Gestion des tournées de livraison pour les chauffeurs',
      'Traçabilité complète des actions par profil utilisateur',
      'Système de logs et monitoring avec Monolog',
      'Tâches automatisées (CRON) pour la rotation des tokens'
    ],
    challenges: "Le défi majeur était de transformer un code legacy 'spaghetti' en une architecture robuste et sécurisée. J'ai mis en place une communication sécurisée entre l'API et le Webservice via JWT avec une rotation automatisée des secrets. L'autre point crucial était l'ergonomie, adaptée aux spécificités du FALC pour garantir l'inclusion de tous les travailleurs.",
    technologies: [
      { name: 'Symfony 7', icon: 'php' },
      { name: 'MySQL', icon: 'database' },
      { name: 'JWT', icon: 'enhanced_encryption' },
      { name: 'Azure AD', icon: 'lock' },
      { name: 'Sass & Bootstrap', icon: 'style' }
    ]
  },
  {
    id: 2,
    title: "Repas Siège",
    subtitle: "Système de réservation de repas & gestion de badges",
    description: "Refonte complète d'une application de restauration d'entreprise avec authentification Azure AD et architecture API/Client.",
    fullDescription: "Version 2 de l'application de réservation de repas pour le siège social de la Fondation. Cette refonte majeure a permis d'ouvrir l'application au réseau externe (usage mobile) tout en durcissant la sécurité. Outre le développement technique, ce projet a marqué une étape clé dans ma progression professionnelle via l'encadrement d'un stagiaire sur la partie développement.",
    category: "web",
    tags: [
      { label: "Web", color: "purple" },
      { label: "Symfony", color: "primary" },
      { label: "Management", color: "yellow" } 
    ],
    detailTags: ['PHP', 'Symfony', 'MariaDB', 'Azure AD', 'JWT', 'Mentorat'],
    year: "2025",
    duration: "4 mois",
    role: "Lead Développeur & Tuteur",
    client: "Fondation Pluriel",
    link: "#",
    github: "#",
    icon: "restaurant",
    gradient: "from-orange-500/20 to-red-500/20",
    images: [
      "assets/img/projects/repas_siege/rs-home.png",
      "assets/img/projects/repas_siege/rs-plateaux.png",
      "assets/img/projects/repas_siege/rs-mail.png",
    ], 
    features: [
      'Architecture découplée (API REST & WebApp Symfony)',
      'Authentification SSO Azure AD avec certificats clients',
      'Encadrement technique et code review d\'un stagiaire',
      'Web Scraping automatisé des menus (Cuisine d\'Uzel)',
      'Interface adaptative (Desktop & Mobile optimisé)',
      'Gestion complexe des délais de commande (J+4 à J+2 mois)',
      'Synchronisation des badges avec le système CashMag',
      'Système de notifications email automatisées'
    ],
    challenges: "Le défi était double : technique et humain. Techniquement, il fallait sécuriser l'accès mobile via Azure AD et des tokens JWT rotatifs. Humainement, j'ai dû piloter le projet tout en accompagnant un stagiaire, en définissant ses tâches, en effectuant les revues de code (Code Review) et en veillant à la montée en compétence sur Symfony.",
    technologies: [
      { name: 'Symfony', icon: 'code' },
      { name: 'Azure AD / OAuth2', icon: 'lock' },
      { name: 'Mentorat / Management', icon: 'groups' },
      { name: 'MariaDB', icon: 'database' },
      { name: 'UX Turbo', icon: 'bolt' }
    ]
  },
  {
    id: 3,
    title: "CesiZen",
    subtitle: "Plateforme de gestion du stress et des émotions",
    description: "Application web de gestion du stress pour les étudiants, avec exercices guidés et suivi personnalisé.",
    fullDescription: "CesiZen est un projet scolaire : une application web et mobile conçue pour aider les étudiants à gérer leur \
    stress et leurs émotions. L'application propose des exercices de respiration, de méditation guidée, ainsi qu'un journal de bord \
    pour suivre son état émotionnel au fil du temps. Des notifications personnalisées encouragent les utilisateurs à pratiquer \
    régulièrement.",
    category: "app",
    tags: [
      { label: "Application", color: "blue" },
      { label: "Vue JS", color: "orange" },
      { label: "Symfony", color: "primary" }
    ],
    detailTags: ['Vue.js', 'Symfony', 'MariaDB', 'PWA', 'UX/UI'],
    year: "2024-2025",
    duration: "8 mois",
    role: "Développeur Full-Stack / Chef de projet",
    client: "Projet scolaire (Cesi Dijon)",
    link: "#",
    github: "https://github.com/EstebanRacine/CesiZen",
    icon: "self_improvement",
    gradient: "from-green-500/20 to-teal-500/20",
    images: [
      "assets/img/projects/cesizen/list-cesizen.png",
      "assets/img/projects/cesizen/tracker-cesizen.png",
      "assets/img/projects/cesizen/profil-cesizen.png",
    ],
    features: [
      'Exercices de respiration et méditation guidée',
      'Journal de bord pour suivre son état émotionnel',
      'Notifications personnalisées pour encourager la pratique',
      'Interface adaptative (Desktop & Mobile optimisé)',
      'Progression et statistiques personnelles',
      'Backoffice d\'administration pour gérer les contenus',
      'Mode hors-ligne (PWA)',
      'Design centré utilisateur avec tests UX'
    ],
    challenges: "Le principal défi a été de créer une expérience utilisateur apaisante et intuitive, essentielle pour une application\
     de bien-être. J'ai travaillé sur les couleurs et le style général en m'appuyant sur de moodboards et des tests utilisateurs pour \
     garantir une interface relaxante. Sur le plan technique, la mise en place d'une PWA avec synchronisation hors-ligne a également été\
      un point clé.",
    technologies: [
      { name: 'Vue.js 3', icon: 'code' },
      { name: 'Symfony 7', icon: 'php' },
      { name: 'MariaDB', icon: 'database' },
      { name: 'Tailwind CSS', icon: 'design_services' }
    ]
  },
  {
    id: 4,
    title: "Site du Village de Menotey",
    subtitle: "Prototype E-commerce & Portail communal",
    description: "Conception d'un portail hybride (Information & Click & Collect) développée en mode 'IA-First' avec GitHub Copilot.",
    fullDescription: "Ce projet sert de démonstration technique pour l'intégration rapide de fonctionnalités complexes. \
    Alliant un portail d'information citoyen et un système complet de commande de pizzas, il a été conçu en utilisant intensivement \
    GitHub Copilot pour l'accélération du développement et l'optimisation du code Symfony. Le projet inclut une intégration complète \
    de Stripe en mode test, validant tout le flux de paiement.",
    category: "design",
    tags: [
      { label: "Design", color: "purple" },
      { label: "IA (Copilot)", color: "pink" },
      { label: "Stripe", color: "black" }
    ],
    detailTags: ['Symfony', 'GitHub Copilot', 'Stripe', 'Bootstrap 5', 'Prototype'],
    year: "2025",
    duration: "1 jour",
    role: "Designer + Prompter",
    client: "Village de Menotey",
    link: "https://menotey.esteban-racine.fr/",
    github: "https://github.com/EstebanRacine/MenoteyFR", 
    icon: "science",
    gradient: "from-orange-600/20 to-yellow-500/20",
    images: [
      "assets/img/projects/menotey/home-menotey.png",
      "assets/img/projects/menotey/-info.png",
      "assets/img/projects/menotey/menotey-paiement.png",
    ], 
    features: [
      'Développement assisté par IA (Copilot) pour l\'optimisation algorithmique',
      'Tunnel d\'achat complet : Catalogue → Panier → Paiement',
      'Intégration de Stripe (Mode Test) avec gestion des Webhooks',
      'Interface moderne avec animations fluides au scroll',
      'Module de gestion de projets communaux avec barres de progression',
      'Système de réservation avec choix du créneau de récupération',
      'Design Mobile-First optimisé pour les citoyens',
      'Architecture Symfony robuste et prête pour la production'
    ],
    challenges: "L'objectif était de tester les limites du développement assisté par IA pour créer une plateforme \
    complexe en un temps record. Le défi a été de structurer les prompts pour obtenir une logique de panier cohérente en\
     JavaScript tout en maintenant un backend Symfony rigoureux. Bien qu'actuellement au stade de prototype avancé (non déployé \
     en production), le système est techniquement complet.",
    technologies: [
      { name: 'GitHub Copilot', icon: 'auto_awesome' },
      { name: 'Symfony', icon: 'code' },
      { name: 'Stripe API', icon: 'payments' },
      { name: 'MySQL', icon: 'database' }
    ]
  },
  {
    id: 5,
    title: "(Re)Sources Relationnelles",
    subtitle: "Projet d'études CDA - Cohésion sociale & Bien-être",
    description: "Conception complète d'un réseau social collaboratif pour le Ministère des Solidarités et de la Santé dans \
    le cadre du titre CDA.",
    fullDescription: "Projet fil rouge réalisé durant ma formation Concepteur Développeur d'Applications (CDA) au CESI (2024-2025).\
     L'objectif est de créer une plateforme numérique visant à renforcer les liens sociaux et lutter contre l'isolement en s'appuyant \
     sur la pyramide de Maslow. En tant qu'Expert UX/UI du groupe 'Novato', j'ai piloté la conception \
     centrée utilisateur et l'architecture sécurisée du système.",
    category: "app",
    tags: [
      { label: "CESI 2025", color: "orange" },
      { label: "NestJS / Angular", color: "primary" },
      { label: "Expert UX/UI", color: "purple" }
    ],
    detailTags: ['NestJS', 'Angular', 'MySQL', 'Figma', 'UML', 'RGPD'],
    year: "2024-2025",
    duration: "10 mois",
    role: "Expert UX/UI & Développeur Frontend",
    client: "Ministère des Solidarités et de la Santé (Sujet d'étude)",
    link: "",
    github: "https://github.com/cda1-2024/Ressources-relationnelles", // Exemple, à adapter si besoin
    icon: "groups_3",
    gradient: "from-blue-700/20 to-teal-500/20",
    images: [
      "assets/img/projects/ressources-relationnelles/list.png",
      "assets/img/projects/ressources-relationnelles/gestion-user.png",
      "assets/img/projects/ressources-relationnelles/create-ressource.png",
    ], 
    features: [
      'Partage de ressources multimédias (Vidéo, Image, PDF, Texte)',
      'Évènements interactifs avec activités ludiques (Morpion, Motus, Sondages)',
      'Système de chat intégré aux évènements pour favoriser l\'échange',
      'Authentification sécurisée avec Double Authentification (2FA)',
      'Gestion stricte des données personnelles conforme au RGPD',
      'Modération avancée des commentaires et système de signalement',
      'Tableau de bord statistique avec export CSV/JSON pour les administrateurs',
      'Conception de maquettes haute fidélité Web et Mobile sur Figma'
    ],
    challenges: "Le défi majeur consistait à modéliser une architecture complexe répondant aux exigences de sécurité d'un \
    ministère (chiffrement AES-256, 2FA) tout en garantissant une accessibilité universelle pour tous les citoyens. \
    J'ai dû concevoir des flux de séquences précis pour la modération et la création de ressources, assurant une traçabilité totale \
    des actions via des journaux d'accès sécurisés.",
    technologies: [
      { name: 'NestJS', icon: 'terminal' },
      { name: 'Angular', icon: 'code' },
      { name: 'Figma', icon: 'brush' },
      { name: 'MySQL', icon: 'database' },
      { name: 'Architecture MVC', icon: 'account_tree' }
    ]
  },
  {
    id: 6,
    title: "ETC (Enroule Ton Câble)",
    subtitle: "Projet entrepreneurial - BTS GPME",
    description: "Conception d'un site vitrine pour une micro-entreprise créée de A à Z dans un cadre pédagogique et commercial.",
    fullDescription: "Création de l'identité numérique pour ETC, une micro-entreprise lancée comme projet fil rouge en BTS GPME. \
    L'objectif était de concevoir un produit réel (enrouleur de câbles industriels), de le fabriquer et de le commercialiser. Le site \
    a été développé pour présenter les services, les études de cas et gérer la prospection via un formulaire de contact dédié, \
    simulant une mise sur le marché réelle.",
    category: "web",
    tags: [
      { label: "HTML", color: "orange" },
      { label: "CSS", color: "purple" },
      { label: "SEO", color: "yellow" }
    ],
    detailTags: ['HTML', 'JavaScript', 'CSS', 'SEO', 'Entrepreneuriat'],
    year: "2023",
    duration: "3 mois",
    role: "Développeur & Prestataire",
    client: "BTS GPME - ETC",
    link: "https://enrouletoncable.fr/",
    github: "#",
    icon: "business",
    gradient: "from-yellow-500/20 to-red-500/20",
    images: [
      "assets/img/projects/etc/index.png",
      "assets/img/projects/etc/product.png",
      "assets/img/projects/etc/whoami.png"
    ],
    features: [
      'Site vitrine complet pour une micro-entreprise',
      'Présentation des services et études de cas',
      'Formulaire de contact avec validation JavaScript',
      'Design responsive optimisé pour mobile et desktop',
      'Optimisation SEO pour un meilleur référencement naturel',
      'Intégration de Google Analytics pour le suivi des visiteurs',
      'Hébergement et nom de domaine personnalisés',
      'Respect des bonnes pratiques web (accessibilité, performance)'
    ],
    challenges: "Le principal défi a été de créer un site professionnel avec des ressources limitées, tout en respectant les \
    contraintes pédagogiques. J'ai dû apprendre à gérer un projet de A à Z, depuis la conception jusqu'à la mise en ligne, \
    en passant par le design et le développement. L'optimisation SEO a également été un point clé pour assurer la visibilité \
    du site. C'était mon premier vrai projet client, ce qui m'a permis de comprendre les attentes réelles du marché.",
    technologies: [
      { name: 'HTML', icon: 'language' },
      { name: 'CSS', icon: 'style' },
      { name: 'JavaScript', icon: 'javascript' },
      { name: 'SEO', icon: 'trending_up' }
    ]
  }
];

// Couleurs pour les tags
const tagColors = {
  primary: "bg-primary/20 text-primary",
  blue: "bg-blue-500/20 text-blue-400",
  green: "bg-green-500/20 text-green-400",
  purple: "bg-purple-500/20 text-purple-400",
  pink: "bg-pink-500/20 text-pink-400",
  orange: "bg-orange-500/20 text-orange-400",
  yellow: "bg-yellow-500/20 text-yellow-400",
  cyan: "bg-cyan-500/20 text-cyan-400",
  black: "bg-gray-800/20 text-gray-400"
};

// Fonction pour créer une carte de projet
function createProjectCard(projet, delay) {
  const tagsHtml = projet.tags.map(tag => 
    `<span class="px-3 py-1 rounded-full ${tagColors[tag.color]} text-xs font-semibold">${tag.label}</span>`
  ).join('');

  // Déterminer l'image à afficher (première image ou placeholder avec gradient)
  const hasImages = projet.images && projet.images.length > 0;
  const imageContent = hasImages 
    ? `<img src="${projet.images[0]}" alt="${projet.title}" class="absolute inset-0 w-full h-full object-cover" />`
    : `<div class="absolute inset-0 bg-gradient-to-br ${projet.gradient}">
         <div class="absolute inset-0 flex items-center justify-center">
           <span class="material-symbols-outlined text-6xl text-white/30">${projet.icon}</span>
         </div>
       </div>`;

  return `
    <article class="project-card reveal bg-surface-dark rounded-2xl overflow-hidden border border-[var(--color-border-dark)] hover:border-primary/50 transition-all group" data-category="${projet.category}" data-animate style="--delay: ${delay}s;">
      <div class="relative overflow-hidden aspect-video">
        ${imageContent}
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100">
          <a href="projet.php?id=${projet.id}" class="px-6 py-3 rounded-xl bg-white text-black font-bold hover:scale-105 transition-transform flex items-center gap-2">
            <span>Voir le projet</span>
            <span class="material-symbols-outlined">arrow_forward</span>
          </a>
        </div>
      </div>
      <div class="p-6">
        <div class="flex items-center gap-2 mb-3">
          ${tagsHtml}
        </div>
        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">
          ${projet.title}
        </h3>
        <p class="text-sm text-[var(--color-text-muted)] mb-4">
          ${projet.description}
        </p>
        <div class="flex items-center justify-between text-xs text-[var(--color-text-muted)]">
          <span class="flex items-center gap-1">
            <span class="material-symbols-outlined text-sm">calendar_month</span>
            ${projet.year}
          </span>
          <a href="projet.php?id=${projet.id}" class="flex items-center gap-1 hover:text-primary transition-colors">
            <span>En savoir plus</span>
            <span class="material-symbols-outlined text-sm">arrow_forward</span>
          </a>
        </div>
      </div>
    </article>
  `;
}

// Fonction pour charger les projets
function loadProjects() {
  const container = $('#projects-grid');
  if (!container.length) return;

  container.empty();
  
  projets.forEach((projet, index) => {
    const delay = index * 0.08;
    const card = createProjectCard(projet, delay);
    container.append(card);
  });

  // Réappliquer l'IntersectionObserver pour les animations
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
}

// Initialisation au chargement de la page
$(document).ready(function() {
  loadProjects();
  
  // Filtrage des projets
  $('.filter-btn').on('click', function() {
    const filter = $(this).data('filter');
    
    // Update active button
    $('.filter-btn').removeClass('active');
    $(this).addClass('active');
    
    // Filter projects
    if (filter === 'all') {
      $('.project-card').removeClass('hidden');
    } else {
      $('.project-card').each(function() {
        const categories = $(this).data('category').split(' ');
        if (categories.includes(filter)) {
          $(this).removeClass('hidden');
        } else {
          $(this).addClass('hidden');
        }
      });
    }
  });
});

// Fonction pour obtenir un projet par ID
function getProjectById(id) {
  return projets.find(p => p.id === parseInt(id));
}

// Rendre les fonctions accessibles globalement
window.projets = projets;
window.getProjectById = getProjectById;
