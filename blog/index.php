<?php
$lang='fr';$page='prestations';$prefix='';
include 'includes/i18n.php';$t=vtc_t('fr');
$meta=['title'=>'Blog AUDE VTC — Conseils transport, tourisme et Occitanie','desc'=>'Guides pratiques, conseils tourisme et actualités transport VTC en Occitanie par AUDE VTC, votre chauffeur privé à Carcassonne.','canonical'=>'https://www.audevtc.fr/blog/'];
include 'includes/header.php';
include 'includes/icons.php';
$articles=[
  ['comment-aller-cite-carcassonne.php','Guide pratique','Comment aller à la Cité de Carcassonne ? Toutes les options','Toutes les façons de rejoindre la Cité médiévale : VTC, navette, à pied. Conseils pratiques et tarifs.','10 juin 2025'],
  ['taxi-ou-vtc-carcassonne-differences.php','Comparatif','Taxi ou VTC à Carcassonne : quelle différence ?','Prix, disponibilité, confort : tout ce qu\'il faut savoir pour choisir entre taxi et VTC dans l\'Aude.','22 mai 2025'],
  ['prix-carcassonne-toulouse-vtc.php','Tarifs','Prix d\'un VTC Carcassonne – Toulouse : tout ce qu\'il faut savoir','Tarif fixe 95€, ce qui est inclus, comment réserver. Le guide complet du transfert Carcassonne – Toulouse Blagnac.','5 juin 2025'],
  ['visiter-chateaux-cathares-vtc.php','Tourisme','Visiter les châteaux cathares en VTC depuis Carcassonne','Peyrepertuse, Quéribus, Puilaurens : comment découvrir les châteaux cathares en circuit privé avec AUDE VTC.','15 juin 2025'],
];
?>
<main style="padding-top:160px;">
  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container">
      <span class="eyebrow">Guides & Conseils</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Blog <span>AUDE VTC</span></h1>
      <p class="lead">Conseils pratiques, guides tourisme et actualités transport VTC en Occitanie.</p>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--s4);">
        <?php foreach($articles as $a): ?>
        <a href="/blog/<?=$a[0]?>" class="presta-card reveal" style="text-decoration:none;display:block;">
          <div class="presta-body">
            <span class="eyebrow" style="font-size:.65rem;"><?=$a[1]?></span>
            <h2 class="presta-title" style="font-size:1.15rem;margin-top:var(--s1);"><?=$a[2]?></h2>
            <p class="presta-desc"><?=$a[3]?></p>
            <div style="font-size:.78rem;color:var(--gris-2);margin-top:var(--s3);"><?=$a[4]?></div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>
