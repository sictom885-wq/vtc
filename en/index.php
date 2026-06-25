<?php
$lang   = 'en';
$page   = 'index';
$prefix = 'en/';
include '../includes/i18n.php';
$t = vtc_t('en');
$meta = [
  'title'     => $t['meta_home_title'],
  'desc'      => $t['meta_home_desc'],
  'canonical' => 'https://www.audevtc.fr/en/',
];
include '../includes/header.php';
?>

<main>

<!-- HERO -->
<section id="hero">
  <div class="hero-bg" style="background-image:url('/assets/images/hero-bg.webp');"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-tag"><?= $t['hero_tag'] ?></span>
      <h1 class="hero-title">
        <?= $t['hero_title_1'] ?><br>
        <strong><?= $t['hero_title_2'] ?></strong>
      </h1>
      <p class="hero-desc"><?= $t['hero_desc'] ?></p>
      <div class="hero-ctas">
        <a href="/en/contact.php" class="btn btn-primary">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="8" y="2" width="8" height="4" rx="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg>
          <?= $t['hero_cta_devis'] ?>
        </a>
        <a href="tel:+33610082007" class="btn btn-outline">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5 2 2 0 0 1 3.6 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 18z"/></svg>
          +33 6 10 08 20 07
        </a>
      </div>
    </div>
  </div>
  <div class="hero-trust">
    <div class="container">
      <div class="trust-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><?= $t['trust_dispo'] ?></div>
      <div class="trust-divider"></div>
      <div class="trust-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg><?= $t['trust_tarif'] ?></div>
      <div class="trust-divider"></div>
      <div class="trust-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 17H5a2 2 0 0 0-2 2v1h18v-1a2 2 0 0 0-2-2Z"/><path d="M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/></svg><?= $t['trust_voiture'] ?></div>
      <div class="trust-divider"></div>
      <div class="trust-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg><?= $t['trust_langues'] ?></div>
    </div>
  </div>
</section>

<!-- FORMULAIRE -->
<section id="reservation">
  <div class="container">
    <div class="form-resa reveal">
      <div class="form-resa-header">
        <span class="eyebrow">Booking</span>
        <h2 class="section-title" style="font-size:1.8rem;"><?= $t['form_title'] ?></h2>
        <p class="lead" style="font-size:.9rem;"><?= $t['form_subtitle'] ?></p>
      </div>
      <form id="form-reservation" action="/en/contact.php" method="POST">
        <div class="form-grid">
          <div class="form-group"><label><?= $t['form_depart'] ?></label><input type="text" name="depart" placeholder="<?= $t['form_placeholder_depart'] ?>" required></div>
          <div class="form-group"><label><?= $t['form_arrivee'] ?></label><input type="text" name="arrivee" placeholder="<?= $t['form_placeholder_arrivee'] ?>" required></div>
          <div class="form-group"><label><?= $t['form_date'] ?></label><input type="date" name="date" required></div>
          <div class="form-group"><label><?= $t['form_heure'] ?></label><input type="time" name="heure" required></div>
          <div class="form-group"><label><?= $t['form_nom'] ?></label><input type="text" name="nom" required></div>
          <div class="form-group"><label><?= $t['form_telephone'] ?></label><input type="tel" name="telephone" required></div>
          <div class="form-group"><label><?= $t['form_email'] ?></label><input type="email" name="email" required></div>
          <div class="form-group" style="justify-content:flex-end;padding-top:1.5rem;"><label class="form-check"><input type="checkbox" name="allerretour" value="1"> <?= $t['form_allerretour'] ?></label></div>
          <div class="form-group full"><label><?= $t['form_message'] ?></label><textarea name="message" rows="3" placeholder="<?= $t['form_placeholder_msg'] ?>"></textarea></div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:var(--s3);width:100%;justify-content:center;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
          <?= $t['form_submit'] ?>
        </button>
        <p style="font-size:.75rem;color:var(--gris-2);margin-top:var(--s2);text-align:center;"><?= $t['form_legal'] ?></p>
      </form>
    </div>
  </div>
</section>

<!-- 4 ÉTAPES -->
<section id="etapes">
  <div class="container">
    <div class="etapes-grid">
      <div class="etape-item"><span class="etape-num">1</span><span class="etape-texte"><?= $t['step1'] ?></span></div>
      <div class="etape-divider"></div>
      <div class="etape-item"><span class="etape-num">2</span><span class="etape-texte"><?= $t['step2'] ?></span></div>
      <div class="etape-divider"></div>
      <div class="etape-item"><span class="etape-num">3</span><span class="etape-texte"><?= $t['step3'] ?></span></div>
      <div class="etape-divider"></div>
      <div class="etape-item"><span class="etape-num">4</span><span class="etape-texte"><?= $t['step4'] ?></span></div>
    </div>
  </div>
</section>

<!-- À PROPOS -->
<section id="apropos" class="section">
  <div class="container">
    <div class="apropos-inner">
      <div class="apropos-img-wrap reveal">
        <img src="/assets/images/chauffeur-hero.webp" alt="AUDE VTC private chauffeur Carcassonne" width="540" height="400" loading="lazy">
        <div class="apropos-badge"><span class="badge-num">+5</span><span class="badge-label">years experience</span></div>
      </div>
      <div class="apropos-content reveal reveal-delay-1">
        <span class="eyebrow"><?= $t['apropos_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['apropos_title'] ?><br><span><?= $t['apropos_title_em'] ?></span></h2>
        <p class="lead"><?= $t['apropos_desc'] ?></p>
        <div class="apropos-features">
          <?php
          $feats = [
            ['M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', 'feat1_title','feat1_desc'],
            ['M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zm0 6v6l4 2','feat2_title','feat2_desc'],
            ['m5 8 6 6M4 14l6-6 2-3M2 5h12M7 2h1m15 20-5-10-5 10M14 18h6','feat3_title','feat3_desc'],
            ['M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0M5 17H3v-4M2 5h11l4 4h3l2 2v6h-2M5 13V5h9','feat4_title','feat4_desc'],
          ];
          foreach($feats as $f): ?>
          <div class="feat-item">
            <svg class="feat-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $f[0] ?>"/></svg>
            <div class="feat-text"><strong><?= $t[$f[1]] ?></strong><span><?= $t[$f[2]] ?></span></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRESTATIONS -->
<section id="prestations" class="section section--dark">
  <div class="container">
    <div class="reveal">
      <span class="eyebrow"><?= $t['prest_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h2 class="section-title"><?= $t['prest_title'] ?> <span><?= $t['prest_title_em'] ?></span></h2>
      <p class="lead"><?= $t['prest_subtitle'] ?></p>
    </div>
    <div class="prestations-grid">
      <?php
      $prests = [
        ['aeroport','prest_aeroport_title','prest_aeroport_desc',['Carcassonne Airport','Toulouse Blagnac','Montpellier · Perpignan','Bordeaux Mérignac'],'/en/airport-transfers.php','M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19 4c-1 0-1.5.5-3.5 2.5L8 8 1.2 6.2C.7 6.1.3 6.6.5 7.1l2 5.3a1 1 0 0 0 .7.6l4.3 1-1 3.3a1 1 0 0 0 1.3 1.3l3.3-1 1 4.3a1 1 0 0 0 .6.7l5.3 2c.5.2 1-.2.9-.7Z'],
        ['gare','prest_gare_title','prest_gare_desc',['Carcassonne & Castelnaudary','Toulouse Matabiau','Montpellier · Sète · Béziers'],'/en/train-transfers.php','M 4 3 h 16 a 2 2 0 0 1 2 2 v 10 a 2 2 0 0 1-2 2 H 4 a 2 2 0 0 1-2-2 V 5 a 2 2 0 0 1 2-2 z M 4 11 h 16 M 12 3 v 8 M 8 19 l-2 3 M 18 22 l-2-3'],
        ['tourisme','prest_tourisme_title','prest_tourisme_desc',['Custom tourist circuits','Weddings & baptisms','Congresses & seminars','Day hire'],'/en/tourism-occitanie.php','M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Zm-5 0a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'],
      ];
      foreach($prests as $i => $p): ?>
      <div class="presta-card reveal reveal-delay-<?= $i+1 ?>">
        <div class="presta-img">
          <img src="/assets/images/card-<?= $p[0] ?>.webp" alt="<?= htmlspecialchars($t[$p[1]]) ?>" width="800" height="600" loading="lazy">
          <div class="presta-img-overlay"></div>
        </div>
        <div class="presta-body">
          <div class="presta-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $p[5] ?>"/></svg></div>
          <h3 class="presta-title"><?= $t[$p[1]] ?></h3>
          <p class="presta-desc"><?= $t[$p[2]] ?></p>
          <ul class="presta-list"><?php foreach($p[3] as $item): ?><li><?= $item ?></li><?php endforeach; ?></ul>
          <a href="<?= $p[4] ?>" class="presta-link"><?= $t['prest_voir_tarifs'] ?> <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TARIFS -->
<section id="tarifs-dispo" class="section">
  <div class="container">
    <div class="reveal">
      <span class="eyebrow"><?= $t['tarifs_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h2 class="section-title"><?= $t['tarifs_title'] ?> <span><?= $t['tarifs_title_em'] ?></span></h2>
      <p class="lead"><?= $t['tarifs_subtitle'] ?></p>
    </div>
    <div class="tarifs-grid">
      <?php
      $tarifs = [['tarif_1h','tarif_km_1h','35€',false],['tarif_demijour','tarif_km_demij','150€',true],['tarif_journee','tarif_km_1j','250€',false],['tarif_2jours','tarif_km_2j','400€',false]];
      foreach($tarifs as $tar): ?>
      <div class="tarif-card reveal <?= $tar[3]?'featured':'' ?>">
        <span class="tarif-duree"><?= $t[$tar[0]] ?></span>
        <div class="tarif-prix"><?= $tar[2] ?></div>
        <div class="tarif-km"><?= $t[$tar[1]] ?></div>
        <?php if($tar[3]): ?><div style="margin-top:var(--s2);font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--or);"><?= $t['tarif_populaire'] ?></div><?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:var(--s6);"><a href="/en/rates.php" class="btn btn-outline"><?= $t['tarifs_voir_tout'] ?></a></div>
  </div>
</section>

<!-- AVIS -->
<section id="avis" class="section section--dark">
  <div class="container">
    <div class="avis-header">
      <div>
        <span class="eyebrow">Reviews</span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['avis_title'] ?> <span><?= $t['avis_title_em'] ?></span></h2>
      </div>
      <div class="avis-score reveal">
        <div><div class="avis-note">5.0</div><div class="avis-stars">★★★★★</div><div class="avis-count"><?= $t['avis_count'] ?></div></div>
      </div>
    </div>
    <div class="avis-slider">
      <div class="avis-card reveal reveal-delay-1">
        <div class="avis-card-stars">★★★★★</div>
        <p class="avis-card-text">"Fantastic service to and from the airport. On time, beautiful car, water provided and lots of interesting details on where to visit from Michael. Will be using again on our next visit to France."</p>
        <div class="avis-card-author"><div class="avis-avatar">A</div><div><div class="avis-name">Anne Hodgins</div><div class="avis-date">June 2025 · Google</div></div></div>
      </div>
      <div class="avis-card reveal reveal-delay-2">
        <div class="avis-card-stars">★★★★★</div>
        <p class="avis-card-text">"Excellent service and very friendly. Arrived on time for my pre-booked taxi, the vehicle was spotless and Michel was professional throughout."</p>
        <div class="avis-card-author"><div class="avis-avatar">J</div><div><div class="avis-name">James T.</div><div class="avis-date">May 2025 · Google</div></div></div>
      </div>
      <div class="avis-card reveal reveal-delay-3">
        <div class="avis-card-stars">★★★★★</div>
        <p class="avis-card-text">"Lovely drive and great conversation! Michel is knowledgeable about the region and made the journey a real pleasure. Highly recommended."</p>
        <div class="avis-card-author"><div class="avis-avatar">S</div><div><div class="avis-name">Sarah M.</div><div class="avis-date">April 2025 · Google</div></div></div>
      </div>
    </div>
    <div class="avis-cta-wrap reveal"><a href="https://g.page/r/VOTRE-LIEN-GOOGLE/review" target="_blank" rel="noopener" class="btn btn-outline"><?= $t['avis_cta'] ?></a></div>
  </div>
</section>

</main>

<?php include '../includes/footer.php'; ?>
