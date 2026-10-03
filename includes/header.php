<?php
require_once __DIR__ . '/functions.php';
$pageTitle = $pageTitle ?? 'Digital Mitron — Strategy, Design, Technology & Growth';
$pageDescription = $pageDescription ?? 'Digital Mitron connects strategy, design, technology and growth to help ambitious businesses build stronger digital experiences.';
$currentPage = $currentPage ?? '';
$bodyClass = $bodyClass ?? '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="<?= e($pageDescription) ?>">
  <meta name="theme-color" content="#0d1117">
  <title><?= e($pageTitle) ?></title>
  <link rel="stylesheet" href="<?= e(base_url('assets/css/style.css')) ?>">
  <script>document.documentElement.classList.add('js');</script>
</head>
<body class="<?= e($bodyClass) ?>">
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header" data-header>
  <div class="container nav-shell">
    <a class="brand" href="<?= e(base_url('index.php')) ?>" aria-label="Digital Mitron home">
      <span class="brand-mark" aria-hidden="true"><i></i><i></i><i></i><i></i></span>
      <span class="brand-type">Digital<span>Mitron</span></span>
    </a>

    <nav class="desktop-nav" aria-label="Primary navigation">
      <div class="nav-item has-mega">
        <button class="nav-link <?= e(nav_active('services', $currentPage)) ?>" type="button" aria-expanded="false" data-mega-toggle>Services <span>⌄</span></button>
        <div class="mega-menu" data-mega>
          <div class="mega-intro">
            <span class="eyebrow">Connected capabilities</span>
            <h3>One partner from first idea to ongoing growth.</h3>
            <a class="text-link" href="<?= e(base_url('services.php')) ?>">View all services <?= icon('arrow') ?></a>
          </div>
          <div class="mega-grid">
            <div><p>Strategy & Brand</p><a href="<?= e(base_url('services/branding-creative.php')) ?>">Branding & Creative</a><a href="<?= e(base_url('services/web-design-ux.php')) ?>">UX Strategy</a></div>
            <div><p>Experience</p><a href="<?= e(base_url('services/web-design-ux.php')) ?>">Web Design & UX</a><a href="<?= e(base_url('services/ecommerce-development.php')) ?>">Ecommerce Experience</a></div>
            <div><p>Technology</p><a href="<?= e(base_url('services/web-development.php')) ?>">Web Development</a><a href="<?= e(base_url('services/mobile-app-development.php')) ?>">App Development</a></div>
            <div><p>Growth</p><a href="<?= e(base_url('services/digital-marketing.php')) ?>">Digital Marketing</a><a href="<?= e(base_url('services/seo.php')) ?>">SEO</a><a href="<?= e(base_url('services/paid-media.php')) ?>">Paid Media</a></div>
          </div>
        </div>
      </div>
      <a class="nav-link <?= e(nav_active('expertise', $currentPage)) ?>" href="<?= e(base_url('expertise.php')) ?>">Expertise</a>
      <a class="nav-link <?= e(nav_active('process', $currentPage)) ?>" href="<?= e(base_url('process.php')) ?>">Process</a>
      <a class="nav-link <?= e(nav_active('lab', $currentPage)) ?>" href="<?= e(base_url('lab.php')) ?>">Lab</a>
      <a class="nav-link <?= e(nav_active('about', $currentPage)) ?>" href="<?= e(base_url('about.php')) ?>">About</a>
      <a class="nav-link <?= e(nav_active('insights', $currentPage)) ?>" href="<?= e(base_url('insights.php')) ?>">Insights</a>
    </nav>

    <a class="btn btn-small nav-cta" href="<?= e(base_url('contact.php')) ?>">Start a Project <?= icon('arrow') ?></a>
    <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" data-menu-toggle><?= icon('menu') ?></button>
  </div>

  <div class="mobile-panel" data-mobile-panel>
    <div class="mobile-panel-head"><span>Menu</span><button type="button" aria-label="Close menu" data-menu-close><?= icon('close') ?></button></div>
    <a href="<?= e(base_url('services.php')) ?>">Services</a>
    <a href="<?= e(base_url('expertise.php')) ?>">Expertise</a>
    <a href="<?= e(base_url('process.php')) ?>">Process</a>
    <a href="<?= e(base_url('lab.php')) ?>">Lab</a>
    <a href="<?= e(base_url('about.php')) ?>">About</a>
    <a href="<?= e(base_url('insights.php')) ?>">Insights</a>
    <a href="<?= e(base_url('contact.php')) ?>">Start a Project</a>
  </div>
</header>
<main id="main">
