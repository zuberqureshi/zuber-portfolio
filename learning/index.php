<?php
$zq_active = 'learning';
require dirname(__DIR__) . '/includes/zq-boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning with Zuber | AI Engineering Programs & Fellowship</title>
  <meta name="description" content="Learning with Zuber — practical AI education. Choose India's 100 AI Builders Fellowship (free) or the AI Engineering Career Program (paid).">
  <link rel="canonical" href="https://zuberqureshi.com/learning/">
  <link href="<?= htmlspecialchars(zq_asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" rel="icon">
  <meta property="og:title" content="Learning with Zuber | AI Engineering Programs & Fellowship">
  <meta property="og:description" content="Learn. Build. Launch. Practical AI education for the next generation of engineers.">
  <meta property="og:image" content="https://zuberqureshi.com/assets/img/zuber-profile-photo.jpg">
  <meta property="og:url" content="https://zuberqureshi.com/learning/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('vendor/bootstrap-icons/bootstrap-icons.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('css/zq-site.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('css/zq-fellowship.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DNRNXRES2Q"></script>
  <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-DNRNXRES2Q');</script>
</head>
<body class="theme-light page-program">
<?php require ZQ_INCLUDES . '/nav.php'; ?>

<main>
    <section class="lwz-hub-hero">
      <div class="container hero-anim" style="max-width:820px;margin-inline:auto">
        <p class="lwz-brand">Learning with Zuber</p>
        <h1>Learn. Build. <span class="fq-accent">Launch.</span></h1>
        <p class="lead">Practical AI education for the next generation of engineers. Move beyond theory and build real-world AI products.</p>
        <div class="chip-row" style="justify-content:center">
          <span class="chip"><i class="bi bi-broadcast"></i> Live classes</span>
          <span class="chip"><i class="bi bi-code-slash"></i> Real projects</span>
          <span class="chip"><i class="bi bi-person-check"></i> Mentorship</span>
          <span class="chip"><i class="bi bi-rocket-takeoff"></i> Portfolio-ready</span>
        </div>
        <p style="margin-top:1.1rem;font-weight:700;color:rgba(255,255,255,.9)">Two clear ways to learn — choose the path that fits you.</p>
      </div>
    </section>

    <section class="section" style="padding-top:1.25rem;padding-bottom:2rem">
      <div class="container program-cards">
        <article class="program-card featured reveal">
          <span class="program-label free">Free National Fellowship</span>
          <h2 style="font-size:1.45rem">India's 100 AI Builders Fellowship</h2>
          <p>A selective, six-month fellowship for 100 motivated engineering students across India.</p>
          <ul>
            <li>100 selected students · 6 months / 24 weeks</li>
            <li>100% free tuition · 3 live classes / week</li>
            <li>Projects, mentorship &amp; industry sessions</li>
            <li>Certificate based on eligibility</li>
            <li>Internship opportunities for selected performers (not guaranteed)</li>
          </ul>
          <div class="btn-row" style="margin-top:1rem;flex-wrap:wrap;gap:.65rem">
            <a class="btn btn-lwz" href="<?= htmlspecialchars(zq_url('learning/fellowship/'), ENT_QUOTES, 'UTF-8') ?>">Explore Free Fellowship</a>
            <a class="btn btn-ghost-dark" href="<?= htmlspecialchars(zq_url('learning/fellowship/curriculum/'), ENT_QUOTES, 'UTF-8') ?>">Full Curriculum</a>
          </div>
        </article>

        <article class="program-card reveal" style="--d:80ms">
          <span class="program-label paid">Paid Career Program</span>
          <h2 style="font-size:1.45rem">AI Engineering Career Program</h2>
          <p>Structured learning for practical software + AI skills, projects and career preparation.</p>
          <ul>
            <li>JavaScript / TypeScript full-stack</li>
            <li>LLMs, RAG, agents, LangGraph, MCP</li>
            <li>Real-world projects &amp; deployment</li>
            <li>Mentorship and portfolio focus</li>
            <li>Separate enrollment from fellowship</li>
          </ul>
          <div class="btn-row" style="margin-top:1rem;flex-wrap:wrap;gap:.65rem">
            <a class="btn btn-ghost-dark" href="<?= htmlspecialchars(zq_url('learning/ai-engineering-career-program/'), ENT_QUOTES, 'UTF-8') ?>">Explore Career Program</a>
            <a class="btn btn-lwz" href="<?= htmlspecialchars(zq_url('learning/ai-engineering-career-program/curriculum/'), ENT_QUOTES, 'UTF-8') ?>">Full Curriculum</a>
          </div>
        </article>
      </div>
    </section>

    <section class="section fq-dark" style="padding-top:2.5rem;padding-bottom:2.5rem">
      <div class="container">
        <div class="section-head center reveal">
          <p class="eyebrow">Compare paths</p>
          <h2>Which program is right for you?</h2>
        </div>
        <div class="grid-2">
          <article class="compare-card reveal">
            <h3>Choose the Free Fellowship if…</h3>
            <p>You are an undergraduate engineering student in India, want a selective national cohort, can commit six months, and prefer tuition-free assessment-based selection.</p>
          </article>
          <article class="compare-card reveal" style="--d:80ms">
            <h3>Choose the Career Program if…</h3>
            <p>You want a structured paid track focused on career preparation, portfolio deployment, and practical AI engineering — with a distinct enrollment process.</p>
          </article>
        </div>
        <p class="disclaimer reveal" style="margin-top:1.25rem;background:rgba(255,107,0,.08);border-color:rgba(255,107,0,.3);color:rgba(255,255,255,.8)">Both programs are separate. Admission to one does not imply admission to the other.</p>
      </div>
    </section>

    <section class="section" style="padding-top:2rem">
      <div class="container">
        <div class="final-cta reveal" style="background:linear-gradient(135deg,#07111f 0%,#13243f 45%,#1d4ed8 100%)">
          <h2>Stop watching tutorials. Start building.</h2>
          <p class="lead">Pick your path — free fellowship or paid career program.</p>
          <div class="btn-row" style="justify-content:center">
            <a class="btn btn-outline-light" href="<?= htmlspecialchars(zq_url('learning/fellowship/'), ENT_QUOTES, 'UTF-8') ?>">AI Builders Fellowship</a>
            <a class="btn btn-lwz" href="<?= htmlspecialchars(zq_url('learning/ai-engineering-career-program/'), ENT_QUOTES, 'UTF-8') ?>">Career Program</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="fq-sticky-bar" aria-label="Quick programs">
    <a class="btn btn-ghost-dark" href="<?= htmlspecialchars(zq_url('learning/fellowship/'), ENT_QUOTES, 'UTF-8') ?>" style="background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.25)">Fellowship</a>
    <a class="btn btn-lwz" href="<?= htmlspecialchars(zq_url('learning/ai-engineering-career-program/'), ENT_QUOTES, 'UTF-8') ?>">Career</a>
  </div>
<?php require ZQ_INCLUDES . '/footer.php'; ?>
</body>
</html>
