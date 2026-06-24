<?php
$lang = 'fr';
$page = 'prestations';
$meta = [
  'title'     => 'Tourisme Occitanie en VTC Privé — Carcassonne, Canal du Midi, Vignobles | AUDE VTC',
  'desc'      => 'Découvrez l\'Occitanie en VTC privé : Cité de Carcassonne, Canal du Midi, vignobles du Languedoc, Pays Cathare. Circuits sur mesure avec chauffeur trilingue.',
  'canonical' => 'https://www.audevtc.fr/tourisme-occitanie.php',
];
include 'includes/header.php';

$circuits = [
  [
    'titre'  => 'La Cité de Carcassonne',
    'duree'  => '3 à 4 heures',
    'desc'   => 'Visite de la plus grande forteresse médiévale d\'Europe. Remparts, château comtal, basilique Saint-Nazaire. Votre chauffeur vous partage l\'histoire de la région.',
    'img'    => '/assets/images/carcassonne-cite.jpg',
    'tarif'  => 'À partir de 80€',
  ],
  [
    'titre'  => 'Canal du Midi & Écluses',
    'duree'  => 'Demi-journée',
    'desc'   => 'Balade le long du canal classé UNESCO depuis Carcassonne jusqu\'à Castelnaudary. Découvrez les écluses, les villages de bord de canal et les pénichettes.',
    'img'    => '/assets/images/canal-midi.jpg',
    'tarif'  => 'À partir de 120€',
  ],
  [
    'titre'  => 'Vignobles du Languedoc',
    'duree'  => 'Journée',
    'desc'   => 'Circuit œnotouristique dans les Corbières et le Minervois. Visites de domaines, dégustations, rencontres avec les vignerons. Vous rentrez sereinement.',
    'img'    => '/assets/images/vignobles.jpg',
    'tarif'  => 'À partir de 220€',
  ],
  [
    'titre'  => 'Pays Cathare',
    'duree'  => 'Journée',
    'desc'   => 'Châteaux cathares de Montségur, Peyrepertuse, Quéribus — des forteresses perchées au-dessus des gorges. Une plongée dans l\'histoire médiévale d\'Occitanie.',
    'img'    => '/assets/images/pays-cathare.jpg',
    'tarif'  => 'À partir de 250€',
  ],
];
?>

<main style="padding-top:160px;">

  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/occitanie-hero.jpg') center/cover no-repeat;opacity:.2;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Nos Prestations</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Tourisme <span>Occitanie</span></h1>
      <p class="lead">Chauffeur, guide et confident — Michel Richard met 5 ans d'expérience dans le tourisme régional au service de votre découverte de l'Occitanie.</p>
      <div style="margin-top:var(--s4);">
        <a href="/contact.php" class="btn btn-primary">Créer mon circuit</a>
      </div>
    </div>
  </section>

  <!-- CIRCUITS -->
  <section class="section">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow">Circuits proposés</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Découvrez <span>l'Occitanie</span></h2>
        <p class="lead">Circuits fixes ou 100% sur mesure. Chaque itinéraire est adapté à vos envies, votre rythme, votre langue.</p>
      </div>

      <div style="margin-top:var(--s6);display:flex;flex-direction:column;gap:var(--s4);">
        <?php foreach($circuits as $i => $c): ?>
        <div class="reveal" style="display:grid;grid-template-columns:<?= $i%2===0 ? '1fr 2fr' : '2fr 1fr' ?>;gap:var(--s6);align-items:center;background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);overflow:hidden;">
          <?php if($i%2!==0): ?><div class="presta-body" style="padding:var(--s6);">
            <span class="eyebrow"><?= $c['duree'] ?></span>
            <h3 class="presta-title" style="font-size:1.8rem;"><?= $c['titre'] ?></h3>
            <p class="presta-desc" style="font-size:.95rem;"><?= $c['desc'] ?></p>
            <div style="display:flex;align-items:center;justify-content:space-between;margin-top:var(--s4);">
              <span style="font-family:var(--font-display);font-size:1.5rem;color:var(--or);"><?= $c['tarif'] ?></span>
              <a href="/contact.php" class="btn btn-primary" style="padding:10px 20px;font-size:.8rem;">Réserver</a>
            </div>
          </div><?php endif; ?>
          <div style="aspect-ratio:16/9;overflow:hidden;">
            <div style="width:100%;height:100%;background:var(--noir-3);display:flex;align-items:center;justify-content:center;">
              <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="rgba(201,168,76,.3)" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-5-5L5 21"/></svg>
            </div>
          </div>
          <?php if($i%2===0): ?><div class="presta-body" style="padding:var(--s6);">
            <span class="eyebrow"><?= $c['duree'] ?></span>
            <h3 class="presta-title" style="font-size:1.8rem;"><?= $c['titre'] ?></h3>
            <p class="presta-desc" style="font-size:.95rem;"><?= $c['desc'] ?></p>
            <div style="display:flex;align-items:center;justify-content:space-between;margin-top:var(--s4);">
              <span style="font-family:var(--font-display);font-size:1.5rem;color:var(--or);"><?= $c['tarif'] ?></span>
              <a href="/contact.php" class="btn btn-primary" style="padding:10px 20px;font-size:.8rem;">Réserver</a>
            </div>
          </div><?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CIRCUIT SUR MESURE -->
  <section class="section section--dark">
    <div class="container" style="text-align:center;max-width:700px;margin-inline:auto;">
      <span class="eyebrow">Circuit personnalisé</span>
      <span class="gold-line" style="margin-inline:auto;"></span>
      <h2 class="section-title">Vous avez un itinéraire <span>en tête ?</span></h2>
      <p class="lead" style="margin-inline:auto;margin-bottom:var(--s6);">
        Parlez-nous de vos envies — lieux, durée, langue — nous construisons votre programme sur mesure. Aucun supplément caché.
      </p>
      <a href="/contact.php" class="btn btn-primary">Créer mon circuit personnalisé</a>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
