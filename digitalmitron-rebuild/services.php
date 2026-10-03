<?php
$pageTitle='Services | Digital Mitron';
$pageDescription='Explore connected strategy, design, development and growth services from Digital Mitron.';
$currentPage='services';
$bodyClass='services-index';
include __DIR__.'/includes/header.php';
$cards = [
 ['Web Design & UX','Clear, usable interfaces built around customer journeys.','services/web-design-ux.php','Experience'],
 ['Web Development','Responsive, maintainable websites and web applications.','services/web-development.php','Technology'],
 ['Ecommerce','Shopping journeys designed around discovery and conversion.','services/ecommerce-development.php','Commerce'],
 ['Mobile App Development','Focused product journeys from prototype to release.','services/mobile-app-development.php','Product'],
 ['Branding & Creative','Identity systems that stay consistent across touchpoints.','services/branding-creative.php','Brand'],
 ['Digital Marketing','Connected channel strategy, campaigns and measurement.','services/digital-marketing.php','Growth'],
 ['SEO','Technical and content structure aligned to search intent.','services/seo.php','Search'],
 ['Paid Media','Campaigns connected to landing pages and conversion tracking.','services/paid-media.php','Performance'],
 ['Social Media','Repeatable content systems, creative and community planning.','services/social-media.php','Content'],
 ['Reputation Management','Monitoring, review and response systems built for trust.','services/reputation-management.php','Trust'],
 ['Security Testing','Scoped testing, prioritised findings and remediation guidance.','services/security-testing.php','Security'],
];
?>
<section class="page-hero section"><div class="container narrow reveal"><span class="eyebrow">Services</span><h1>Different disciplines. One connected digital partner.</h1><p class="lead">Choose a capability or start with the business problem. We shape the right mix instead of forcing every project into the same package.</p></div></section>
<section class="section"><div class="container service-index-grid">
<?php foreach($cards as $i=>$c): ?><a class="service-index-card reveal" href="<?= e(base_url($c[2])) ?>"><span><?= e($c[3]) ?></span><h2><?= e($c[0]) ?></h2><p><?= e($c[1]) ?></p><i><?= icon('arrow') ?></i></a><?php endforeach; ?>
</div></section>
<?php include __DIR__.'/includes/footer.php'; ?>
