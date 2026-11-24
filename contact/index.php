<?php
$zq_active = 'contact';
require dirname(__DIR__) . '/includes/zq-boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Zuber Qureshi</title>
  <meta name="description" content="Contact Zuber Qureshi for collaborations with startups, technology companies, colleges, industry experts, and aspiring developers.">
  <link rel="canonical" href="https://zuberqureshi.com/contact/">
  <link href="<?= htmlspecialchars(zq_asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" rel="icon">
  <meta property="og:title" content="Contact | Zuber Qureshi">
  <meta property="og:image" content="https://zuberqureshi.com/assets/img/zuber-profile-photo.jpg">
  <meta property="og:url" content="https://zuberqureshi.com/contact/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('vendor/bootstrap-icons/bootstrap-icons.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('css/zq-site.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DNRNXRES2Q"></script>
  <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-DNRNXRES2Q');</script>
</head>
<body>
<?php require ZQ_INCLUDES . '/nav.php'; ?>

<main>
    <section class="page-hero-simple">
      <div class="container">
        <p class="eyebrow">Contact</p>
        <h1>Let's connect</h1>
        <p class="lead">For founders, technology companies, colleges and universities, industry experts, and aspiring developers.</p>
      </div>
    </section>

    <section class="section" style="padding-top:0">
      <div class="container contact-grid">
        <div class="surface-card reveal">
          <h3>Contact information</h3>
          <div class="contact-item">
            <div class="icon"><i class="bi bi-geo-alt"></i></div>
            <div><strong>Location</strong><br>Gwalior, Madhya Pradesh, India</div>
          </div>
          <div class="contact-item">
            <div class="icon"><i class="bi bi-telephone"></i></div>
            <div><strong>Phone</strong><br><a href="tel:+919039730708">+91 90397 30708</a></div>
          </div>
          <div class="contact-item">
            <div class="icon"><i class="bi bi-envelope"></i></div>
            <div><strong>Email</strong><br><a href="mailto:zuberqureshi95@gmail.com">zuberqureshi95@gmail.com</a></div>
          </div>
          <div class="contact-item">
            <div class="icon"><i class="bi bi-linkedin"></i></div>
            <div><strong>LinkedIn</strong><br><a href="https://www.linkedin.com/in/zuberqureshi95/" target="_blank" rel="noopener">linkedin.com/in/zuberqureshi95</a></div>
          </div>
          <div class="btn-row">
            <a class="btn btn-primary" href="https://wa.me/919039730708" target="_blank" rel="noopener">WhatsApp</a>
            <a class="btn btn-secondary" href="<?= htmlspecialchars(zq_url('learning/'), ENT_QUOTES, 'UTF-8') ?>">Learning Programs</a>
          </div>
        </div>

        <div class="surface-card reveal">
          <h3>Send a message</h3>
          <form data-zq-contact-form>
            <div class="form-group">
              <label for="name">Name</label>
              <input id="name" name="name" type="text" required autocomplete="name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" required autocomplete="email">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input id="subject" name="subject" type="text" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit"><i class="bi bi-send"></i> Send Message</button>
          </form>
        </div>
      </div>
    </section>
  </main>
<?php require ZQ_INCLUDES . '/footer.php'; ?>
</body>
</html>
