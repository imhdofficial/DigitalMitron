<?php
$pageTitle='Expertise | Digital Mitron'; $currentPage='expertise'; $bodyClass='expertise-page';
include __DIR__.'/includes/header.php';
$groups=[
 'Strategy'=>[['Competitive research','Understand alternatives, category signals and market expectations.'],['Customer journeys','Map what people need before, during and after key decisions.'],['Information architecture','Organise navigation and content around user intent.'],['Conversion planning','Align business goals with clear actions and measurement.']],
 'Design'=>[['UX design','Reduce friction with research, flows and structured decisions.'],['UI design','Create visual systems that feel clear, polished and consistent.'],['Responsive design','Design layouts that work intentionally across screen sizes.'],['Design systems','Build reusable components, states and rules for scale.']],
 'Development'=>[['HTML5 / CSS','Semantic, responsive front ends with maintainable styling.'],['JavaScript','Useful interactions without unnecessary dependency weight.'],['PHP / MySQL','Practical server-side functionality and data-backed experiences.'],['CMS & APIs','Manageable content systems and integrations that fit the workflow.']],
 'Growth'=>[['SEO','Technical and content foundations aligned to search intent.'],['Paid media','Structured acquisition with landing-page and conversion alignment.'],['Social media','Repeatable content systems and campaign creative.'],['Analytics','Measurement that helps teams decide what to improve next.']]
];
?>
<section class="page-hero section"><div class="container narrow reveal"><span class="eyebrow">Expertise</span><h1>Different disciplines. One connected capability.</h1><p class="lead">Great digital work rarely comes from one skill. We connect strategy, design, technology and growth around the same business objective.</p></div></section>
<section class="section"><div class="container expertise-groups">
<?php foreach($groups as $name=>$items): ?><section class="expertise-group reveal"><div><span class="eyebrow"><?= e($name) ?></span><h2><?= e($name) ?> capability</h2></div><div class="expertise-items"><?php foreach($items as $item): ?><article><h3><?= e($item[0]) ?></h3><p><?= e($item[1]) ?></p></article><?php endforeach; ?></div></section><?php endforeach; ?>
</div></section>
<?php include __DIR__.'/includes/footer.php'; ?>
