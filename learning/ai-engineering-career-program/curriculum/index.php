<?php
$zq_active = 'curriculum';
require dirname(__DIR__, 3) . '/includes/zq-boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full Curriculum | AI Engineering Career Program | Learning with Zuber</title>
  <meta name="description" content="Detailed 6-month AI Engineering curriculum — GenAI, RAG, agents, deployment, fine-tuning and portfolio projects. Learning with Zuber.">
  <link rel="canonical" href="https://zuberqureshi.com/learning/ai-engineering-career-program/curriculum/">
  <link href="<?= htmlspecialchars(zq_asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" rel="icon">
  <meta property="og:title" content="Full Curriculum | AI Engineering Career Program">
  <meta property="og:description" content="Module-by-module GenAI &amp; AI engineering curriculum with tools, projects and skills.">
  <meta property="og:image" content="https://zuberqureshi.com/assets/img/zuber-profile-photo.jpg">
  <meta property="og:url" content="https://zuberqureshi.com/learning/ai-engineering-career-program/curriculum/">
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
<body class="theme-light page-curriculum page-program">
<?php require ZQ_INCLUDES . '/nav.php'; ?>

<main>
    <div class="container cu-shell">
      <div class="cu-main">

        <!-- Cover / intro -->
        <section class="cu-block cu-block-dark" id="top">
          <p class="cu-kicker">AI Engineering Career Program · Full curriculum</p>
          <h1 class="cu-hero-title">Advanced path in <span class="cu-underline">GenAI &amp; Multi-Agent Systems</span></h1>
          <p class="cu-lead">A 6-month industry-ready program to build practical AI systems — LLMs, RAG, agents, deployment and portfolio projects — under Learning with Zuber.</p>
          <nav class="cu-toc" aria-label="Curriculum sections">
            <a href="#why-now">Why now</a>
            <a href="#why-you">Why this program</a>
            <a href="#journey">6-month journey</a>
            <a href="#modules">Modules</a>
            <a href="#projects">Projects</a>
            <a href="#mentor">Mentor note</a>
          </nav>
        </section>

        <!-- Why now / market -->
        <section class="cu-block cu-block-dark" id="why-now">
          <h2>The Future of <span class="cu-mark">GenAI</span></h2>
          <p class="cu-lead" style="margin-top:.75rem">Generative AI is reshaping products, jobs and how software gets built. This program is designed so you can build with AI — not only use chat tools.</p>
          <div class="cu-stat-list">
            <div class="cu-stat">
              <i class="bi bi-graph-up-arrow"></i>
              <div>
                <strong>$1 Trillion+ global market by 2034</strong>
                <p style="margin:0">GenAI is projected to grow rapidly across finance, healthcare, SaaS and developer tooling.</p>
              </div>
            </div>
            <div class="cu-stat">
              <i class="bi bi-globe2"></i>
              <div>
                <strong>Massive productivity uplift</strong>
                <p style="margin:0">Teams that ship AI features, agents and retrieval systems move faster than those stuck in tutorials.</p>
              </div>
            </div>
          </div>
          <div class="cu-india-box">
            <h3>India: Leading the GenAI surge</h3>
            <ul>
              <li><strong>High adoption momentum</strong> — enterprises and startups hiring AI-ready engineers</li>
              <li><strong>Skill gap is real</strong> — employers want builders who can ship RAG, agents and APIs</li>
              <li><strong>Roles emerging fast</strong> — AI Engineer, LLM App Developer, Agentic Systems Builder</li>
              <li><strong>Portfolio beats certificates alone</strong> — deployed projects matter in interviews</li>
            </ul>
          </div>
          <p style="margin:1.25rem 0 0;font-size:.92rem">GenAI is reshaping the global economy. This curriculum is your path to become part of that change as a builder.</p>
        </section>

        <section class="cu-block cu-block-dark">
          <h2>Why Now Is the Time to <span class="cu-underline">Upskill in GenAI</span>?</h2>
          <p class="cu-lead" style="margin-top:.75rem">Recruiters want professionals who can create GenAI-powered systems, design features and integrate APIs — not only write prompts in a chat box.</p>
          <p style="margin:1rem 0 0">Career paths this curriculum prepares you for include <strong style="color:#fff">AI Engineer</strong>, <strong style="color:#fff">LLM App Developer</strong>, <strong style="color:#fff">Agentic Systems Builder</strong> and <strong style="color:#fff">Full-Stack AI Engineer</strong>. The window to stand out with a real portfolio is open now.</p>
        </section>

        <section class="cu-block cu-block-dark">
          <h2>AI: The Engineer’s <span class="cu-underline">Ally</span></h2>
          <p class="cu-lead" style="margin-top:.65rem">AI will not replace engineers who ship — but engineers who use AI will outpace those who don’t.</p>
          <div class="cu-grid-boxes">
            <div class="cu-box">Integrate powerful AI features into real products</div>
            <div class="cu-box">Automate repetitive engineering workflows</div>
            <div class="cu-box">Generate faster fixes and scaffolding with agents</div>
            <div class="cu-box">Improve code quality with AI-assisted review</div>
            <div class="cu-box">Build retrieval systems that stay grounded in data</div>
            <div class="cu-box">Orchestrate multi-agent workflows for production</div>
          </div>
          <div class="cu-quote">
            <div>
              <blockquote>“AI will not replace developers — it will create more leverage for those who build with it.”</blockquote>
              <cite>~ Guidance we build this program around</cite>
            </div>
            <img class="cu-quote-photo" src="<?= htmlspecialchars(zq_asset('img/zuber-profile-photo.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Zuber Qureshi">
          </div>
        </section>

        <!-- Why right for you -->
        <section class="cu-block cu-block-dark" id="why-you">
          <h2>Why is the <span class="cu-underline">AI Engineering Career Program</span> right for you?</h2>
          <p class="cu-lead" style="margin-top:.65rem">Because AI is no longer optional for product builders — and this path focuses on shipping systems, not slide decks.</p>
          <div class="cu-why-list">
            <article class="cu-why-item">
              <div class="cu-why-icon"><i class="bi bi-stars"></i></div>
              <div>
                <h3>Build real-world GenAI skills</h3>
                <p>Hands-on training across GenAI tools, RAG pipelines, LLMs and multi-agent systems for real business problems.</p>
              </div>
            </article>
            <article class="cu-why-item">
              <div class="cu-why-icon"><i class="bi bi-briefcase"></i></div>
              <div>
                <h3>Create a job-winning portfolio</h3>
                <p>Work on mentor-reviewed projects you can demo — research assistants, RAG apps, agents and deployed products.</p>
              </div>
            </article>
            <article class="cu-why-item">
              <div class="cu-why-icon"><i class="bi bi-calendar-week"></i></div>
              <div>
                <h3>Learn without freezing your career</h3>
                <p>Structured live learning designed for working professionals and serious career switchers who need a clear weekly rhythm.</p>
              </div>
            </article>
            <article class="cu-why-item">
              <div class="cu-why-icon"><i class="bi bi-people"></i></div>
              <div>
                <h3>Mentorship from a practicing builder</h3>
                <p>Learn with Zuber Qureshi — Tech Founder / CTO focused on scalable products and practical AI education.</p>
              </div>
            </article>
          </div>
        </section>

        <!-- 6-month journey -->
        <section class="cu-block cu-block-dark" id="journey">
          <h2>Your 6-Month <span class="cu-mark">Learning Journey</span></h2>
          <p class="cu-lead" style="margin-top:.65rem">Month-by-month path from foundations to production AI systems.</p>
          <div class="cu-journey">
            <article class="cu-month">
              <span class="cu-month-badge">Month 1</span>
              <h3>Software + GenAI &amp; Prompting Basics</h3>
              <ul>
                <li>JavaScript / TypeScript foundations for AI apps</li>
                <li>AI vs ML vs DL · GenAI platforms · ethics</li>
                <li>Prompt anatomy: zero-shot, few-shot, ReAct, role-based</li>
              </ul>
              <p class="tools"><strong>Tools:</strong> JavaScript, TypeScript, Node.js</p>
            </article>
            <article class="cu-month">
              <span class="cu-month-badge">Month 2</span>
              <h3>APIs &amp; Real-World Prompting</h3>
              <ul>
                <li>LLM APIs — chat, embeddings, streaming</li>
                <li>Handle responses, keys, debugging outputs</li>
                <li>Structured outputs &amp; tool calling basics</li>
              </ul>
              <p class="tools"><strong>Tools:</strong> OpenAI / Anthropic APIs, Postman</p>
            </article>
            <article class="cu-month">
              <span class="cu-month-badge">Month 3</span>
              <h3>NLP &amp; Intro to RAG</h3>
              <ul>
                <li>Embeddings, tokenization, chunking, semantic search</li>
                <li>Build a basic RAG pipeline</li>
                <li>Vector stores &amp; retrieval evaluation habits</li>
              </ul>
              <p class="tools"><strong>Tools:</strong> LangChain.js, Vercel AI SDK, embeddings APIs</p>
            </article>
            <article class="cu-month">
              <span class="cu-month-badge">Month 4</span>
              <h3>Advanced RAG</h3>
              <ul>
                <li>Multi-hop retrieval · hallucination reduction</li>
                <li>Fallback strategies · RAG evaluation</li>
                <li>Hybrid search &amp; context optimization</li>
              </ul>
              <p class="tools"><strong>Tools:</strong> LangChain.js, pgvector, Pinecone</p>
            </article>
            <article class="cu-month">
              <span class="cu-month-badge">Month 5</span>
              <h3>AI Agents &amp; Multi-Agent Systems</h3>
              <ul>
                <li>Single / multi-agent design (ReAct, tools, MAS)</li>
                <li>Plan, reason &amp; coordinate agent workflows</li>
                <li>MCP, LangGraph and production agent patterns</li>
              </ul>
              <p class="tools"><strong>Tools:</strong> LangChain.js, LangGraph.js, MCP, Vercel AI SDK</p>
            </article>
            <article class="cu-month">
              <span class="cu-month-badge">Month 6</span>
              <h3>Deploy &amp; Orchestrate</h3>
              <ul>
                <li>APIs (Node / Express / Nest) · frontend (Next.js / React)</li>
                <li>Combine RAG + Agents + UI + monitoring</li>
                <li>Capstone demo &amp; portfolio polish</li>
              </ul>
              <p class="tools"><strong>Tools:</strong> Node.js, Next.js, Docker, CI/CD, cloud deploy</p>
            </article>
          </div>
        </section>

        <!-- Detailed modules -->
        <section class="cu-block cu-block-dark" id="modules">
          <h2>Detailed <span class="cu-mark">Modules</span></h2>
          <p class="cu-lead" style="margin-top:.65rem">Topic-level depth with the tools you will actually use — brochure-style curriculum map.</p>

          <div class="cu-modules">
            <article class="cu-mod">
              <div class="cu-mod-body">
                <div class="cu-mod-head"><span class="cu-mod-num">Module 1</span><h3>Software Engineering Foundations</h3></div>
                <ul>
                  <li>JavaScript ES6+, async/await, modules &amp; APIs</li>
                  <li>Node.js, Express, REST design &amp; error handling</li>
                  <li>TypeScript for AI apps · Express / NestJS API basics</li>
                  <li>SQL / PostgreSQL · schema design · migrations</li>
                  <li>Git workflows · branching · code review habits</li>
                  <li>Environment variables, secrets &amp; local DX</li>
                </ul>
              </div>
              <div class="cu-mod-tools">
                <span>JavaScript</span><span>TypeScript</span><span>Node.js</span><span>Express</span><span>PostgreSQL</span><span>Git</span>
              </div>
            </article>

            <article class="cu-mod">
              <div class="cu-mod-body">
                <div class="cu-mod-head"><span class="cu-mod-num">Module 2</span><h3>GenAI, Prompting &amp; LLM APIs</h3></div>
                <ul>
                  <li>Open-source vs closed-source models · GenAI platforms</li>
                  <li>Ethics, guardrails &amp; responsible AI usage</li>
                  <li>Prompt anatomy · zero-shot / few-shot · CoT / ToT / ReAct</li>
                  <li>Conversation memory · handling AI responses</li>
                  <li>Chat, embeddings &amp; streaming APIs</li>
                  <li>API security, debugging &amp; evaluating outputs</li>
                  <li>LangChain.js &amp; Vercel AI SDK fundamentals</li>
                </ul>
              </div>
              <div class="cu-mod-tools">
                <span>Vercel AI SDK</span><span>LLM APIs</span><span>Postman</span><span>LangChain.js</span>
              </div>
            </article>

            <article class="cu-mod">
              <div class="cu-mod-body">
                <div class="cu-mod-head"><span class="cu-mod-num">Module 3</span><h3>NLP &amp; Retrieval-Augmented Generation (RAG)</h3></div>
                <ul>
                  <li>Text preprocessing, tokenization &amp; representations</li>
                  <li>Embeddings, vectorization &amp; semantic search</li>
                  <li>Chunking strategies for LLM applications</li>
                  <li>RAG architecture · retrieval + generation workflow</li>
                  <li>Vector databases · dense vs sparse · hybrid search</li>
                  <li>Query rewriting · multi-hop / multi-query retrieval</li>
                  <li>Reducing hallucinations · context optimization</li>
                  <li>Advanced RAG (Self-RAG, Corrective, Adaptive) overview</li>
                  <li>RAG evaluation, fallbacks &amp; citation habits</li>
                </ul>
              </div>
              <div class="cu-mod-tools">
                <span>LangChain.js</span><span>pgvector</span><span>Pinecone</span><span>OpenAI Embeddings</span>
              </div>
            </article>

            <article class="cu-mod">
              <div class="cu-mod-body">
                <div class="cu-mod-head"><span class="cu-mod-num">Module 4</span><h3>AI Agents &amp; Multi-Agent Systems</h3></div>
                <ul>
                  <li>Agent architectures · reflex / goal / tool-based agents</li>
                  <li>Tool calling, execution flows &amp; prompting strategies</li>
                  <li>Multi-agent systems · coordination &amp; collaboration</li>
                  <li>Frameworks: LangChain.js, LangGraph.js, Vercel AI SDK</li>
                  <li>ReAct agents · stateful orchestration with LangGraph</li>
                  <li>Planning, reasoning &amp; hierarchical patterns</li>
                  <li>MCP servers/clients · tools &amp; resources</li>
                  <li>A2A communication · Agentic RAG pipelines</li>
                  <li>Debugging, tracing, latency &amp; cost optimization</li>
                </ul>
              </div>
              <div class="cu-mod-tools">
                <span>LangGraph.js</span><span>Vercel AI SDK</span><span>LangSmith</span><span>MCP SDK</span>
              </div>
            </article>

            <article class="cu-mod">
              <div class="cu-mod-body">
                <div class="cu-mod-head"><span class="cu-mod-num">Module 5</span><h3>Full-Stack AI Products &amp; Deployment</h3></div>
                <ul>
                  <li>Web API fundamentals · Node / Nest for LLM orchestration</li>
                  <li>Swagger / OpenAPI · modular AI microservices</li>
                  <li>React / Next.js UI for AI products · streaming chat UX</li>
                  <li>Auth, Redis, jobs, webhooks &amp; rate limiting</li>
                  <li>Dockerization · deploy to Vercel / cloud / PaaS</li>
                  <li>CI/CD with GitHub Actions · K8s basics for GenAI</li>
                  <li>Monitoring, logging, LLMOps intro · tracing</li>
                  <li>Security, env vars &amp; production checklists</li>
                </ul>
              </div>
              <div class="cu-mod-tools">
                <span>Node.js</span><span>Next.js</span><span>Docker</span><span>Vercel</span><span>Langfuse</span><span>GCP</span>
              </div>
            </article>

            <article class="cu-mod">
              <div class="cu-mod-body">
                <div class="cu-mod-head"><span class="cu-mod-num">Module 6</span><h3>Production AI, Evals &amp; Capstone</h3></div>
                <ul>
                  <li>Transformer &amp; LLM concepts for JS engineers (no ML training track)</li>
                  <li>When to use RAG vs hosted models vs tool agents</li>
                  <li>Eval harnesses · golden sets · regression tests for prompts</li>
                  <li>Cost, latency, rate limits &amp; caching strategies in Node</li>
                  <li>Observability: tracing, logging, Langfuse / LangSmith in JS</li>
                  <li>AI-assisted DX: agentic IDEs, MCP tools, safe automation</li>
                  <li>Capstone: architecture docs, deploy, portfolio demo</li>
                </ul>
              </div>
              <div class="cu-mod-tools">
                <span>TypeScript</span><span>Vercel AI SDK</span><span>Langfuse</span><span>LangSmith</span><span>MCP</span>
              </div>
            </article>
          </div>
        </section>

        <!-- Projects -->
        <section class="cu-block cu-block-dark" id="projects">
          <h2>Build projects. Master <span class="cu-mark">skills</span>.</h2>
          <p class="cu-lead" style="margin-top:.65rem">Representative projects from the curriculum — each with skills you can put on your portfolio.</p>
          <div class="cu-projects">
            <article class="cu-project">
              <h3>1. AI Research Assistant</h3>
              <p>Search, synthesize and cite with LLM workflows and structured outputs.</p>
              <p class="cu-skills"><strong>Skills mastered:</strong> Prompting, Tool Calling, Structured Outputs, LangChain</p>
            </article>
            <article class="cu-project">
              <h3>2. PDF Knowledge Assistant (RAG)</h3>
              <p>Document intelligence with chunking, embeddings, retrieval and citations.</p>
              <p class="cu-skills"><strong>Skills mastered:</strong> RAG, Vector Search, Evaluation, Hybrid Retrieval</p>
            </article>
            <article class="cu-project">
              <h3>3. Custom Agentic AI Ecosystem</h3>
              <p>Design collaborating agents that plan, use tools and solve multi-step problems.</p>
              <p class="cu-skills"><strong>Skills mastered:</strong> Agentic AI, Workflow Automation, Ecosystem Integration</p>
            </article>
            <article class="cu-project">
              <h3>4. Smart Customer Support Chatbot</h3>
              <p>Full-stack GenAI support bot with retrieval, complex queries and workflow triggers.</p>
              <p class="cu-skills"><strong>Skills mastered:</strong> Prompting, RAG, Multi-Agent Systems, Deployment</p>
            </article>
            <article class="cu-project">
              <h3>5. AI-Powered Ops / Inventory Assistant</h3>
              <p>Agent workflows with memory and reasoning for operational decision support.</p>
              <p class="cu-skills"><strong>Skills mastered:</strong> Agent-Based Workflows, Structured Memory, Reasoning Chains</p>
            </article>
            <article class="cu-project">
              <h3>6. Capstone: Deployed AI Product</h3>
              <p>Ship an end-to-end app — API + UI + monitoring — with architecture write-up.</p>
              <p class="cu-skills"><strong>Skills mastered:</strong> Full-Stack AI, LLMOps Basics, Portfolio Storytelling</p>
            </article>
          </div>
        </section>

        <!-- Mentor note -->
        <section class="cu-block cu-block-peach" id="mentor" style="padding:0;overflow:hidden;background:transparent;border:0;box-shadow:none">
          <div class="cu-note-banner">A note from your mentor</div>
          <div class="cu-note-body">
            <div class="cu-mentor-row">
              <img src="<?= htmlspecialchars(zq_asset('img/zuber-profile-photo.jpg'), ENT_QUOTES, 'UTF-8') ?>" alt="Zuber Qureshi">
              <div>
                <strong>Zuber Qureshi</strong>
                <span>Tech Founder · CTO · AI Educator</span>
              </div>
            </div>
            <p>Dear learner,</p>
            <p>This curriculum is built for people who want to <strong>ship</strong> — not collect certificates. You will move from software foundations to GenAI, RAG, agents and deployment with projects you can show in interviews.</p>
            <p>Expect live learning, practical assignments and honest feedback. If you stay consistent for six months, you will leave with systems thinking and a portfolio that reflects real engineering — not tutorial clones.</p>
            <p>Let’s build.</p>
            <div class="btn-row" style="margin-top:1rem">
              <a class="btn btn-lwz" href="../#enroll">Request enrollment details</a>
              <a class="btn btn-ghost-dark" href="<?= htmlspecialchars(zq_url('about/'), ENT_QUOTES, 'UTF-8') ?>">About Zuber</a>
            </div>
          </div>
        </section>

      </div>

      <aside class="cu-rail" aria-label="Enrollment">
        <div class="cu-rail-card">
          <h3>Ready to start your journey?</h3>
          <p>Share your details on the Career Program page — we’ll send batch, fees and admission steps when available.</p>
          <a class="btn btn-lwz" href="../#enroll">Request Callback</a>
          <p class="cu-rail-meta">Learning with Zuber · Paid Career Program</p>
        </div>
      </aside>
    </div>
  </main>

  <div class="fq-sticky-bar" aria-label="Quick actions">
    <a class="btn btn-ghost-dark" href="#modules" style="background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.25)">Modules</a>
    <a class="btn btn-lwz" href="../#enroll">Request Callback</a>
  </div>
<?php require ZQ_INCLUDES . '/footer.php'; ?>
</body>
</html>
