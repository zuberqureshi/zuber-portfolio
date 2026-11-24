<?php
if (!defined('ZQ_BOOTED')) {
  require __DIR__ . '/zq-boot.php';
}
?>
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div>
          <h4>Zuber Qureshi</h4>
          <p>Tech Founder · CTO · AI Educator. Building technology, leading teams, and developing India's next AI builders.</p>
          <div class="social-row" style="margin-top:1rem">
            <a href="https://www.linkedin.com/in/zuberqureshi95/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://x.com/zuberqu28629967" target="_blank" rel="noopener" aria-label="X"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.instagram.com/zuberqureshi786/" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://wa.me/919039730708" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
        <div>
          <h4>Navigate</h4>
          <div class="footer-links">
            <a href="<?= htmlspecialchars(zq_url('about/'), ENT_QUOTES, 'UTF-8') ?>">About</a>
            <a href="<?= htmlspecialchars(zq_url('experience/'), ENT_QUOTES, 'UTF-8') ?>">Experience</a>
            <a href="<?= htmlspecialchars(zq_url('projects/'), ENT_QUOTES, 'UTF-8') ?>">Projects</a>
            <a href="<?= htmlspecialchars(zq_url('contact/'), ENT_QUOTES, 'UTF-8') ?>">Contact</a>
          </div>
        </div>
        <div>
          <h4>Learning with Zuber</h4>
          <div class="footer-links">
            <a href="<?= htmlspecialchars(zq_url('learning/'), ENT_QUOTES, 'UTF-8') ?>">Programs</a>
            <a href="<?= htmlspecialchars(zq_url('learning/fellowship/'), ENT_QUOTES, 'UTF-8') ?>">AI Builders Fellowship</a>
            <a href="<?= htmlspecialchars(zq_url('learning/ai-engineering-career-program/'), ENT_QUOTES, 'UTF-8') ?>">Career Program</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <span>&copy; <?= (int) $zq_year ?> Zuber Qureshi. All rights reserved.</span>
        <span>Gwalior, Madhya Pradesh, India</span>
      </div>
    </div>
  </footer>

  <script src="<?= htmlspecialchars(zq_asset('js/zq-config.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
  <script src="<?= htmlspecialchars(zq_asset('js/zq-site.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
