<?php
$lang = 'fr';
$page = '';
$meta = [
  'title'     => 'Mentions Légales — AUDE VTC',
  'desc'      => 'Mentions légales du site audevtc.fr — AUDE VTC, chauffeur privé à Carcassonne.',
  'canonical' => 'https://www.audevtc.fr/mentions-legales.php',
];
include 'includes/header.php';
?>

<main style="padding-top:160px;">
  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container">
      <span class="eyebrow">Informations légales</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Mentions <span>Légales</span></h1>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div style="display:flex;flex-direction:column;gap:var(--s6);">

        <?php
        $sections = [
          ['Éditeur du site', '
            <strong>Raison sociale :</strong> Occitanie in Private<br>
            <strong>Responsable de publication :</strong> Michel Richard<br>
            <strong>Adresse :</strong> Carcassonne, Aude (11), France<br>
            <strong>Téléphone :</strong> <a href="tel:+33610082007" style="color:var(--or);">06 10 08 20 07</a><br>
            <strong>Email :</strong> <a href="mailto:contact@audevtc.fr" style="color:var(--or);">contact@audevtc.fr</a><br>
            <strong>Site web :</strong> www.audevtc.fr
          '],
          ['Hébergement', '
            <strong>Hébergeur :</strong> Hostinger International Ltd<br>
            <strong>Adresse :</strong> 61 Lordou Vironos Street, 6023 Larnaca, Chypre<br>
            <strong>Site :</strong> <a href="https://www.hostinger.fr" target="_blank" rel="noopener" style="color:var(--or);">www.hostinger.fr</a>
          '],
          ['Propriété intellectuelle', '
            Le présent site et l\'ensemble de son contenu (textes, images, graphismes, logo, icônes, sons, logiciels…) sont protégés par le droit d\'auteur. Toute reproduction, copie, modification ou diffusion, même partielle, est interdite sans l\'accord écrit préalable d\'Occitanie in Private, conformément à l\'article L.122-4 du Code de la propriété intellectuelle.
          '],
          ['Données personnelles', '
            Les informations collectées via les formulaires du site sont destinées exclusivement à AUDE VTC pour le traitement de vos demandes de réservation. Elles ne sont pas transmises à des tiers.<br><br>
            Conformément au Règlement Général sur la Protection des Données (RGPD) et à la loi Informatique et Libertés, vous disposez d\'un droit d\'accès, de rectification et de suppression de vos données. Pour exercer ce droit, contactez : <a href="mailto:contact@audevtc.fr" style="color:var(--or);">contact@audevtc.fr</a>
          '],
          ['Cookies', '
            Ce site n\'utilise pas de cookies publicitaires ou de traçage. Seuls des cookies techniques strictement nécessaires au fonctionnement du site peuvent être déposés.
          '],
          ['Droit applicable', '
            Tout litige relatif à l\'utilisation du site audevtc.fr est soumis au droit français. Attribution exclusive de juridiction aux tribunaux compétents du ressort de Carcassonne.
          '],
          ['Réalisation', '
            Site réalisé par <a href="https://sicilio.digital" target="_blank" rel="noopener" style="color:var(--or);">Sicilio Digital</a>.
          '],
        ];
        foreach($sections as $s): ?>
        <div class="reveal" style="border-bottom:1px solid rgba(201,168,76,.1);padding-bottom:var(--s6);">
          <h2 style="font-family:var(--font-display);font-size:1.4rem;color:var(--or);margin-bottom:var(--s3);"><?= $s[0] ?></h2>
          <div style="font-size:.92rem;color:var(--gris-1);line-height:1.8;"><?= $s[1] ?></div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
