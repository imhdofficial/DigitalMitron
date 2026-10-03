<?php
$pageTitle='Start a Project | Digital Mitron'; $currentPage='contact'; $bodyClass='contact-page';
$success=false; $errors=[];
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $name=trim($_POST['name'] ?? ''); $email=trim($_POST['email'] ?? ''); $company=trim($_POST['company'] ?? ''); $goal=trim($_POST['goal'] ?? ''); $service=trim($_POST['service'] ?? ''); $message=trim($_POST['message'] ?? '');
  if ($name==='') $errors[]='Please enter your name.';
  if (!filter_var($email,FILTER_VALIDATE_EMAIL)) $errors[]='Please enter a valid email address.';
  if ($message==='') $errors[]='Please share a little about your project.';
  if (!$errors) {
    // Replace with a production mailer (SMTP/PHPMailer) before launch.
    $success=true;
  }
}
include __DIR__.'/includes/header.php';
?>
<section class="contact-hero section"><div class="container contact-grid">
<div class="contact-copy reveal"><span class="eyebrow">Start a project</span><h1>Tell us where you want to go.</h1><p class="lead">We will help figure out the right path across strategy, design, technology and growth.</p><div class="contact-note"><strong>Prefer email?</strong><a href="mailto:hello@digitalmitron.in">hello@digitalmitron.in</a></div></div>
<div class="project-form-wrap reveal">
<?php if($success): ?><div class="form-success"><span><?= icon('check') ?></span><h2>Thanks. Your brief is with us.</h2><p>This demo build validates the form successfully. Connect SMTP or your CRM endpoint before production launch.</p></div><?php else: ?>
<form class="project-form" method="post" action="" novalidate>
<?php if($errors): ?><div class="form-errors" role="alert"><?php foreach($errors as $er): ?><p><?= e($er) ?></p><?php endforeach; ?></div><?php endif; ?>
<fieldset><legend>1. What are you looking for?</legend><div class="choice-grid"><?php foreach(['Website','UI/UX','Development','Branding','Ecommerce','Marketing','Something else'] as $x): ?><label><input type="radio" name="service" value="<?= e($x) ?>" <?= (($_POST['service']??'')===$x)?'checked':'' ?>><span><?= e($x) ?></span></label><?php endforeach; ?></div></fieldset>
<fieldset><legend>2. What is the main goal?</legend><select name="goal"><option value="">Choose one</option><?php foreach(['Launch something new','Redesign an outdated experience','Get more leads','Increase online sales','Improve visibility','Build a digital product'] as $x): ?><option <?= (($_POST['goal']??'')===$x)?'selected':'' ?>><?= e($x) ?></option><?php endforeach; ?></select></fieldset>
<label class="field"><span>3. Tell us about the project</span><textarea name="message" rows="5" placeholder="What are you trying to achieve? What already exists? Any important timeline or constraints?"><?= e($_POST['message']??'') ?></textarea></label>
<div class="field-row"><label class="field"><span>Name *</span><input type="text" name="name" value="<?= e($_POST['name']??'') ?>" autocomplete="name" required></label><label class="field"><span>Company</span><input type="text" name="company" value="<?= e($_POST['company']??'') ?>" autocomplete="organization"></label></div>
<label class="field"><span>Email *</span><input type="email" name="email" value="<?= e($_POST['email']??'') ?>" autocomplete="email" required></label>
<button class="btn" type="submit">Send Project Brief <?= icon('arrow') ?></button>
</form><?php endif; ?>
</div></div></section>
<?php include __DIR__.'/includes/footer.php'; ?>
