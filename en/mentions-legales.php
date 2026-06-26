<?php
$lang = 'en';
$page = '';
$prefix = 'en/';
include '../includes/i18n.php';
$t = vtc_t('en');
$meta = [
  'title'     => $t['ml_meta_title'],
  'desc'      => $t['ml_meta_desc'],
  'canonical' => 'https://www.audevtc.fr/en/mentions-legales.php',
];
include '../includes/header.php';
include '../includes/icons.php';
?>

<main style="padding-top:160px;">
  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container">
      <span class="eyebrow"><?= $t['ml_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h1 class="section-title"><?= $t['ml_h1_a'] ?> <span><?= $t['ml_h1_b'] ?></span></h1>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div style="display:flex;flex-direction:column;gap:var(--s6);">
        <?php
        $sections = [
          [$t['ml_s1_title'], $t['ml_s1_body']],
          [$t['ml_s2_title'], $t['ml_s2_body']],
          [$t['ml_s3_title'], $t['ml_s3_body']],
          [$t['ml_s4_title'], $t['ml_s4_body']],
          [$t['ml_s5_title'], $t['ml_s5_body']],
          [$t['ml_s6_title'], $t['ml_s6_body']],
          [$t['ml_s7_title'], $t['ml_s7_body']],
        ];
        foreach($sections as $s): ?>
        <div class="reveal" style="border-bottom:1px solid rgba(201,168,76,.1);padding-bottom:var(--s6);">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s3);"><?= $s[0] ?></h2>
          <div style="font-size:.92rem;color:var(--gris-1);line-height:1.8;"><?= $s[1] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php include '../includes/footer.php'; ?>
