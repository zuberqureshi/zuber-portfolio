<?php
$zq_active = 'experience';
require dirname(__DIR__) . '/includes/zq-boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experience | Zuber Qureshi</title>
  <meta name="description" content="Professional experience of Zuber Qureshi — Sushain Healthcare, AppTech Solutions, and brand work including T-Mobile, Lava Mobiles, and Avnet.">
  <link rel="canonical" href="https://zuberqureshi.com/experience/">
  <link href="<?= htmlspecialchars(zq_asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" rel="icon">
  <meta property="og:title" content="Experience | Zuber Qureshi">
  <meta property="og:image" content="https://zuberqureshi.com/assets/img/zuber-profile-photo.jpg">
  <meta property="og:url" content="https://zuberqureshi.com/experience/">
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
        <p class="eyebrow">Experience</p>
        <h1>Professional journey</h1>
        <p class="lead">Verified roles and dates from the existing site — progressive growth from developer to technology leader.</p>
      </div>
    </section>

    <section class="section" style="padding-top:0">
      <div class="container">
        <div class="timeline">
          <article class="timeline-item surface-card reveal">
            <div class="timeline-meta"><span class="company">Sushain Healthcare</span><span>2022 – Present</span></div>
            <h3>GM-Head of Platforms and Innovation</h3>
            <p style="color:var(--zq-muted)">Promoted from Project Manager &amp; Technical Lead to GM-Head of Platforms and Innovation. Leading a team of 15+ developers in architecting and building a comprehensive healthcare platform from scratch. Established technical standards, mentored junior developers, and collaborated with C-level executives to translate business requirements into technical specifications.</p>
          </article>
          <article class="timeline-item surface-card reveal">
            <div class="timeline-meta"><span class="company">AppTech Solutions</span><span>2019 – 2021</span></div>
            <h3>Senior Software Developer &amp; Team Lead</h3>
            <p style="color:var(--zq-muted)">Led technical teams for major brand projects including T-Mobile, Lava Mobiles, and Avnet. Architected Web3 applications, mentored junior developers, and implemented modern development practices including CI/CD pipelines and agile methodologies.</p>
          </article>
          <article class="timeline-item surface-card reveal">
            <div class="timeline-meta"><span class="company">AppTech Solutions</span><span>2018 – 2019</span></div>
            <h3>Software Developer</h3>
            <p style="color:var(--zq-muted)">Developed and maintained PHP-based web applications with focus on performance optimization. Built RESTful APIs for mobile applications and engineered React.js admin dashboards for client projects.</p>
          </article>
        </div>
      </div>
    </section>
  </main>
<?php require ZQ_INCLUDES . '/footer.php'; ?>
</body>
</html>
