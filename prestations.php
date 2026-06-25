<?php
$lang = 'fr';
$page = 'prestations';
$meta = [
  'title'     => 'Prestations VTC à Carcassonne — Transferts, Tourisme, Événements | AUDE VTC',
  'desc'      => 'Toutes les prestations AUDE VTC : transferts aéroport et gare, circuits touristiques en Occitanie, mise à disposition pour événements. Chauffeur privé trilingue, tarif fixe, berline et van.',
  'canonical' => 'https://www.audevtc.fr/prestations.php',
];
include 'includes/header.php';
include 'includes/icons.php';

// Les 4 prestations — chaque carte renvoie vers sa page dédiée (maillage interne)
$prestations = [
  [
    'icon'  => 'plane',
    'titre' => 'Transferts Aéroport',
    'desc'  => 'Toulouse Blagnac, Carcassonne, Montpellier, Perpignan, Bordeaux. Suivi de vol en temps réel, accueil avec panneau nominatif, tarif fixe sans surprise.',
    'points'=> ['Suivi de vol & attente incluse', 'Panneau nominatif à l\'arrivée', 'Tarif fixe connu à l\'avance'],
    'url'   => 'transferts-aeroport.php',
    'cta'   => 'Voir les transferts aéroport',
  ],
  [
    'icon'  => 'train',
    'titre' => 'Transferts Gare',
    'desc'  => 'Carcassonne, Castelnaudary, Toulouse Matabiau, Montpellier, Sète, Béziers. Accueil sur le quai, suivi des horaires SNCF, ponctualité garantie.',
    'points'=> ['Suivi des horaires SNCF', 'Accueil sur le quai', 'Liaisons longue distance'],
    'url'   => 'transferts-gare.php',
    'cta'   => 'Voir les transferts gare',
  ],
  [
    'icon'  => 'castle',
    'titre' => 'Tourisme en Occitanie',
    'desc'  => 'Cité de Carcassonne, Canal du Midi, vignobles du Languedoc, Pays Cathare. Circuits sur mesure commentés par un chauffeur trilingue passionné de la région.',
    'points'=> ['Circuits personnalisés à la journée', 'Chauffeur trilingue FR · EN · DE', 'Patrimoine & œnotourisme'],
    'url'   => 'tourisme-occitanie.php',
    'cta'   => 'Voir les circuits tourisme',
  ],
  [
    'icon'  => 'heart',
    'titre' => 'Événements & Mise à Disposition',
    'desc'  => 'Mariages, séminaires, congrès, soirées de gala. Véhicule et chauffeur à votre disposition à la journée ou à l\'heure, pour vous et vos invités.',
    'points'=> ['Mise à disposition à la journée', 'Berline ou van jusqu\'à 7 places', 'Discrétion & prestige'],
    'url'   => 'evenements.php',
    'cta'   => 'Voir les événements',
  ],
];

// Engagements transverses (ce qui distingue AUDE VTC)
$engagements = [
  ['shield', 'Ponctualité garantie',  'Nous anticipons trafic, vols et horaires SNCF pour être là avant vous.'],
  ['tag',    'Tarif fixe transparent', 'Le prix est connu et validé à la réservation. Aucun frais caché.'],
  ['globe',  'Chauffeur trilingue',    'Français, anglais, allemand — pour accueillir une clientèle internationale.'],
  ['leaf',   'Véhicule hybride',       'Berline et van récents, faible empreinte carbone, trajet silencieux.'],
];
?>

<main style="padding-top:160px;">

  <!-- HERO -->
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/hero-bg.webp') center/cover no-repeat;opacity:.12;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Nos Prestations</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Un chauffeur privé pour <span>chaque trajet</span></h1>
      <p class="lead">Transferts, tourisme, événements : AUDE VTC vous accompagne dans toute l'Occitanie avec la même exigence de confort, de ponctualité et de discrétion.</p>
    </div>
  </section>

  <!-- GRILLE PRESTATIONS -->
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:var(--s4);">
        <?php foreach($prestations as $i => $p): ?>
        <a href="/<?= $p['url'] ?>" class="card-hover reveal reveal-delay-<?= ($i%3)+1 ?>"
           style="display:flex;flex-direction:column;background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);text-decoration:none;">
          <div class="icon-box" style="margin-bottom:var(--s3);"><?= vtc_icon($p['icon'], 24) ?></div>
          <h2 style="font-family:var(--font-display);font-size:1.5rem;color:var(--blanc);margin-bottom:var(--s2);"><?= $p['titre'] ?></h2>
          <p style="font-size:.9rem;color:var(--gris-1);line-height:1.65;margin-bottom:var(--s3);"><?= $p['desc'] ?></p>
          <ul style="list-style:none;padding:0;margin:0 0 var(--s4);display:flex;flex-direction:column;gap:8px;">
            <?php foreach($p['points'] as $pt): ?>
            <li style="display:flex;align-items:center;gap:10px;font-size:.85rem;color:var(--gris-1);">
              <span style="color:var(--or);flex-shrink:0;"><?= vtc_icon('check', 16) ?></span><?= $pt ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <span style="margin-top:auto;display:inline-flex;align-items:center;gap:8px;color:var(--or);font-weight:600;font-size:.9rem;">
            <?= $p['cta'] ?> <?= vtc_icon('arrow-r', 16) ?>
          </span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ENGAGEMENTS -->
  <section class="section" style="background:var(--noir-2);">
    <div class="container">
      <div class="reveal" style="text-align:center;max-width:600px;margin-inline:auto;margin-bottom:var(--s8);">
        <span class="eyebrow">Pourquoi AUDE VTC</span>
        <span class="gold-line" style="margin-inline:auto;"></span>
        <h2 class="section-title">L'exigence du <span>sur-mesure</span></h2>
        <p class="lead" style="margin-inline:auto;">Une alternative haut de gamme au taxi, pensée pour les voyageurs qui attendent ponctualité, confort et attention au détail.</p>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:var(--s3);">
        <?php foreach($engagements as $i => $e): ?>
        <div class="card-hover reveal reveal-delay-<?= ($i%3)+1 ?>" style="background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);text-align:center;">
          <div class="icon-box" style="margin:0 auto var(--s3);"><?= vtc_icon($e[0], 24) ?></div>
          <h3 style="font-weight:600;color:var(--blanc);font-size:1rem;margin-bottom:8px;"><?= $e[1] ?></h3>
          <p style="font-size:.84rem;color:var(--gris-1);line-height:1.6;"><?= $e[2] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA BANDE -->
  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Un projet de trajet en tête ?</h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);">Décrivez-nous votre besoin, nous vous répondons avec un tarif précis — 24h/7j.</p>
      </div>
      <div style="display:flex;gap:var(--s2);">
        <a href="/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);">Demander un devis</a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
