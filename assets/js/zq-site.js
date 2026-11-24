(function () {
  const header = document.querySelector(".site-header");
  const toggle = document.querySelector(".nav-toggle");
  const menu = document.querySelector(".nav-menu");
  const navCta = document.querySelector(".nav-cta");

  if (header) {
    const onScroll = () => {
      header.classList.toggle("scrolled", window.scrollY > 24);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  if (toggle && menu) {
    toggle.addEventListener("click", () => {
      const open = menu.classList.toggle("open");
      if (navCta) navCta.classList.toggle("open", open);
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });

    menu.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        menu.classList.remove("open");
        if (navCta) navCta.classList.remove("open");
        toggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  // Reveal on scroll (stagger siblings in same parent)
  const reveals = document.querySelectorAll(".reveal");
  if (reveals.length && "IntersectionObserver" in window) {
    const parents = new Set();
    reveals.forEach((el) => {
      if (el.parentElement) parents.add(el.parentElement);
    });
    parents.forEach((parent) => {
      const kids = [...parent.children].filter((c) => c.classList.contains("reveal"));
      kids.forEach((kid, i) => {
        if (!kid.style.getPropertyValue("--d")) {
          kid.style.setProperty("--d", `${i * 70}ms`);
        }
      });
    });

    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("in");
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    reveals.forEach((el) => io.observe(el));
  } else {
    reveals.forEach((el) => el.classList.add("in"));
  }

  // Wire config-driven CTAs
  const cfg = window.ZQ_CONFIG || {};
  const learning = cfg.learning || {};

  document.querySelectorAll("[data-zq-href]").forEach((el) => {
    const key = el.getAttribute("data-zq-href");
    const map = {
      fellowshipApply: learning.fellowshipApplyUrl,
      careerEnroll: learning.careerEnrollUrl,
      email: cfg.profile && cfg.profile.email ? `mailto:${cfg.profile.email}` : null,
      whatsapp: cfg.profile && cfg.profile.whatsapp,
      linkedin: cfg.profile && cfg.profile.linkedin,
    };
    if (map[key]) el.setAttribute("href", map[key]);
  });

  document.querySelectorAll("[data-zq-text]").forEach((el) => {
    const key = el.getAttribute("data-zq-text");
    const career = (learning.career || {});
    const map = {
      careerPrice: career.priceLabel,
      careerDuration: career.durationLabel,
      careerBatch: career.nextBatchLabel,
      careerNote: career.admissionNote,
      careerPriceNote: career.priceNote,
    };
    if (map[key]) el.textContent = map[key];
  });

  // Contact form → mailto (preserves existing no-backend behavior, better UX)
  const form = document.querySelector("[data-zq-contact-form]");
  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const fd = new FormData(form);
      const name = String(fd.get("name") || "").trim();
      const email = String(fd.get("email") || "").trim();
      const subject = String(fd.get("subject") || "Website inquiry").trim();
      const message = String(fd.get("message") || "").trim();
      const to = (cfg.profile && cfg.profile.email) || "zuberqureshi95@gmail.com";
      const body = `Name: ${name}\nEmail: ${email}\n\n${message}`;
      window.location.href = `mailto:${to}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    });
  }

  // Fellowship lead form → mailto (or external URL when configured)
  const fellowshipForm = document.querySelector("[data-zq-fellowship-form]");
  if (fellowshipForm) {
    fellowshipForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const fd = new FormData(fellowshipForm);
      const name = String(fd.get("name") || "").trim();
      const email = String(fd.get("email") || "").trim();
      const phone = String(fd.get("phone") || "").trim();
      const status = String(fd.get("status") || "").trim();
      const city = String(fd.get("city") || "").trim();
      const applyUrl = learning.fellowshipApplyUrl;
      if (applyUrl && !applyUrl.startsWith("#")) {
        window.location.href = applyUrl;
        return;
      }
      const to = (cfg.profile && cfg.profile.email) || "zuberqureshi95@gmail.com";
      const subject = "Fellowship Application — India's 100 AI Builders";
      const body = `Fellowship lead\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nStatus: ${status}\nCity/College: ${city || "-"}`;
      window.location.href = `mailto:${to}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    });
  }

  // Career program lead form
  const careerForm = document.querySelector("[data-zq-career-form]");
  if (careerForm) {
    careerForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const fd = new FormData(careerForm);
      const name = String(fd.get("name") || "").trim();
      const email = String(fd.get("email") || "").trim();
      const phone = String(fd.get("phone") || "").trim();
      const status = String(fd.get("status") || "").trim();
      const goal = String(fd.get("goal") || "").trim();
      const enrollUrl = learning.careerEnrollUrl;
      if (enrollUrl && !enrollUrl.startsWith("#")) {
        window.location.href = enrollUrl;
        return;
      }
      const to = (cfg.profile && cfg.profile.email) || "zuberqureshi95@gmail.com";
      const subject = "Career Program Enrollment Interest — Learning with Zuber";
      const body = `Career program lead\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nStatus: ${status}\nGoal: ${goal || "-"}`;
      window.location.href = `mailto:${to}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    });
  }

  // Learning hub also uses sticky bar — lift WA button
  if (document.body.classList.contains("page-program")) {
    document.body.classList.add("page-fellowship");
  }

  // Year
  document.querySelectorAll("[data-zq-year]").forEach((el) => {
    el.textContent = String(new Date().getFullYear());
  });

  // Floating WhatsApp
  if (!document.querySelector(".zq-wa-float")) {
    const wa = document.createElement("a");
    wa.className = "zq-wa-float";
    wa.href =
      (cfg.profile && cfg.profile.whatsapp) || "https://wa.me/919039730708";
    wa.target = "_blank";
    wa.rel = "noopener noreferrer";
    wa.setAttribute("aria-label", "Chat on WhatsApp");
    wa.title = "WhatsApp";
    wa.innerHTML = '<i class="bi bi-whatsapp" aria-hidden="true"></i>';
    document.body.appendChild(wa);
  }

  // Scroll progress + parallax (bright / promo pages)
  const progress = document.querySelector(".scroll-progress");
  const parallaxEls = document.querySelectorAll("[data-parallax]");
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  const onFrameScroll = () => {
    const max = document.documentElement.scrollHeight - window.innerHeight;
    const y = window.scrollY || 0;
    if (progress && max > 0) {
      progress.style.width = `${Math.min(100, (y / max) * 100)}%`;
    }
    if (!reduceMotion) {
      parallaxEls.forEach((el) => {
        const speed = Number(el.getAttribute("data-parallax") || 0.1);
        el.style.transform = `translate3d(0, ${y * speed}px, 0)`;
      });
    }
  };

  if (progress || parallaxEls.length) {
    onFrameScroll();
    window.addEventListener("scroll", onFrameScroll, { passive: true });
  }

  // Expertise cycle (3 interactive rings)
  const expRoot = document.querySelector("[data-exp-cycle]");
  if (expRoot) {
    const tabs = [...expRoot.querySelectorAll("[data-exp-tab]")];
    const panels = [...expRoot.querySelectorAll("[data-exp-panel]")];
    const dots = [...expRoot.querySelectorAll("[data-exp-dot]")];
    const hub = expRoot.querySelector("[data-exp-hub]");
    const hubIcon = expRoot.querySelector("[data-exp-hub-icon]");
    const hubTitle = expRoot.querySelector("[data-exp-hub-title]");
    const hubKicker = hub ? hub.querySelector(".exp-hub-kicker") : null;
    const progress = expRoot.querySelector("[data-exp-progress]");
    const pauseBtn = expRoot.querySelector("[data-exp-pause]");
    const pauseIcon = expRoot.querySelector("[data-exp-pause-icon]");
    const reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    const meta = [
      { title: "Project Domains", icon: "bi-buildings", kicker: "Cycle 01 / 03" },
      { title: "Tech & Systems", icon: "bi-cpu", kicker: "Cycle 02 / 03" },
      { title: "CTO Leadership", icon: "bi-people", kicker: "Cycle 03 / 03" },
    ];

    const CIRC = 2 * Math.PI * 128;
    let index = 0;
    let paused = false;
    let timer = null;

    const setProgress = (i) => {
      if (!progress) return;
      const segment = CIRC / 3;
      progress.style.strokeDasharray = `${segment} ${CIRC}`;
      progress.style.strokeDashoffset = String(-segment * i);
    };

    const go = (next, user = false) => {
      index = ((next % meta.length) + meta.length) % meta.length;
      tabs.forEach((tab, i) => {
        const on = i === index;
        tab.classList.toggle("is-active", on);
        tab.setAttribute("aria-selected", on ? "true" : "false");
      });
      panels.forEach((panel, i) => {
        const on = i === index;
        panel.classList.toggle("is-active", on);
        if (on) panel.removeAttribute("hidden");
        else panel.setAttribute("hidden", "");
      });
      dots.forEach((dot, i) => dot.classList.toggle("is-active", i === index));

      if (hub) hub.classList.add("is-switching");
      const m = meta[index];
      if (hubIcon) hubIcon.innerHTML = `<i class="bi ${m.icon}"></i>`;
      if (hubTitle) hubTitle.textContent = m.title;
      if (hubKicker) hubKicker.textContent = m.kicker;
      setProgress(index);
      window.setTimeout(() => hub && hub.classList.remove("is-switching"), 280);

      if (user) restart();
    };

    const stop = () => {
      if (timer) {
        window.clearInterval(timer);
        timer = null;
      }
    };

    const start = () => {
      stop();
      if (paused || reduce) return;
      timer = window.setInterval(() => go(index + 1), 4800);
    };

    const restart = () => {
      if (!paused) start();
    };

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => go(Number(tab.getAttribute("data-exp-tab")), true));
    });

    const prev = expRoot.querySelector("[data-exp-prev]");
    const next = expRoot.querySelector("[data-exp-next]");
    if (prev) prev.addEventListener("click", () => go(index - 1, true));
    if (next) next.addEventListener("click", () => go(index + 1, true));

    if (pauseBtn) {
      pauseBtn.addEventListener("click", () => {
        paused = !paused;
        pauseBtn.setAttribute("aria-pressed", paused ? "true" : "false");
        if (pauseIcon) {
          pauseIcon.className = paused ? "bi bi-play-fill" : "bi bi-pause-fill";
        }
        if (paused) stop();
        else start();
      });
    }

    expRoot.addEventListener("mouseenter", stop);
    expRoot.addEventListener("mouseleave", () => {
      if (!paused) start();
    });

    go(0);
    start();
  }
})();
