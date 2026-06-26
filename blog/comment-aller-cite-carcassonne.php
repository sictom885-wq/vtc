<?php
$lang='fr';$page='prestations';$prefix='';
include '../includes/i18n.php';$t=vtc_t('fr');
$meta=['title'=>'Comment aller à la Cité de Carcassonne ? VTC, taxi, navette — Guide complet','desc'=>'Toutes les façons de rejoindre la Cité médiévale de Carcassonne : VTC privé, navette, à pied. Conseils pratiques et tarifs.','canonical'=>'https://www.audevtc.fr/blog/comment-aller-cite-carcassonne.php'];
include '../includes/header.php';
include '../includes/icons.php';
$faq_blog=[  ['Peut-on accéder à la Cité de Carcassonne en voiture ?', 'Oui, mais le stationnement est payant et limité en haute saison. Un VTC vous dépose au plus près sans contrainte de parking.'],
  ['Y a-t-il une navette entre l\'aéroport et la Cité ?', 'Non, il n\'existe pas de navette directe. Un VTC est la solution la plus pratique (10-15 minutes depuis l\'aéroport CCF).'],
  ['Quel est le tarif VTC depuis l\'aéroport de Carcassonne vers la Cité ?', 'Dès 25€ pour le trajet Carcassonne Airport (CCF) – Cité médiévale avec AUDE VTC.'],];
?>
<main style="padding-top:160px;">
  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <span class="eyebrow">Guide pratique · Carcassonne</span>
      <span class="gold-line"></span>
      <time style="font-size:.8rem;color:var(--gris-2);display:block;margin-bottom:var(--s2);" datetime="2025-06-10">10 juin 2025</time>
      <h1 class="section-title" style="font-size:2.2rem;">Comment aller à la Cité de Carcassonne ? Toutes les options</h1>
      <p class="lead">La Cité de Carcassonne est l'un des sites médiévaux les plus visités de France. Mais comment s'y rendre confortablement, sans stress, et sans chercher un stationnement impossible en haute saison ?</p>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div style="display:flex;flex-direction:column;gap:var(--s6);">
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">À pied depuis le centre-ville</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">La Cité est accessible à pied en 25-30 minutes depuis la Ville Basse. Traversez le Pont Vieux, montez la rue Trivalle. C'est le trajet le plus agréable par beau temps, mais exigeant avec des bagages.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">En navette municipale</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">En haute saison, une navette gratuite relie la Ville Basse à la Cité. Les horaires sont limités et peu adaptés aux visiteurs arrivant d'une autre ville.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">En VTC privé</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">C'est la solution la plus confortable. Un VTC comme AUDE VTC vous dépose directement à la porte Narbonnaise. Tarif fixe, pas de compteur, idéal pour les familles avec enfants ou les personnes à mobilité réduite.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Conseils pour éviter la foule</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Privilégiez les visites avant 9h ou après 18h. Les mois de mai, juin et septembre offrent un confort supérieur à juillet-août.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Avec AUDE VTC depuis toute l'Aude</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Que vous arriviez de Narbonne, Limoux ou directement de Toulouse Blagnac, Michel Richard assure votre transfert jusqu'à la Cité. Tarif fixe, Mercedes hybride, disponible 24h/7j.</p>
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
{"@context":"https://schema.org","@type":"BlogPosting","headline":"Comment aller à la Cité de Carcassonne ? Toutes les options","description":"Toutes les façons de rejoindre la Cité médiévale de Carcassonne : VTC privé, navette, à pied. Conseils pratiques et tarifs.","datePublished":"2025-06-10","author":{"@type":"Person","name":"Michel Richard"},"publisher":{"@type":"Organization","name":"AUDE VTC","url":"https://www.audevtc.fr"}}
</script>
<?php include '../includes/footer.php'; ?>
