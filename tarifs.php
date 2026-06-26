<?php
$lang = 'fr';
$page = 'tarifs';
include 'includes/i18n.php';
$t = vtc_t('fr');
$meta = [
  'title'     => $t['tr_meta_title'],
  'desc'      => $t['tr_meta_desc'],
  'canonical' => 'https://www.audevtc.fr/tarifs.php',
];
include 'includes/header.php';
include 'includes/icons.php';
?>

<main style="padding-top:160px;">

  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container">
      <span class="eyebrow"><?= $t['tr_hero_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h1 class="section-title"><?= $t['tr_hero_h1'] ?> <span><?= $t['tr_hero_h1_em'] ?></span></h1>
      <p class="lead"><?= $t['tr_hero_lead'] ?></p>
    </div>
  </section>

  <!-- AÉROPORTS -->
  <section class="section">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow"><?= $t['tr_aero_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['tr_aero_h2'] ?> <span><?= $t['tr_aero_h2_em'] ?></span></h2>
        <p class="lead"><?= $t['tr_aero_lead'] ?></p>
      </div>
      <div style="margin-top:var(--s6);overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;min-width:600px;">
          <thead>
            <tr style="background:rgba(201,168,76,.1);">
              <?php foreach(['tr_th_airport','tr_th_distance','tr_th_duration','tr_th_rate'] as $i => $k): ?>
              <th style="text-align:<?= $i===0?'left':($i===3?'right':'center') ?>;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);"><?= $t[$k] ?></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <?php
            $rows = [
              ['Aéroport de Carcassonne (CCF)',       '~5 km',   '~10 min', '25€'],
              ['Aéroport Toulouse Blagnac (TLS)',      '~85 km',  '~1h',     '95€'],
              ['Aéroport de Montpellier (MPL)',        '~150 km', '~1h30',   '160€'],
              ['Aéroport de Perpignan (PGF)',          '~110 km', '~1h10',   '120€'],
              ['Aéroport Bordeaux Mérignac (BOD)',     '~280 km', '~2h45',   $t['tr_quote']],
            ];
            foreach($rows as $i => $r): $bg=$i%2===0?'transparent':'rgba(255,255,255,.02)'; ?>
            <tr style="background:<?= $bg ?>;border-bottom:1px solid rgba(201,168,76,.06);">
              <td style="padding:var(--s2) var(--s3);color:var(--blanc);font-weight:500;"><?= $r[0] ?></td>
              <td style="padding:var(--s2) var(--s3);color:var(--gris-1);text-align:center;"><?= $r[1] ?></td>
              <td style="padding:var(--s2) var(--s3);color:var(--gris-1);text-align:center;"><?= $r[2] ?></td>
              <td style="padding:var(--s2) var(--s3);color:var(--or);font-weight:700;text-align:right;font-size:1.05rem;"><?= $r[3] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- GARES -->
  <section class="section section--dark">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow"><?= $t['tr_gare_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['tr_gare_h2'] ?> <span><?= $t['tr_gare_h2_em'] ?></span></h2>
        <p class="lead"><?= $t['tr_gare_lead'] ?></p>
      </div>
      <div style="margin-top:var(--s6);overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;min-width:500px;">
          <thead>
            <tr style="background:rgba(201,168,76,.1);">
              <?php foreach(['tr_th_station','tr_th_distance','tr_th_rate'] as $i => $k): ?>
              <th style="text-align:<?= $i===0?'left':($i===2?'right':'center') ?>;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);"><?= $t[$k] ?></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <?php
            $gares = [
              ['Gare de Carcassonne','~3 km','20€'],
              ['Gare de Castelnaudary','~40 km','45€'],
              ['Gare de Toulouse Matabiau','~90 km','100€'],
              ['Gare de Montpellier','~150 km','160€'],
              ['Gare de Sète','~175 km','190€'],
              ['Gare de Béziers','~80 km','90€'],
            ];
            foreach($gares as $i => $g): $bg=$i%2===0?'transparent':'rgba(255,255,255,.02)'; ?>
            <tr style="background:<?= $bg ?>;border-bottom:1px solid rgba(201,168,76,.06);">
              <td style="padding:var(--s2) var(--s3);color:var(--blanc);font-weight:500;"><?= $g[0] ?></td>
              <td style="padding:var(--s2) var(--s3);color:var(--gris-1);text-align:center;"><?= $g[1] ?></td>
              <td style="padding:var(--s2) var(--s3);color:var(--or);font-weight:700;text-align:right;font-size:1.05rem;"><?= $g[2] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- MISE À DISPO -->
  <section class="section">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow"><?= $t['tr_dispo_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['tr_dispo_h2'] ?> <span><?= $t['tr_dispo_h2_em'] ?></span></h2>
        <p class="lead"><?= $t['tr_dispo_lead'] ?></p>
      </div>
      <div class="tarifs-grid" style="margin-top:var(--s6);">
        <?php
        $forfaits = [
          ['d'=>$t['tr_dispo_1h'],    'km'=>$t['tr_dispo_km1'], 'p'=>'35€',  'sup'=>$t['tr_dispo_sup'], 'f'=>false],
          ['d'=>$t['tr_dispo_half'],  'km'=>$t['tr_dispo_km2'], 'p'=>'150€', 'sup'=>$t['tr_dispo_sup'], 'f'=>true],
          ['d'=>$t['tr_dispo_day'],   'km'=>$t['tr_dispo_km3'], 'p'=>'250€', 'sup'=>$t['tr_dispo_sup'], 'f'=>false],
          ['d'=>$t['tr_dispo_2days'], 'km'=>$t['tr_dispo_km4'], 'p'=>'400€', 'sup'=>$t['tr_dispo_sup'], 'f'=>false],
        ];
        foreach($forfaits as $f): ?>
        <div class="tarif-card reveal <?= $f['f']?'featured':'' ?>">
          <span class="tarif-duree"><?= $f['d'] ?></span>
          <div class="tarif-prix"><?= $f['p'] ?></div>
          <div class="tarif-km"><?= $f['km'] ?></div>
          <div style="font-size:.72rem;color:var(--gris-2);margin-top:var(--s1);"><?= $f['sup'] ?></div>
          <?php if($f['f']): ?><div style="margin-top:var(--s2);font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--or);"><?= $t['tr_dispo_pop'] ?></div><?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- INCLUS -->
  <section class="section section--dark">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal">
        <span class="eyebrow"><?= $t['tr_inc_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title" style="font-size:2rem;"><?= $t['tr_inc_h2'] ?> <span><?= $t['tr_inc_h2_em'] ?></span></h2>
      </div>
      <div style="margin-top:var(--s6);display:grid;grid-template-columns:1fr 1fr;gap:var(--s2);">
        <?php foreach(['tr_inc1','tr_inc2','tr_inc3','tr_inc4','tr_inc5','tr_inc6','tr_inc7','tr_inc8'] as $k): ?>
        <div style="display:flex;align-items:center;gap:10px;padding:var(--s2);background:rgba(201,168,76,.04);border-radius:var(--radius);border:1px solid rgba(201,168,76,.08);">
          <span style="font-size:1rem;">✅</span>
          <span style="font-size:.88rem;color:var(--gris-1);"><?= $t[$k] ?></span>
        </div>
        <?php endforeach; ?>
      </div>
      <div style="margin-top:var(--s4);background:rgba(201,168,76,.06);border:1px solid rgba(201,168,76,.2);border-radius:var(--radius-lg);padding:var(--s4);">
        <p style="font-size:.88rem;color:var(--gris-1);line-height:1.7;">
          <strong style="color:var(--blanc);"><?= $t['tr_sup_title'] ?></strong><br>
          <?= $t['tr_sup_text'] ?><br>
          <strong style="color:var(--blanc);"><?= $t['tr_pay_title'] ?></strong> <?= $t['tr_pay_text'] ?>
        </p>
      </div>
      <div style="text-align:center;margin-top:var(--s6);">
        <a href="/contact.php" class="btn btn-primary" style="font-size:1rem;padding:16px 36px;"><?= $t['tr_cta'] ?></a>
      </div>
    </div>
  </section>

</main>


<!-- Service Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Tarifs VTC AUDE VTC",
  "description": "Grille tarifaire transparente pour tous les services de chauffeur privé AUDE VTC. Tarifs fixes garantis pour transferts aéroports, gares, tourisme et événements.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "AUDE VTC",
    "telephone": "+33610082007",
    "url": "https://www.audevtc.fr"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Carcassonne, Aude, Occitanie"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "20",
    "priceSpecification": {
      "@type": "UnitPriceSpecification",
      "price": "20",
      "priceCurrency": "EUR",
      "description": "À partir de"
    }
  },
  "serviceType": "Chauffeur privé VTC"
}
</script>
<?php include 'includes/footer.php'; ?>
