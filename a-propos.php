<?php
$lang = 'fr';
$page = 'apropos';
$meta = [
  'title'     => 'À Propos — Michel Richard, Chauffeur VTC Carcassonne | AUDE VTC',
  'desc'      => 'Michel Richard, chauffeur privé VTC expert de l\'Occitanie. Trilingue FR/EN/DE, 5 ans d\'expérience dans le tourisme régional, Mercedes break hybride.',
  'canonical' => 'https://www.audevtc.fr/a-propos.php',
];
include 'includes/header.php';
?>

<main style="padding-top:160px;">

  <section style="padding:var(--s12) 0 var(--s8);background:var(--noir-2);">
    <div class="container">
      <span class="eyebrow">Qui sommes-nous</span>
      <span class="gold-line"></span>
      <h1 class="section-title">À Propos <span>d'AUDE VTC</span></h1>
      <p class="lead">Derrière AUDE VTC, un homme, une passion : vous faire découvrir l'Occitanie dans les meilleures conditions.</p>
    </div>
  </section>

  <!-- PORTRAIT -->
  <section class="section">
    <div class="container">
      <div class="apropos-inner">
        <div class="apropos-img-wrap reveal">
          <img src="/assets/images/michel-richard.jpg"
               alt="Michel Richard, chauffeur privé AUDE VTC Carcassonne"
               width="540" height="680" loading="lazy"
               style="border-radius:var(--radius-lg);width:100%;aspect-ratio:4/5;object-fit:cover;background:var(--noir-3);">
          <div class="apropos-badge">
            <span class="badge-num">+5</span>
            <span class="badge-label">ans d'expérience</span>
          </div>
        </div>

        <div class="apropos-content reveal reveal-delay-1">
          <span class="eyebrow">Michel Richard</span>
          <span class="gold-line"></span>
          <h2 class="section-title" style="font-size:2.4rem;">Votre chauffeur,<br><span>votre guide</span></h2>
          <p style="font-size:1rem;color:var(--gris-1);line-height:1.8;margin-bottom:var(--s3);">
            Passionné par sa région depuis toujours, Michel Richard a choisi de faire du transport privé une expérience à part entière. Avant de créer AUDE VTC, il a travaillé plusieurs années dans le secteur du tourisme occitan — ce qui lui confère une connaissance intime des lieux, des vignobles, de l'histoire cathare et des chemins de traverse.
          </p>
          <p style="font-size:1rem;color:var(--gris-1);line-height:1.8;margin-bottom:var(--s4);">
            Trilingue français, anglais et allemand, il accueille aussi bien les voyageurs locaux que les touristes internationaux, avec la même attention portée à chaque trajet : ponctualité, discrétion, conversation — ou silence, si c'est ce dont vous avez besoin.
          </p>

          <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--s3);">
            <?php
            $valeurs = [
              ['🎯','Ponctualité','Votre temps est précieux.'],
              ['🤫','Discrétion','Vos affaires restent les vôtres.'],
              ['🌿','Éco-responsabilité','Mercedes Break hybride.'],
              ['🗣️','Trilingue','FR · EN · DE'],
            ];
            foreach($valeurs as $v): ?>
            <div style="background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3);">
              <div style="font-size:1.4rem;margin-bottom:var(--s1);"><?= $v[0] ?></div>
              <div style="font-weight:600;color:var(--blanc);font-size:.9rem;margin-bottom:4px;"><?= $v[1] ?></div>
              <div style="font-size:.82rem;color:var(--gris-1);"><?= $v[2] ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VÉHICULE -->
  <section class="section section--dark">
    <div class="container">
      <div class="reveal" style="text-align:center;max-width:600px;margin-inline:auto;margin-bottom:var(--s8);">
        <span class="eyebrow">Le Véhicule</span>
        <span class="gold-line" style="margin-inline:auto;"></span>
        <h2 class="section-title">Mercedes Break <span>Hybride</span></h2>
        <p class="lead" style="margin-inline:auto;">Spacieux, silencieux, climatisé. Conçu pour le confort de 1 à 4 passagers avec leurs bagages.</p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php
        $specs = [
          ['🚗','Véhicule','Mercedes Break Hybride — couleur noir'],
          ['👥','Capacité','4 passagers + bagages volumineux'],
          ['🌡️','Confort','Climatisation, sièges en cuir, vitres teintées'],
          ['🔌','Équipements','Chargeur USB, WiFi disponible, eau minérale'],
          ['🌱','Écologie','Motorisation hybride, empreinte CO₂ réduite'],
          ['🧹','Propreté','Véhicule nettoyé avant chaque prestation'],
        ];
        foreach($specs as $s): ?>
        <div class="reveal" style="background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);text-align:center;">
          <div style="font-size:1.8rem;margin-bottom:var(--s2);"><?= $s[0] ?></div>
          <div style="font-weight:600;color:var(--blanc);font-size:.9rem;margin-bottom:4px;"><?= $s[1] ?></div>
          <div style="font-size:.82rem;color:var(--gris-1);"><?= $s[2] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section style="background:var(--or);padding:var(--s8) 0;">
    <div class="container" style="text-align:center;">
      <h2 style="font-family:var(--font-display);font-size:2.2rem;color:var(--noir);margin-bottom:var(--s2);">Prêt à voyager autrement ?</h2>
      <p style="color:rgba(8,8,16,.7);margin-bottom:var(--s4);">Réservez votre prochain trajet avec Michel Richard.</p>
      <div style="display:flex;gap:var(--s2);justify-content:center;flex-wrap:wrap;">
        <a href="/contact.php" class="btn" style="background:var(--noir);color:var(--blanc);">Réserver en ligne</a>
        <a href="tel:+33610082007" class="btn" style="background:transparent;color:var(--noir);border:2px solid var(--noir);">06 10 08 20 07</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
