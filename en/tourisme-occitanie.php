<?php
$lang = 'en';
$page = 'prestations';
$prefix = 'en/';
include '../includes/i18n.php';
$t = vtc_t('en');
$meta = ['title'=>$t['to_meta_title'],'desc'=>$t['to_meta_desc'],'canonical'=>'https://www.audevtc.fr/en/tourisme-occitanie.php'];
include '../includes/header.php';
include '../includes/icons.php';
$circuits = [
  ['titre'=>$t['to_c1_t'],'duree'=>$t['to_c1_dur'],'desc'=>$t['to_c1_d'],'img'=>'/assets/images/tourisme-carcassonne.webp','tarif'=>$t['to_c1_p']],
  ['titre'=>$t['to_c2_t'],'duree'=>$t['to_c2_dur'],'desc'=>$t['to_c2_d'],'img'=>'/assets/images/tourisme-canal.webp','tarif'=>$t['to_c2_p']],
  ['titre'=>$t['to_c3_t'],'duree'=>$t['to_c3_dur'],'desc'=>$t['to_c3_d'],'img'=>'/assets/images/tourisme-vignobles.webp','tarif'=>$t['to_c3_p']],
  ['titre'=>$t['to_c4_t'],'duree'=>$t['to_c4_dur'],'desc'=>$t['to_c4_d'],'img'=>'/assets/images/tourisme-cathare.webp','tarif'=>$t['to_c4_p']],
];
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/occitanie-hero.webp') center/cover no-repeat;opacity:.2;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow"><?= $t['ta_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h1 class="section-title"><?= $t['to_h1'] ?> <span><?= $t['to_h1_em'] ?></span></h1>
      <p class="lead"><?= $t['to_lead'] ?></p>
      <p style="font-size:.88rem;color:var(--gris-1);margin-top:var(--s2);line-height:1.6;"><?= $t['to_custom_hero_lead'] ?></p>
      <div style="margin-top:var(--s4);"><a href="/en/contact.php" class="btn btn-primary"><?= $t['to_cta_create'] ?></a></div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow"><?= $t['to_circ_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['to_circ_h2'] ?> <span><?= $t['to_circ_h2_em'] ?></span></h2>
        <p class="lead"><?= $t['to_circ_lead'] ?></p>
      </div>
      <div style="margin-top:var(--s6);display:flex;flex-direction:column;gap:var(--s4);">
        <?php foreach($circuits as $i => $c): ?>
        <div class="reveal" style="display:grid;grid-template-columns:<?= $i%2===0?'1fr 2fr':'2fr 1fr' ?>;gap:var(--s6);align-items:center;background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);overflow:hidden;">
          <?php if($i%2!==0): ?><div class="presta-body" style="padding:var(--s6);">
            <span class="eyebrow"><?= $c['duree'] ?></span>
            <h3 class="presta-title" style="font-size:1.8rem;"><?= $c['titre'] ?></h3>
            <p class="presta-desc" style="font-size:.95rem;"><?= $c['desc'] ?></p>
            <div style="display:flex;align-items:center;justify-content:space-between;margin-top:var(--s4);">
              <span style="font-family:var(--font-display);font-size:1.5rem;color:var(--or);"><?= $c['tarif'] ?></span>
              <a href="/en/contact.php" class="btn btn-primary" style="padding:10px 20px;font-size:.8rem;"><?= $t['to_reserve_cta'] ?></a>
            </div>
          </div><?php endif; ?>
          <div style="position:relative;aspect-ratio:16/9;overflow:hidden;">
            <img src="<?= $c['img'] ?>" alt="<?= htmlspecialchars($c['titre']) ?>" width="1200" height="675" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform .6s ease;">
            <?php if($i%2===0): ?><div style="position:absolute;inset:0;padding:var(--s6);background:linear-gradient(to right,rgba(8,8,16,.9),transparent);display:flex;flex-direction:column;justify-content:flex-end;">
              <span class="eyebrow"><?= $c['duree'] ?></span>
              <h3 class="presta-title" style="font-size:1.8rem;"><?= $c['titre'] ?></h3>
              <p class="presta-desc" style="font-size:.95rem;"><?= $c['desc'] ?></p>
              <div style="display:flex;align-items:center;justify-content:space-between;margin-top:var(--s4);">
                <span style="font-family:var(--font-display);font-size:1.5rem;color:var(--or);"><?= $c['tarif'] ?></span>
                <a href="/en/contact.php" class="btn btn-primary" style="padding:10px 20px;font-size:.8rem;"><?= $t['to_reserve_cta'] ?></a>
              </div>
            </div><?php endif; ?>
          </div>
          <?php if($i%2!==0): ?><div style="aspect-ratio:16/9;overflow:hidden;"><img src="<?= $c['img'] ?>" alt="<?= htmlspecialchars($c['titre']) ?>" width="1200" height="675" loading="lazy" style="width:100%;height:100%;object-fit:cover;"></div><?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="section section--dark">
    <div class="container" style="text-align:center;max-width:960px;margin-inline:auto;">
      <span class="eyebrow"><?= $t['to_custom_eyebrow'] ?></span>
      <span class="gold-line" style="margin-inline:auto;"></span>
      <h2 class="section-title" style="font-size:clamp(1.8rem,3.5vw,3rem);"><?= $t['to_custom_h2'] ?> <span><?= $t['to_custom_h2_em'] ?></span></h2>
      <p class="lead" style="margin-inline:auto;margin-bottom:var(--s6);"><?= $t['to_custom_lead'] ?></p>
      <a href="/en/contact.php" class="btn btn-primary"><?= $t['to_custom_cta'] ?></a>
    </div>
  </section>
</main>
<?php include '../includes/footer.php'; ?>