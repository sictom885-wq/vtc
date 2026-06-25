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

<main style="padding-top:160px;overflow-x:hidden;">

  <!-- HERO PHOTO -->
  <section style="position:relative;height:520px;overflow:hidden;display:flex;align-items:center;background:url('/assets/images/chauffeur-apropos.webp') center 30% / cover no-repeat;">
    <!-- Overlay dégradé noir -->
    <div style="position:absolute;inset:0;background:linear-gradient(to right,rgba(8,8,16,.85) 0%,rgba(8,8,16,.55) 55%,rgba(8,8,16,.25) 100%);"></div>
    <!-- Ligne or bas -->
    <div style="position:absolute;bottom:0;left:0;right:0;height:1px;background:linear-gradient(to right,rgba(201,168,76,.5),rgba(201,168,76,.1));"></div>
    <!-- Contenu -->
    <div class="container" style="position:relative;z-index:2;">
      <span class="eyebrow">Qui sommes-nous</span>
      <span class="gold-line"></span>
      <h1 style="font-family:var(--font-display);font-size:clamp(2rem,3.5vw,3.2rem);font-weight:300;line-height:1.1;color:var(--blanc);margin-bottom:var(--s3);">
        À Propos <span style="color:var(--or);">d'AUDE VTC</span>
      </h1>
      <p class="lead" style="max-width:480px;margin-top:var(--s2);">Derrière AUDE VTC, un homme, une passion : vous faire découvrir l'Occitanie dans les meilleures conditions.</p>
    </div>
  </section>

  <!-- PORTRAIT -->
  <section class="section">
    <div class="container">
      <div class="reveal" style="max-width:800px;">
        <span class="eyebrow">Michel Richard</span>
        <span class="gold-line"></span>
        <h2 class="section-title" style="font-size:2.4rem;">Votre chauffeur,<br><span>votre guide</span></h2>
        <p style="font-size:1rem;color:var(--gris-1);line-height:1.8;margin-bottom:var(--s3);">
          Passionné par sa région depuis toujours, Michel Richard a choisi de faire du transport privé une expérience à part entière. Avant de créer AUDE VTC, il a travaillé plusieurs années dans le secteur du tourisme occitan — ce qui lui confère une connaissance intime des lieux, des vignobles, de l'histoire cathare et des chemins de traverse.
        </p>
        <p style="font-size:1rem;color:var(--gris-1);line-height:1.8;margin-bottom:var(--s4);">
          Trilingue français, anglais et allemand, il accueille aussi bien les voyageurs locaux que les touristes internationaux, avec la même attention portée à chaque trajet : ponctualité, discrétion, conversation — ou silence, si c'est ce dont vous avez besoin.
        </p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:var(--s3);margin-top:var(--s4);">
        <?php
        $valeurs = [
          ['M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', 'Ponctualité',       'Votre temps est précieux.'],
          ['M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'Discrétion', 'Vos affaires restent les vôtres.'],
          ['M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zM2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z', 'Trilingue',   'FR · EN · DE'],
          ['M7 17l-4-4 4-4M17 7l4 4-4 4M14 3l-4 18',       'Éco-responsabilité','Mercedes Break hybride.'],
        ];
        foreach($valeurs as $i => $v): ?>
        <div class="card-hover reveal reveal-delay-<?= $i+1 ?>" style="background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3);">
          <div class="icon-box" style="margin-bottom:var(--s2);">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $v[0] ?>"/></svg>
          </div>
          <div style="font-weight:600;color:var(--blanc);font-size:.9rem;margin-bottom:4px;"><?= $v[1] ?></div>
          <div style="font-size:.82rem;color:var(--gris-1);"><?= $v[2] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CHIFFRES CLÉS -->
  <section class="section section--dark">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:var(--s3);text-align:center;">
        <?php
        $chiffres = [
          ['500+',  'Trajets réalisés',      'Depuis la création d\'AUDE VTC'],
          ['16',    'Avis Google ★ 5/5',     'Satisfaction client garantie'],
          ['5',     'Ans d\'expérience',      'Dans le tourisme occitan'],
          ['3',     'Langues parlées',        'Français · Anglais · Allemand'],
        ];
        foreach($chiffres as $i => $c): ?>
        <div class="card-hover reveal reveal-delay-<?= $i+1 ?>" style="background:var(--noir-3);border:1px solid rgba(201,168,76,.12);border-radius:var(--radius-lg);padding:var(--s6) var(--s3);">
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
          ['2008', 'Découverte de l\'Occitanie',   'Natif de la région, Michel développe une passion profonde pour l\'histoire cathare, les vignobles des Corbières et les paysages du Canal du Midi.'],
          ['2016', 'Secteur du tourisme',            'Il rejoint le secteur touristique régional — guides, agences, excursions — et acquiert une connaissance intime des sites et des anecdotes qui font l\'âme de l\'Occitanie.'],
          ['2019', 'Création d\'AUDE VTC',           'Fort de son réseau et de sa connaissance du terrain, il crée AUDE VTC : un service de transport privé haut de gamme ancré dans l\'authenticité locale.'],
          ['2022', 'Certification & trilinguisme',   'Perfectionnement de l\'anglais et de l\'allemand pour accueillir les voyageurs internationaux. Certification chauffeur VTC, véhicule hybride.'],
          ['2024', 'Expansion & reconnaissance',     '500 trajets réalisés, 16 avis Google 5 étoiles, et une clientèle fidèle de voyageurs d\'affaires et de touristes du monde entier.'],
        ];
        foreach($timeline as $i => $e): ?>
        <div class="reveal" style="display:flex;gap:var(--s4);margin-bottom:var(--s6);position:relative;">
          <!-- Point + année -->
          <div style="flex-shrink:0;width:56px;text-align:center;">
            <div style="width:14px;height:14px;background:var(--or);border-radius:50%;margin:4px auto 6px;box-shadow:0 0 12px rgba(201,168,76,.5);"></div>
            <div style="font-size:.7rem;font-weight:700;color:var(--or);letter-spacing:.1em;"><?= $e[0] ?></div>
          </div>
          <!-- Contenu -->
          <div class="card-hover" style="background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);flex:1;">
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
        <div class="card-hover reveal reveal-delay-<?= ($i%3)+1 ?>" style="background:var(--noir-3);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s4);">
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
        <span class="eyebrow">La Flotte</span>
        <span class="gold-line" style="margin-inline:auto;"></span>
        <h2 class="section-title">Nos <span>Véhicules</span></h2>
        <p class="lead" style="margin-inline:auto;">Berline pour vos trajets en toute discrétion, van spacieux pour les groupes et les bagages volumineux. Spacieux, silencieux, climatisés.</p>
      </div>

      <!-- Galerie Bento premium -->
      <div class="bento" style="margin-bottom:var(--s6);">
        <figure class="bento-tile bento-tile--hero reveal" data-tilt>
          <div class="bento-tile__media">
            <img src="/assets/images/fleet-berline-profil.webp" width="1686" height="933"
                 alt="Berline noire de chauffeur privé devant la Gare de Bordeaux Saint-Jean de nuit"
                 loading="lazy" decoding="async">
          </div>
          <figcaption class="bento-tile__cap">
            <span class="bento-tile__kicker">Berline · 1 à 4 passagers</span>
            <span class="bento-tile__line">Silence feutré, finitions soignées</span>
          </figcaption>
        </figure>

        <figure class="bento-tile bento-tile--tall reveal reveal-delay-1" data-tilt>
          <div class="bento-tile__media">
            <img src="/assets/images/fleet-berline-avant.webp" width="1570" height="1001"
                 alt="Berline noire de prestige devant l'entrée d'un hôtel de luxe"
                 loading="lazy" decoding="async">
          </div>
          <figcaption class="bento-tile__cap">
            <span class="bento-tile__kicker">Élégance</span>
            <span class="bento-tile__line">Une présence discrète</span>
          </figcaption>
        </figure>

        <figure class="bento-tile bento-tile--wide reveal reveal-delay-2" data-tilt>
          <div class="bento-tile__media">
            <img src="/assets/images/fleet-van.webp" width="1615" height="974"
                 alt="Van noir spacieux pour transferts de groupe lors d'une soirée de gala"
                 loading="lazy" decoding="async">
          </div>
          <figcaption class="bento-tile__cap">
            <span class="bento-tile__kicker">Van · groupes &amp; bagages</span>
            <span class="bento-tile__line">L'espace en plus, sans compromis</span>
          </figcaption>
        </figure>
      </div>

      <style>
        .bento{max-width:1180px;margin-inline:auto;display:grid;gap:var(--s2);
          grid-template-columns:repeat(3,1fr);grid-template-rows:repeat(2,minmax(220px,1fr));
          grid-template-areas:"hero hero tall" "hero hero wide"}
        .bento-tile--hero{grid-area:hero}
        .bento-tile--tall{grid-area:tall}
        .bento-tile--wide{grid-area:wide}
        .bento-tile{position:relative;margin:0;border-radius:var(--radius-lg);overflow:hidden;
          background:#141416;cursor:pointer;transform-style:preserve-3d;perspective:900px;
          transition:transform .6s cubic-bezier(.16,1,.3,1)}
        .bento-tile::after{content:"";position:absolute;inset:0;border-radius:var(--radius-lg);
          box-shadow:inset 0 0 0 1px rgba(201,168,76,0);transition:box-shadow .5s ease;pointer-events:none;z-index:3}
        .bento-tile:hover::after{box-shadow:inset 0 0 0 1px rgba(201,168,76,.55)}
        .bento-tile__media{position:absolute;inset:0;overflow:hidden}
        .bento-tile__media img{width:100%;height:100%;object-fit:cover;display:block;
          transform:scale(1.04);filter:brightness(.82) saturate(.95);
          transition:transform 1.1s cubic-bezier(.16,1,.3,1),filter .6s ease}
        .bento-tile:hover .bento-tile__media img{transform:scale(1.1);filter:brightness(1) saturate(1.05)}
        .bento-tile__media::before{content:"";position:absolute;inset:0;z-index:2;
          background:linear-gradient(to top,rgba(8,8,16,.92) 0%,rgba(8,8,16,.25) 45%,transparent 75%),radial-gradient(120% 90% at 50% 120%,rgba(201,168,76,0),transparent 60%);
          transition:background .6s ease}
        .bento-tile:hover .bento-tile__media::before{
          background:linear-gradient(to top,rgba(8,8,16,.9) 0%,rgba(8,8,16,.2) 45%,transparent 75%),radial-gradient(120% 90% at 50% 120%,rgba(201,168,76,.22),transparent 60%)}
        .bento-tile__cap{position:absolute;left:0;right:0;bottom:0;z-index:4;padding:1.4rem 1.5rem;transform:translateZ(40px)}
        .bento-tile__kicker{display:block;font-size:.7rem;letter-spacing:.18em;text-transform:uppercase;color:var(--or);margin-bottom:.4rem}
        .bento-tile__line{display:block;font-family:var(--font-display,"Cormorant Garamond",serif);font-size:1.35rem;font-weight:500;line-height:1.2;color:#fff;opacity:.92;transition:opacity .4s ease}
        .bento-tile--hero .bento-tile__line{font-size:1.7rem}
        .bento-tile:hover .bento-tile__line{opacity:1}
        @media (max-width:880px){
          .bento{grid-template-columns:1fr 1fr;grid-template-rows:auto;grid-template-areas:"hero hero" "tall wide"}
          .bento-tile--hero{aspect-ratio:16/9}.bento-tile--tall,.bento-tile--wide{aspect-ratio:3/2}}
        @media (max-width:560px){
          .bento{grid-template-columns:1fr;grid-template-areas:"hero" "tall" "wide"}
          .bento-tile{aspect-ratio:16/10}}
        @media (prefers-reduced-motion:reduce){
          .bento-tile,.bento-tile__media img,.bento-tile__media::before,.bento-tile::after{transition:none!important}
          .bento-tile{transform:none!important}}
      </style>
      <script>
        (() => {
          const tiles=document.querySelectorAll('.bento .bento-tile');
          if(matchMedia('(prefers-reduced-motion: reduce)').matches||!matchMedia('(pointer:fine)').matches)return;
          const MAX=6;
          tiles.forEach(tile=>{
            let raf;
            tile.addEventListener('pointermove',ev=>{
              const r=tile.getBoundingClientRect();
              const px=(ev.clientX-r.left)/r.width-.5, py=(ev.clientY-r.top)/r.height-.5;
              cancelAnimationFrame(raf);
              raf=requestAnimationFrame(()=>{tile.style.transform=`rotateX(${(-py*MAX).toFixed(2)}deg) rotateY(${(px*MAX).toFixed(2)}deg)`});
            });
            tile.addEventListener('pointerleave',()=>{cancelAnimationFrame(raf);tile.style.transform=''});
          });
        })();
      </script>

      <!-- Specs -->
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--s3);">
        <?php
        $specs = [
          ['M19 17H5a2 2 0 0 0-2 2v1h18v-1a2 2 0 0 0-2-2ZM12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z', 'Capacité', 'Berline 1 à 4 passagers, van jusqu\'à 7'],
          ['M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24A2.5 2.5 0 0 1 9.5 2ZM14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24A2.5 2.5 0 0 0 14.5 2Z', 'Confort', 'Sièges cuir, climatisation, vitres teintées'],
          ['M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0M12 20h.01', 'Connectivité', 'Chargeur USB, WiFi, eau minérale offerte'],
          ['M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM2 12h20', 'Motorisation', 'Hybride — CO₂ réduit, trajet silencieux'],
          ['M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z M9 22V12h6v10', 'Propreté', 'Nettoyage complet avant chaque prestation'],
          ['M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16', 'Bagages', 'Grand coffre — valises, poussettes, équipements'],
        ];
        foreach($specs as $i => $s): ?>
        <div class="card-hover reveal reveal-delay-<?= ($i%3)+1 ?>" style="background:var(--noir-2);border:1px solid rgba(201,168,76,.1);border-radius:var(--radius-lg);padding:var(--s3) var(--s4);display:flex;gap:var(--s3);align-items:flex-start;">
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
