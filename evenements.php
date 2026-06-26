<?php
$lang = 'fr';
$page = 'prestations';
include 'includes/i18n.php';
$t = vtc_t('fr');
$meta = ['title'=>$t['ev_meta_title'],'desc'=>$t['ev_meta_desc'],'canonical'=>'https://www.audevtc.fr/evenements.php'];
include 'includes/header.php';
include 'includes/icons.php';
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/chauffeur-hero.webp') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow"><?= $t['ta_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h1 class="section-title"><?= $t['ev_h1'] ?> <span><?= $t['ev_h1_em'] ?></span></h1>
      <p class="lead"><?= $t['ev_lead'] ?></p>
      <div style="margin-top:var(--s4);"><a href="/contact.php" class="btn btn-primary"><?= $t['ta_cta_devis'] ?></a></div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow"><?= $t['ev_occ_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['ev_occ_h2'] ?> <span><?= $t['ev_occ_h2_em'] ?></span></h2>
      </div>
      <div class="prestations-grid" style="margin-top:var(--s6);">
        <?php $events=[['M4.318 6.318a4.5 4.5 0 0 0 0 6.364L12 20.364l7.682-7.682a4.5 4.5 0 0 0-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 0 0-6.364 0z',$t['ev_e1_t'],$t['ev_e1_d']],['M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm6 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 10a2 2 0 1 1-4 0 2 2 0 0 1 4 0z',$t['ev_e2_t'],$t['ev_e2_d']],['M16 11V7a4 4 0 0 0-8 0v4M5 9h14l1 12H4L5 9z',$t['ev_e3_t'],$t['ev_e3_d']]];
        foreach($events as $i => $e): ?>
        <div class="presta-card reveal reveal-delay-<?= $i+1 ?>"><div class="presta-body">
          <div class="icon-box"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $e[0] ?>"/></svg></div>
          <h3 class="presta-title"><?= $e[1] ?></h3>
          <p class="presta-desc"><?= $e[2] ?></p>
          <a href="/contact.php" class="presta-link"><?= $t['ev_cta_quote'] ?> <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
        </div></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="section section--dark" id="tarifs-dispo">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow"><?= $t['ev_tarif_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['ev_tarif_h2'] ?> <span><?= $t['ev_tarif_h2_em'] ?></span></h2>
        <p class="lead"><?= $t['ev_tarif_lead'] ?></p>
      </div>
      <div class="tarifs-grid" style="margin-top:var(--s6);">
        <?php $tarifs=[['d'=>$t['tr_dispo_1h'],'km'=>$t['tr_dispo_km1'],'p'=>'35€','f'=>false],['d'=>$t['tr_dispo_half'],'km'=>$t['tr_dispo_km2'],'p'=>'150€','f'=>true],['d'=>$t['tr_dispo_day'],'km'=>$t['tr_dispo_km3'],'p'=>'250€','f'=>false],['d'=>$t['tr_dispo_2days'],'km'=>$t['tr_dispo_km4'],'p'=>'400€','f'=>false]];
        foreach($tarifs as $tf): ?>
        <div class="tarif-card reveal <?= $tf['f']?'featured':'' ?>">
          <span class="tarif-duree"><?= $tf['d'] ?></span>
          <div class="tarif-prix"><?= $tf['p'] ?></div>
          <div class="tarif-km"><?= $tf['km'] ?></div>
          <?php if($tf['f']): ?><div style="margin-top:var(--s2);font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--or);"><?= $t['ev_pop'] ?></div><?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
      <p style="font-size:.78rem;color:var(--gris-2);margin-top:var(--s3);text-align:center;"><?= $t['ev_tarif_note'] ?></p>
      <div style="text-align:center;margin-top:var(--s6);"><a href="/contact.php" class="btn btn-primary"><?= $t['ev_cta_reserve'] ?></a></div>
    </div>
  </section>
</main>

<!-- Service Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Transport VTC Événements & Entreprises",
  "description": "Service de transport privé pour mariages, séminaires, soirées d'entreprise et événements en Occitanie. Discrétion, ponctualité, véhicule haut de gamme.",
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
    "price": "80",
    "priceSpecification": {
      "@type": "UnitPriceSpecification",
      "price": "80",
      "priceCurrency": "EUR",
      "description": "À partir de"
    }
  },
  "serviceType": "Chauffeur privé VTC"
}
</script>
<?php include 'includes/footer.php'; ?>