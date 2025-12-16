# Portfolio "final" — Esteban Racine

Site unifié en PHP + HTML + Tailwind (CDN) + jQuery, avec partials communs, variables CSS et formulaire de contact.

## Structure

- assets/
  - css/base.css — variables, reset, utilitaires
  - js/script.js — menu mobile, thème, scroll, contact AJAX
- partials/
  - header.php — <head>, navbar, config Tailwind
  - footer.php — footer + scripts
- index.php — Accueil

## Configuration

- Email de réception: modifiez `$to` dans `forms/contact.php` avec votre adresse et adaptez l’entête `From:` à votre domaine OVH (ex: `no-reply@mondomaine.tld`).
- Thème: bouton "Thème" (sauvegardé en `localStorage`). Par défaut en mode sombre.

## Déploiement OVH

1. Uploadez le contenu du dossier `final/` dans `www/` sur votre hébergement OVH.
2. Assurez-vous que la version PHP est activée (>= 7.4 recommandé).
3. Vérifiez l’envoi d’emails: l’adresse `From:` doit appartenir à votre domaine.
4. Accédez: `https://votre-domaine.tld/` (ou sous-dossier si nécessaire).

## Développement local (WAMP)

- Placez `final/` sous `C:/wamp64/www/stitch/portfolio/`.
- Lancez WAMP, visitez: `http://localhost/stitch/portfolio/final/`.

## Notes

- Tailwind via CDN (config incluse dans `header.php`).
- Site mobile-first et responsive; éléments communs factorisés (header/footer).
- Pour un mode SPA, je peux aussi fournir `final_bis/` (une seule page) si vous le souhaitez.
