<?php snippet('header') ?>

    <?php if ($header = $page->files()->findBy('name', 'header')): ?>
      <div class="demo-ribbon mdl-color--primary mdl-layout__content" style="background-image: url(<?php echo $header->url() ?>)">
    <?php else: ?>
      <div class="demo-ribbon mdl-color--primary mdl-layout__content">
    <?php endif ?>

            <?php snippet('menu') ?>
            <!-- <div class="mdl-layout-spacer"></div> -->
      </div>
    <main class="demo-main mdl-layout__content">
      <div class="demo-container mdl-grid">
        <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            <?php snippet('breadcrumb') ?>
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </div>

<?php snippet('footer') ?>
