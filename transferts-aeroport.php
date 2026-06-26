<?php
$lang = 'fr';
$page = 'prestations';
include 'includes/i18n.php';
$t = vtc_t('fr');
$meta = ['title'=>$t['ta_meta_title'],'desc'=>$t['ta_meta_desc'],'canonical'=>'https://www.audevtc.fr/transferts-aeroport.php'];
include 'includes/header.php';
include 'includes/icons.php';
$aeroports = [
  ['nom'=>'Toulouse Blagnac','code'=>'TLS','dist'=>'~85 km','duree'=>'~1h','tarif'=>$t['ta_from'].' 95€'],
  ['nom'=>'Carcassonne','code'=>'CCF','dist'=>'~5 km','duree'=>'~10min','tarif'=>$t['ta_from'].' 25€'],
  ['nom'=>'Montpellier','code'=>'MPL','dist'=>'~150 km','duree'=>'~1h30','tarif'=>$t['ta_from'].' 160€'],
  ['nom'=>'Perpignan','code'=>'PGF','dist'=>'~110 km','duree'=>'~1h10','tarif'=>$t['ta_from'].' 120€'],
  ['nom'=>'Bordeaux Mérignac','code'=>'BOD','dist'=>'~280 km','duree'=>'~2h45','tarif'=>$t['tr_quote']],
];
?>
<main style="padding-top:160px;">
  <section style="position:relative;padding:var(--s12) 0;background:var(--noir-2);overflow:hidden;">
    <div style="position:absolute;inset:0;background:url('/assets/images/aeroport.webp') center/cover no-repeat;opacity:.15;"></div>
    <div class="container" style="position:relative;">
      <span class="eyebrow"><?= $t['ta_eyebrow'] ?></span>
      <span class="gold-line"></span>
      <h1 class="section-title"><?= $t['ta_h1'] ?> <span><?= $t['ta_h1_em'] ?></span></h1>
      <p class="lead"><?= $t['ta_lead'] ?></p>
      <div style="margin-top:var(--s4);"><a href="/contact.php" class="btn btn-primary"><?= $t['ta_cta_devis'] ?></a></div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php $avantages=[['M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',$t['ta_av1_t'],$t['ta_av1_d']],['M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z',$t['ta_av2_t'],$t['ta_av2_d']],['M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z',$t['ta_av3_t'],$t['ta_av3_d']]];
        foreach($avantages as $a): ?>
        <div class="presta-card reveal" style="padding:0;"><div class="presta-body">
          <div class="icon-box"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $a[0] ?>"/></svg></div>
          <h3 class="presta-title" style="font-size:1.2rem;"><?= $a[1] ?></h3>
          <p class="presta-desc"><?= $a[2] ?></p>
        </div></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="section section--dark">
    <div class="container">
      <div class="reveal">
        <span class="eyebrow"><?= $t['ta_dest_eyebrow'] ?></span>
        <span class="gold-line"></span>
        <h2 class="section-title"><?= $t['ta_dest_h2'] ?> <span><?= $t['ta_dest_h2_em'] ?></span></h2>
        <p class="lead"><?= $t['ta_dest_lead'] ?></p>
      </div>
      <div style="margin-top:var(--s6);display:flex;flex-direction:column;gap:var(--s2);">
        <?php foreach($aeroports as $i => $ap): ?>
        <div class="reveal reveal-delay-<?= min($i+1,3) ?>" style="display:grid;grid-template-columns:auto 1fr auto auto auto;align-items:center;gap:var(--s4);background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);transition:border-color var(--transition);" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.1)'">
          <span style="font-size:.7rem;font-weight:700;letter-spacing:.12em;background:rgba(201,168,76,.12);color:var(--or);padding:4px 10px;border-radius:4px;"><?= $ap['code'] ?></span>
          <span style="font-weight:600;color:var(--blanc);"><?= $ap['nom'] ?></span>
          <span style="font-size:.82rem;color:var(--gris-1);"><?= $ap['dist'] ?></span>
          <span style="font-size:.82rem;color:var(--gris-1);"><?= $ap['duree'] ?></span>
          <span style="font-weight:700;color:var(--or);"><?= $ap['tarif'] ?></span>
        </div>
        <?php endforeach; ?>
      </div>
      <p style="font-size:.78rem;color:var(--gris-2);margin-top:var(--s3);"><?= $t['ta_tarif_note'] ?></p>
      <div style="margin-top:var(--s4);background:rgba(201,168,76,.04);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);">
        <h3 style="font-weight:600;color:var(--blanc);font-size:.95rem;margin-bottom:var(--s2);"><?= $t['ta_geo_title'] ?></h3>
        <p style="font-size:.85rem;color:var(--gris-1);line-height:1.7;"><?= $t['ta_geo_text'] ?></p>
      </div>
      <div style="margin-top:var(--s6);text-align:center;"><a href="/contact.php" class="btn btn-primary"><?= $t['ta_cta_exact'] ?></a></div>
    </div>
  </section>
  <!-- SECTION EDITORIALE LONGUE -->
  <section class="section">
    <div class="container" style="max-width:860px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s6);">
        <span class="eyebrow">Votre chauffeur privé aéroport</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Pourquoi choisir <span>AUDE VTC</span> pour vos transferts aéroport ?</h2>
      </div>
      <div style="display:flex;flex-direction:column;gap:var(--s5);color:var(--gris-1);line-height:1.8;font-size:.95rem;">
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Un tarif fixe, zéro mauvaise surprise</h3>
          <p>Contrairement à un taxi classique dont le compteur tourne selon la circulation, AUDE VTC vous communique le prix exact avant la course. Que votre vol soit retardé d'une heure ou que l'autoroute soit encombrée, le tarif affiché est le tarif payé. C'est la promesse fondamentale d'un service VTC haut de gamme : la transparence totale.</p>
        </div>
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Suivi de vol en temps réel</h3>
          <p>Michel Richard surveille l'état de votre vol depuis son tableau de bord. En cas de retard, l'heure de prise en charge est automatiquement ajustée — sans appel de votre part, sans frais supplémentaires. À l'atterrissage, vous trouvez votre chauffeur dans le hall des arrivées, panneau nominatif en main, prêt à prendre en charge vos bagages.</p>
        </div>
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Un véhicule à la hauteur de vos exigences</h3>
          <p>Berline Mercedes hybride, intérieur en cuir, climatisation individuelle, chargeurs USB et Wi-Fi à bord. Que vous soyez seul pour un déplacement professionnel ou en famille avec des bagages volumineux, le confort est au rendez-vous. Un van 7 places est également disponible sur demande pour les groupes.</p>
        </div>
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Disponibilité 24h/24, 7j/7</h3>
          <p>Vols tôt le matin, retours tardifs, départs en week-end : AUDE VTC s'adapte à votre programme, pas l'inverse. La réservation s'effectue en ligne ou par téléphone, avec confirmation sous 2 heures. Aucun supplément de nuit ni de week-end.</p>
        </div>
        <div class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;color:var(--blanc);margin-bottom:var(--s2);">Basé à Carcassonne, rayonnant sur toute l'Aude</h3>
          <p>Depuis Carcassonne, Michel Richard dessert l'ensemble du département de l'Aude et les communes environnantes : Trèbes, Limoux, Castelnaudary, Narbonne, Lézignan-Corbières, Alzonne, Bram, Saissac, Fanjeaux. Pas de frais de déplacement supplémentaires dans un rayon de 20 km autour de Carcassonne.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ aéroport -->
  <section class="section section--dark">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div class="reveal" style="margin-bottom:var(--s6);">
        <span class="eyebrow">Questions fréquentes</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Transfert aéroport <span>en VTC</span></h2>
      </div>
      <?php
      $faq_aero = [
        ['Comment réserver mon transfert aéroport ?', 'Via le formulaire de contact en ligne ou par téléphone au 06 10 08 20 07. Précisez votre aéroport de destination, la date, l\'heure et le nombre de passagers. Confirmation sous 2h.'],
        ['Quels aéroports desservez-vous depuis Carcassonne ?', 'AUDE VTC dessert principalement Toulouse Blagnac (TLS), Carcassonne (CCF), Montpellier (MPL), Perpignan (PGF) et Bordeaux Mérignac (BOD). D\'autres aéroports sont accessibles sur devis.'],
        ['Le tarif inclut-il l\'attente en cas de retard de vol ?', 'Oui. Le temps d\'attente lié à un retard de vol est inclus dans le tarif fixe. Votre chauffeur surveille votre vol en temps réel.'],
        ['Peut-on voyager avec des animaux de compagnie ?', 'Oui, sous réserve de le mentionner à la réservation. Les animaux doivent être dans une caisse de transport.'],
        ['Y a-t-il un supplément pour les bagages ?', 'Non. Le tarif fixe inclut les bagages standards. Pour des équipements exceptionnels (ski, vélo), merci de le préciser à la réservation.'],
      ];
      foreach($faq_aero as $qa): ?>
      <div class="reveal" style="border-bottom:1px solid rgba(201,168,76,.1);padding:var(--s4) 0;">
        <h3 style="font-size:1rem;font-weight:600;color:var(--blanc);margin-bottom:var(--s2);"><?= $qa[0] ?></h3>
        <p style="font-size:.9rem;color:var(--gris-1);line-height:1.7;"><?= $qa[1] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

<?php
// FAQ Schema pour la page aéroport
$faq_schema = [
  ['Comment réserver mon transfert aéroport ?', 'Via le formulaire de contact en ligne ou par téléphone au 06 10 08 20 07. Confirmation sous 2h.'],
  ['Quels aéroports desservez-vous depuis Carcassonne ?', 'AUDE VTC dessert Toulouse Blagnac (TLS), Carcassonne (CCF), Montpellier (MPL), Perpignan (PGF) et Bordeaux Mérignac (BOD).'],
  ['Le tarif inclut-il l\'attente en cas de retard de vol ?', 'Oui. Le temps d\'attente lié à un retard de vol est inclus dans le tarif fixe.'],
  ['Y a-t-il un supplément pour les bagages ?', 'Non. Le tarif fixe inclut les bagages standards.'],
];
?>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
<?php foreach($faq_schema as $i=>$qa): ?>
{"@type":"Question","name":"<?= addslashes($qa[0]) ?>","acceptedAnswer":{"@type":"Answer","text":"<?= addslashes($qa[1]) ?>"}}<?= $i<count($faq_schema)-1?',':'' ?>
<?php endforeach; ?>
]}
</script>

  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--s4);">
      <div>
        <h2 style="font-family:var(--font-display);font-size:2rem;color:var(--noir);"><?= $t['ta_cta_flight'] ?></h2>
        <p style="color:rgba(8,8,16,.7);margin-top:var(--s1);"><?= $t['ta_cta_sub'] ?></p>
      </div>
      <div style="display:flex;gap:var(--s2);">
        <a href="/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);"><?= $t['ta_cta_book'] ?></a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>
</main>


  <!-- Maillage interne villes -->
  <section class="section">
    <div class="container">
      <div class="reveal" style="margin-bottom:var(--s4);">
        <span class="eyebrow">Zone de desserte</span>
        <span class="gold-line"></span>
        <h2 class="section-title">VTC aéroport depuis <span>toute l'Aude</span></h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:var(--s3);">
        <?php foreach([
          ['Narbonne','/villes/vtc-narbonne.php','~60 km · dès 65€'],
          ['Limoux','/villes/vtc-limoux.php','~25 km · dès 35€'],
          ['Castelnaudary','/villes/vtc-castelnaudary.php','~45 km · dès 50€'],
          ['Lézignan-Corbières','/villes/vtc-lezignan-corbieres.php','~40 km · dès 50€'],
          ['Bram','/villes/vtc-bram.php','~20 km · dès 30€'],
          ['Alzonne','/villes/vtc-alzonne.php','~15 km · dès 25€'],
        ] as $ville): ?>
        <a href="<?=$ville[1]?>" class="reveal" style="display:block;background:var(--noir-2);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);text-decoration:none;transition:border-color var(--transition);" onmouseover="this.style.borderColor='rgba(201,168,76,.4)'" onmouseout="this.style.borderColor='rgba(201,168,76,.12)'">
          <div style="font-weight:600;color:var(--blanc);margin-bottom:4px;"><?=$ville[0]?></div>
          <div style="font-size:.8rem;color:var(--or);"><?=$ville[2]?></div>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<!-- Service Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Transfert VTC Aéroport",
  "description": "Service de transfert en véhicule de tourisme avec chauffeur (VTC) depuis et vers les aéroports de Toulouse Blagnac, Carcassonne, Montpellier, Perpignan et Bordeaux. Tarif fixe, Mercedes hybride, disponible 24h/7j.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "AUDE VTC",
    "telephone": "+33610082007",
    "url": "https://www.audevtc.fr"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Carcassonne, Aude, Occitanie"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "25",
    "priceSpecification": {
      "@type": "UnitPriceSpecification",
      "price": "25",
      "priceCurrency": "EUR",
      "description": "À partir de"
    }
  },
  "serviceType": "Chauffeur privé VTC"
}
</script>
<?php include 'includes/footer.php'; ?>