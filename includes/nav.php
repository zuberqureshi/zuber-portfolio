<?php
if (!defined('ZQ_BOOTED')) {
  require __DIR__ . '/zq-boot.php';
}
?>
  <header class="site-header">
    <div class="nav-inner">
      <a class="brand" href="<?= htmlspecialchars(zq_url(''), ENT_QUOTES, 'UTF-8') ?>">
        <span class="brand-name">Zuber Qureshi</span>
        <span class="brand-sub"><?= htmlspecialchars($zq_brand_sub, ENT_QUOTES, 'UTF-8') ?></span>
      </a>
      <button class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false">
        <i class="bi bi-list" style="font-size:1.35rem"></i>
      </button>
      <ul class="nav-menu">
        <li><a<?= zq_is_active('home') ?> href="<?= htmlspecialchars(zq_url(''), ENT_QUOTES, 'UTF-8') ?>">Home</a></li>
        <li><a<?= zq_is_active('about') ?> href="<?= htmlspecialchars(zq_url('about/'), ENT_QUOTES, 'UTF-8') ?>">About</a></li>
        <li><a<?= zq_is_active('experience') ?> href="<?= htmlspecialchars(zq_url('experience/'), ENT_QUOTES, 'UTF-8') ?>">Experience</a></li>
        <li><a<?= zq_is_active('projects') ?> href="<?= htmlspecialchars(zq_url('projects/'), ENT_QUOTES, 'UTF-8') ?>">Projects</a></li>
        <li><a<?= in_array($zq_active, ['learning', 'fellowship', 'career', 'curriculum'], true) ? ' class="active"' : '' ?> href="<?= htmlspecialchars(zq_url('learning/'), ENT_QUOTES, 'UTF-8') ?>">Learning with Zuber</a></li>
        <li><a<?= zq_is_active('contact') ?> href="<?= htmlspecialchars(zq_url('contact/'), ENT_QUOTES, 'UTF-8') ?>">Contact</a></li>
      </ul>
      <div class="nav-cta">
        <a class="btn btn-secondary" href="<?= htmlspecialchars(zq_url('learning/'), ENT_QUOTES, 'UTF-8') ?>">Explore Learning</a>
        <a class="btn btn-primary" href="<?= htmlspecialchars(zq_url('contact/'), ENT_QUOTES, 'UTF-8') ?>">Let's Connect</a>
      </div>
    </div>
  </header>
