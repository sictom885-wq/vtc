<?php
$lang='fr';$page='prestations';$prefix='';
include '../includes/i18n.php';$t=vtc_t('fr');
$meta=['title'=>'VTC Albi — Chauffeur Privé AUDE VTC | Tarif fixe dès 130€','desc'=>'Chauffeur privé VTC à Albi (Tarn) — transferts depuis Albi vers Carcassonne et les aéroports. Tarif fixe dès 130€, Mercedes hybride.','canonical'=>'https://www.audevtc.fr/villes/vtc-albi.php'];
include '../includes/header.php';
include '../includes/icons.php';
$faq_ville=[
  ['Quel est le tarif VTC Albi – Carcassonne ?', 'Dès 130€ pour le trajet Albi – Carcassonne (~130 km). Tarif fixe sur devis gratuit.'],
  ['AUDE VTC dessert-il Albi depuis Toulouse Blagnac ?', 'Oui. Toulouse Blagnac – Albi : ~80 km, ~50 min. Devis gratuit.'],
  ['Peut-on visiter Albi en circuit depuis Carcassonne ?', 'Oui. Michel Richard propose des circuits sur mesure incluant Albi et sa cathédrale Sainte-Cécile.'],
  ['Y a-t-il des arrêts possibles entre Carcassonne et Albi ?', 'Oui. Arrêts à Castres, Labruguière ou Réalmont sur demande.'],
];
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/card-tourisme.webp') center/cover no-repeat;opacity:.12;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Chauffeur Privé · Tarn · Dès 130€</span>
      <span class="gold-line"></span>
      <h1 class="section-title">VTC <span>Albi</span></h1>
      <p class="lead">Albi, cité épiscopale classée UNESCO, est desservie par AUDE VTC pour vos transferts privés. Depuis Carcassonne ou l'Aude, Michel Richard vous conduit à Albi ou vous prend en charge dans le Tarn.</p>
      <div style="display:flex;gap:var(--s2);flex-wrap:wrap;margin-top:var(--s4);">
        <a href="/contact.php" class="btn btn-primary">Réserver un transfert</a>
        <a href="tel:+33610082007" class="btn btn-outline">06 10 08 20 07</a>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:var(--s3);margin-bottom:var(--s8);">
        <?php foreach([['Tarif dès','130 €','Depuis Albi'],['Distance','~130 km','de Carcassonne'],['Durée','~1h20','Trajet estimé'],['Disponible','24h/7j','Sans majoration']] as $info): ?>
        <div class="reveal" style="background:var(--noir-2);border:1px solid rgba(201,168,76,.15);border-radius:var(--radius-lg);padding:var(--s4);text-align:center;">
          <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--gris-2);margin-bottom:var(--s1);"><?=$info[0]?></div>
          <div style="font-family:var(--font-display);font-size:1.8rem;color:var(--or);font-weight:700;"><?=$info[1]?></div>
          <div style="font-size:.82rem;color:var(--gris-1);margin-top:4px;"><?=$info[2]?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php foreach([['Prise en charge à domicile','Michel Richard vient vous chercher directement à votre adresse. Aucun déplacement jusqu'à un point de ramassage.'],['Tarif fixe garanti','Prix arrêté avant le départ. Aucun compteur, aucune surprise.'],['24h/7j sans majoration','Week-ends, jours fériés, nuit — au même tarif fixe.']] as $i=>$av): ?>
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
    <div class="container" style="max-width:860px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s4);">
        <span class="eyebrow">Votre chauffeur à Albi</span>
        <span class="gold-line"></span>
        <h2 class="section-title">AUDE VTC <span>à Albi</span></h2>
      </div>
      <p class="reveal" style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">À 130 km de Carcassonne via l'A68, Albi est souvent une étape pour les voyageurs combinant Tarn et Aude. AUDE VTC assure les transferts depuis Albi vers Toulouse Blagnac, Carcassonne et les gares TGV du secteur.</p>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s6);">
        <span class="eyebrow">Questions fréquentes</span>
        <span class="gold-line"></span>
        <h2 class="section-title">VTC <span>Albi</span></h2>
      </div>
      <?php foreach($faq_ville as $qa): ?>
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
        <h2 class="section-title" style="font-size:1.6rem;">Destinations <span>similaires</span></h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:var(--s2);margin-top:var(--s4);">
        <a href="/destinations/vtc-carcassonne-toulouse-blagnac.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Toulouse Blagnac →</a>
        <a href="/destinations/vtc-gare-toulouse.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Gare Toulouse →</a>
        <a href="/villes/vtc-narbonne.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Narbonne →</a>
        <a href="/villes/vtc-castelnaudary.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Castelnaudary →</a>
      </div>
    </div>
  </section>
  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Votre chauffeur à Albi</h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);">Devis gratuit · Réponse garantie sous 2h · Tarif fixe</p>
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
<?php foreach($faq_ville as $i=>$qa): ?>
{"@type":"Question","name":"<?=addslashes($qa[0])?>","acceptedAnswer":{"@type":"Answer","text":"<?=addslashes($qa[1])?>"}},<?=$i<count($faq_ville)-1?'':'' ?>
<?php endforeach; ?>
]}
</script>
<?php include '../includes/footer.php'; ?>
