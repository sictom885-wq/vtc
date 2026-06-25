<?php
$lang = 'fr';
$page = 'prestations';
$meta = [
  'title'     => 'VTC Événements & Mise à Disposition Carcassonne — Mariage, Séminaire | AUDE VTC',
  'desc'      => 'Chauffeur VTC pour vos événements à Carcassonne et en Occitanie : mariages, baptêmes, séminaires, congrès, fashion week. Mise à disposition à la journée.',
  'canonical' => 'https://www.audevtc.fr/evenements.php',
];
include 'includes/header.php';
include 'includes/icons.php';
?>

<main style="padding-top:160px;">

  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/chauffeur-hero.webp') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Nos Prestations</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Événements & <span>Mise à Disposition</span></h1>
      <p class="lead">Pour vos moments qui comptent, un chauffeur professionnel, discret et disponible à l'heure.</p>
      <div style="margin-top:var(--s4);">
        <a href="/contact.php" class="btn btn-primary">Demander un devis</a>
      </div>
    </div>
  </section>

  <!-- TYPES D'ÉVÉNEMENTS -->
  <section class="section">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow">Pour quelle occasion ?</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Tous vos <span>événements</span></h2>
      </div>

      <div class="prestations-grid" style="margin-top:var(--s6);">
        <?php
        $events = [
          ['t'=>'Mariages & Baptêmes', 'd'=>'Transport des mariés, des familles et des invités. Décoration du véhicule possible sur demande. Disponible pour la journée entière.', 'icon'=>'M4.318 6.318a4.5 4.5 0 0 0 0 6.364L12 20.364l7.682-7.682a4.5 4.5 0 0 0-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 0 0-6.364 0z'],
          ['t'=>'Congrès & Séminaires', 'd'=>'Navettes depuis les hôtels, gares et aéroports vers vos lieux de conférence. Service ponctuel et professionnel pour vos équipes et invités.', 'icon'=>'M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm6 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 10a2 2 0 1 1-4 0 2 2 0 0 1 4 0z'],
          ['t'=>'Shopping & Loisirs', 'd'=>'Journée shopping à Toulouse, sortie au restaurant, soirée au théâtre — votre chauffeur vous dépose et vient vous récupérer à l\'heure convenue.', 'icon'=>'M16 11V7a4 4 0 0 0-8 0v4M5 9h14l1 12H4L5 9z'],
        ];
        foreach($events as $i => $e): ?>
        <div class="presta-card reveal reveal-delay-<?= $i+1 ?>">
          <div class="presta-body">
            <div class="icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $e['icon'] ?>"/></svg>
            </div>
            <h3 class="presta-title"><?= $e['t'] ?></h3>
            <p class="presta-desc"><?= $e['d'] ?></p>
            <a href="/contact.php" class="presta-link">
              Demander un devis
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- TARIFS MISE À DISPO -->
  <section class="section section--dark" id="tarifs-dispo">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow">Mise à Disposition</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Tarifs <span>tout compris</span></h2>
        <p class="lead">Carburant, péages, attente et retours à vide inclus. Un prix, zéro surprise.</p>
      </div>

      <div class="tarifs-grid" style="margin-top:var(--s6);">
        <?php
        $tarifs = [
          ['d'=>'1 Heure',        'km'=>'30 km inclus',  'p'=>'35€',  'f'=>false],
          ['d'=>'Demi-journée',   'km'=>'120 km inclus', 'p'=>'150€', 'f'=>true],
          ['d'=>'1 Journée (8h)', 'km'=>'240 km inclus', 'p'=>'250€', 'f'=>false],
          ['d'=>'2 Jours (16h)',  'km'=>'480 km inclus', 'p'=>'400€', 'f'=>false],
        ];
        foreach($tarifs as $t): ?>
        <div class="tarif-card reveal <?= $t['f'] ? 'featured' : '' ?>">
          <span class="tarif-duree"><?= $t['d'] ?></span>
          <div class="tarif-prix"><?= $t['p'] ?></div>
          <div class="tarif-km"><?= $t['km'] ?></div>
          <?php if($t['f']): ?><div style="margin-top:var(--s2);font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--or);">⭐ Le plus choisi</div><?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>

      <p style="font-size:.78rem;color:var(--gris-2);margin-top:var(--s3);text-align:center;">Km supplémentaire : 0,40€/km. Nuit (22h–6h) : +20%. Devis sur mesure pour les groupes.</p>

      <div style="text-align:center;margin-top:var(--s6);">
        <a href="/contact.php" class="btn btn-primary">Réserver ma mise à disposition</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
