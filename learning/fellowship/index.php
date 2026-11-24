<?php
$zq_active = 'fellowship';
require dirname(__DIR__, 2) . '/includes/zq-boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>India's 100 AI Builders Fellowship | Free 6-Month AI Program</title>
  <meta name="description" content="A free, six-month national fellowship for 100 selected engineering students to build real AI products — Learning with Zuber.">
  <link rel="canonical" href="https://zuberqureshi.com/learning/fellowship/">
  <link href="<?= htmlspecialchars(zq_asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" rel="icon">
  <meta property="og:title" content="India's 100 AI Builders Fellowship | Free 6-Month AI Program">
  <meta property="og:description" content="Build Real AI Skills. Create Real Impact. 100 Fellows · 6 Months · 100% Free.">
  <meta property="og:image" content="https://zuberqureshi.com/assets/img/zuber-profile-photo.jpg">
  <meta property="og:url" content="https://zuberqureshi.com/learning/fellowship/">
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
<body class="theme-light page-fellowship">
<?php require ZQ_INCLUDES . '/nav.php'; ?>

<main>
    <section class="fq-hero" id="top">
      <div class="container fq-hero-grid">
        <div class="hero-anim">
          <div class="fq-kicker"><i class="bi bi-lightning-charge-fill"></i> India's 100 AI Builders Fellowship</div>
          <h1>Build Real AI Skills. Create <span class="fq-accent">Real Impact.</span></h1>
          <p class="lead">A free, six-month national fellowship for 100 selected engineering students who want to go beyond learning AI and start building real AI products.</p>
          <div class="fq-points">
            <div class="fq-point"><i class="bi bi-check-circle-fill"></i><span>100% free tuition — selective national cohort</span></div>
            <div class="fq-point"><i class="bi bi-check-circle-fill"></i><span>3 live classes every week · 24-week curriculum</span></div>
            <div class="fq-point"><i class="bi bi-check-circle-fill"></i><span>Projects, mentorship, industry sessions &amp; portfolio focus</span></div>
            <div class="fq-point"><i class="bi bi-check-circle-fill"></i><span>Built for engineering students across India</span></div>
          </div>
          <div class="fq-mini-stats">
            <div class="fq-mini-stat"><strong>100</strong><span>Fellows</span></div>
            <div class="fq-mini-stat"><strong>6</strong><span>Months</span></div>
            <div class="fq-mini-stat"><strong>24</strong><span>Weeks</span></div>
            <div class="fq-mini-stat"><strong>100%</strong><span>Free</span></div>
          </div>
          <div class="btn-row">
            <a class="btn btn-ghost-dark" href="curriculum/" style="background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.25)">Full detailed curriculum</a>
          </div>
        </div>

        <aside class="fq-form-card" id="apply">
          <h3>Apply for the Fellowship</h3>
          <p class="sub">Share your details — we'll guide you on the assessment &amp; next steps.</p>
          <form data-zq-fellowship-form>
            <div class="form-group">
              <label for="fq-name">Full name *</label>
              <input id="fq-name" name="name" type="text" required autocomplete="name" placeholder="Your name">
            </div>
            <div class="form-group">
              <label for="fq-email">Email *</label>
              <input id="fq-email" name="email" type="email" required autocomplete="email" placeholder="you@college.edu">
            </div>
            <div class="form-group">
              <label for="fq-phone">Phone / WhatsApp *</label>
              <input id="fq-phone" name="phone" type="tel" required autocomplete="tel" placeholder="+91 XXXXX XXXXX">
            </div>
            <div class="form-group">
              <label for="fq-status">Current status *</label>
              <select id="fq-status" name="status" required>
                <option value="">Select</option>
                <option>College student — 1st / 2nd year</option>
                <option>College student — 3rd year</option>
                <option>College student — Final year</option>
                <option>Other engineering student</option>
              </select>
            </div>
            <div class="form-group">
              <label for="fq-city">City / College (optional)</label>
              <input id="fq-city" name="city" type="text" placeholder="City or college name">
            </div>
            <button class="fq-submit" type="submit">Apply for Free Fellowship</button>
            <p class="fq-form-note"><i class="bi bi-shield-check"></i> Selection-based · Applying does not guarantee admission</p>
            <p class="fq-consent">By submitting, you agree to be contacted about the fellowship via email / WhatsApp / call regarding assessments and updates.</p>
          </form>
        </aside>
      </div>
    </section>

    <div class="fq-trust">
      <div class="container">
        <div class="fq-trust-inner reveal">
          <div class="fq-trust-item"><i class="bi bi-mortarboard"></i><div><strong>National fellowship</strong><span>100 selected builders</span></div></div>
          <div class="fq-trust-item"><i class="bi bi-laptop"></i><div><strong>Live + project-driven</strong><span>3 classes every week</span></div></div>
          <div class="fq-trust-item"><i class="bi bi-person-badge"></i><div><strong>Mentored by a builder</strong><span>Zuber Qureshi — Founder / CTO</span></div></div>
        </div>
      </div>
    </div>

    <section class="section" style="background:#fff">
      <div class="container">
        <div class="section-head center reveal">
          <p class="eyebrow">Why this matters</p>
          <h2>AI is reshaping engineering. Are you ready to <span class="fq-accent">build</span>?</h2>
        </div>
        <div class="fq-impact">
          <article class="fq-impact-card reveal"><div class="num">01</div><h3>Tools ≠ systems</h3><p style="margin:0;color:var(--fq-muted)">Knowing AI tools is not the same as engineering AI applications.</p></article>
          <article class="fq-impact-card reveal"><div class="num">02</div><h3>Industry needs builders</h3><p style="margin:0;color:var(--fq-muted)">Companies need people who can integrate, deploy and evaluate AI.</p></article>
          <article class="fq-impact-card reveal"><div class="num">03</div><h3>Beyond tutorials</h3><p style="margin:0;color:var(--fq-muted)">This fellowship focuses on working products — not passive watching.</p></article>
        </div>
      </div>
    </section>

    <section class="section fq-dark">
      <div class="container grid-2" style="align-items:start">
        <div class="reveal">
          <p class="eyebrow">Program</p>
          <h2>A national learning initiative for <span class="fq-accent">100 builders</span></h2>
          <p class="lead">Only 100 selected students. Six months / 24 weeks. Hybrid learning with online classes and selected campus activities. Practical curriculum, mentorship, industry exposure and a final project demonstration.</p>
          <div class="btn-row"><a class="btn btn-lwz" href="#apply">Apply Now</a><a class="btn btn-ghost-dark" href="curriculum/" style="background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.25)">View Curriculum</a></div>
        </div>
        <div class="surface-card reveal">
          <ul style="margin:0;padding-left:1.1rem;display:grid;gap:.55rem;color:rgba(255,255,255,.78)">
            <li>National-level cohort of 100 fellows</li>
            <li>Structured six-month journey</li>
            <li>Live classes + guided practice</li>
            <li>Mentorship and code reviews</li>
            <li>Industry sessions every month</li>
            <li>Capstone demo at the end</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section" style="background:#fff" id="mentor">
      <div class="container">
        <div class="section-head reveal"><p class="eyebrow">Mentor</p><h2>Why learn from <span class="fq-accent">Zuber</span>?</h2></div>
        <div class="mentor-card reveal">
          <img src="<?= htmlspecialchars(zq_asset('img/zuber-profile-photo.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Zuber Qureshi">
          <div>
            <h3>Zuber Qureshi</h3>
            <p style="font-weight:700;color:var(--fq-orange);margin:0 0 .75rem">Tech Founder | CTO | AI Educator</p>
            <p style="color:var(--fq-muted)">A technology leader and product builder passionate about scalable technology and helping aspiring engineers develop practical skills.</p>
            <div class="skill-tags" style="margin-top:1rem">
              <span class="skill-tag">Real-world engineering</span>
              <span class="skill-tag">Product building</span>
              <span class="skill-tag">Team mentoring</span>
              <span class="skill-tag">Practical AI</span>
            </div>
            <div class="btn-row"><a class="btn btn-ghost-dark" href="<?= htmlspecialchars(zq_url('about/'), ENT_QUOTES, 'UTF-8') ?>">About Zuber</a><a class="btn btn-lwz" href="#apply">Apply Now</a></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-head reveal"><p class="eyebrow">What you get</p><h2>Built for serious learners</h2></div>
        <div class="grid-3">
          <article class="benefit-card reveal"><h3>1. Structured 6-Month Curriculum</h3><p>Clear modules from foundations to production AI.</p></article>
          <article class="benefit-card reveal"><h3>2. 3 Live Classes Every Week</h3><p>Consistent live learning rhythm across 24 weeks.</p></article>
          <article class="benefit-card reveal"><h3>3. Practical Coding Assignments</h3><p>Guided practice that turns concepts into skill.</p></article>
          <article class="benefit-card reveal"><h3>4. Monthly Industry Expert Talks</h3><p>Exposure to real builders and engineering challenges.</p></article>
          <article class="benefit-card reveal"><h3>5. Mentorship &amp; Code Reviews</h3><p>Feedback loops that improve how you ship.</p></article>
          <article class="benefit-card reveal"><h3>6. Real-World AI Projects</h3><p>Portfolio-worthy applications, not toy demos alone.</p></article>
          <article class="benefit-card reveal"><h3>7. Resources &amp; Repositories</h3><p>Learning materials and project repos to keep building.</p></article>
          <article class="benefit-card reveal"><h3>8. Completion Certificate</h3><p>Awarded based on eligibility and completion requirements.</p></article>
          <article class="benefit-card reveal"><h3>9. Internship Opportunities</h3><p>For selected performers — opportunity-based, not guaranteed.</p></article>
          <article class="benefit-card reveal"><h3>10. Final AI Product Showcase</h3><p>Present your work in a final demonstration.</p></article>
        </div>
        <p class="disclaimer reveal" style="margin-top:1.5rem">Internships are opportunity-based and are not guaranteed to every fellow.</p>
      </div>
    </section>

    <section class="section fq-dark" id="curriculum">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">24-week curriculum</p>
          <h2>Six modules. One builder journey.</h2>
          <p class="lead">Core stack: JavaScript, TypeScript, React, Next.js, Node.js, Express/Nest, PostgreSQL, pgvector, Redis, LLM APIs, LangChain.js, LangGraph.js, Vercel AI SDK, MCP, Docker and cloud deployment.</p>
        </div>
        <div class="grid-2">
          <article class="module-card reveal"><div class="module-weeks">Module 1 · Weeks 1–4</div><h3>Software Engineering Foundations</h3><ul><li>JavaScript, ES6+, async/await, APIs</li><li>Node.js, Express, REST</li><li>TypeScript, Git, PostgreSQL, Express/Nest</li></ul><p class="module-outcome">Outcome: Working JS/TS apps with a database.</p></article>
          <article class="module-card reveal"><div class="module-weeks">Module 2 · Weeks 5–8</div><h3>AI, ML &amp; LLM Engineering</h3><ul><li>AI/ML foundations · Transformers</li><li>Prompting, tools, structured outputs</li><li>Streaming · LangChain.js fundamentals</li></ul><p class="module-outcome">Project: AI Research Assistant.</p></article>
          <article class="module-card reveal"><div class="module-weeks">Module 3 · Weeks 9–12</div><h3>RAG &amp; Knowledge Systems</h3><ul><li>Chunking, embeddings, pgvector</li><li>Hybrid retrieval · reranking</li><li>Citations · RAG evaluation</li></ul><p class="module-outcome">Project: PDF Knowledge Assistant.</p></article>
          <article class="module-card reveal"><div class="module-weeks">Module 4 · Weeks 13–16</div><h3>Agentic AI Engineering</h3><ul><li>LangGraph state machines</li><li>MCP tools · human-in-the-loop</li><li>Multi-agent workflows in JS</li></ul><p class="module-outcome">Project: Stateful AI automation agent.</p></article>
        </div>
        <div class="btn-row reveal" style="justify-content:center;margin-top:1.5rem">
          <a class="btn btn-lwz" href="curriculum/">Open full detailed curriculum</a>
          <a class="btn btn-ghost-dark" href="#apply" style="background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.25)">Apply Now</a>
        </div>
        <p class="disclaimer reveal" style="margin-top:1rem;text-align:center">Modules 5–6 (Full-stack deploy + Capstone) and month-by-month tools are on the full curriculum page.</p>
      </div>
    </section>

    <section class="section" style="background:#fff">
      <div class="container">
        <div class="section-head reveal"><p class="eyebrow">Projects</p><h2>Don't just learn AI. <span class="fq-accent">Build with AI.</span></h2></div>
        <div class="grid-3">
          <article class="benefit-card reveal"><h3>AI Research Assistant</h3><p>Search, synthesize and cite with LLM workflows.</p></article>
          <article class="benefit-card reveal"><h3>PDF Knowledge Assistant</h3><p>Document intelligence with retrieval pipelines.</p></article>
          <article class="benefit-card reveal"><h3>Customer Support AI Agent</h3><p>Tool-using agent for support workflows.</p></article>
          <article class="benefit-card reveal"><h3>Sales Automation Agent</h3><p>Practical automation with structured outputs.</p></article>
          <article class="benefit-card reveal"><h3>AI Learning Assistant</h3><p>Personalized learning experiences with LLMs.</p></article>
          <article class="benefit-card reveal"><h3>Developer Productivity Agent</h3><p>Assist coding workflows with safe tool use.</p></article>
        </div>
        <p class="disclaimer reveal" style="margin-top:1.25rem">Each fellow must have a meaningful individual contribution and a demonstrable portfolio project. Team collaboration may be used for selected capstones. Internships/referrals are not guaranteed.</p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-head reveal"><p class="eyebrow">Selection</p><h2>Clear two-stage process</h2></div>
        <div class="steps">
          <article class="surface-card reveal"><div class="step-num">1</div><h3>Online Assessment</h3><p style="color:var(--fq-muted)">Programming aptitude, reasoning, problem-solving and basic technical awareness. Suggested duration: 30–45 minutes.</p></article>
          <article class="surface-card reveal"><div class="step-num">2</div><h3>Short Interview</h3><p style="color:var(--fq-muted)">10–15 minutes on motivation, curiosity, six-month commitment and interest in building real products.</p></article>
        </div>
        <p class="disclaimer reveal" style="margin-top:1.25rem">Final selection: 100 fellows. Applying does not guarantee selection.</p>
        <div class="btn-row reveal"><a class="btn btn-lwz" href="#apply">Start Application</a></div>
      </div>
    </section>

    <section class="section" style="background:#fff">
      <div class="container">
        <div class="section-head reveal"><p class="eyebrow">FAQ</p><h2>Common questions</h2></div>
        <div class="faq-list">
          <details class="faq-item reveal"><summary>Is the fellowship really free?</summary><p>Yes — tuition is 100% free for selected fellows. Selection is competitive and limited to 100 students.</p></details>
          <details class="faq-item reveal"><summary>Who can apply?</summary><p>Undergraduate engineering students from colleges across India, across years and disciplines.</p></details>
          <details class="faq-item reveal"><summary>Is prior AI knowledge required?</summary><p>No. Curiosity, consistency and willingness to build matter more.</p></details>
          <details class="faq-item reveal"><summary>Are internships guaranteed?</summary><p>No. Opportunities are subject to performance, selection criteria and availability.</p></details>
          <details class="faq-item reveal"><summary>Will I build a real AI project?</summary><p>Yes. The program is project-driven with a substantial final deliverable including deployment.</p></details>
          <details class="faq-item reveal"><summary>Is the program online or offline?</summary><p>Hybrid — online classes with selected campus activities.</p></details>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="final-cta reveal" style="background:linear-gradient(135deg,#07111f 0%,#13243f 45%,#1d4ed8 100%)">
          <h2>India's Next 100 AI Builders. Could You Be One of Them?</h2>
          <p class="lead">Your journey from learning programming to building real AI systems starts here.</p>
          <div class="btn-row" style="justify-content:center">
            <a class="btn btn-outline-light" href="#apply">Apply for the Fellowship</a>
            <a class="btn btn-lwz" href="curriculum/">Explore the Curriculum</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="fq-sticky-bar" aria-label="Quick apply">
    <a class="btn btn-ghost-dark" href="curriculum/" style="background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.25)">Curriculum</a>
    <a class="btn btn-lwz" href="#apply">Apply Now</a>
  </div>
<?php require ZQ_INCLUDES . '/footer.php'; ?>
</body>
</html>
