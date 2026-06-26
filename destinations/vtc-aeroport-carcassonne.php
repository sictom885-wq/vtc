<?php
$lang='fr';$page='prestations';$prefix='';
include '../includes/i18n.php';$t=vtc_t('fr');
$meta=['title'=>'VTC Aéroport Carcassonne (CCF) — AUDE VTC | Transfert depuis 25€','desc'=>'Transfert VTC depuis et vers l\'aéroport de Carcassonne (CCF). Tarif fixe dès 25€, prise en charge à domicile, Mercedes hybride. Disponible 24h/7j.','canonical'=>'https://www.audevtc.fr/destinations/vtc-aeroport-carcassonne.php'];
include '../includes/header.php';include '../includes/icons.php';
$faq=[
  ['Quel est le tarif pour l\'aéroport de Carcassonne ?','À partir de 25€ depuis le centre de Carcassonne. Le tarif exact dépend de votre adresse de départ — devis gratuit en ligne.'],
  ['L\'aéroport de Carcassonne dessert quelles destinations ?','Carcassonne Airport (CCF) propose des vols vers Londres Stansted, Édimbourg, Dublin et d\'autres destinations européennes via Ryanair.'],
  ['Où se fait la prise en charge à l\'arrivée ?','Michel Richard vous attend dans le hall des arrivées avec un panneau nominatif, après récupération des bagages.'],
  ['Peut-on accéder à l\'aéroport à n\'importe quelle heure ?','Oui. AUDE VTC est disponible 24h/24 et 7j/7, y compris pour les vols tôt le matin ou en soirée.'],
];
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/aeroport.webp') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Aéroport Local · CCF · Dès 25€</span>
      <span class="gold-line"></span>
      <h1 class="section-title">VTC <span>Aéroport Carcassonne</span></h1>
      <p class="lead">Transfert privé depuis votre domicile jusqu'à l'aéroport de Carcassonne-Salvaza (CCF). Ponctualité garantie, tarif fixe, véhicule haut de gamme.</p>
      <div style="display:flex;gap:var(--s2);flex-wrap:wrap;margin-top:var(--s4);">
        <a href="/contact.php" class="btn btn-primary">Réserver ce transfert</a>
        <a href="tel:+33610082007" class="btn btn-outline">06 10 08 20 07</a>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:var(--s3);margin-bottom:var(--s8);">
        <?php foreach([['Tarif','Dès 25€','Centre-ville → CCF'],['Distance','~5 km','Du centre de Carcassonne'],['Durée','~10 min','Trajet express'],['Disponible','24h/7j','Tous vols confondus']] as $info): ?>
        <div class="reveal" style="background:var(--noir-2);border:1px solid rgba(201,168,76,.15);border-radius:var(--radius-lg);padding:var(--s4);text-align:center;">
          <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--gris-2);margin-bottom:var(--s1);"><?= $info[0] ?></div>
          <div style="font-family:var(--font-display);font-size:2rem;color:var(--or);font-weight:700;"><?= $info[1] ?></div>
          <div style="font-size:.82rem;color:var(--gris-1);margin-top:4px;"><?= $info[2] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php foreach([['Prise en charge à domicile','Michel Richard vient vous chercher à l\'adresse de votre choix — aucun déplacement jusqu\'à un point de ramassage.'],['Suivi de vol','Votre chauffeur surveille l\'heure réelle de votre vol et adapte l\'heure d\'arrivée automatiquement.'],['Tarif fixe garanti','Pas de mauvaise surprise : le prix convenu à la réservation est le prix final, bagages inclus.']] as $i=>$av): ?>
        <div class="presta-card reveal reveal-delay-<?=$i+1?>" style="padding:0;"><div class="presta-body">
          <div class="icon-box"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
          <h3 class="presta-title" style="font-size:1.1rem;"><?=$av[0]?></h3>
          <p class="presta-desc"><?=$av[1]?></p>
        </div></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="section section--dark">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s6);">
        <span class="eyebrow">Questions fréquentes</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Aéroport <span>Carcassonne CCF</span></h2>
      </div>
      <?php foreach($faq as $qa): ?>
      <div class="reveal" style="border-bottom:1px solid rgba(201,168,76,.1);padding:var(--s4) 0;">
        <h3 style="font-size:1rem;font-weight:600;color:var(--blanc);margin-bottom:var(--s2);"><?=$qa[0]?></h3>
        <p style="font-size:.9rem;color:var(--gris-1);line-height:1.7;"><?=$qa[1]?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Vol depuis Carcassonne ?</h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);">Réservez votre transfert dès maintenant. Réponse garantie sous 2h.</p>
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
<?php foreach($faq as $i=>$qa): ?>
{"@type":"Question","name":"<?=addslashes($qa[0])?>","acceptedAnswer":{"@type":"Answer","text":"<?=addslashes($qa[1])?>"}}<?=$i<count($faq)-1?',':''?>
<?php endforeach; ?>
]}
</script>
<?php include '../includes/footer.php'; ?>
