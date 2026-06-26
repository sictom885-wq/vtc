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
        <a href="/<?= $prefix ?>" class="logo" aria-label="AUDE VTC — Accueil">
          <img src="/assets/images/logo-audevtc-lg.webp" alt="AUDE VTC — Chauffeur Privé Carcassonne" width="90" height="90" loading="lazy" decoding="async" style="display:block;">
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
          <li><a href="/destinations/vtc-carcassonne-toulouse-blagnac.php">Toulouse Blagnac</a></li>
          <li><a href="/destinations/vtc-aeroport-carcassonne.php">Aéroport Carcassonne</a></li>
          <li><a href="/destinations/vtc-carcassonne-montpellier.php">Montpellier</a></li>
          <li><a href="/destinations/vtc-carcassonne-perpignan.php">Perpignan</a></li>
          <li><a href="/destinations/vtc-carcassonne-bordeaux.php">Bordeaux Mérignac</a></li>
        </ul>
      </div>

      <!-- Légal -->
      <div class="footer-col">
        <h4>Informations</h4>
        <ul class="footer-links">
          <li><a href="/a-propos.php">À Propos</a></li>
          <li><a href="/contact.php">Contact</a></li>
          <li><a href="/blog/">Blog & Conseils</a></li>
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


<!-- Bouton WhatsApp fixe -->
<a href="https://wa.me/33610082007?text=Bonjour%2C%20je%20souhaite%20r%C3%A9server%20un%20transfert%20VTC%20avec%20AUDE%20VTC."
   class="whatsapp-btn"
   target="_blank"
   rel="noopener"
   aria-label="Contacter AUDE VTC sur WhatsApp">
  <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
  </svg>
</a>

<script src="/assets/js/main.js"></script>
</body>
</html>
