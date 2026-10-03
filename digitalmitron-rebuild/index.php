<?php
$pageTitle = 'Digital Mitron — Strategy, Design, Technology & Growth';
$pageDescription = 'Digital Mitron connects strategy, design, technology and growth to help businesses build stronger brands, digital experiences and growth systems.';
$currentPage = 'home';
$bodyClass = 'home-page';
include __DIR__ . '/includes/header.php';
?>
<section class="hero section">
  <div class="hero-orb hero-orb-a"></div><div class="hero-orb hero-orb-b"></div>
  <div class="container hero-grid">
    <div class="hero-copy reveal">
      <span class="eyebrow">Independent digital studio</span>
      <h1>Strategy, design, technology and growth <em>built to work together.</em></h1>
      <p class="lead">We help ambitious businesses shape their brand, build better digital experiences and create marketing systems designed for sustainable growth.</p>
      <div class="hero-actions"><a class="btn" href="<?= e(base_url('contact.php')) ?>">Start a Project <?= icon('arrow') ?></a><a class="btn btn-ghost" href="<?= e(base_url('services.php')) ?>">Explore what we do</a></div>
    </div>
    <div class="ecosystem reveal" aria-label="Digital Mitron connected capability model">
      <div class="eco-ring ring-1"></div><div class="eco-ring ring-2"></div>
      <div class="eco-center"><span><?= icon('spark') ?></span><strong>Digital<br>Mitron</strong></div>
      <div class="eco-node node-a"><span>01</span><strong>Think</strong><small>Strategy</small></div>
      <div class="eco-node node-b"><span>02</span><strong>Design</strong><small>Experience</small></div>
      <div class="eco-node node-c"><span>03</span><strong>Build</strong><small>Technology</small></div>
      <div class="eco-node node-d"><span>04</span><strong>Grow</strong><small>Marketing</small></div>
    </div>
  </div>
  <div class="container hero-ticker reveal"><span>Brand & Creative</span><span>UX/UI</span><span>Websites</span><span>Apps</span><span>Ecommerce</span><span>SEO</span><span>Paid Media</span><span>Social</span></div>
</section>

<section class="section idea-statement">
  <div class="container reveal"><span class="eyebrow">Connected thinking</span><h2>Your brand, website and marketing should not work like separate departments.</h2><div class="statement-points"><p>A beautiful website that nobody discovers does not work.</p><p>Marketing that sends traffic to a confusing experience does not work.</p><p>Technology without business thinking does not work.</p></div><strong class="statement-end">We connect all of it.</strong></div>
</section>

<section class="section capabilities-home">
  <div class="container">
    <div class="section-head reveal"><span class="eyebrow">Four connected capabilities</span><h2>One system from first idea to ongoing growth.</h2></div>
    <div class="pillar-grid">
      <article class="pillar-card pillar-think reveal"><span class="pillar-no">01</span><h3>Think</h3><p class="pillar-label">Strategy & Research</p><p>We understand the business, audience, competition and goals before deciding what needs to be designed, built or marketed.</p><a href="<?= e(base_url('process.php')) ?>">Explore strategy <?= icon('arrow') ?></a></article>
      <article class="pillar-card pillar-design reveal"><span class="pillar-no">02</span><h3>Design</h3><p class="pillar-label">Brand & Experience</p><p>Brand systems, interfaces and digital experiences designed to make businesses easier to recognise, understand and use.</p><a href="<?= e(base_url('services/web-design-ux.php')) ?>">Explore design <?= icon('arrow') ?></a></article>
      <article class="pillar-card pillar-build reveal"><span class="pillar-no">03</span><h3>Build</h3><p class="pillar-label">Web & Technology</p><p>Responsive websites, ecommerce and digital products built around performance, scalability and maintainability.</p><a href="<?= e(base_url('services/web-development.php')) ?>">Explore technology <?= icon('arrow') ?></a></article>
      <article class="pillar-card pillar-grow reveal"><span class="pillar-no">04</span><h3>Grow</h3><p class="pillar-label">Marketing & Optimisation</p><p>Search, paid media, social and content connected to measurable business objectives and useful customer journeys.</p><a href="<?= e(base_url('services/digital-marketing.php')) ?>">Explore growth <?= icon('arrow') ?></a></article>
    </div>
  </div>
</section>

<section class="section need-section" id="need-finder">
  <div class="container need-grid">
    <div class="need-copy reveal"><span class="eyebrow">Start with the problem</span><h2>Not sure what service you need?</h2><p>Choose what you are trying to improve. We will map the most useful starting point.</p></div>
    <div class="need-panel reveal" data-need-finder>
      <div class="need-options" role="tablist" aria-label="Choose your goal">
        <button class="is-active" data-need="leads">I need more leads</button><button data-need="outdated">My website feels outdated</button><button data-need="launch">I am launching something new</button><button data-need="sell">I want to sell online</button><button data-need="brand">My brand feels inconsistent</button>
      </div>
      <div class="need-result" data-need-result><span>Recommended starting point</span><h3>SEO + Paid Media + Landing Pages</h3><p>Build demand capture and acquisition around a focused conversion experience, then measure what produces qualified enquiries.</p><a class="text-link" href="<?= e(base_url('contact.php')) ?>">Build my project plan <?= icon('arrow') ?></a></div>
    </div>
  </div>
</section>

<section class="section lab-preview">
  <div class="container">
    <div class="section-head split-head reveal"><div><span class="eyebrow">Digital Mitron Lab</span><h2>Ideas in practice.</h2></div><p>We do not invent client work. Our lab uses clearly labelled self-initiated concepts to show how we think, structure and execute.</p></div>
    <div class="lab-grid">
      <article class="lab-card lab-a reveal"><div class="lab-visual mini-browser"><i></i><i></i><i></i><div></div></div><span>Concept Project</span><h3>Business Website Reimagined</h3><p>How information architecture, copy and interaction can transform an outdated service website.</p></article>
      <article class="lab-card lab-b reveal"><div class="lab-visual mini-commerce"><div class="mini-card"></div><div class="mini-card"></div><div class="mini-cart">3 items</div></div><span>Concept Project</span><h3>Checkout Friction Study</h3><p>An ecommerce UX experiment focused on confidence, comparison and purchase completion.</p></article>
      <article class="lab-card lab-c reveal"><div class="lab-visual mini-brand"><strong>Aa</strong><span></span><span></span><span></span></div><span>Concept Project</span><h3>Brand System Experiment</h3><p>A fictional identity system tested across web, social and campaign touchpoints.</p></article>
    </div>
    <div class="center-action reveal"><a class="btn btn-ghost" href="<?= e(base_url('lab.php')) ?>">Explore the Lab <?= icon('arrow') ?></a></div>
  </div>
</section>

<section class="section soft-section">
  <div class="container">
    <div class="section-head reveal"><span class="eyebrow">How we work</span><h2>Less hand-off. More collaboration.</h2></div>
    <div class="home-process reveal">
      <?php foreach ([['Discover','Business, audience, competition and goals.'],['Define','Priorities, sitemap, journeys and success metrics.'],['Design','Wireframes, visual system and interactions.'],['Build','Development, CMS, integrations and tracking.'],['Launch','QA, accessibility, performance and deployment.'],['Improve','Analytics, SEO, campaigns and optimisation.']] as $i=>$step): ?>
      <div><span>0<?= $i+1 ?></span><h3><?= e($step[0]) ?></h3><p><?= e($step[1]) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section expertise-preview">
  <div class="container expertise-home-grid">
    <div class="reveal"><span class="eyebrow">Expertise</span><h2>Creative thinking backed by technical depth.</h2><p>Strong digital work rarely comes from a single discipline. We connect research, design, development and growth skills around the same objective.</p><a class="text-link" href="<?= e(base_url('expertise.php')) ?>">Explore our capability map <?= icon('arrow') ?></a></div>
    <div class="skill-cloud reveal"><span>UX Research</span><span>UI Design</span><span>HTML5</span><span>CSS</span><span>JavaScript</span><span>PHP</span><span>MySQL</span><span>WordPress</span><span>SEO</span><span>Google Ads</span><span>Analytics</span><span>Content Systems</span><span>Responsive Design</span><span>APIs</span></div>
  </div>
</section>

<section class="section deliverables-section">
  <div class="container">
    <div class="section-head reveal"><span class="eyebrow">A different kind of proof</span><h2>Know what you are buying before the project begins.</h2></div>
    <div class="deliverable-grid">
      <article class="reveal"><h3>UX Project</h3><ul><li>Research summary</li><li>Sitemap</li><li>Wireframes</li><li>UI system</li><li>Responsive screens</li><li>Prototype & handoff</li></ul></article>
      <article class="reveal"><h3>Website Development</h3><ul><li>Responsive build</li><li>Reusable components</li><li>CMS</li><li>SEO foundation</li><li>Performance optimisation</li><li>Analytics & deployment</li></ul></article>
      <article class="reveal"><h3>Growth Engagement</h3><ul><li>Audit</li><li>Channel strategy</li><li>Campaign setup</li><li>Creative direction</li><li>Tracking</li><li>Reporting & iteration</li></ul></article>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
