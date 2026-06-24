<?php
$lang = 'en'; $prefix = 'en/';
include '../includes/i18n.php';
$t = vtc_t('en');
$sent = false; $error = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = trim($_POST['nom'] ?? ''); $email = trim($_POST['email'] ?? ''); $telephone = trim($_POST['telephone'] ?? '');
  if ($nom && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $telephone) {
    $body = "New booking request (EN)\n\nRoute: ".($_POST['depart']??'')." → ".($_POST['arrivee']??'')."\nDate: ".($_POST['date']??'')." ".($_POST['heure']??'')."\nName: $nom\nPhone: $telephone\nEmail: $email\nMessage: ".($_POST['message']??'');
    $sent = mail('contact@audevtc.fr', "Booking request AUDE VTC — $nom", $body, "From: noreply@audevtc.fr\r\nReply-To: $email\r\n");
    if (!$sent) $error = true;
  } else { $error = true; }
}
$meta = ['title'=>$t['meta_home_title'],'desc'=>$t['meta_home_desc'],'canonical'=>'https://www.audevtc.fr/en/contact.php'];
include '../includes/header.php';
?>
<main style="padding-top:160px;">
  <section style="background:var(--noir-2);padding:var(--s12) 0 var(--s8);">
    <div class="container">
      <span class="eyebrow">Contact</span><span class="gold-line"></span>
      <h1 class="section-title"><?= $t['contact_title'] ?> <span><?= $t['contact_title_em'] ?></span></h1>
      <p class="lead"><?= $t['contact_subtitle'] ?></p>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:700px;margin-inline:auto;">
      <div class="form-resa reveal">
        <?php if($sent): ?>
          <div style="text-align:center;padding:var(--s8);">
            <div style="font-size:3rem;margin-bottom:var(--s3);">✅</div>
            <h2 style="font-family:var(--font-display);font-size:2rem;margin-bottom:var(--s2);"><?= $t['contact_sent_title'] ?></h2>
            <p style="color:var(--gris-1);"><?= $t['contact_sent_desc'] ?></p>
            <a href="/en/" class="btn btn-primary" style="margin-top:var(--s4);"><?= $t['contact_back'] ?></a>
          </div>
        <?php else: ?>
          <?php if($error): ?><div style="background:rgba(220,50,50,.1);border:1px solid rgba(220,50,50,.3);border-radius:var(--radius);padding:var(--s3);margin-bottom:var(--s3);color:#ff6b6b;font-size:.9rem;">⚠️ <?= $t['contact_error'] ?></div><?php endif; ?>
          <div class="form-resa-header"><span class="eyebrow">Booking form</span><h2 style="font-size:1.8rem;margin-bottom:var(--s1);">Your request</h2></div>
          <form method="POST" action="/en/contact.php">
            <div class="form-grid">
              <div class="form-group"><label><?= $t['form_depart'] ?></label><input type="text" name="depart" placeholder="<?= $t['form_placeholder_depart'] ?>"></div>
              <div class="form-group"><label><?= $t['form_arrivee'] ?></label><input type="text" name="arrivee" placeholder="<?= $t['form_placeholder_arrivee'] ?>"></div>
              <div class="form-group"><label><?= $t['form_date'] ?></label><input type="date" name="date"></div>
              <div class="form-group"><label><?= $t['form_heure'] ?></label><input type="time" name="heure"></div>
              <div class="form-group"><label><?= $t['form_nom'] ?> *</label><input type="text" name="nom" required></div>
              <div class="form-group"><label><?= $t['form_telephone'] ?> *</label><input type="tel" name="telephone" required></div>
              <div class="form-group full"><label><?= $t['form_email'] ?> *</label><input type="email" name="email" required></div>
              <div class="form-group full"><label><?= $t['form_message'] ?></label><textarea name="message" rows="4" placeholder="<?= $t['form_placeholder_msg'] ?>"></textarea></div>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:var(--s3);"><?= $t['form_submit'] ?></button>
          </form>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php include '../includes/footer.php'; ?>
