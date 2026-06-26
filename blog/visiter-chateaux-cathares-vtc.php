<?php
$lang='fr';$page='prestations';$prefix='';
include '../includes/i18n.php';$t=vtc_t('fr');
$meta=['title'=>'Châteaux Cathares en VTC depuis Carcassonne — Circuit privé AUDE VTC','desc'=>'Découvrez les châteaux cathares (Peyrepertuse, Quéribus, Puilaurens) en VTC privé depuis Carcassonne. Circuit sur mesure avec Michel Richard.','canonical'=>'https://www.audevtc.fr/blog/visiter-chateaux-cathares-vtc.php'];
include '../includes/header.php';
include '../includes/icons.php';
$faq_blog=[  ['Peut-on visiter plusieurs châteaux cathares en une journée ?', 'Oui. Un circuit 2-3 châteaux est réalisable en une journée depuis Carcassonne, avec pauses déjeuner et photo.'],
  ['Faut-il réserver les entrées à l\'avance ?', 'En haute saison, il est recommandé de réserver Peyrepertuse et Quéribus à l\'avance.'],
  ['Le circuit est-il accessible aux enfants ?', 'Oui, mais certains châteaux impliquent une montée de 20-30 min. Michel Richard sélectionne les sites adaptés selon l\'âge.'],];
?>
<main style="padding-top:160px;">
  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <span class="eyebrow">Tourisme · Cathares · Occitanie</span>
      <span class="gold-line"></span>
      <time style="font-size:.8rem;color:var(--gris-2);display:block;margin-bottom:var(--s2);" datetime="2025-06-15">15 juin 2025</time>
      <h1 class="section-title" style="font-size:2.2rem;">Visiter les châteaux cathares en VTC : la meilleure façon de découvrir l'Aude</h1>
      <p class="lead">Peyrepertuse, Quéribus, Puilaurens, Aguilar : ces forteresses perchées dominent des paysages à couper le souffle. Mais comment les visiter sans voiture de location ni bus touristique bondé ?</p>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div style="display:flex;flex-direction:column;gap:var(--s6);">
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Pourquoi le VTC est idéal</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Les châteaux cathares sont sur des routes de montagne parfois étroites. En VTC, Michel Richard prend le volant — vous profitez du paysage. Il connaît les sites : heures d'ouverture, parkings, meilleures lumières pour les photos.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Les châteaux incontournables</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Peyrepertuse (1.300 m de remparts) est le plus spectaculaire. Quéribus offre un panorama sur les Corbières et la mer. Puilaurens, dans la vallée de l'Aude, est idéalement préservé. Aguilar, près de Tuchan, reste confidentiel.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Un circuit sur mesure</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Depuis Carcassonne, un circuit d'une journée inclut 2-3 châteaux, un déjeuner dans un village des Corbières et une halte dans un domaine viticole. Le rythme est le vôtre.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">En plusieurs langues</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">AUDE VTC propose ses circuits cathares en français, anglais et allemand. Michel Richard adapte ses anecdotes historiques à votre niveau d'intérêt.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Comment réserver ?</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Contactez-nous avec vos dates et le nombre de personnes. Michel Richard vous propose un itinéraire personnalisé sous 24h. Demi-journée à partir de 80€, journée complète sur devis.</p>
        </div>

      </div>
    </div>
  </section>
  <section class="section section--dark">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s5);"><span class="eyebrow">Questions fréquentes</span><span class="gold-line"></span><h2 class="section-title" style="font-size:1.8rem;">FAQ</h2></div>
      <?php foreach($faq_blog as $qa): ?>
      <div class="reveal" style="border-bottom:1px solid rgba(201,168,76,.1);padding:var(--s4) 0;">
        <h3 style="font-size:1rem;font-weight:600;color:var(--blanc);margin-bottom:var(--s2);"><?=$qa[0]?></h3>
        <p style="font-size:.9rem;color:var(--gris-1);line-height:1.7;"><?=$qa[1]?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div><h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Besoin d'un chauffeur privé ?</h2><p style="color:rgba(8,8,16,.7);margin-top:var(--s1);">Devis gratuit · Réponse garantie sous 2h · Tarif fixe</p></div>
      <div style="display:flex;gap:var(--s2);">
        <a href="/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);">Réserver en ligne</a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>
</main>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
<?php foreach($faq_blog as $i=>$qa): ?>
{"@type":"Question","name":"<?=addslashes($qa[0])?>","acceptedAnswer":{"@type":"Answer","text":"<?=addslashes($qa[1])?>"}}<?=$i<count($faq_blog)-1?',':'' ?>
<?php endforeach; ?>
]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BlogPosting","headline":"Visiter les châteaux cathares en VTC : la meilleure façon de découvrir l'Aude","description":"Découvrez les châteaux cathares (Peyrepertuse, Quéribus, Puilaurens) en VTC privé depuis Carcassonne. Circuit sur mesure avec Michel Richard.","datePublished":"2025-06-15","author":{"@type":"Person","name":"Michel Richard"},"publisher":{"@type":"Organization","name":"AUDE VTC","url":"https://www.audevtc.fr"}}
</script>
<?php include '../includes/footer.php'; ?>
