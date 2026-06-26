<?php
$lang='fr';$page='prestations';$prefix='';
include '../includes/i18n.php';$t=vtc_t('fr');
$meta=['title'=>'VTC Canal du Midi — Circuit privé depuis Carcassonne | AUDE VTC','desc'=>'Découvrez le Canal du Midi en VTC privé depuis Carcassonne. Circuit sur mesure, arrêts écluses, villages, vignobles. Tarif fixe, Mercedes hybride.','canonical'=>'https://www.audevtc.fr/tourisme/canal-du-midi.php'];
include '../includes/header.php';
include '../includes/icons.php';
$faq_t=[
  ['Peut-on faire un circuit Canal du Midi en VTC à la journée ?', 'Oui. Une journée permet de couvrir Carcassonne – Castelnaudary – Bram – Béziers avec plusieurs arrêts. Tarif sur devis.'],
  ['Quels sont les plus beaux arrêts sur le Canal du Midi ?', 'Les écluses de Fonsérannes (Béziers), le port de Castelnaudary, le tunnel de Malpas et les platanes de Bram sont incontournables.'],
  ['Le circuit est-il disponible en anglais ?', 'Oui. Michel Richard propose ses commentaires en français, anglais et allemand.'],
  ['Peut-on combiner Canal du Midi et Cité de Carcassonne ?', 'Oui. Michel Richard peut concevoir un circuit combinant les deux sites en une journée.'],
];
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/card-tourisme.webp') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Tourisme · Patrimoine UNESCO · Occitanie</span>
      <span class="gold-line"></span>
      <h1 class="section-title">VTC <span>Canal du Midi</span></h1>
      <p class="lead">Le Canal du Midi, chef-d'œuvre de Vauban classé UNESCO, serpente entre Toulouse et la mer Méditerranée à travers l'Aude et l'Hérault. AUDE VTC vous propose un circuit sur mesure pour découvrir ses écluses, ses villages et ses vignobles bordiers.</p>
      <div style="display:flex;gap:var(--s2);flex-wrap:wrap;margin-top:var(--s4);">
        <a href="/contact.php" class="btn btn-primary">Réserver ce circuit</a>
        <a href="tel:+33610082007" class="btn btn-outline">06 10 08 20 07</a>
      </div>
    </div>
  </section>
  <section class="section section--dark">
    <div class="container" style="max-width:860px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s4);">
        <span class="eyebrow">Pourquoi choisir AUDE VTC</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Votre chauffeur <span>pour Canal du Midi</span></h2>
      </div>
      <p class="reveal" style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Depuis Carcassonne, le Canal est accessible en quelques minutes. Michel Richard connaît les plus beaux points d'arrêt : l'écluse de l'Océan à Carcassonne, le port de Castelnaudary, les platanes centenaires de Bram, le pont-canal de Béziers.</p>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);margin-top:var(--s6);">
        <?php foreach([['Circuit sur mesure','Itinéraire adapté à vos envies, votre rythme et le nombre de personnes.'],['Trilingue','Commentaires en français, anglais et allemand.'],['Tarif fixe','Prix arrêté avant le départ. Aucune surprise.']] as $i=>$av): ?>
        <div class="presta-card reveal reveal-delay-<?=$i+1?>" style="padding:0;"><div class="presta-body">
          <div class="icon-box"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
          <h3 class="presta-title" style="font-size:1.1rem;"><?=$av[0]?></h3>
          <p class="presta-desc"><?=$av[1]?></p>
        </div></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s6);">
        <span class="eyebrow">Questions fréquentes</span>
        <span class="gold-line"></span>
        <h2 class="section-title">VTC <span>Canal du Midi</span></h2>
      </div>
      <?php foreach($faq_t as $qa): ?>
      <div class="reveal" style="border-bottom:1px solid rgba(201,168,76,.1);padding:var(--s4) 0;">
        <h3 style="font-size:1rem;font-weight:600;color:var(--blanc);margin-bottom:var(--s2);"><?=$qa[0]?></h3>
        <p style="font-size:.9rem;color:var(--gris-1);line-height:1.7;"><?=$qa[1]?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="section section--dark">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s3);">
        <span class="eyebrow">Vous recherchez aussi</span>
        <span class="gold-line"></span>
        <h2 class="section-title" style="font-size:1.6rem;">Sites <span>à découvrir</span></h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:var(--s2);margin-top:var(--s4);">
        <a href="/tourisme/cite-carcassonne.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Cité de Carcassonne →</a>
        <a href="/tourisme/chateaux-cathares.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Châteaux Cathares →</a>
        <a href="/tourisme/abbaye-fontfroide.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Abbaye de Fontfroide →</a>
        <a href="/tourisme/gouffre-cabrespine.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Gouffre de Cabrespine →</a>
      </div>
    </div>
  </section>
  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Visiter Canal du Midi ?</h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);">Devis gratuit · Réponse garantie sous 24h · Circuit sur mesure</p>
      </div>
      <div style="display:flex;gap:var(--s2);">
        <a href="/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);">Réserver en ligne</a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>
</main>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
<?php foreach($faq_t as $i=>$qa): ?>
{"@type":"Question","name":"<?=addslashes($qa[0])?>","acceptedAnswer":{"@type":"Answer","text":"<?=addslashes($qa[1])?>"}},<?=$i<count($faq_t)-1?'':'' ?>
<?php endforeach; ?>
]}
</script>
<?php include '../includes/footer.php'; ?>
