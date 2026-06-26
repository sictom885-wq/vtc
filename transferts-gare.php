<?php
$lang = 'fr';
$page = 'prestations';
include 'includes/i18n.php';
$t = vtc_t('fr');
$meta = ['title'=>$t['tg_meta_title'],'desc'=>$t['tg_meta_desc'],'canonical'=>'https://www.audevtc.fr/transferts-gare.php'];
include 'includes/header.php';
include 'includes/icons.php';
$gares = [
  ['nom'=>'Carcassonne','dist'=>'~3 km','duree'=>'~5 min','tarif'=>$t['ta_from'].' 20€'],
  ['nom'=>'Castelnaudary','dist'=>'~40 km','duree'=>'~35 min','tarif'=>$t['ta_from'].' 45€'],
  ['nom'=>'Toulouse Matabiau','dist'=>'~90 km','duree'=>'~1h','tarif'=>$t['ta_from'].' 100€'],
  ['nom'=>'Montpellier','dist'=>'~150 km','duree'=>'~1h30','tarif'=>$t['ta_from'].' 160€'],
  ['nom'=>'Sète','dist'=>'~175 km','duree'=>'~1h45','tarif'=>$t['ta_from'].' 190€'],
  ['nom'=>'Béziers','dist'=>'~80 km','duree'=>'~50 min','tarif'=>$t['ta_from'].' 90€'],
];
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/gare.webp') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow"><?= $t['ta_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h1 class="section-title"><?= $t['tg_h1'] ?> <span><?= $t['tg_h1_em'] ?></span></h1>
      <p class="lead"><?= $t['tg_lead'] ?></p>
      <div style="margin-top:var(--s4);"><a href="/contact.php" class="btn btn-primary"><?= $t['ta_cta_devis'] ?></a></div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php $avantages=[['M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',$t['tg_av1_t'],$t['tg_av1_d']],['M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z',$t['tg_av2_t'],$t['tg_av2_d']],['M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z',$t['tg_av3_t'],$t['tg_av3_d']]];
        foreach($avantages as $a): ?>
        <div class="presta-card reveal" style="padding:0;"><div class="presta-body">
          <div class="icon-box"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $a[0] ?>"/></svg></div>
          <h3 class="presta-title" style="font-size:1.2rem;"><?= $a[1] ?></h3>
          <p class="presta-desc"><?= $a[2] ?></p>
        </div></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="reveal" style="margin-bottom:var(--s8);">
        <span class="eyebrow"><?= $t['tg_steps_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['tg_steps_h2'] ?> <span><?= $t['tg_steps_h2_em'] ?></span></h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:var(--s3);">
        <?php $steps=[['01',$t['tg_s1_t'],$t['tg_s1_d']],['02',$t['tg_s2_t'],$t['tg_s2_d']],['03',$t['tg_s3_t'],$t['tg_s3_d']],['04',$t['tg_s4_t'],$t['tg_s4_d']]];
        foreach($steps as $s): ?>
        <div class="step-card reveal">
          <div class="step-num"><?= $s[0] ?></div>
          <h3 style="font-size:1rem;font-weight:600;color:var(--blanc);margin-bottom:var(--s1);"><?= $s[1] ?></h3>
          <p style="font-size:.85rem;color:var(--gris-1);"><?= $s[2] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="section section--dark">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow"><?= $t['tg_dest_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['tg_dest_h2'] ?> <span><?= $t['tg_dest_h2_em'] ?></span></h2>
      </div>
      <div style="margin-top:var(--s6);display:grid;grid-template-columns:repeat(2,1fr);gap:var(--s2);">
        <?php foreach($gares as $i => $g): ?>
        <div class="reveal" style="display:grid;grid-template-columns:1fr auto auto auto;align-items:center;gap:var(--s3);background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);">
          <span style="font-weight:600;color:var(--blanc);"><?= $t['tg_gare_prefix'] ?> <?= $g['nom'] ?></span>
          <span style="font-size:.8rem;color:var(--gris-1);"><?= $g['dist'] ?></span>
          <span style="font-size:.8rem;color:var(--gris-1);"><?= $g['duree'] ?></span>
          <span style="font-weight:700;color:var(--or);font-size:.9rem;"><?= $g['tarif'] ?></span>
        </div>
        <?php endforeach; ?>
      </div>
      <p style="font-size:.78rem;color:var(--gris-2);margin-top:var(--s3);"><?= $t['tg_tarif_note'] ?></p>
      <div style="margin-top:var(--s4);background:rgba(201,168,76,.04);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);">
        <h3 style="font-weight:600;color:var(--blanc);font-size:.95rem;margin-bottom:var(--s2);"><?= $t['tg_geo_title'] ?></h3>
        <p style="font-size:.85rem;color:var(--gris-1);line-height:1.7;"><?= $t['tg_geo_text'] ?></p>
      </div>
      <div style="margin-top:var(--s6);text-align:center;"><a href="/contact.php" class="btn btn-primary"><?= $t['tg_cta_book'] ?></a></div>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:860px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s6);">
        <span class="eyebrow">Chauffeur privé gare</span>
        <span class="gold-line"></span>
        <h2 class="section-title">VTC Gare : <span>confort et ponctualité</span></h2>
      </div>
      <div style="display:flex;flex-direction:column;gap:var(--s5);color:var(--gris-1);line-height:1.8;font-size:.95rem;">
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Accueil sur quai, sans stress</h3>
          <p>Votre chauffeur vous attend directement sur le quai ou dans le hall de la gare, panneau nominatif en main. Pas besoin de chercher un taxi, de porter vos bagages loin ou d'attendre sous la pluie. AUDE VTC coordonne votre prise en charge avec les horaires SNCF en temps réel.</p>
        </div>
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Suivi SNCF en temps réel</h3>
          <p>Train retardé ? Michel Richard le sait avant vous et ajuste son heure d'arrivée en conséquence — sans appel de votre part. Le tarif fixe ne change pas, quelle que soit la durée du retard.</p>
        </div>
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Gares desservies depuis Carcassonne</h3>
          <p>AUDE VTC prend en charge vos transferts vers et depuis les gares de <strong>Carcassonne</strong>, <strong>Narbonne</strong>, <strong>Toulouse Matabiau</strong>, <strong>Montpellier Saint-Roch</strong> et <strong>Perpignan</strong>. Pour les départs depuis votre domicile, la prise en charge s'effectue directement à votre adresse dans un rayon de 20 km autour de Carcassonne.</p>
        </div>
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Idéal pour les déplacements professionnels</h3>
          <p>Séminaires, réunions client, déplacements en TGV : AUDE VTC s'intègre parfaitement dans votre agenda professionnel. Wi-Fi, chargeurs USB et discrétion à bord vous permettent de travailler ou vous détendre jusqu'à destination.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section section--dark">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s6);">
        <span class="eyebrow">Questions fréquentes</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Transfert gare <span>en VTC</span></h2>
      </div>
      <?php $faq_gare=[
        ['Quelles gares desservez-vous ?','Carcassonne, Narbonne, Toulouse Matabiau, Montpellier Saint-Roch et Perpignan. D'autres gares accessibles sur devis.'],
        ['Le chauffeur attend-il si mon train est en retard ?','Oui. Michel Richard suit les horaires SNCF en temps réel. Aucun frais supplémentaire en cas de retard.'],
        ['Peut-on réserver un VTC aller-retour gare ?','Oui. AUDE VTC assure les trajets aller et retour. Précisez les deux horaires à la réservation.'],
        ['Y a-t-il un accueil personnalisé à la gare ?','Oui. Votre chauffeur vous attend dans le hall avec un panneau nominatif et prend en charge vos bagages.'],
      ]; foreach($faq_gare as $qa): ?>
      <div class="reveal" style="border-bottom:1px solid rgba(201,168,76,.1);padding:var(--s4) 0;">
        <h3 style="font-size:1rem;font-weight:600;color:var(--blanc);margin-bottom:var(--s2);"><?=$qa[0]?></h3>
        <p style="font-size:.9rem;color:var(--gris-1);line-height:1.7;"><?=$qa[1]?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
<?php foreach($faq_gare as $i=>$qa): ?>
{"@type":"Question","name":"<?=addslashes($qa[0])?>","acceptedAnswer":{"@type":"Answer","text":"<?=addslashes($qa[1])?>"}}<?=$i<count($faq_gare)-1?',':''?>
<?php endforeach; ?>
]}
</script>

  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);"><?= $t['tg_cta_train'] ?></h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);"><?= $t['tg_cta_sub'] ?></p>
      </div>
      <div style="display:flex;gap:var(--s2);">
        <a href="/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);"><?= $t['ta_cta_book'] ?></a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>
</main>

<!-- Service Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Transfert VTC Gare",
  "description": "Service de transfert VTC depuis et vers les gares de Carcassonne, Narbonne et Toulouse Matabiau. Accueil sur quai, suivi SNCF en temps réel, tarif fixe.",
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