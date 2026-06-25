<?php
$lang = 'fr';
$page = 'prestations';
$meta = [
  'title'     => 'Transferts Gare VTC Carcassonne — Toulouse, Montpellier, Béziers | AUDE VTC',
  'desc'      => 'VTC pour vos transferts gare depuis Carcassonne et Castelnaudary. Toulouse Matabiau, Montpellier, Sète, Béziers. Accueil nominatif, suivi SNCF, tarif fixe.',
  'canonical' => 'https://www.audevtc.fr/transferts-gare.php',
];
include 'includes/header.php';
include 'includes/icons.php';

$gares = [
  ['nom'=>'Carcassonne',    'dist'=>'~3 km',   'duree'=>'~5 min',  'tarif'=>'À partir de 20€'],
  ['nom'=>'Castelnaudary',  'dist'=>'~40 km',  'duree'=>'~35 min', 'tarif'=>'À partir de 45€'],
  ['nom'=>'Toulouse Matabiau','dist'=>'~90 km','duree'=>'~1h',     'tarif'=>'À partir de 100€'],
  ['nom'=>'Montpellier',    'dist'=>'~150 km', 'duree'=>'~1h30',   'tarif'=>'À partir de 160€'],
  ['nom'=>'Sète',           'dist'=>'~175 km', 'duree'=>'~1h45',   'tarif'=>'À partir de 190€'],
  ['nom'=>'Béziers',        'dist'=>'~80 km',  'duree'=>'~50 min', 'tarif'=>'À partir de 90€'],
];
?>

<main style="padding-top:160px;">

  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/gare.webp') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Nos Prestations</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Transferts <span>Gares</span></h1>
      <p class="lead">Train en retard ? Votre chauffeur surveille le trafic SNCF en temps réel et adapte son heure d'arrivée.</p>
      <div style="margin-top:var(--s4);">
        <a href="/contact.php" class="btn btn-primary">Demander un devis</a>
      </div>
    </div>
  </section>

  <!-- AVANTAGES -->
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php
        $avantages = [
          ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'titre'=>'Suivi SNCF en temps réel', 'desc'=>'Votre chauffeur monitore le trafic SNCF. Train en retard ou supprimé — il adapte son heure d\'arrivée.'],
          ['icon'=>'M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z', 'titre'=>'Accueil nominatif', 'desc'=>'Votre chauffeur vous attend à la sortie du quai avec un panneau à votre nom. Zéro attente.'],
          ['icon'=>'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z', 'titre'=>'Tarif fixe garanti', 'desc'=>'Prix convenu à la réservation. Embouteillages, péages, attente incluse — aucune surprise.'],
        ];
        foreach($avantages as $a): ?>
        <div class="presta-card reveal" style="padding:0;">
          <div class="presta-body">
            <div class="icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $a['icon'] ?>"/></svg>
            </div>
            <h3 class="presta-title" style="font-size:1.2rem;"><?= $a['titre'] ?></h3>
            <p class="presta-desc"><?= $a['desc'] ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- COMMENT ÇA MARCHE -->
  <section class="section">
    <div class="container">
      <div class="reveal" style="margin-bottom:var(--s8);">
        <span class="eyebrow">Comment ça marche</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Une prise en charge <span>sans stress</span></h2>
      </div>

      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:var(--s3);">
        <?php
        $steps = [
          ['n'=>'01','t'=>'Vous réservez','d'=>'En ligne ou par téléphone — indiquez votre numéro de train.'],
          ['n'=>'02','t'=>'On surveille','d'=>'Votre chauffeur suit le trafic SNCF en temps réel.'],
          ['n'=>'03','t'=>'Accueil nominatif','d'=>'Panneau à votre nom à la sortie du quai, zéro attente.'],
          ['n'=>'04','t'=>'En route','d'=>'Mercedes climatisée, chargeur à bord, trajet sans surprise.'],
        ];
        foreach($steps as $s): ?>
        <div class="step-card reveal" >
          <div class="step-num"><?= $s['n'] ?></div>
          <h3 style="font-size:1rem;font-weight:600;color:var(--blanc);margin-bottom:var(--s1);"><?= $s['t'] ?></h3>
          <p style="font-size:.85rem;color:var(--gris-1);"><?= $s['d'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- GARES DESSERVIES -->
  <section class="section section--dark">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow">Gares desservies</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Toutes les gares <span>d'Occitanie</span></h2>
      </div>

      <div style="margin-top:var(--s6);display:grid;grid-template-columns:repeat(2,1fr);gap:var(--s2);">
        <?php foreach($gares as $i => $g): ?>
        <div class="reveal" style="display:grid;grid-template-columns:1fr auto auto auto;align-items:center;gap:var(--s3);background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);transition:border-color var(--transition);" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.1)'">
          <span style="font-weight:600;color:var(--blanc);">Gare de <?= $g['nom'] ?></span>
          <span style="font-size:.8rem;color:var(--gris-1);"><?= $g['dist'] ?></span>
          <span style="font-size:.8rem;color:var(--gris-1);"><?= $g['duree'] ?></span>
          <span style="font-weight:700;color:var(--or);font-size:.9rem;"><?= $g['tarif'] ?></span>
        </div>
        <?php endforeach; ?>
      </div>

      <p style="font-size:.78rem;color:var(--gris-2);margin-top:var(--s3);">* Tarifs depuis Carcassonne. Prix définitif confirmé à la réservation.</p>

      <div style="margin-top:var(--s6);text-align:center;">
        <a href="/contact.php" class="btn btn-primary">Réserver mon transfert</a>
      </div>
    </div>
  </section>

  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Votre train arrive bientôt ?</h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);">Réservez en 2 minutes, on s'occupe du reste.</p>
      </div>
      <div style="display:flex;gap:var(--s2);">
        <a href="/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);">Réserver en ligne</a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
