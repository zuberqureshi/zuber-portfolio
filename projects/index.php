<?php
$zq_active = 'projects';
require dirname(__DIR__) . '/includes/zq-boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects | Zuber Qureshi</title>
  <meta name="description" content="Featured projects by Zuber Qureshi — Sushain Healthcare, T-Mobile, Lava Mobiles, Avnet, Canverse Web3, and mobile applications.">
  <link rel="canonical" href="https://zuberqureshi.com/projects/">
  <link href="<?= htmlspecialchars(zq_asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" rel="icon">
  <meta property="og:title" content="Projects | Zuber Qureshi">
  <meta property="og:image" content="https://zuberqureshi.com/assets/img/zuber-profile-photo.jpg">
  <meta property="og:url" content="https://zuberqureshi.com/projects/">
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
        <p class="eyebrow">Projects</p>
        <h1>Featured work</h1>
        <p class="lead">Selected professional products and platforms — descriptions preserved from the existing site.</p>
      </div>
    </section>

    <section class="section" style="padding-top:0">
      <div class="container grid-3">
        <article class="project-card reveal">
          <img src="<?= htmlspecialchars(zq_asset('img/brands/png2jpg/sunshine.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Sushain Healthcare">
          <div class="project-body">
            <h3>Sushain Healthcare Platform</h3>
            <p>Comprehensive healthcare platform with 2000+ doctors, 25000+ products, and 100+ Panchkarma centers. Led 15+ member development team.</p>
            <div class="skill-tags"><span class="skill-tag">React Native</span><span class="skill-tag">Node.js</span><span class="skill-tag">PHP</span><span class="skill-tag">Leadership</span></div>
          </div>
        </article>
        <article class="project-card reveal">
          <img src="<?= htmlspecialchars(zq_asset('img/brands/png2jpg/T-mobile.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="T-Mobile">
          <div class="project-body">
            <h3>T-Mobile Solutions</h3>
            <p>Delivered scalable solutions for T-Mobile's telecommunications platform, focusing on performance optimization and user experience.</p>
            <div class="skill-tags"><span class="skill-tag">React.js</span><span class="skill-tag">Node.js</span><span class="skill-tag">APIs</span></div>
          </div>
        </article>
        <article class="project-card reveal">
          <img src="<?= htmlspecialchars(zq_asset('img/brands/lava.png'), ENT_QUOTES, 'UTF-8') ?>" alt="Lava Mobiles">
          <div class="project-body">
            <h3>Lava Mobiles Platform</h3>
            <p>Built mobile technology solutions for Lava Mobiles, including e-commerce platform and customer management systems.</p>
            <div class="skill-tags"><span class="skill-tag">PHP</span><span class="skill-tag">React.js</span><span class="skill-tag">E-commerce</span></div>
          </div>
        </article>
        <article class="project-card reveal">
          <img src="<?= htmlspecialchars(zq_asset('img/brands/png2jpg/avnto-removebg-preview.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Avnet">
          <div class="project-body">
            <h3>Avnet Technology Solutions</h3>
            <p>Developed technology solutions for Avnet's platform, focusing on scalability and integration with existing systems.</p>
            <div class="skill-tags"><span class="skill-tag">Node.js</span><span class="skill-tag">Microservices</span><span class="skill-tag">Integration</span></div>
          </div>
        </article>
        <article class="project-card reveal">
          <img src="<?= htmlspecialchars(zq_asset('img/brands/png2jpg/darshansankh.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Canverse">
          <div class="project-body">
            <h3>Canverse — Web3 Platform</h3>
            <p>Built Web3 applications including smart contracts and dApps. Created RESTful APIs to connect with blockchain networks.</p>
            <div class="skill-tags"><span class="skill-tag">Blockchain</span><span class="skill-tag">Solidity</span><span class="skill-tag">Web3</span></div>
          </div>
        </article>
        <article class="project-card reveal">
          <img src="<?= htmlspecialchars(zq_asset('img/alpha.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Mobile Apps">
          <div class="project-body">
            <h3>Mobile Applications</h3>
            <p>Developed multiple successful mobile applications including Alpha Launcher, ARC Launcher, and Ares Launcher with millions of downloads.</p>
            <div class="skill-tags"><span class="skill-tag">Android</span><span class="skill-tag">Java</span><span class="skill-tag">Kotlin</span></div>
          </div>
        </article>
      </div>
    </section>
  </main>
<?php require ZQ_INCLUDES . '/footer.php'; ?>
</body>
</html>
