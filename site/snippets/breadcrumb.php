<?php if (c::get('pages.breadcrumb', false)): ?>

<div class="demo-crumbs mdl-color-text--grey-500">
  <?php $first = true ?>
  <?php foreach($site->breadcrumb() as $crumb): ?>
    <?php if (!$first) echo ' > ' ?>
    <?php if ($crumb->isActive()): ?>
      <?php echo $crumb->title()->html() ?>
    <?php else: ?>
      <a href="<?php echo $crumb->url() ?>"> <?php echo $crumb->title()->html() ?> </a>
    <?php endif ?>
    <?php $first = false ?>
  <?php endforeach ?>
</div>

<?php endif ?>
