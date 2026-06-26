<?php
$lang = 'fr';
$page = '';
$prefix = '';
$meta = [
  'title'     => 'Politique de Confidentialité — AUDE VTC',
  'desc'      => 'Politique de confidentialité et protection des données personnelles du site audevtc.fr — AUDE VTC, chauffeur privé à Carcassonne.',
  'canonical' => 'https://www.audevtc.fr/politique-confidentialite.php',
];
include 'includes/header.php';
include 'includes/icons.php';
?>
<main style="padding-top:160px;">
  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container">
      <span class="eyebrow">Protection des données</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Politique de <span>Confidentialité</span></h1>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:800px;margin-inline:auto;">
      <div style="display:flex;flex-direction:column;gap:var(--s6);">
        <?php
        $sections = [
          ['Responsable du traitement',
           '<strong>Raison sociale :</strong> Occitanie in Private<br><strong>Responsable :</strong> Michel Richard<br><strong>Adresse :</strong> Carcassonne, Aude (11), France<br><strong>Email :</strong> <a href="mailto:contact@audevtc.fr" style="color:var(--or);">contact@audevtc.fr</a>'],

          ['Données collectées',
           'Les données personnelles collectées via le formulaire de contact et de réservation sont les suivantes :<br><br>
            <strong>Nom et prénom</strong> — nécessaires pour l\'identification à la prise en charge.<br>
            <strong>Adresse email</strong> — pour la confirmation de réservation.<br>
            <strong>Numéro de téléphone</strong> — pour la coordination le jour du trajet.<br>
            <strong>Date, heure et lieu du trajet</strong> — pour la prestation de transport.<br><br>
            Aucune donnée bancaire n\'est collectée via le site.'],

          ['Finalité et base légale',
           'Les données sont collectées et traitées exclusivement pour :<br><br>
            <strong>L\'exécution du contrat de transport</strong> (art. 6.1.b RGPD) — traitement de votre réservation et coordination de la prestation.<br>
            <strong>L\'intérêt légitime</strong> (art. 6.1.f RGPD) — réponse à vos demandes de contact ou de devis.'],

          ['Conservation des données',
           'Les données sont conservées pendant <strong>3 ans</strong> à compter du dernier contact, conformément aux recommandations de la CNIL. Les données de facturation sont conservées <strong>10 ans</strong> conformément aux obligations comptables légales.'],

          ['Destinataires',
           'Les données collectées sont destinées exclusivement à AUDE VTC (Occitanie in Private) et ne sont jamais transmises, vendues ou cédées à des tiers à des fins commerciales.'],

          ['Vos droits',
           'Conformément au RGPD et à la loi Informatique et Libertés, vous disposez des droits suivants :<br><br>
            <strong>Droit d\'accès</strong> — obtenir une copie de vos données.<br>
            <strong>Droit de rectification</strong> — corriger des données inexactes.<br>
            <strong>Droit à l\'effacement</strong> — demander la suppression de vos données.<br>
            <strong>Droit à la portabilité</strong> — recevoir vos données dans un format structuré.<br>
            <strong>Droit d\'opposition</strong> — vous opposer à certains traitements.<br><br>
            Pour exercer ces droits : <a href="mailto:contact@audevtc.fr" style="color:var(--or);">contact@audevtc.fr</a><br>
            En cas de réclamation : <a href="https://www.cnil.fr" target="_blank" rel="noopener" style="color:var(--or);">www.cnil.fr</a>'],

          ['Cookies',
           'Ce site n\'utilise pas de cookies publicitaires ou de traçage tiers. Seuls des cookies techniques strictement nécessaires au bon fonctionnement du site peuvent être déposés (session, sécurité). Aucun consentement n\'est requis pour ces cookies.'],

          ['Sécurité',
           'Les données sont transmises via une connexion HTTPS sécurisée (TLS). Les formulaires sont protégés contre les soumissions abusives. Aucune donnée sensible n\'est stockée en clair.'],

          ['Mise à jour',
           'Cette politique de confidentialité a été mise à jour le <strong>1er juin 2025</strong>. Elle peut être modifiée à tout moment pour refléter les évolutions légales ou techniques. La version en vigueur est toujours accessible sur cette page.'],
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
