<?php
$zq_active = 'career';
require dirname(__DIR__, 2) . '/includes/zq-boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI Engineering Career Program | Learning with Zuber</title>
  <meta name="description" content="6-month AI Engineering Career Program — GenAI, RAG, multi-agent systems, deployment and portfolio. Request a callback from Learning with Zuber.">
  <link rel="canonical" href="https://zuberqureshi.com/learning/ai-engineering-career-program/">
  <link href="<?= htmlspecialchars(zq_asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" rel="icon">
  <meta property="og:title" content="AI Engineering Career Program | Learning with Zuber">
  <meta property="og:description" content="Structured GenAI &amp; multi-agent learning for career-focused builders — projects, mentorship and portfolio.">
  <meta property="og:image" content="https://zuberqureshi.com/assets/img/zuber-profile-photo.jpg">
  <meta property="og:url" content="https://zuberqureshi.com/learning/ai-engineering-career-program/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('vendor/bootstrap-icons/bootstrap-icons.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('css/zq-site.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('css/zq-fellowship.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <link href="<?= htmlspecialchars(zq_asset('css/zq-curriculum.css'), ENT_QUOTES, 'UTF-8') ?>" rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DNRNXRES2Q"></script>
  <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-DNRNXRES2Q');</script>
</head>
<body class="theme-light page-program page-fellowship">
<?php require ZQ_INCLUDES . '/nav.php'; ?>

<main>
    <section class="fq-hero" id="top">
      <div class="container fq-hero-grid">
        <div class="hero-anim">
          <div class="fq-kicker"><i class="bi bi-briefcase-fill"></i> Paid Career Program · 6 months</div>
          <p class="lwz-brand" style="color:#7dd3fc;background:none;-webkit-text-fill-color:#7dd3fc;margin-bottom:.35rem">Learning with Zuber</p>
          <h1>Advanced Certification path in <span class="fq-accent">GenAI &amp; Multi-Agent Systems</span></h1>
          <p class="lead">Designed for professionals and serious builders who want to stand out in the AI job market — with an AI-infused curriculum, live mentorship and portfolio projects.</p>
          <div class="fq-points">
            <div class="fq-point"><i class="bi bi-check-circle-fill"></i><span>Master 20+ tools &amp; workflows — LLMs, RAG, agents, deploy</span></div>
            <div class="fq-point"><i class="bi bi-check-circle-fill"></i><span>Curriculum designed by a practicing founder / CTO</span></div>
            <div class="fq-point"><i class="bi bi-check-circle-fill"></i><span>Career-focused — resumes, GitHub &amp; interview readiness</span></div>
            <div class="fq-point"><i class="bi bi-check-circle-fill"></i><span>Separate paid path from the free fellowship</span></div>
          </div>
          <div class="fq-mini-stats">
            <div class="fq-mini-stat"><strong>6</strong><span>Months</span></div>
            <div class="fq-mini-stat"><strong>6</strong><span>Modules</span></div>
            <div class="fq-mini-stat"><strong>10+</strong><span>Projects</span></div>
            <div class="fq-mini-stat"><strong>Live</strong><span>Mentorship</span></div>
          </div>
          <div class="btn-row">
            <a class="btn btn-ghost-dark" href="curriculum/" style="background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.25)">Download full curriculum</a>
          </div>
        </div>

        <aside class="fq-form-card" id="enroll">
          <h3>Request a callback</h3>
          <p class="sub">Book a free counselling call — we’ll share batch, fees and admission steps.</p>
          <form data-zq-career-form>
            <div class="form-group">
              <label for="cp-name">Full name *</label>
              <input id="cp-name" name="name" type="text" required autocomplete="name" placeholder="Your name">
            </div>
            <div class="form-group">
              <label for="cp-email">Email *</label>
              <input id="cp-email" name="email" type="email" required autocomplete="email" placeholder="you@email.com">
            </div>
            <div class="form-group">
              <label for="cp-phone">Phone / WhatsApp *</label>
              <input id="cp-phone" name="phone" type="tel" required autocomplete="tel" placeholder="+91 XXXXX XXXXX">
            </div>
            <div class="form-group">
              <label for="cp-status">Experience *</label>
              <select id="cp-status" name="status" required>
                <option value="">Select</option>
                <option>Working professional — Technical roles</option>
                <option>Working professional — Non technical</option>
                <option>College student — Final year</option>
                <option>College student — 1st to pre-final year</option>
                <option>Career switcher / Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="cp-goal">Primary goal (optional)</label>
              <input id="cp-goal" name="goal" type="text" placeholder="e.g. AI engineering role / portfolio">
            </div>
            <button class="fq-submit" type="submit">Request a callback</button>
            <p class="fq-form-note"><i class="bi bi-info-circle"></i> <span data-zq-text="careerPrice">Pricing to be announced</span></p>
            <p class="fq-consent">I authorise Learning with Zuber to contact me with program updates via Email / SMS / WhatsApp / Call. Separate from the free fellowship.</p>
          </form>
        </aside>
      </div>
    </section>

    <div class="fq-trust">
      <div class="container">
        <div class="fq-trust-inner reveal">
          <div class="fq-trust-item"><i class="bi bi-calendar3"></i><div><strong>6 months</strong><span>Structured GenAI program</span></div></div>
          <div class="fq-trust-item"><i class="bi bi-cpu"></i><div><strong>AI-led curriculum</strong><span>Designed for builders</span></div></div>
          <div class="fq-trust-item"><i class="bi bi-briefcase"></i><div><strong>Career services</strong><span>Portfolio &amp; profile guidance</span></div></div>
        </div>
      </div>
    </div>

    <section class="section" style="background:#fff">
      <div class="container">
        <div class="section-head center reveal">
          <p class="eyebrow">Market reality</p>
          <h2>AI is impacting the job market <span class="fq-accent">rapidly</span></h2>
        </div>
        <div class="fq-impact">
          <article class="fq-impact-card reveal"><div class="num">70%</div><h3>Faster coding productivity</h3><p style="margin:0;color:var(--fq-muted)">AI tools significantly boost developer efficiency — when you know how to build with them.</p></article>
          <article class="fq-impact-card reveal"><div class="num">2.3M+</div><h3>AI jobs by 2027</h3><p style="margin:0;color:var(--fq-muted)">Rapid growth in AI-ready roles worldwide — portfolio builders stand out.</p></article>
          <article class="fq-impact-card reveal"><div class="num">53%</div><h3>Skill gap</h3><p style="margin:0;color:var(--fq-muted)">Employers struggle to find professionals who can ship GenAI systems.</p></article>
        </div>
        <div class="btn-row reveal" style="justify-content:center;margin-top:1.5rem">
          <a class="btn btn-lwz" href="curriculum/">Download full curriculum</a>
        </div>
      </div>
    </section>

    <section class="section fq-dark" id="why">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">Why this program</p>
          <h2>Why is this program <span class="fq-accent">right for you</span>?</h2>
          <p class="lead">Because GenAI is reshaping products — and recruiters want builders who can design features, integrate APIs and ship agents.</p>
        </div>
        <div class="cu-why-list" style="max-width:820px">
          <article class="cu-why-item reveal">
            <div class="cu-why-icon"><i class="bi bi-stars"></i></div>
            <div>
              <h3>Build real-world GenAI skills</h3>
              <p>Practical training in GenAI tools, RAG pipelines, LLMs and multi-agent systems for real business problems.</p>
            </div>
          </article>
          <article class="cu-why-item reveal">
            <div class="cu-why-icon"><i class="bi bi-kanban"></i></div>
            <div>
              <h3>Create a job-winning portfolio</h3>
              <p>10+ mentor-aligned projects you can demo — not toy notebooks alone.</p>
            </div>
          </article>
          <article class="cu-why-item reveal">
            <div class="cu-why-icon"><i class="bi bi-calendar-week"></i></div>
            <div>
              <h3>Learn without disrupting your work</h3>
              <p>Live classes and project sessions designed for working professionals and career switchers.</p>
            </div>
          </article>
          <article class="cu-why-item reveal">
            <div class="cu-why-icon"><i class="bi bi-person-video3"></i></div>
            <div>
              <h3>Mentorship that ships</h3>
              <p>Learn with a founder / CTO who builds products — not only teaches slides.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section" style="background:#fff" id="curriculum">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">Curriculum preview</p>
          <h2>A curriculum designed for the <span class="fq-accent">AI era</span></h2>
          <p class="lead">Learn AI skills through practice — build projects across RAG, agents and deployment.</p>
        </div>
        <div class="grid-2" style="margin-bottom:1.25rem">
          <article class="surface-card reveal">
            <h3 style="margin-top:0">Build 10+ AI-based projects</h3>
            <ul style="margin:0;padding-left:1.1rem;color:var(--fq-muted);display:grid;gap:.4rem">
              <li>AI Research Assistant</li>
              <li>PDF Knowledge / RAG Assistant</li>
              <li>Custom Agentic AI Ecosystem</li>
              <li>Smart Support Chatbot · Capstone deploy</li>
            </ul>
          </article>
          <article class="surface-card reveal">
            <h3 style="margin-top:0">Master industry-favourite tools</h3>
            <div class="skill-tags" style="margin-top:.75rem">
              <span class="skill-tag">LangChain</span>
              <span class="skill-tag">LangGraph</span>
              <span class="skill-tag">Vercel AI SDK</span>
              <span class="skill-tag">MCP</span>
              <span class="skill-tag">Node.js</span>
              <span class="skill-tag">pgvector</span>
              <span class="skill-tag">Docker</span>
              <span class="skill-tag">Next.js</span>
            </div>
          </article>
        </div>
        <div class="cu-journey">
          <article class="cu-month reveal"><span class="cu-month-badge">Month 1–2</span><h3>Foundations · GenAI · APIs</h3><ul><li>Software foundations + prompting</li><li>LLM APIs, embeddings, streaming</li></ul><p class="tools"><strong>Tools:</strong> JavaScript, TypeScript, Vercel AI SDK, LLM APIs</p></article>
          <article class="cu-month reveal"><span class="cu-month-badge">Month 3–4</span><h3>RAG · Advanced retrieval</h3><ul><li>Vector DBs · hybrid search</li><li>Evaluation &amp; hallucination control</li></ul><p class="tools"><strong>Tools:</strong> LangChain.js, pgvector, Pinecone</p></article>
          <article class="cu-month reveal"><span class="cu-month-badge">Month 5</span><h3>Agents &amp; multi-agent</h3><ul><li>ReAct · LangGraph.js · MCP</li><li>Multi-agent patterns in JS</li></ul><p class="tools"><strong>Tools:</strong> LangGraph.js, Vercel AI SDK, MCP</p></article>
          <article class="cu-month reveal"><span class="cu-month-badge">Month 6</span><h3>Deploy · Capstone</h3><ul><li>Node / Next · Docker · CI/CD</li><li>Portfolio demo &amp; polish</li></ul><p class="tools"><strong>Tools:</strong> Node.js, Next.js, Docker, cloud</p></article>
        </div>
        <div class="btn-row reveal" style="justify-content:center;margin-top:1.5rem">
          <a class="btn btn-lwz" href="curriculum/">View full detailed curriculum</a>
          <a class="btn btn-ghost-dark" href="#enroll">Request callback</a>
        </div>
      </div>
    </section>

    <section class="section fq-dark">
      <div class="container">
        <div class="section-head reveal"><p class="eyebrow">Outcomes</p><h2>Skills you will <span class="fq-accent">develop</span></h2></div>
        <div class="grid-3">
          <article class="benefit-card reveal"><h3>Full-stack foundations</h3><p>JavaScript, TypeScript, APIs and modern web architecture.</p></article>
          <article class="benefit-card reveal"><h3>LLM engineering</h3><p>Prompts, tools, structured outputs and model APIs.</p></article>
          <article class="benefit-card reveal"><h3>RAG systems</h3><p>Retrieval pipelines, embeddings and evaluation habits.</p></article>
          <article class="benefit-card reveal"><h3>Agentic AI</h3><p>LangGraph, MCP and practical multi-agent workflows.</p></article>
          <article class="benefit-card reveal"><h3>Product deployment</h3><p>Docker, cloud, CI/CD and production thinking.</p></article>
          <article class="benefit-card reveal"><h3>Career readiness</h3><p>Portfolio, GitHub presence and interview preparation.</p></article>
        </div>
      </div>
    </section>

    <section class="section" style="background:#fff" id="mentor">
      <div class="container">
        <div class="section-head reveal"><p class="eyebrow">Instructor</p><h2>Learn with a practicing builder</h2></div>
        <div class="mentor-card reveal">
          <img src="<?= htmlspecialchars(zq_asset('img/zuber-profile-photo.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Zuber Qureshi">
          <div>
            <h3>Zuber Qureshi</h3>
            <p style="font-weight:700;color:var(--fq-orange);margin:0 0 .75rem">Tech Founder | CTO | AI Educator</p>
            <p style="color:var(--fq-muted);margin:0">Technology leader focused on scalable products, engineering leadership, and practical AI education through Learning with Zuber.</p>
            <div class="btn-row"><a class="btn btn-ghost-dark" href="<?= htmlspecialchars(zq_url('about/'), ENT_QUOTES, 'UTF-8') ?>">About Zuber</a><a class="btn btn-lwz" href="#enroll">Request Callback</a></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-head reveal"><p class="eyebrow">FAQ</p><h2>Common questions</h2></div>
        <div class="faq-list">
          <details class="faq-item reveal"><summary>Who is this Career Program for?</summary><p>Working professionals (tech and non-tech), final-year students and career switchers who want a structured paid path into practical AI engineering.</p></details>
          <details class="faq-item reveal"><summary>How is this different from the free fellowship?</summary><p>The fellowship is a selective free national cohort for engineering students. This Career Program is a separate paid enrollment with career-focused outcomes.</p></details>
          <details class="faq-item reveal"><summary>Do I need a CS degree?</summary><p>No. Basic programming willingness (especially JavaScript / TypeScript) matters more. We’ll guide you on prerequisites during counselling.</p></details>
          <details class="faq-item reveal"><summary>Will I build real projects?</summary><p>Yes — the curriculum is project-driven with mentor-aligned work culminating in a deployable capstone.</p></details>
          <details class="faq-item reveal"><summary>Where can I see the full syllabus?</summary><p>Open the <a href="curriculum/">detailed curriculum page</a> for module-by-module topics, tools and projects.</p></details>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="final-cta reveal" style="background:linear-gradient(135deg,#07111f 0%,#13243f 45%,#1d4ed8 100%)">
          <h2>Ready to start your GenAI journey?</h2>
          <p class="lead"><span data-zq-text="careerPrice">Pricing to be announced</span> · <span data-zq-text="careerBatch">Upcoming batch dates — coming soon</span></p>
          <p style="color:rgba(255,255,255,.7);font-size:.92rem;max-width:34rem;margin:0 auto 1.25rem"><span data-zq-text="careerNote">Request a callback — enrollment details will be shared when batches open.</span></p>
          <div class="btn-row" style="justify-content:center">
            <a class="btn btn-outline-light" href="#enroll">Request Callback</a>
            <a class="btn btn-lwz" href="curriculum/">Full Curriculum</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="fq-sticky-bar" aria-label="Quick enroll">
    <a class="btn btn-ghost-dark" href="curriculum/" style="background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.25)">Curriculum</a>
    <a class="btn btn-lwz" href="#enroll">Callback</a>
  </div>
<?php require ZQ_INCLUDES . '/footer.php'; ?>
</body>
</html>
