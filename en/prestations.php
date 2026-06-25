<?php
$lang = 'en';
$page = 'prestations';
$prefix = 'en/';
include '../includes/i18n.php';
$t = vtc_t('en');
$meta = [
  'title'     => $t['pp_meta_title'],
  'desc'      => $t['pp_meta_desc'],
  'canonical' => 'https://www.audevtc.fr/en/prestations.php',
];
include '../includes/header.php';
include '../includes/icons.php';

$prestations = [
  ['icon'=>'plane','titre'=>$t['pp_aero_title'],'desc'=>$t['pp_aero_desc'],'points'=>[$t['pp_aero_p1'],$t['pp_aero_p2'],$t['pp_aero_p3']],'url'=>'en/transferts-aeroport.php','cta'=>$t['pp_aero_cta']],
  ['icon'=>'train','titre'=>$t['pp_gare_title'],'desc'=>$t['pp_gare_desc'],'points'=>[$t['pp_gare_p1'],$t['pp_gare_p2'],$t['pp_gare_p3']],'url'=>'en/transferts-gare.php','cta'=>$t['pp_gare_cta']],
  ['icon'=>'castle','titre'=>$t['pp_tour_title'],'desc'=>$t['pp_tour_desc'],'points'=>[$t['pp_tour_p1'],$t['pp_tour_p2'],$t['pp_tour_p3']],'url'=>'en/tourisme-occitanie.php','cta'=>$t['pp_tour_cta']],
  ['icon'=>'heart','titre'=>$t['pp_evt_title'],'desc'=>$t['pp_evt_desc'],'points'=>[$t['pp_evt_p1'],$t['pp_evt_p2'],$t['pp_evt_p3']],'url'=>'en/evenements.php','cta'=>$t['pp_evt_cta']],
];
$engagements = [
  ['shield',$t['pp_eng1_t'],$t['pp_eng1_d']],
  ['tag',$t['pp_eng2_t'],$t['pp_eng2_d']],
  ['globe',$t['pp_eng3_t'],$t['pp_eng3_d']],
  ['leaf',$t['pp_eng4_t'],$t['pp_eng4_d']],
];
?>

<main style="padding-top:160px;">

  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/hero-bg.webp') center/cover no-repeat;opacity:.12;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow"><?= $t['pp_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h1 class="section-title"><?= $t['pp_h1'] ?> <span><?= $t['pp_h1_em'] ?></span></h1>
      <p class="lead"><?= $t['pp_lead'] ?></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:var(--s4);">
        <?php foreach($prestations as $i => $p): ?>
        <a href="/<?= $p['url'] ?>" class="card-hover reveal reveal-delay-<?= ($i%3)+1 ?>"
           style="display:flex;flex-direction:column;background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);text-decoration:none;">
          <div class="icon-box" style="margin-bottom:var(--s3);"><?= vtc_icon($p['icon'], 24) ?></div>
          <h2 style="font-family:var(--font-display);font-size:1.5rem;color:var(--blanc);margin-bottom:var(--s2);"><?= $p['titre'] ?></h2>
          <p style="font-size:.9rem;color:var(--gris-1);line-height:1.65;margin-bottom:var(--s3);"><?= $p['desc'] ?></p>
          <ul style="list-style:none;padding:0;margin:0 0 var(--s4);display:flex;flex-direction:column;gap:8px;">
            <?php foreach($p['points'] as $pt): ?>
            <li style="display:flex;align-items:center;gap:10px;font-size:.85rem;color:var(--gris-1);">
              <span style="color:var(--or);flex-shrink:0;"><?= vtc_icon('check', 16) ?></span><?= $pt ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <span style="margin-top:auto;display:inline-flex;align-items:center;gap:8px;color:var(--or);font-weight:600;font-size:.9rem;">
            <?= $p['cta'] ?> <?= vtc_icon('arrow-r', 16) ?>
          </span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--noir-2);">
    <div class="container">
      <div class="reveal" style="text-align:center;max-width:600px;margin-inline:auto;margin-bottom:var(--s8);">
        <span class="eyebrow"><?= $t['pp_eng_eyebrow'] ?></span>
        <span class="gold-line" style="margin-inline:auto;"></span>
        <h2 class="section-title"><?= $t['pp_eng_title'] ?> <span><?= $t['pp_eng_title_em'] ?></span></h2>
        <p class="lead" style="margin-inline:auto;"><?= $t['pp_eng_lead'] ?></p>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:var(--s3);">
        <?php foreach($engagements as $i => $e): ?>
        <div class="card-hover reveal reveal-delay-<?= ($i%3)+1 ?>" style="background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);text-align:center;">
          <div class="icon-box" style="margin:0 auto var(--s3);"><?= vtc_icon($e[0], 24) ?></div>
          <h3 style="font-weight:600;color:var(--blanc);font-size:1rem;margin-bottom:8px;"><?= $e[1] ?></h3>
          <p style="font-size:.84rem;color:var(--gris-1);line-height:1.6;"><?= $e[2] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);"><?= $t['pp_cta_title'] ?></h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);"><?= $t['pp_cta_desc'] ?></p>
      </div>
      <div style="display:flex;gap:var(--s2);">
        <a href="/en/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);"><?= $t['pp_cta_devis'] ?></a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>

</main>

<?php include '../includes/footer.php'; ?>
