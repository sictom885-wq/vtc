<?php
$lang = 'fr';
$page = 'prestations';
$meta = [
  'title'     => 'Transferts Aéroport VTC Carcassonne — Toulouse, Montpellier, Perpignan | AUDE VTC',
  'desc'      => 'Transfert aéroport en VTC privé depuis Carcassonne. Toulouse Blagnac, Montpellier, Perpignan, Bordeaux. Prise en charge avec panneau nominatif, suivi de vol, tarif fixe.',
  'canonical' => 'https://www.audevtc.fr/transferts-aeroport.php',
];
include 'includes/header.php';

$aeroports = [
  ['nom' => 'Toulouse Blagnac', 'code' => 'TLS', 'dist' => '~85 km', 'duree' => '~1h', 'tarif' => 'À partir de 95€'],
  ['nom' => 'Carcassonne',      'code' => 'CCF', 'dist' => '~5 km',  'duree' => '~10min', 'tarif' => 'À partir de 25€'],
  ['nom' => 'Montpellier',      'code' => 'MPL', 'dist' => '~150 km','duree' => '~1h30', 'tarif' => 'À partir de 160€'],
  ['nom' => 'Perpignan',        'code' => 'PGF', 'dist' => '~110 km','duree' => '~1h10', 'tarif' => 'À partir de 120€'],
  ['nom' => 'Bordeaux Mérignac','code' => 'BOD', 'dist' => '~280 km','duree' => '~2h45', 'tarif' => 'Sur devis'],
];
?>

<main style="padding-top:160px;">

  <!-- HERO PAGE -->
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/aeroport-hero.jpg') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Nos Prestations</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Transferts <span>Aéroports</span></h1>
      <p class="lead">Partez l'esprit libre. Votre chauffeur surveille votre vol et vous attend, même en cas de retard.</p>
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
          ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'titre'=>'Suivi de vol en temps réel', 'desc'=>'Votre chauffeur monitore votre vol. Retard, correspondance manquée — il adapte son heure d\'arrivée.'],
          ['icon'=>'M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z', 'titre'=>'Accueil nominatif', 'desc'=>'Votre chauffeur vous attend dans le hall des arrivées avec un panneau à votre nom.'],
          ['icon'=>'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z', 'titre'=>'Tarif fixe garanti', 'desc'=>'Prix convenu à la réservation. Embouteillages, péages, parking aéroport — tout est inclus.'],
        ];
        foreach($avantages as $a): ?>
        <div class="presta-card reveal" style="padding:0;">
          <div class="presta-body">
            <div class="presta-icon">
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

  <!-- TABLEAU AÉROPORTS -->
  <section class="section section--dark">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow">Destinations desservies</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Aéroports <span>d'Occitanie</span></h2>
        <p class="lead">Depuis Carcassonne ou Castelnaudary vers tous les aéroports de la région.</p>
      </div>

      <div style="margin-top:var(--s6);display:flex;flex-direction:column;gap:var(--s2);">
        <?php foreach($aeroports as $i => $ap): ?>
        <div class="reveal reveal-delay-<?= min($i+1,3) ?>" style="display:grid;grid-template-columns:auto 1fr auto auto auto;align-items:center;gap:var(--s4);background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);transition:border-color var(--transition);" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.1)'">
          <span style="font-family:var(--font-body);font-size:.7rem;font-weight:700;letter-spacing:.12em;background:rgba(201,168,76,.12);color:var(--or);padding:4px 10px;border-radius:4px;"><?= $ap['code'] ?></span>
          <span style="font-weight:600;color:var(--blanc);"><?= $ap['nom'] ?></span>
          <span style="font-size:.82rem;color:var(--gris-1);"><?= $ap['dist'] ?></span>
          <span style="font-size:.82rem;color:var(--gris-1);"><?= $ap['duree'] ?></span>
          <span style="font-weight:700;color:var(--or);"><?= $ap['tarif'] ?></span>
        </div>
        <?php endforeach; ?>
      </div>

      <p style="font-size:.78rem;color:var(--gris-2);margin-top:var(--s3);">* Tarifs indicatifs depuis Carcassonne centre. Prix définitif confirmé à la réservation.</p>

      <div style="margin-top:var(--s6);text-align:center;">
        <a href="/contact.php" class="btn btn-primary">Obtenir un tarif précis</a>
      </div>
    </div>
  </section>

  <!-- CTA BANDE -->
  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Votre prochain vol approche ?</h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);">Réservez votre transfert dès maintenant — disponible 24h/7j.</p>
      </div>
      <div style="display:flex;gap:var(--s2);">
        <a href="/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);">Réserver en ligne</a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
