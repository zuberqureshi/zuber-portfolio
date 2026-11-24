<?php
$zq_active = 'about';
require dirname(__DIR__) . '/includes/zq-boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Zuber Qureshi | Tech Founder, CTO & AI Educator</title>
  <meta name="description" content="About Zuber Qureshi — software engineer, technology leader and startup founder focused on scalable products, engineering leadership and AI education.">
  <link rel="canonical" href="https://zuberqureshi.com/about/">
  <link href="<?= htmlspecialchars(zq_asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" rel="icon">
  <meta property="og:title" content="About Zuber Qureshi">
  <meta property="og:description" content="Technology founder, CTO and AI educator.">
  <meta property="og:image" content="https://zuberqureshi.com/assets/img/zuber-profile-photo.jpg">
  <meta property="og:url" content="https://zuberqureshi.com/about/">
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
      <div class="container grid-2" style="align-items:center">
        <div>
          <p class="eyebrow">About</p>
          <h1>Building products. Leading people. Teaching builders.</h1>
          <p class="lead">I'm a technology leader, software engineer and founder focused on scalable digital products, engineering teams, and the future of AI — without reducing my identity to “course instructor.”</p>
        </div>
        <div>
          <img src="<?= htmlspecialchars(zq_asset('img/zuber-profile-photo.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Zuber Qureshi" style="border-radius:28px;width:min(100%,420px);margin-left:auto;aspect-ratio:4/5;object-fit:cover">
        </div>
      </div>
    </section>

    <section class="section" style="background:var(--zq-bg-2)">
      <div class="container">
        <div class="section-head reveal">
          <h2>The journey</h2>
          <p class="lead">From hands-on software development to leading platform teams and founding technology initiatives — with a growing commitment to mentoring India's next AI engineers.</p>
        </div>
        <div class="grid-2">
          <article class="surface-card reveal">
            <h3>Engineer first</h3>
            <p style="color:var(--zq-muted);margin:0">I started by shipping PHP, React, and API-driven products — learning how performance, product clarity, and delivery discipline compound over years.</p>
          </article>
          <article class="surface-card reveal">
            <h3>Then leadership</h3>
            <p style="color:var(--zq-muted);margin:0">At AppTech Solutions and later Sushain Healthcare, the work expanded into team leadership, architecture, mentoring, and aligning technology with business outcomes.</p>
          </article>
          <article class="surface-card reveal">
            <h3>Builder of products</h3>
            <p style="color:var(--zq-muted);margin:0">Across healthcare platforms, brand systems, mobile apps, and Web3 products, the constant thread is building things people actually use.</p>
          </article>
          <article class="surface-card reveal">
            <h3>Educator by practice</h3>
            <p style="color:var(--zq-muted);margin:0">Learning with Zuber exists to pass on practical AI engineering — projects, systems thinking, and real deployment — not tutorial theater.</p>
          </article>
        </div>
        <div class="btn-row reveal" style="margin-top:2rem">
          <a class="btn btn-primary" href="<?= htmlspecialchars(zq_url('experience/'), ENT_QUOTES, 'UTF-8') ?>">See Experience</a>
          <a class="btn btn-secondary" href="<?= htmlspecialchars(zq_url('learning/'), ENT_QUOTES, 'UTF-8') ?>">Learning with Zuber</a>
        </div>
      </div>
    </section>
  </main>
<?php require ZQ_INCLUDES . '/footer.php'; ?>
</body>
</html>
