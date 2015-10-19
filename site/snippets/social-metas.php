<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?php echo $site->twitter() ?>">
<?php if ($page->template() == 'post'): ?>
  <meta name="twitter:title" content="<?php echo $page->title() ?>">
  <?php if (!$page->text()->empty()): ?>
    <meta name="twitter:description" content="<?php echo str::short(strip_tags($page->text()->kirbytext()), 200)?>">
  <?php else: ?>
    <meta name="twitter:description" content=" - ">
  <?php endif; ?>
  <meta name="twitter:image" content="<?php echo ($cover = $page->postimage())? $cover->url() : $site->files()->findBy('name', 'social-header')->url() ?>">
<?php else: ?>
  <meta name="twitter:title" content="<?php echo $site->title() ?>">
  <meta name="twitter:description" content="<?php echo $site->description() ?>">
  <meta name="twitter:image" content="<?php echo $site->files()->findBy('name', 'social-header')->url() ?>">
<?php endif; ?>

<!-- Facebook -->
<meta property="og:url" content="<?php echo $page->url() ?>" />
<?php if ($page->template() == 'post'): ?>
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php echo $page->title() ?>" />
    <?php if (!$page->text()->empty()): ?>
    <meta property="og:description" content="<?php echo str::short(strip_tags($page->text()->kirbytext()), 200)?>" />
  <?php else: ?>
    <meta name="twitter:description" content=" - ">
  <?php endif; ?>
  <meta property="og:image" content="<?php echo ($cover = $page->postimage())? $cover->url() : $site->files()->findBy('name', 'social-header')->url() ?>" />
<?php else: ?>
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $site->title() ?>" />
  <meta property="og:description" content="<?php echo $site->description() ?>" />
  <meta property="og:image" content="<?php echo $site->files()->findBy('name', 'social-header')->url() ?>" />
<?php endif; ?>
