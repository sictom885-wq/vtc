<?php
/**
 * AUDE VTC — Contact & traitement formulaire
 */

$lang  = 'fr';
$page  = 'contact';
$sent  = false;
$error = false;

/* === TRAITEMENT POST === */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $depart     = trim($_POST['depart']     ?? '');
  $arrivee    = trim($_POST['arrivee']    ?? '');
  $date       = trim($_POST['date']       ?? '');
  $heure      = trim($_POST['heure']      ?? '');
  $allerretour = isset($_POST['allerretour']) ? 'Oui' : 'Non';
  $nom        = trim($_POST['nom']        ?? '');
  $telephone  = trim($_POST['telephone']  ?? '');
  $email      = trim($_POST['email']      ?? '');
  $message    = trim($_POST['message']    ?? '');

  /* Validation basique */
  if ($nom && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $telephone) {

    $to      = 'contact@audevtc.fr';
    $subject = "Demande AUDE VTC — {$nom}";

    $body  = "Nouvelle demande de réservation depuis audevtc.fr\n\n";
    $body .= "--- TRAJET ---\n";
    $body .= "Départ  : {$depart}\n";
    $body .= "Arrivée : {$arrivee}\n";
    $body .= "Date    : {$date}\n";
    $body .= "Heure   : {$heure}\n";
    $body .= "A/R     : {$allerretour}\n\n";
    $body .= "--- CONTACT ---\n";
    $body .= "Nom     : {$nom}\n";
    $body .= "Tél     : {$telephone}\n";
    $body .= "Email   : {$email}\n\n";
    $body .= "--- MESSAGE ---\n{$message}\n";

    $headers  = "From: noreply@audevtc.fr\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $sent = mail($to, $subject, $body, $headers);
    if (!$sent) $error = true;

  } else {
    $error = true;
  }
}

$meta = [
  'title'     => 'Contact — AUDE VTC | Demande de réservation chauffeur privé Carcassonne',
  'desc'      => 'Contactez AUDE VTC pour réserver votre chauffeur privé à Carcassonne. Devis gratuit, réponse sous 2h. Disponible 24h/7j.',
  'canonical' => 'https://www.audevtc.fr/contact.php',
];
include 'includes/header.php';
include 'includes/icons.php';
?>

<main style="padding-top:160px;">

  <!-- PAGE HERO -->
  <section style="background:var(--noir-2);padding:var(--s12) 0 var(--s8);">
    <div class="container">
      <span class="eyebrow">Contact</span>
      <span class="gold-line"></span>
      <h1 class="section-title">Réservez votre <span>chauffeur privé</span></h1>
      <p class="lead">Réponse garantie sous 2 heures. Pour une urgence, appelez directement au <a href="tel:+33610082007" style="color:var(--or);">06 10 08 20 07</a>.</p>
    </div>
  </section>

  <!-- CONTENU -->
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 1.6fr;gap:var(--s8);align-items:start;">

        <!-- Infos contact -->
        <div class="reveal">
          <h2 style="font-family:var(--font-display);font-size:1.8rem;margin-bottom:var(--s4);">Informations</h2>

          <div style="display:flex;flex-direction:column;gap:var(--s3);">
            <div class="feat-item">
              <svg class="icon-or" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5 2 2 0 0 1 3.6 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 18z"/></svg>
              <div class="feat-text">
                <strong>Téléphone</strong>
                <span><a href="tel:+33610082007" style="color:var(--gris-1);">06 10 08 20 07</a></span>
              </div>
            </div>
            <div class="feat-item">
              <svg class="icon-or" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
              <div class="feat-text">
                <strong>Email</strong>
                <span><a href="mailto:contact@audevtc.fr" style="color:var(--gris-1);">contact@audevtc.fr</a></span>
              </div>
            </div>
            <div class="feat-item">
              <svg class="icon-or" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              <div class="feat-text">
                <strong>Zone de service</strong>
                <span>Carcassonne, Castelnaudary & toute l'Occitanie</span>
              </div>
            </div>
            <div class="feat-item">
              <svg class="icon-or" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <div class="feat-text">
                <strong>Disponibilité</strong>
                <span>24h/24 · 7j/7 · 365j/an</span>
              </div>
            </div>
          </div>

          <!-- Google Maps embed -->
          <div style="margin-top:var(--s6);border-radius:var(--radius-lg);overflow:hidden;border:1px solid rgba(201,168,76,.15);">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46499.14760345!2d2.3148!3d43.2121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ae372d44d2b6d3%3A0x9afe3741c0e1e12c!2sCarcassonne!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr"
              width="100%" height="220" style="display:block;border:none;filter:grayscale(100%) invert(90%) contrast(85%);"
              allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Localisation AUDE VTC Carcassonne">
            </iframe>
          </div>
        </div>

        <!-- Formulaire -->
        <div class="form-resa reveal reveal-delay-1">
          <?php if ($sent): ?>
            <div style="text-align:center;padding:var(--s8);">
              <div style="font-size:3rem;margin-bottom:var(--s3);">✅</div>
              <h2 style="font-family:var(--font-display);font-size:2rem;margin-bottom:var(--s2);">Message envoyé !</h2>
              <p style="color:var(--gris-1);">Merci <?= htmlspecialchars($nom) ?>. Nous vous répondons sous 2 heures.</p>
              <a href="/index.php" class="btn btn-primary" style="margin-top:var(--s4);">Retour à l'accueil</a>
            </div>
          <?php elseif ($error): ?>
            <div style="background:rgba(220,50,50,.1);border:1px solid rgba(220,50,50,.3);border-radius:var(--radius);padding:var(--s3);margin-bottom:var(--s3);color:#ff6b6b;font-size:.9rem;">
              ⚠️ Une erreur s'est produite. Vérifiez les champs ou appelez-nous directement.
            </div>
          <?php endif; ?>

          <?php if (!$sent): ?>
          <div class="form-resa-header">
            <span class="eyebrow">Formulaire de contact</span>
            <h2 style="font-size:1.8rem;margin-bottom:var(--s1);">Votre demande</h2>
          </div>

          <form method="POST" action="/contact.php">
            <div class="form-grid">
              <div class="form-group">
                <label for="depart">Départ</label>
                <input type="text" id="depart" name="depart" placeholder="Adresse, ville…" value="<?= htmlspecialchars($_POST['depart'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="arrivee">Arrivée</label>
                <input type="text" id="arrivee" name="arrivee" placeholder="Aéroport, gare, hôtel…" value="<?= htmlspecialchars($_POST['arrivee'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="date">Date souhaitée</label>
                <input type="date" id="date" name="date" value="<?= htmlspecialchars($_POST['date'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="heure">Heure de prise en charge</label>
                <input type="time" id="heure" name="heure" value="<?= htmlspecialchars($_POST['heure'] ?? '') ?>">
              </div>
              <div class="form-group" style="grid-column:1/-1;">
                <label class="form-check">
                  <input type="checkbox" name="allerretour" value="1" <?= isset($_POST['allerretour']) ? 'checked' : '' ?>>
                  Aller / Retour
                </label>
              </div>
              <div class="form-group">
                <label for="nom">Nom complet <span style="color:var(--or);">*</span></label>
                <input type="text" id="nom" name="nom" required value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="telephone">Téléphone <span style="color:var(--or);">*</span></label>
                <input type="tel" id="telephone" name="telephone" required value="<?= htmlspecialchars($_POST['telephone'] ?? '') ?>">
              </div>
              <div class="form-group full">
                <label for="email">Email <span style="color:var(--or);">*</span></label>
                <input type="email" id="email" name="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
              </div>
              <div class="form-group full">
                <label for="message">Votre message</label>
                <textarea id="message" name="message" rows="4" placeholder="Nombre de passagers, bagages, numéro de vol/train, besoins particuliers…"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:var(--s3);">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
              Envoyer ma demande
            </button>
            <p style="font-size:.75rem;color:var(--gris-2);margin-top:var(--s2);text-align:center;">
              * Champs obligatoires · Réponse sous 2h · Vos données ne sont pas revendues
            </p>
          </form>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
