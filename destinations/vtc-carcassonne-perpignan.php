<?php
$lang='fr';$page='prestations';$prefix='';
include '../includes/i18n.php';$t=vtc_t('fr');
$meta=['title'=>'VTC Carcassonne → Perpignan (PGF) — AUDE VTC | Tarif fixe dès 120€','desc'=>'Transfert VTC Carcassonne – Aéroport Perpignan-Rivesaltes. 110 km, ~1h10. Tarif fixe 120€, Mercedes hybride, chauffeur professionnel.','canonical'=>'https://www.audevtc.fr/destinations/vtc-carcassonne-perpignan.php'];
include '../includes/header.php';include '../includes/icons.php';
$faq=[
  ['Quel est le tarif VTC Carcassonne – Perpignan ?','Le tarif fixe est de 120€ pour le trajet Carcassonne – Aéroport Perpignan-Rivesaltes (PGF), péages et bagages inclus.'],
  ['Combien de temps dure le trajet ?','Environ 1h10 pour les 110 km via l\'A9, hors bouchons.'],
  ['AUDE VTC assure-t-il aussi le transfert vers le centre de Perpignan ?','Oui. En dehors de l\'aéroport, AUDE VTC peut vous déposer ou vous récupérer en gare de Perpignan ou à toute adresse en ville.'],
  ['Peut-on voyager avec des skis ou des vélos ?','Pour les équipements encombrants, merci de le préciser à la réservation afin de prévoir le véhicule adapté.'],
];
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/aeroport.webp') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Transfert Aéroport · 110 km · ~1h10</span>
      <span class="gold-line"></span>
      <h1 class="section-title">VTC Carcassonne <span>Perpignan</span></h1>
      <p class="lead">Transfert privé Carcassonne – Aéroport Perpignan-Rivesaltes (PGF). Tarif fixe 120€, Mercedes hybride, chauffeur expérimenté.</p>
      <div style="display:flex;gap:var(--s2);flex-wrap:wrap;margin-top:var(--s4);">
        <a href="/contact.php" class="btn btn-primary">Réserver ce transfert</a>
        <a href="tel:+33610082007" class="btn btn-outline">06 10 08 20 07</a>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:var(--s3);margin-bottom:var(--s8);">
        <?php foreach([['Tarif fixe','120 €','Tout compris · A/R possible'],['Distance','~110 km','Via l\'A9'],['Durée','~1h10','Selon circulation'],['Véhicule','Mercedes','Berline hybride premium']] as $info): ?>
        <div class="reveal" style="background:var(--noir-2);border:1px solid rgba(201,168,76,.15);border-radius:var(--radius-lg);padding:var(--s4);text-align:center;">
          <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--gris-2);margin-bottom:var(--s1);"><?=$info[0]?></div>
          <div style="font-family:var(--font-display);font-size:2rem;color:var(--or);font-weight:700;"><?=$info[1]?></div>
          <div style="font-size:.82rem;color:var(--gris-1);margin-top:4px;"><?=$info[2]?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php foreach([['Péages inclus','Aucun frais cachés. Le tarif fixe de 120€ couvre tout le trajet, péages A9 inclus.'],['Suivi de vol','Votre chauffeur surveille votre vol en temps réel. Retard de vol = aucun frais supplémentaire.'],['Gare & centre-ville','AUDE VTC dessert aussi la gare de Perpignan et toute adresse en Pyrénées-Orientales.']] as $i=>$av): ?>
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
        <h2 class="section-title">VTC Carcassonne <span>Perpignan</span></h2>
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
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Vol depuis Perpignan ?</h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);">Réservez votre VTC Carcassonne – Perpignan. Réponse garantie sous 2h.</p>
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

<!-- Vous recherchez aussi -->
<section class="section section--dark">
  <div class="container" style="max-width:800px;margin-inline:auto;">
    <div class="reveal" style="margin-bottom:var(--s3);">
      <span class="eyebrow">Vous recherchez aussi</span>
      <span class="gold-line"></span>
      <h2 class="section-title" style="font-size:1.6rem;">Destinations <span>similaires</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:var(--s2);margin-top:var(--s4);">
      <a href="/destinations/vtc-carcassonne-toulouse-blagnac.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Toulouse Blagnac →</a>
      <a href="/destinations/vtc-carcassonne-montpellier.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Montpellier →</a>
      <a href="/destinations/vtc-carcassonne-beziers.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Béziers →</a>
      <a href="/transferts-aeroport.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Tous les aéroports →</a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
