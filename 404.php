<?php
$lang = 'fr';
$page = '';
$meta = [
  'title' => 'Page introuvable — AUDE VTC',
  'desc'  => 'Cette page n\'existe pas. Retournez à l\'accueil AUDE VTC.',
];
include 'includes/header.php';
include 'includes/icons.php';
?>
<main style="padding-top:160px;min-height:70vh;display:flex;align-items:center;">
  <div class="container" style="text-align:center;">
    <div style="font-family:var(--font-display);font-size:8rem;font-weight:700;color:rgba(201,168,76,.15);line-height:1;">404</div>
    <h1 style="font-family:var(--font-display);font-size:2.5rem;margin-top:-2rem;margin-bottom:var(--s3);">Page <span style="color:var(--or);">introuvable</span></h1>
    <p style="color:var(--gris-1);max-width:40ch;margin-inline:auto;margin-bottom:var(--s6);">Cette page n'existe pas ou a été déplacée. Retournez à l'accueil pour trouver ce dont vous avez besoin.</p>
    <div style="display:flex;gap:var(--s2);justify-content:center;flex-wrap:wrap;">
      <a href="/" class="btn btn-primary">Retour à l'accueil</a>
      <a href="/contact.php" class="btn btn-outline">Nous contacter</a>
    </div>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
