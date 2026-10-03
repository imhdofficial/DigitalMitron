<?php
require __DIR__ . '/service-data.php';
if (!isset($serviceKey, $services[$serviceKey])) {
  http_response_code(404);
  exit('Service not found');
}
$service = $services[$serviceKey];
$pageTitle = $service['title'] . ' | Digital Mitron';
$pageDescription = $service['intro'];
$currentPage = 'services';
$bodyClass = 'service-page service-' . $serviceKey;
include __DIR__ . '/header.php';
?>
<section class="service-hero section accent-<?= e($service['accent']) ?>">
  <div class="container service-hero-grid">
    <div class="service-copy reveal">
      <span class="eyebrow"><?= e($service['eyebrow']) ?></span>
      <h1><?= e($service['headline']) ?></h1>
      <p class="lead"><?= e($service['intro']) ?></p>
      <div class="hero-actions"><a class="btn" href="<?= e(base_url('contact.php')) ?>">Start a Project <?= icon('arrow') ?></a><a class="btn btn-ghost" href="#capabilities">Explore capabilities</a></div>
    </div>
    <div class="service-visual visual-<?= e($service['visual']) ?> reveal" aria-hidden="true">
      <div class="visual-shell">
        <div class="visual-top"><span></span><span></span><span></span></div>
        <div class="visual-stage" data-visual="<?= e($service['visual']) ?>"></div>
      </div>
    </div>
  </div>
</section>

<section class="section compact-section">
  <div class="container statement-grid reveal"><span class="eyebrow">Our point of view</span><p><?= e($service['proof']) ?></p></div>
</section>

<section class="section" id="capabilities">
  <div class="container">
    <div class="section-head reveal"><span class="eyebrow">Capabilities</span><h2>What we bring to the work.</h2><p>Every engagement is shaped around the actual problem, so the mix can change without losing the same quality standard.</p></div>
    <div class="capability-grid">
      <?php foreach ($service['capabilities'] as $i => $cap): ?>
        <article class="cap-card reveal"><span><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span><h3><?= e($cap) ?></h3><p>Focused planning and execution designed to make this part of the customer experience clearer, stronger and easier to maintain.</p></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section soft-section">
  <div class="container">
    <div class="section-head reveal"><span class="eyebrow">How it moves</span><h2>A process people can follow.</h2></div>
    <div class="process-track reveal">
      <?php foreach ($service['process'] as $i => $step): ?>
      <div class="process-step"><span><?= $i + 1 ?></span><strong><?= e($step) ?></strong></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container outcome-grid">
    <div class="outcome-intro reveal"><span class="eyebrow">What you leave with</span><h2>Useful outputs, not theatre.</h2><p>We keep deliverables understandable so your team knows what was decided, what was built and what happens next.</p></div>
    <div class="outcome-list reveal">
      <?php foreach ($service['outcomes'] as $outcome): ?><div><?= icon('check') ?><span><?= e($outcome) ?></span></div><?php endforeach; ?>
    </div>
  </div>
</section>
<?php include __DIR__ . '/footer.php'; ?>
