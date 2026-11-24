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
})();
