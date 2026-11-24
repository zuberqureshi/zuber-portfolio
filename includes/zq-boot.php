<?php
/**
 * Shared bootstrap for Zuber portfolio pages.
 * Auto-detects depth so links/assets work from any folder.
 */
if (defined('ZQ_BOOTED')) {
  return;
}
define('ZQ_BOOTED', true);
define('ZQ_INCLUDES', __DIR__);
define('ZQ_ROOT', dirname(__DIR__));

$zq_script = realpath($_SERVER['SCRIPT_FILENAME'] ?? '');
$zq_root_real = realpath(ZQ_ROOT);
$zq_rel = '';
if ($zq_script && $zq_root_real) {
  $zq_dir = dirname($zq_script);
  if (strpos($zq_dir, $zq_root_real) === 0) {
    $zq_rel = trim(str_replace('\\', '/', substr($zq_dir, strlen($zq_root_real))), '/');
  }
}
$zq_depth = $zq_rel === '' ? 0 : substr_count($zq_rel, '/') + 1;
$zq_base = $zq_depth > 0 ? str_repeat('../', $zq_depth) : '';

/** Site-root relative URL, e.g. zq_url('learning/fellowship/') */
function zq_url(string $path = ''): string {
  global $zq_base;
  return $zq_base . ltrim($path, '/');
}

/** Asset URL under /assets/ */
function zq_asset(string $path): string {
  return zq_url('assets/' . ltrim($path, '/'));
}

/** Active nav helper */
function zq_is_active(string $key): string {
  global $zq_active;
  return (($zq_active ?? '') === $key) ? ' class="active"' : '';
}

$zq_active = $zq_active ?? 'home';
$zq_learning_section = in_array($zq_active, ['learning', 'fellowship', 'career', 'curriculum'], true);
$zq_brand_sub = $zq_brand_sub ?? ($zq_learning_section ? 'Learning with Zuber' : 'Tech Founder · CTO · AI Educator');
$zq_year = (int) date('Y');
