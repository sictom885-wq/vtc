<?php
$lang = 'fr';
$page = 'apropos';
$meta = [
  'title'     => 'À Propos — Michel Richard, Chauffeur VTC Carcassonne | AUDE VTC',
  'desc'      => 'Michel Richard, chauffeur privé VTC expert de l\'Occitanie. Trilingue FR/EN/DE, 5 ans d\'expérience dans le tourisme régional, Mercedes break hybride.',
  'canonical' => 'https://www.audevtc.fr/a-propos.php',
];
include 'includes/header.php';
include 'includes/icons.php';
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
          <img src="/assets/images/chauffeur-hero.webp"
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

  <!-- CHIFFRES CLÉS -->
  <section class="section section--dark">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:var(--s3);text-align:center;">
        <?php
        $chiffres = [
          ['500+',  'Trajets réalisés',      'Depuis la création d'AUDE VTC'],
          ['16',    'Avis Google ★ 5/5',     'Satisfaction client garantie'],
          ['5',     'Ans d'expérience',       'Dans le tourisme occitan'],
          ['3',     'Langues parlées',        'Français · Anglais · Allemand'],
        ];
        foreach($chiffres as $i => $c): ?>
        <div class="reveal reveal-delay-<?= $i+1 ?>" style="background:var(--noir-3);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s6) var(--s3);">
          <div style="font-family:var(--font-display);font-size:3.5rem;font-weight:300;color:var(--or);line-height:1;"><?= $c[0] ?></div>
          <div style="font-weight:600;color:var(--blanc);font-size:.9rem;margin:var(--s2) 0 var(--s1);"><?= $c[1] ?></div>
          <div style="font-size:.78rem;color:var(--gris-1);"><?= $c[2] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- TIMELINE -->
  <section class="section">
    <div class="container">
      <div class="reveal" style="text-align:center;max-width:600px;margin-inline:auto;margin-bottom:var(--s8);">
        <span class="eyebrow">Parcours</span>
        <span class="gold-line" style="margin-inline:auto;"></span>
        <h2 class="section-title">L'histoire <span>de Michel</span></h2>
      </div>

      <div style="max-width:720px;margin-inline:auto;position:relative;">
        <!-- Ligne verticale -->
        <div style="position:absolute;left:28px;top:0;bottom:0;width:1px;background:linear-gradient(to bottom,transparent,rgba(201,168,76,.4) 10%,rgba(201,168,76,.4) 90%,transparent);"></div>

        <?php
        $timeline = [
          ['2008', 'Découverte de l'Occitanie',      'Natif de la région, Michel développe une passion profonde pour l\'histoire cathare, les vignobles des Corbières et les paysages du Canal du Midi.'],
          ['2016', 'Secteur du tourisme',             'Il rejoint le secteur touristique régional — guides, agences, excursions — et acquiert une connaissance intime des sites et des anecdotes qui font l\'âme de l\'Occitanie.'],
          ['2019', 'Création d'AUDE VTC',             'Fort de son réseau et de sa connaissance du terrain, il crée AUDE VTC : un service de transport privé haut de gamme ancré dans l\'authenticité locale.'],
          ['2022', 'Certification & trilinguisme',    'Perfectionnement de l\'anglais et de l\'allemand pour accueillir les voyageurs internationaux. Certification chauffeur VTC, véhicule hybride.'],
          ['2024', 'Expansion & reconnaissance',      '500 trajets réalisés, 16 avis Google 5 étoiles, et une clientèle fidèle de voyageurs d\'affaires et de touristes du monde entier.'],
        ];
        foreach($timeline as $i => $e): ?>
        <div class="reveal" style="display:flex;gap:var(--s4);margin-bottom:var(--s6);position:relative;">
          <!-- Point + année -->
          <div style="flex-shrink:0;width:56px;text-align:center;">
            <div style="width:14px;height:14px;background:var(--or);border-radius:50%;margin:4px auto 6px;box-shadow:0 0 12px rgba(201,168,76,.5);"></div>
            <div style="font-size:.7rem;font-weight:700;color:var(--or);letter-spacing:.1em;"><?= $e[0] ?></div>
          </div>
          <!-- Contenu -->
          <div style="background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);flex:1;transition:border-color var(--transition);" onmouseover="this.style.borderColor='rgba(201,168,76,.35)'" onmouseout="this.style.borderColor='rgba(201,168,76,.1)'">
            <div style="font-weight:600;color:var(--blanc);font-size:.95rem;margin-bottom:6px;"><?= $e[1] ?></div>
            <div style="font-size:.85rem;color:var(--gris-1);line-height:1.7;"><?= $e[2] ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ENGAGEMENTS PREMIUM -->
  <section class="section section--dark">
    <div class="container">
      <div class="reveal" style="text-align:center;max-width:600px;margin-inline:auto;margin-bottom:var(--s8);">
        <span class="eyebrow">Nos Engagements</span>
        <span class="gold-line" style="margin-inline:auto;"></span>
        <h2 class="section-title">Une promesse <span>tenue à chaque trajet</span></h2>
      </div>

      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php
        $engagements = [
          [
            'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z',
            'Ponctualité garantie',
            'Votre chauffeur est sur place 10 minutes avant l\'heure convenue. Toujours, sans exception.'
          ],
          [
            'M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z',
            'Service personnalisé',
            'Eau minérale, musique selon vos préférences, silence ou conversation — chaque trajet est adapté à vos besoins.'
          ],
          [
            'M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8zM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6z',
            'Transparence totale',
            'Prix fixé à la réservation. Aucun supplément pour les péages, le carburant ou l\'attente. Devis gratuit sous 2h.'
          ],
          [
            'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5',
            'Connaissance locale',
            'Michel connaît chaque recoin de l\'Occitanie. Conseils sur les restaurants, horaires, bonnes adresses — un guide autant qu\'un chauffeur.'
          ],
          [
            'M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75',
            'Discrétion absolue',
            'Vos déplacements, vos conversations, vos informations personnelles restent strictement confidentiels.'
          ],
          [
            'M1 6v16l7-4 8 4 7-4V2l-7 4-8-4-7 4zM8 2v16M16 6v16',
            'Itinéraires sur mesure',
            'Aucun circuit figé. Vous dictez le rythme, les étapes, les arrêts. Nous nous adaptons en temps réel.'
          ],
        ];
        foreach($engagements as $i => $eng): ?>
        <div class="reveal reveal-delay-<?= ($i%3)+1 ?>" style="background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);transition:border-color var(--transition),transform var(--transition);" onmouseover="this.style.borderColor='rgba(201,168,76,.4)';this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='rgba(201,168,76,.1)';this.style.transform='none'">
          <div class="icon-box" style="margin-bottom:var(--s3);">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $eng[0] ?>"/></svg>
          </div>
          <div style="font-weight:600;color:var(--blanc);font-size:.95rem;margin-bottom:var(--s1);"><?= $eng[1] ?></div>
          <div style="font-size:.83rem;color:var(--gris-1);line-height:1.7;"><?= $eng[2] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- VÉHICULE -->
  <section class="section">
    <div class="container">
      <div class="reveal" style="text-align:center;max-width:600px;margin-inline:auto;margin-bottom:var(--s8);">
        <span class="eyebrow">Le Véhicule</span>
        <span class="gold-line" style="margin-inline:auto;"></span>
        <h2 class="section-title">Mercedes Break <span>Hybride</span></h2>
        <p class="lead" style="margin-inline:auto;">Spacieux, silencieux, climatisé. Conçu pour le confort de 1 à 4 passagers avec leurs bagages.</p>
      </div>

      <!-- Galerie photos -->
      <div style="display:grid;grid-template-columns:2fr 1fr;grid-template-rows:auto auto;gap:var(--s2);margin-bottom:var(--s6);">
        <div class="reveal" style="grid-row:1/3;border-radius:var(--radius-lg);overflow:hidden;">
          <img src="/assets/images/mercedes-e.webp" alt="Mercedes Break AUDE VTC extérieur" width="800" height="600" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform .6s ease;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div class="reveal reveal-delay-1" style="border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:4/3;">
          <img src="/assets/images/mercedes-e-detail.webp" alt="Mercedes Break AUDE VTC détail extérieur" width="400" height="300" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform .6s ease;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div class="reveal reveal-delay-2" style="border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:4/3;">
          <img src="/assets/images/mercedes-v-detail.webp" alt="Mercedes Break AUDE VTC intérieur" width="400" height="300" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform .6s ease;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
        </div>
      </div>

      <!-- Specs -->
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php
        $specs = [
          ['M19 17H5a2 2 0 0 0-2 2v1h18v-1a2 2 0 0 0-2-2ZM12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z', 'Capacité', '4 passagers + bagages volumineux'],
          ['M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24A2.5 2.5 0 0 1 9.5 2ZM14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24A2.5 2.5 0 0 0 14.5 2Z', 'Confort', 'Sièges cuir, climatisation, vitres teintées'],
          ['M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0M12 20h.01', 'Connectivité', 'Chargeur USB, WiFi, eau minérale offerte'],
          ['M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM2 12h20', 'Motorisation', 'Hybride — CO₂ réduit, trajet silencieux'],
          ['M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z M9 22V12h6v10', 'Propreté', 'Nettoyage complet avant chaque prestation'],
          ['M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16', 'Bagages', 'Grand coffre — valises, poussettes, équipements'],
        ];
        foreach($specs as $i => $s): ?>
        <div class="reveal reveal-delay-<?= ($i%3)+1 ?>" style="background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);display:flex;gap:var(--s3);align-items:flex-start;">
          <div class="icon-box" style="flex-shrink:0;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $s[0] ?>"/></svg>
          </div>
          <div>
            <div style="font-weight:600;color:var(--blanc);font-size:.88rem;margin-bottom:4px;"><?= $s[1] ?></div>
            <div style="font-size:.8rem;color:var(--gris-1);line-height:1.5;"><?= $s[2] ?></div>
          </div>
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
