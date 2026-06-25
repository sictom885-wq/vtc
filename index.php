<?php
$lang = 'fr';
$page = 'index';
$meta = [
  'title'     => 'AUDE VTC — Chauffeur Privé Carcassonne & Occitanie | Tarif Fixe 24h/7j',
  'desc'      => 'Chauffeur privé VTC à Carcassonne. Transferts aéroports (Toulouse, Montpellier, Perpignan…), gares, tourisme Occitanie. Mercedes hybride, tarif fixe, disponible 24h/7j.',
  'canonical' => 'https://www.audevtc.fr/',
];
include 'includes/header.php';
include 'includes/icons.php';
?>

<!-- ==================== HERO ==================== -->
<section id="hero">
  <div class="hero-bg"></div>

  <div class="container">
    <div class="hero-content">
      <span class="hero-tag">Chauffeur Privé · Carcassonne</span>

      <h1 class="hero-title">
        Votre trajet,<br>
        <strong>notre exigence.</strong>
      </h1>

      <p class="hero-desc">
        Mercedes hybride, chauffeur expérimenté, tarif connu à l'avance. Partout en Occitanie, 24h/7j, en français, anglais ou allemand.
      </p>

      <div class="hero-ctas">
        <a href="#reservation" class="btn btn-primary">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg>
          Demander un devis
        </a>
        <a href="tel:+33610082007" class="btn btn-outline">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5 2 2 0 0 1 3.6 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 18z"/></svg>
          06 10 08 20 07
        </a>
      </div>
    </div>
  </div>

  <!-- Badges confiance -->
  <div class="hero-trust">
    <div class="container">
      <div class="trust-item">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        Disponible 24h/7j
      </div>
      <div class="trust-divider"></div>
      <div class="trust-item">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Tarif fixe garanti
      </div>
      <div class="trust-divider"></div>
      <div class="trust-item">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 17H5a2 2 0 0 0-2 2v1h18v-1a2 2 0 0 0-2-2Z"/><path d="M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/></svg>
        Mercedes hybride
      </div>
      <div class="trust-divider"></div>
      <div class="trust-item">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg>
        FR · EN · DE
      </div>
    </div>
  </div>
</section>

<!-- ==================== FORMULAIRE RÉSERVATION ==================== -->
<section id="reservation">
  <div class="container">
    <div class="form-resa reveal">
      <div class="form-resa-header">
        <span class="eyebrow">Réservation</span>
        <h2 class="section-title" style="font-size:1.8rem;">Estimez votre trajet</h2>
        <p class="lead" style="font-size:.9rem;">Remplissez le formulaire, nous vous répondons sous 2h.</p>
      </div>

      <form id="form-reservation" action="contact.php" method="POST">
        <div class="form-grid">
          <div class="form-group">
            <label for="depart">Départ</label>
            <input type="text" id="depart" name="depart" placeholder="Adresse ou ville de départ" required>
          </div>
          <div class="form-group">
            <label for="arrivee">Arrivée</label>
            <input type="text" id="arrivee" name="arrivee" placeholder="Adresse, aéroport, gare…" required>
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>
          </div>
          <div class="form-group">
            <label for="heure">Heure de prise en charge</label>
            <input type="time" id="heure" name="heure" required>
          </div>
          <div class="form-group">
            <label for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone" placeholder="+33 6 XX XX XX XX" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="votre@email.com" required>
          </div>
          <div class="form-group" style="justify-content:flex-end;padding-top:1.5rem;">
            <label class="form-check">
              <input type="checkbox" name="allerretour" value="1">
              Aller / Retour
            </label>
          </div>
          <div class="form-group full">
            <label for="message">Informations complémentaires</label>
            <textarea id="message" name="message" rows="3" placeholder="Nombre de passagers, bagages, vol/train, besoins particuliers…"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:var(--s3);width:100%;justify-content:center;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
          Envoyer ma demande
        </button>
      </form>
    </div>
  </div>
</section>

<!-- ==================== 4 ÉTAPES ==================== -->
<section id="etapes">
  <div class="container">
    <div class="etapes-grid">
      <div class="etape-item">
        <span class="etape-num">1</span>
        <span class="etape-texte">Je demande mon devis en ligne</span>
      </div>
      <div class="etape-divider"></div>
      <div class="etape-item">
        <span class="etape-num">2</span>
        <span class="etape-texte">Je reçois ma confirmation par email</span>
      </div>
      <div class="etape-divider"></div>
      <div class="etape-item">
        <span class="etape-num">3</span>
        <span class="etape-texte">Je règle à bord ou en ligne</span>
      </div>
      <div class="etape-divider"></div>
      <div class="etape-item">
        <span class="etape-num">4</span>
        <span class="etape-texte">Je monte à bord en toute sérénité</span>
      </div>
    </div>
  </div>
</section>

<!-- ==================== À PROPOS ==================== -->
<section id="apropos" class="section">
  <div class="container">
    <div class="apropos-inner">
      <div class="apropos-img-wrap reveal">
        <img src="/assets/images/chauffeur-hero.webp"
             alt="Michel Richard, chauffeur AUDE VTC devant sa Mercedes hybride"
             width="540" height="680" loading="lazy">
        <div class="apropos-badge">
          <span class="badge-num">+5</span>
          <span class="badge-label">ans d'expérience</span>
        </div>
      </div>

      <div class="apropos-content reveal reveal-delay-1">
        <span class="eyebrow">À Propos</span>
        <span class="gold-line"></span>
        <h2 class="section-title">AUDE VTC,<br>votre VTC <span>de confiance</span></h2>
        <p class="lead">
          Basé à Carcassonne, Michel Richard met son expertise du tourisme occitan au service de vos déplacements. Professionnel, discret, multilingue — chaque trajet est une expérience, pas un simple transport.
        </p>

        <div class="apropos-features">
          <div class="feat-item">
            <svg class="icon-or" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <div class="feat-text">
              <strong>Tarif fixe, sans surprise</strong>
              <span>Prix connu à la réservation, quelles que soient les conditions de trafic</span>
            </div>
          </div>
          <div class="feat-item">
            <svg class="icon-or" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <div class="feat-text">
              <strong>Disponible 24h/7j</strong>
              <span>Vols tôt, trains tardifs, événements nocturnes — nous sommes là</span>
            </div>
          </div>
          <div class="feat-item">
            <svg class="icon-or" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg>
            <div class="feat-text">
              <strong>Trilingue FR · EN · DE</strong>
              <span>Un accueil personnalisé pour chaque voyageur, quelle que soit sa nationalité</span>
            </div>
          </div>
          <div class="feat-item">
            <svg class="icon-or" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-4M2 5h11l4 4h3l2 2v6h-2"/><path d="M5 13V5h9"/></svg>
            <div class="feat-text">
              <strong>Mercedes Break Hybride</strong>
              <span>Confort premium, spacieux, climatisé — vos bagages voyagent avec vous</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== PRESTATIONS ==================== -->
<section id="prestations" class="section section--dark">
  <div class="container">
    <div class="reveal">
      <span class="eyebrow">Nos Services</span>
      <span class="gold-line"></span>
      <h2 class="section-title">Les Prestations <span>AUDE VTC</span></h2>
      <p class="lead">De l'aéroport à votre hôtel, de Carcassonne aux vignobles de Corbières — chaque déplacement mérite le meilleur.</p>
    </div>

    <div class="prestations-grid">

      <!-- Aéroports -->
      <div class="presta-card reveal reveal-delay-1">
        <div class="presta-img">
          <img src="/assets/images/card-aeroport.webp" alt="Transfert aéroport VTC Carcassonne" width="800" height="600" loading="lazy">
          <div class="presta-img-overlay"></div>
        </div>
        <div class="presta-body">
          <div class="icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19 4c-1 0-1.5.5-3.5 2.5L8 8 1.2 6.2C.7 6.1.3 6.6.5 7.1l2 5.3a1 1 0 0 0 .7.6l4.3 1-1 3.3a1 1 0 0 0 1.3 1.3l3.3-1 1 4.3a1 1 0 0 0 .6.7l5.3 2c.5.2 1-.2.9-.7Z"/></svg>
          </div>
          <h3 class="presta-title">Transferts Aéroports</h3>
          <p class="presta-desc">Prise en charge avec panneau nominatif, suivi de vol en temps réel. Aucun supplément en cas de retard.</p>
          <ul class="presta-list">
            <li>Aéroport de Carcassonne</li>
            <li>Toulouse Blagnac</li>
            <li>Montpellier · Perpignan</li>
            <li>Bordeaux Mérignac</li>
          </ul>
          <a href="/transferts-aeroport.php" class="presta-link">
            Voir les tarifs
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Gares -->
      <div class="presta-card reveal reveal-delay-2">
        <div class="presta-img">
          <img src="/assets/images/card-gare.webp" alt="Transfert gare VTC Carcassonne" width="800" height="600" loading="lazy">
          <div class="presta-img-overlay"></div>
        </div>
        <div class="presta-body">
          <div class="icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="16" rx="2"/><path d="M4 11h16"/><path d="M12 3v8"/><path d="m8 19-2 3"/><path d="m18 22-2-3"/><path d="M8 15h.01"/><path d="M16 15h.01"/></svg>
          </div>
          <h3 class="presta-title">Transferts Gares</h3>
          <p class="presta-desc">Accueil à la sortie du quai avec panneau à votre nom. Suivi du trafic SNCF, attente incluse en cas de retard.</p>
          <ul class="presta-list">
            <li>Gare de Carcassonne & Castelnaudary</li>
            <li>Toulouse Matabiau</li>
            <li>Montpellier · Sète · Béziers</li>
          </ul>
          <a href="/transferts-gare.php" class="presta-link">
            Voir les tarifs
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Tourisme & Événements -->
      <div class="presta-card reveal reveal-delay-3">
        <div class="presta-img">
          <img src="/assets/images/card-tourisme.webp" alt="Tourisme Occitanie VTC privé" width="800" height="600" loading="lazy">
          <div class="presta-img-overlay"></div>
        </div>
        <div class="presta-body">
          <div class="icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h3 class="presta-title">Tourisme & Événements</h3>
          <p class="presta-desc">Découvrez l'Occitanie à votre rythme : Cité de Carcassonne, Canal du Midi, domaines viticoles, mariages, séminaires.</p>
          <ul class="presta-list">
            <li>Circuits touristiques sur mesure</li>
            <li>Mariages & baptêmes</li>
            <li>Congrès & séminaires</li>
            <li>Mise à disposition à la journée</li>
          </ul>
          <a href="/tourisme-occitanie.php" class="presta-link">
            Découvrir
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==================== TARIFS MISE À DISPO ==================== -->
<section id="tarifs-dispo" class="section">
  <div class="container">
    <div class="reveal">
      <span class="eyebrow">Mise à Disposition</span>
      <span class="gold-line"></span>
      <h2 class="section-title">Tarifs <span>transparents</span></h2>
      <p class="lead">Prix fixes incluant le carburant, les péages et l'attente. Aucune surprise à l'arrivée.</p>
    </div>

    <div class="tarifs-grid">
      <div class="tarif-card reveal reveal-delay-1">
        <span class="tarif-duree">1 Heure</span>
        <div class="tarif-prix">35€</div>
        <div class="tarif-km">jusqu'à 30 km</div>
      </div>
      <div class="tarif-card featured reveal reveal-delay-2">
        <span class="tarif-duree">Demi-journée</span>
        <div class="tarif-prix">150€</div>
        <div class="tarif-km">jusqu'à 120 km</div>
      </div>
      <div class="tarif-card reveal reveal-delay-3">
        <span class="tarif-duree">1 Journée</span>
        <div class="tarif-prix">250€</div>
        <div class="tarif-km">jusqu'à 240 km</div>
      </div>
      <div class="tarif-card reveal">
        <span class="tarif-duree">2 Jours</span>
        <div class="tarif-prix">400€</div>
        <div class="tarif-km">jusqu'à 480 km</div>
      </div>
    </div>

    <div style="text-align:center;margin-top:var(--s6);">
      <a href="/tarifs.php" class="btn btn-outline">Voir tous les tarifs</a>
    </div>
  </div>
</section>

<!-- ==================== AVIS GOOGLE ==================== -->
<section id="avis" class="section section--dark">
  <div class="container">
    <div class="avis-header">
      <div>
        <span class="eyebrow">Avis Clients</span>
        <span class="gold-line"></span>
        <h2 class="section-title">Nos clients <span>recommandent</span></h2>
      </div>
      <div class="avis-score reveal">
        <div>
          <div class="avis-note">5.0</div>
          <div class="avis-stars">★★★★★</div>
          <div class="avis-count">Basé sur 16 avis Google</div>
        </div>
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z" fill="#4285F4"/><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
      </div>
    </div>

    <div class="avis-slider">
      <div class="avis-card reveal reveal-delay-1">
        <div class="avis-card-stars">★★★★★</div>
        <p class="avis-card-text">"Fantastic service to and from the airport. On time, beautiful car, water provided and lots of interesting details on where to visit from Michael. Will be using again on our next visit to France."</p>
        <div class="avis-card-author">
          <div class="avis-avatar">A</div>
          <div>
            <div class="avis-name">Anne Hodgins</div>
            <div class="avis-date">Juin 2025 · Google</div>
          </div>
        </div>
      </div>

      <div class="avis-card reveal reveal-delay-2">
        <div class="avis-card-stars">★★★★★</div>
        <p class="avis-card-text">"J'ai fait appel à Michel dans le cadre d'un mariage organisé dans l'Aude afin d'assurer les allers et retours des convives durant le jour et la nuit. Service irréprochable, ponctuel et professionnel."</p>
        <div class="avis-card-author">
          <div class="avis-avatar">C</div>
          <div>
            <div class="avis-name">C. Hohm</div>
            <div class="avis-date">Juillet 2025 · Google</div>
          </div>
        </div>
      </div>

      <div class="avis-card reveal reveal-delay-3">
        <div class="avis-card-stars">★★★★★</div>
        <p class="avis-card-text">"Super service, ponctuel et connaisseur de la région. Nous sommes ravies de faire le trajet Carcassonne–Toulouse avec ma petite famille. Conduite safe et agréable, je recommande vivement !"</p>
        <div class="avis-card-author">
          <div class="avis-avatar">M</div>
          <div>
            <div class="avis-name">Marie-Claire</div>
            <div class="avis-date">Mai 2025 · Google</div>
          </div>
        </div>
      </div>
    </div>

    <div class="avis-cta-wrap reveal">
      <a href="https://g.page/r/VOTRE-LIEN-GOOGLE/review" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
        Laisser un avis Google
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
