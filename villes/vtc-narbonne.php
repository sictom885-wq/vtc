<?php
$lang='fr';$page='prestations';$prefix='';
include '../includes/i18n.php';$t=vtc_t('fr');
$meta=[
  'title'     => 'VTC Narbonne — Chauffeur Privé AUDE VTC | Tarif fixe dès 65€',
  'desc'      => 'Chauffeur privé VTC à Narbonne et transferts depuis Narbonne vers les aéroports et gares. Tarif fixe dès 65€, Mercedes hybride, disponible 24h/7j.',
  'canonical' => 'https://www.audevtc.fr/villes/vtc-narbonne.php',
];
include '../includes/header.php';
include '../includes/icons.php';
$faq_ville=[
  ['Quel est le tarif VTC depuis Narbonne ?', 'Dès 65€ pour un transfert Narbonne – Carcassonne. Les transferts vers les aéroports sont calculés sur devis gratuit.'],
  ['AUDE VTC dessert-il la gare de Narbonne ?', 'Oui. Prise en charge directement en gare de Narbonne, avec panneau nominatif et aide aux bagages.'],
  ['Peut-on réserver un VTC Narbonne – Toulouse Blagnac ?', 'Oui. Comptez environ 150 km et 1h30 de trajet. Devis gratuit en ligne ou par téléphone.'],
  ['Y a-t-il un VTC disponible la nuit à Narbonne ?', 'Oui. AUDE VTC est disponible 24h/24 et 7j/7, y compris pour les arrivées tardives.'],
];
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/card-tourisme.webp') center/cover no-repeat;opacity:.12;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow">Chauffeur Privé · Aude · Dès 65€</span>
      <span class="gold-line"></span>
      <h1 class="section-title">VTC <span>Narbonne</span></h1>
      <p class="lead">Narbonne, capitale viticole de l'Aude, mérite un transport à sa hauteur. AUDE VTC assure vos transferts depuis et vers Narbonne : aéroports, gares, hôtels ou adresse personnelle. Tarif fixe, Mercedes hybride, chauffeur professionnel.</p>
      <div style="display:flex;gap:var(--s2);flex-wrap:wrap;margin-top:var(--s4);">
        <a href="/contact.php" class="btn btn-primary">Réserver un transfert</a>
        <a href="tel:+33610082007" class="btn btn-outline">06 10 08 20 07</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:var(--s3);margin-bottom:var(--s8);">
        <?php foreach([['Tarif dès','65 €','Depuis Narbonne'],['Distance','~60 km','de Carcassonne'],['Durée','~45 min','Trajet estimé'],['Disponible','24h/7j','Sans majoration']] as $info): ?>
        <div class="reveal" style="background:var(--noir-2);border:1px solid rgba(201,168,76,.15);border-radius:var(--radius-lg);padding:var(--s4);text-align:center;">
          <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--gris-2);margin-bottom:var(--s1);"><?=$info[0]?></div>
          <div style="font-family:var(--font-display);font-size:1.8rem;color:var(--or);font-weight:700;"><?=$info[1]?></div>
          <div style="font-size:.82rem;color:var(--gris-1);margin-top:4px;"><?=$info[2]?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php foreach([['Prise en charge à domicile','Michel Richard vient vous chercher directement à votre adresse. Aucun déplacement jusqu\'à un point de ramassage.'],['Tarif fixe garanti','Le prix est arrêté avant le départ. Aucun compteur, aucune surprise.'],['24h/7j sans majoration','Vols tôt le matin, retours tardifs, week-ends — au même tarif.']] as $i=>$av): ?>
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
        <span class="eyebrow">Votre chauffeur à Narbonne</span>
        <span class="gold-line"></span>
        <h2 class="section-title">AUDE VTC <span>à Narbonne</span></h2>
      </div>
      <p class="reveal" style="color:var(--gris-1);line-height:1.8;font-size:.95rem;">Située à 60 km de Carcassonne via l'A61, Narbonne est une étape clé pour les voyageurs de l'Aude. Que vous arriviez en gare de Narbonne ou dans un hôtel du centre, AUDE VTC vous prend en charge directement à votre adresse.</p>
      <div style="margin-top:var(--s6);display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:var(--s2);">
        <?php foreach(['Transfert aéroport','Transfert gare','Tourisme & circuits','Mariage & événements','Mise à disposition','Transport entreprise'] as $s): ?>
        <div class="reveal" style="background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-align:center;font-size:.85rem;color:var(--gris-1);"><?=$s?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s6);">
        <span class="eyebrow">Questions fréquentes</span>
        <span class="gold-line"></span>
        <h2 class="section-title">VTC <span>Narbonne</span></h2>
      </div>
      <?php foreach($faq_ville as $qa): ?>
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
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);">Votre chauffeur à Narbonne</h2>
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

<!-- Vous recherchez aussi -->
<section class="section section--dark">
  <div class="container" style="max-width:800px;margin-inline:auto;">
    <div class="reveal" style="margin-bottom:var(--s3);">
      <span class="eyebrow">Vous recherchez aussi</span>
      <span class="gold-line"></span>
      <h2 class="section-title" style="font-size:1.6rem;">Destinations <span>similaires</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:var(--s2);margin-top:var(--s4);">
      <a href="/destinations/vtc-gare-narbonne.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Gare Narbonne →</a>
      <a href="/destinations/vtc-carcassonne-perpignan.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Perpignan →</a>
      <a href="/villes/vtc-lezignan-corbieres.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Lézignan →</a>
      <a href="/transferts-aeroport.php" style="display:block;background:rgba(201,168,76,.05);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s2) var(--s3);text-decoration:none;color:var(--or);font-size:.88rem;text-align:center;" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">Aéroports →</a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
