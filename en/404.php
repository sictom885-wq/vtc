<?php
$lang = 'en';
$page = '';
$prefix = 'en/';
include '../includes/i18n.php';
$t = vtc_t('en');
$meta = [
  'title' => $t['nf_meta_title'],
  'desc'  => $t['nf_meta_desc'],
];
include '../includes/header.php';
include '../includes/icons.php';
?>
<main style="padding-top:160px;min-height:70vh;display:flex;align-items:center;">
  <div class="container" style="text-align:center;">
    <div style="font-family:var(--font-display);font-size:8rem;font-weight:700;color:rgba(201,168,76,.15);line-height:1;">404</div>
    <h1 style="font-family:var(--font-display);font-size:2.5rem;margin-top:-2rem;margin-bottom:var(--s3);"><?= $t['nf_h1_a'] ?> <span style="color:var(--or);"><?= $t['nf_h1_b'] ?></span></h1>
    <p style="color:var(--gris-1);max-width:40ch;margin-inline:auto;margin-bottom:var(--s6);"><?= $t['nf_text'] ?></p>
    <div style="display:flex;gap:var(--s2);justify-content:center;flex-wrap:wrap;">
      <a href="/en/" class="btn btn-primary"><?= $t['nf_cta_home'] ?></a>
      <a href="/en/contact.php" class="btn btn-outline"><?= $t['nf_cta_contact'] ?></a>
    </div>
  </div>
</main>
<?php include '../includes/footer.php'; ?>
