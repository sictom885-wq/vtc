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
  <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
  <link rel="icon" type="image/webp" sizes="32x32" href="/assets/images/logo-audevtc.webp">
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.webp">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<?php
/* ===== hreflang dynamiques ===== */
// Déduire le slug depuis $canonical ou $page
$_slug = basename(parse_url($canonical, PHP_URL_PATH));
if($_slug === '' || $_slug === 'audevtc.fr') $_slug = 'index.php';
// Construire les URLs par langue
$_base = 'https://www.audevtc.fr/';
$_hreflang = [
  'fr' => $_base . $_slug,
  'en' => $_base . 'en/' . $_slug,
  'de' => $_base . 'de/' . $_slug,
  'x-default' => $_base . $_slug,
];
foreach($_hreflang as $_hl => $_url):
?>
  <link rel="alternate" hreflang="<?= $_hl ?>" href="<?= htmlspecialchars($_url) ?>">
<?php endforeach; ?>

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


<?php
/* ===== Breadcrumb Schema ===== */
$_bc_items = [['AUDE VTC','https://www.audevtc.fr/']];
if(!empty($page) && $page !== 'index') {
  $_bc_labels = [
    'contact'              => 'Contact',
    'prestations'          => 'Prestations',
    'tarifs'               => 'Tarifs',
    'apropos'              => 'À Propos',
    'transferts-aeroport'  => 'Transferts Aéroport',
    'transferts-gare'      => 'Transferts Gare',
    'tourisme-occitanie'   => 'Tourisme Occitanie',
    'evenements'           => 'Événements',
    'mentions-legales'     => 'Mentions Légales',
  ];
  $_bc_label = $_bc_labels[$page] ?? ucfirst($page);
  $_bc_url   = 'https://www.audevtc.fr/' . ($lang !== 'fr' ? $lang.'/' : '') . $page . '.php';
  $_bc_items[] = [$_bc_label, $_bc_url];
}
if(count($_bc_items) > 1):
$_bc_json = ['@context'=>'https://schema.org','@type'=>'BreadcrumbList','itemListElement'=>[]];
foreach($_bc_items as $_i => $_bc):
  $_bc_json['itemListElement'][] = ['@type'=>'ListItem','position'=>$_i+1,'name'=>$_bc[0],'item'=>$_bc[1]];
endforeach;
?>
  <script type="application/ld+json"><?= json_encode($_bc_json, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>
<?php endif; ?>

<?php if($page === 'index' || $page === ''): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "AUDE VTC",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "16",
    "bestRating": "5",
    "worstRating": "1"
  },
  "review": [
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Anne Hodgins"},
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "datePublished": "2025-06-01",
      "reviewBody": "Fantastic service to and from the airport. On time, beautiful car, water provided and lots of interesting details on where to visit from Michael. Will be using again on our next visit to France."
    },
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "C. Hohm"},
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "datePublished": "2025-07-01",
      "reviewBody": "J'ai fait appel à Michel dans le cadre d'un mariage organisé dans l'Aude afin d'assurer les allers et retours des convives durant le jour et la nuit. Service irréprochable, ponctuel et professionnel."
    },
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Marie-Claire"},
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "datePublished": "2025-05-01",
      "reviewBody": "Super service, ponctuel et connaisseur de la région. Conduite safe et agréable, je recommande vivement !"
    }
  ]
}
</script>
<?php endif; ?>
  <title><?= htmlspecialchars($title) ?></title>

  <!-- Preload LCP hero (index uniquement) -->
<?php if($page === 'index' || $page === ''): ?>
  <link rel="preload" as="image" href="/assets/images/hero-bg.webp" fetchpriority="high">
<?php endif; ?>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Inter:wght@400;500;600;700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>

  <link rel="stylesheet" href="/assets/css/style.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/css/style.css') ?>">
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
    <?php
    /* Construire les URLs du switcher vers la page équivalente */
    $_self = $_SERVER['PHP_SELF'] ?? '/index.php';
    // Extraire le slug (nom du fichier sans extension)
    $_basename = basename($_self); // ex: transferts-aeroport.php
    if($_basename === 'index.php' || $_basename === '') $_basename = 'index.php';
    // Supprimer le préfixe /en/ ou /de/ du chemin
    $_path = $_self;
    $_slug = $_basename; // fichier seul

    $_lang_urls = [
      'fr' => '/' . ($_slug === 'index.php' ? '' : $_slug),
      'en' => '/en/' . ($_slug === 'index.php' ? '' : $_slug),
      'de' => '/de/' . ($_slug === 'index.php' ? '' : $_slug),
    ];
    ?>
    <div class="lang-switcher">
      <a href="<?= $_lang_urls['fr'] ?>" class="<?= $lang==='fr'?'active':'' ?>">
        <span>🇫🇷</span> FR
      </a>
      <a href="<?= $_lang_urls['en'] ?>" class="<?= $lang==='en'?'active':'' ?>">
        <span>🇬🇧</span> EN
      </a>
      <a href="<?= $_lang_urls['de'] ?>" class="<?= $lang==='de'?'active':'' ?>">
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
        <img src="/assets/images/logo-audevtc.webp" alt="AUDE VTC — Chauffeur Privé Carcassonne" width="52" height="52" loading="eager" decoding="async" style="display:block;">
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
