<?php
/**
 * AUDE VTC — Header include
 * Variables attendues depuis la page appelante :
 *   $lang     : 'fr' | 'en' | 'de'  (défaut 'fr')
 *   $page     : slug de la page courante (ex: 'index', 'contact')
 *   $meta     : ['title' => '...', 'desc' => '...', 'canonical' => '...']
 */

$lang  = $lang  ?? 'fr';
$page  = $page  ?? 'index';
$meta  = $meta  ?? [];
$title = $meta['title'] ?? 'AUDE VTC — Chauffeur Privé Carcassonne & Occitanie';
$desc  = $meta['desc']  ?? 'Chauffeur VTC haut de gamme à Carcassonne. Transferts aéroports, gares, tourisme. Disponible 24h/7j. Tarif fixe, Mercedes hybride.';
$canonical = $meta['canonical'] ?? 'https://www.audevtc.fr/';

/* Traductions navigation */
$nav = [
  'fr' => [
    'apropos'     => 'À Propos',
    'prestations' => 'Prestations',
    'tarifs'      => 'Tarifs',
    'contact'     => 'Contact',
    'reserver'    => 'Réserver',
    'tel'         => '06 10 08 20 07',
    'email'       => 'contact@audevtc.fr',
    'zone'        => 'Carcassonne & Occitanie',
  ],
  'en' => [
    'apropos'     => 'About',
    'prestations' => 'Services',
    'tarifs'      => 'Rates',
    'contact'     => 'Contact',
    'reserver'    => 'Book',
    'tel'         => '06 10 08 20 07',
    'email'       => 'contact@audevtc.fr',
    'zone'        => 'Carcassonne & Occitanie',
  ],
  'de' => [
    'apropos'     => 'Über uns',
    'prestations' => 'Leistungen',
    'tarifs'      => 'Preise',
    'contact'     => 'Kontakt',
    'reserver'    => 'Buchen',
    'tel'         => '06 10 08 20 07',
    'email'       => 'contact@audevtc.fr',
    'zone'        => 'Carcassonne & Okzitanien',
  ],
];

$nav_labels = $nav[$lang] ?? $nav['fr'];

/* Préfixes URL par langue */
$prefix = ($lang === 'fr') ? '' : $lang . '/';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= htmlspecialchars($title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:image"       content="https://www.audevtc.fr/assets/images/og-image.webp">

  <!-- Schema.org LocalBusiness -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "AUDE VTC",
    "description": "Chauffeur privé VTC à Carcassonne et en Occitanie",
    "url": "https://www.audevtc.fr",
    "telephone": "+33610082007",
    "email": "contact@audevtc.fr",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Carcassonne",
      "addressRegion": "Occitanie",
      "addressCountry": "FR"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 43.2130,
      "longitude": 2.3491
    },
    "openingHours": "Mo-Su 00:00-23:59",
    "priceRange": "€€",
    "availableLanguage": ["French","English","German"]
  }
  </script>

  <title><?= htmlspecialchars($title) ?></title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- TOPBAR -->
<div id="topbar">
  <div class="container">
    <div class="topbar-info">
      <a href="mailto:<?= $nav_labels['email'] ?>" class="topbar-email">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
        <?= htmlspecialchars($nav_labels['email']) ?>
      </a>
      <a href="tel:+33610082007">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5 2 2 0 0 1 3.6 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 18z"/></svg>
        <?= htmlspecialchars($nav_labels['tel']) ?>
      </a>
      <span style="display:flex;align-items:center;gap:6px;color:var(--noir);opacity:.7;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
        <?= htmlspecialchars($nav_labels['zone']) ?>
      </span>
    </div>

    <!-- Switcher langues -->
    <div class="lang-switcher">
      <a href="/" class="<?= $lang==='fr'?'active':'' ?>">
        <span>🇫🇷</span> FR
      </a>
      <a href="/en/" class="<?= $lang==='en'?'active':'' ?>">
        <span>🇬🇧</span> EN
      </a>
      <a href="/de/" class="<?= $lang==='de'?'active':'' ?>">
        <span>🇩🇪</span> DE
      </a>
    </div>
  </div>
</div>

<!-- HEADER -->
<header id="header">
  <div class="container">
    <div class="header-inner">

      <a href="/<?= $prefix ?>" class="logo" aria-label="AUDE VTC — Accueil">
        <span class="logo-name">AUDE <span>VTC</span></span>
        <span class="logo-sub">Chauffeur Privé · Occitanie</span>
      </a>

      <nav class="nav-menu" aria-label="Navigation principale">
        <a href="/<?= $prefix ?>a-propos.php"     class="<?= $page==='apropos'?'active':'' ?>"><?= $nav_labels['apropos'] ?></a>
        <a href="/<?= $prefix ?>prestations.php"  class="<?= $page==='prestations'?'active':'' ?>"><?= $nav_labels['prestations'] ?></a>
        <a href="/<?= $prefix ?>tarifs.php"       class="<?= $page==='tarifs'?'active':'' ?>"><?= $nav_labels['tarifs'] ?></a>
        <a href="/<?= $prefix ?>contact.php"      class="<?= $page==='contact'?'active':'' ?>"><?= $nav_labels['contact'] ?></a>
      </nav>

      <a href="tel:+33610082007" class="btn-header">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5 2 2 0 0 1 3.6 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 18z"/></svg>
        <?= htmlspecialchars($nav_labels['tel']) ?>
      </a>

      <button class="burger" aria-label="Menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>

    </div>
  </div>
</header>

<!-- NAV OVERLAY MOBILE -->
<nav class="nav-overlay" aria-label="Menu mobile">
  <button class="nav-overlay-close" aria-label="Fermer">✕</button>
  <a href="/<?= $prefix ?>a-propos.php"><?= $nav_labels['apropos'] ?></a>
  <a href="/<?= $prefix ?>prestations.php"><?= $nav_labels['prestations'] ?></a>
  <a href="/<?= $prefix ?>tarifs.php"><?= $nav_labels['tarifs'] ?></a>
  <a href="/<?= $prefix ?>contact.php"><?= $nav_labels['contact'] ?></a>
  <a href="tel:+33610082007" style="color:var(--or);font-size:1.4rem;margin-top:1rem;">
    📞 06 10 08 20 07
  </a>
</nav>

<!-- CTA FLOTTANT MOBILE -->
<a href="tel:+33610082007" id="cta-float" aria-label="Appeler AUDE VTC">
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5 2 2 0 0 1 3.6 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 18z"/></svg>
  06 10 08 20 07
</a>
