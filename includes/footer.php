<?php
/**
 * AUDE VTC — Footer include
 * Variables attendues : $lang, $t (tableau traductions nav)
 */
$year = date('Y');
?>

<footer id="footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Colonne Brand -->
      <div class="footer-brand">
        <a href="/<?= $prefix ?>" class="logo">
          <span class="logo-name">AUDE <span>VTC</span></span>
          <span class="logo-sub">Chauffeur Privé · Occitanie</span>
        </a>
        <p class="footer-desc">
          Votre chauffeur privé haut de gamme à Carcassonne et en Occitanie. Ponctualité, discrétion et confort à bord d'une Mercedes hybride.
        </p>
        <div class="footer-contact-list">
          <a href="tel:+33610082007">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5 2 2 0 0 1 3.6 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 18z"/></svg>
            06 10 08 20 07
          </a>
          <a href="mailto:contact@audevtc.fr">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            contact@audevtc.fr
          </a>
        </div>
      </div>

      <!-- Services -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul class="footer-links">
          <li><a href="/transferts-aeroport.php">Transferts Aéroport</a></li>
          <li><a href="/transferts-gare.php">Transferts Gare</a></li>
          <li><a href="/tourisme-occitanie.php">Tourisme Occitanie</a></li>
          <li><a href="/evenements.php">Événements & Pro</a></li>
          <li><a href="/tarifs.php">Tarifs</a></li>
        </ul>
      </div>

      <!-- Destinations -->
      <div class="footer-col">
        <h4>Destinations</h4>
        <ul class="footer-links">
          <li><a href="#">Toulouse Blagnac</a></li>
          <li><a href="#">Aéroport Carcassonne</a></li>
          <li><a href="#">Montpellier</a></li>
          <li><a href="#">Perpignan</a></li>
          <li><a href="#">Bordeaux Mérignac</a></li>
        </ul>
      </div>

      <!-- Légal -->
      <div class="footer-col">
        <h4>Informations</h4>
        <ul class="footer-links">
          <li><a href="/a-propos.php">À Propos</a></li>
          <li><a href="/contact.php">Contact</a></li>
          <li><a href="/mentions-legales.php">Mentions Légales</a></li>
          <li><a href="/politique-confidentialite.php">Confidentialité</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© <?= $year ?> AUDE VTC · Occitanie in Private · Tous droits réservés</p>
      <div style="display:flex;gap:1.5rem;align-items:center;">
        <a href="/mentions-legales.php">Mentions légales</a>
        <a href="/politique-confidentialite.php">Confidentialité</a>
        <span style="color:var(--gris-2);">Réalisé par <a href="https://sicilio.digital" target="_blank" rel="noopener" style="color:var(--or);">Sicilio Digital</a></span>
      </div>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
