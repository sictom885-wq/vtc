<?php
$lang = 'fr';
$page = 'tarifs';
$meta = [
  'title'     => 'Tarifs VTC Carcassonne — Prix Fixe Chauffeur Privé Occitanie | AUDE VTC',
  'desc'      => 'Tarifs VTC transparents à Carcassonne et Occitanie. Transferts aéroport, gare, mise à disposition, tourisme. Prix fixes connus à la réservation, sans surprise.',
  'canonical' => 'https://www.audevtc.fr/tarifs.php',
];
include 'includes/header.php';
include 'includes/icons.php';
?>

<main style="padding-top:160px;">

  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container">
      <span class="eyebrow">Transparence tarifaire</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Nos <span>Tarifs</span></h1>
      <p class="lead">Tous les prix sont fixes et connus avant votre départ. Péages, carburant et attente inclus. Aucun supplément caché.</p>
    </div>
  </section>

  <!-- TRANSFERTS AÉROPORTS -->
  <section class="section">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow">Aéroports</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Transferts <span>Aéroports</span></h2>
        <p class="lead">Depuis / vers Carcassonne ou Castelnaudary. Suivi de vol inclus.</p>
      </div>

      <div style="margin-top:var(--s6);overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;min-width:600px;">
          <thead>
            <tr style="background:rgba(201,168,76,.1);">
              <th style="text-align:left;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);">Aéroport</th>
              <th style="text-align:center;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);">Distance</th>
              <th style="text-align:center;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);">Durée</th>
              <th style="text-align:right;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);">Tarif A/S</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $rows = [
              ['Aéroport de Carcassonne (CCF)',       '~5 km',   '~10 min', '25€'],
              ['Aéroport Toulouse Blagnac (TLS)',      '~85 km',  '~1h',     '95€'],
              ['Aéroport de Montpellier (MPL)',        '~150 km', '~1h30',   '160€'],
              ['Aéroport de Perpignan (PGF)',          '~110 km', '~1h10',   '120€'],
              ['Aéroport Bordeaux Mérignac (BOD)',     '~280 km', '~2h45',   'Sur devis'],
            ];
            foreach($rows as $i => $r): $bg = $i%2===0 ? 'transparent' : 'rgba(255,255,255,.02)'; ?>
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

  <!-- TRANSFERTS GARES -->
  <section class="section section--dark">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow">Gares</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Transferts <span>Gares</span></h2>
        <p class="lead">Suivi du trafic SNCF inclus, attente sans supplément.</p>
      </div>

      <div style="margin-top:var(--s6);overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;min-width:500px;">
          <thead>
            <tr style="background:rgba(201,168,76,.1);">
              <th style="text-align:left;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);">Gare</th>
              <th style="text-align:center;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);">Distance</th>
              <th style="text-align:right;padding:var(--s2) var(--s3);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--or);border-bottom:1px solid rgba(201,168,76,.2);">Tarif A/S</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $gares = [
              ['Gare de Carcassonne',       '~3 km',   '20€'],
              ['Gare de Castelnaudary',      '~40 km',  '45€'],
              ['Gare de Toulouse Matabiau',  '~90 km',  '100€'],
              ['Gare de Montpellier',        '~150 km', '160€'],
              ['Gare de Sète',               '~175 km', '190€'],
              ['Gare de Béziers',            '~80 km',  '90€'],
            ];
            foreach($gares as $i => $g): $bg = $i%2===0 ? 'transparent' : 'rgba(255,255,255,.02)'; ?>
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
        <span class="eyebrow">Mise à Disposition</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Forfaits <span>à la durée</span></h2>
        <p class="lead">Chauffeur disponible pour vous tout au long de la prestation.</p>
      </div>

      <div class="tarifs-grid" style="margin-top:var(--s6);">
        <?php
        $forfaits = [
          ['d'=>'1 Heure',        'km'=>'30 km inclus',  'p'=>'35€',  'sup'=>'0,40€/km suppl.','f'=>false],
          ['d'=>'Demi-journée',   'km'=>'120 km inclus', 'p'=>'150€', 'sup'=>'0,40€/km suppl.','f'=>true],
          ['d'=>'1 Journée (8h)', 'km'=>'240 km inclus', 'p'=>'250€', 'sup'=>'0,40€/km suppl.','f'=>false],
          ['d'=>'2 Jours (16h)',  'km'=>'480 km inclus', 'p'=>'400€', 'sup'=>'0,40€/km suppl.','f'=>false],
        ];
        foreach($forfaits as $f): ?>
        <div class="tarif-card reveal <?= $f['f'] ? 'featured' : '' ?>">
          <span class="tarif-duree"><?= $f['d'] ?></span>
          <div class="tarif-prix"><?= $f['p'] ?></div>
          <div class="tarif-km"><?= $f['km'] ?></div>
          <div style="font-size:.72rem;color:var(--gris-2);margin-top:var(--s1);"><?= $f['sup'] ?></div>
          <?php if($f['f']): ?><div style="margin-top:var(--s2);font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--or);">⭐ Le plus choisi</div><?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- INFOS TARIFAIRES -->
  <section class="section section--dark">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal">
        <span class="eyebrow">À savoir</span>
        <span class="gold-line"></span>
        <h2 class="section-title" style="font-size:2rem;">Ce qui est <span>inclus</span></h2>
      </div>

      <div style="margin-top:var(--s6);display:grid;grid-template-columns:1fr 1fr;gap:var(--s2);">
        <?php
        $inclus = [
          ['✅', 'Carburant et frais de route'],
          ['✅', 'Péages autoroute'],
          ['✅', 'Parking aéroport ou gare'],
          ['✅', 'Attente (30 min offertes puis 10€/30 min)'],
          ['✅', 'Eau minérale à bord'],
          ['✅', 'Chargeur USB universel'],
          ['✅', 'Wifi disponible sur demande'],
          ['✅', 'Suivi vol / train en temps réel'],
        ];
        foreach($inclus as $item): ?>
        <div style="display:flex;align-items:center;gap:10px;padding:var(--s2);background:rgba(201,168,76,.04);border-radius:var(--radius);border:1px solid rgba(201,168,76,.08);">
          <span style="font-size:1rem;"><?= $item[0] ?></span>
          <span style="font-size:.88rem;color:var(--gris-1);"><?= $item[1] ?></span>
        </div>
        <?php endforeach; ?>
      </div>

      <div style="margin-top:var(--s4);background:rgba(201,168,76,.06);border:1px solid rgba(201,168,76,.2);border-radius:var(--radius-lg);padding:var(--s4);">
        <p style="font-size:.88rem;color:var(--gris-1);line-height:1.7;">
          <strong style="color:var(--blanc);">Suppléments possibles :</strong><br>
          Nuit (22h–6h) : +20% · Jours fériés : +20% · Km supplémentaires : 0,40€/km · Véhicule enfant sur demande (gratuit).<br>
          <strong style="color:var(--blanc);">Paiement :</strong> espèces, carte bancaire ou virement. Un acompte de 30% peut être demandé pour les longues distances.
        </p>
      </div>

      <div style="text-align:center;margin-top:var(--s6);">
        <a href="/contact.php" class="btn btn-primary" style="font-size:1rem;padding:16px 36px;">Demander un devis personnalisé</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
