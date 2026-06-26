<?php
$lang='fr';$page='prestations';$prefix='';
include '../includes/i18n.php';$t=vtc_t('fr');
$meta=['title'=>'Prix VTC Carcassonne – Toulouse Blagnac : tarif fixe, durée, conseils','desc'=>'Tout sur le prix d'un VTC entre Carcassonne et l'aéroport de Toulouse Blagnac : tarif fixe 95€, durée ~1h, ce qui est inclus. AUDE VTC.','canonical'=>'https://www.audevtc.fr/blog/prix-carcassonne-toulouse-vtc.php'];
include '../includes/header.php';
include '../includes/icons.php';
$faq_blog=[  ['Le tarif 95€ est-il valable à toute heure ?', 'Oui. Aucune majoration de nuit, week-end ou jour férié. Le tarif de 95€ est fixe quelle que soit l\'heure.'],
  ['Peut-on payer à bord ?', 'Oui. Paiement possible par carte bancaire, en espèces ou par virement avant le départ.'],
  ['Que se passe-t-il si mon vol est annulé ?', 'En cas d\'annulation, contactez-nous dès que possible. Nous reportons votre course sans frais pour les annulations prévenues au moins 2h avant la prise en charge.'],];
?>
<main style="padding-top:160px;">
  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <span class="eyebrow">Tarifs · Toulouse Blagnac</span>
      <span class="gold-line"></span>
      <time style="font-size:.8rem;color:var(--gris-2);display:block;margin-bottom:var(--s2);" datetime="2025-06-05">5 juin 2025</time>
      <h1 class="section-title" style="font-size:2.2rem;">Prix d'un VTC Carcassonne – Toulouse : tout ce qu'il faut savoir</h1>
      <p class="lead">Le trajet Carcassonne – Toulouse Blagnac est l'un des plus demandés dans l'Aude. 85 km, environ 1 heure de route. Voici tout ce qu'il faut savoir sur le prix d'un VTC pour ce trajet.</p>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div style="display:flex;flex-direction:column;gap:var(--s6);">
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Le tarif fixe : 95€</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">AUDE VTC propose ce trajet à 95€ fixe, aller simple. Ce tarif inclut tous les péages, les bagages standards, l'attente en cas de retard de vol et le Wi-Fi à bord.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Pourquoi un tarif fixe ?</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Un taxi au compteur sur ce trajet peut varier entre 80€ et 140€ selon la circulation autour de Toulouse. Le tarif fixe vous permet de budgétiser précisément, particulièrement utile pour les déplacements professionnels.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Ce qui est inclus</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Péages A61/A68, bagages standards, attente vol incluse, eau minérale offerte. Pour les groupes de plus de 3 personnes, un van 7 places est disponible sur demande.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Comment réserver ?</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Via le formulaire sur audevtc.fr ou par téléphone au 06 10 08 20 07. Confirmation sous 2h, réponse garantie.</p>
        </div>
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s2);">Depuis d'autres villes vers Toulouse Blagnac</h2>
          <p style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">AUDE VTC dessert aussi Narbonne (~110€), Limoux (~100€), Castelnaudary (~100€) et Lézignan-Corbières (~105€). Devis gratuit sur demande.</p>
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
{"@context":"https://schema.org","@type":"BlogPosting","headline":"Prix d'un VTC Carcassonne – Toulouse : tout ce qu'il faut savoir","description":"Tout sur le prix d'un VTC entre Carcassonne et l'aéroport de Toulouse Blagnac : tarif fixe 95€, durée ~1h, ce qui est inclus. AUDE VTC.","datePublished":"2025-06-05","author":{"@type":"Person","name":"Michel Richard"},"publisher":{"@type":"Organization","name":"AUDE VTC","url":"https://www.audevtc.fr"}}
</script>
<?php include '../includes/footer.php'; ?>
