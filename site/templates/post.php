<?php snippet('header') ?>

<div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
  <main class="mdl-layout__content">
    <div class="demo-back">
      <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php echo $page->parent()->url() ?>">
        <i class="material-icons">arrow_back</i>
      </a>
    </div>
    <div class="demo-blog__posts mdl-grid">
      <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col post">
        <?php $postcover = $page->postimage()->toFile(); ?>
        <?php if ($postcover): ?>
          <div class="mdl-card__media mdl-color-text--grey-50 mdl-color--primary" style="background-image: url('<?php echo $postcover->url() ?>')">
        <?php else: ?>
          <div class="mdl-card__media mdl-color-text--grey-50 mdl-color--primary">
        <?php endif ?>
          <h3><?php echo $page->title() ?></h3>
        </div>
        <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
          <?php if ($page->author()): ?>
            <div class="minilogo" style="background-image: url(<?php echo $page->author()->avatar()->url() ?>)"></div>
            <div>
            <?php if ($page->author()->firstName() || $page->author()->lastName()): ?>
              <strong><?php echo $page->author()->firstName() ?> <?php echo $page->author()->lastName() ?></strong>
            <?php else: ?>
              <strong><?php echo $page->author()->username() ?></strong>
            <?php endif ?>
              <span><?php echo kirbytext('(relativedate: ' . $page->date('Y-m-d') . ' lang: ' . $site->language()->code() . ')') ?></span>
            </div>

          <?php endif ?>
          <div class="section-spacer"></div>
          <!-- <div class="meta__favorites">425 <i class="material-icons">favorite</i></div> -->
          <?php snippet('share') ?>
        </div>
        <?php if (!$page->text()->empty()): ?>
        <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
          <?php echo $page->text()->kirbytext() ?>
        </div>
        <?php endif ?>
        <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
          <div class="comment mdl-color-text--grey-700">

            <?php snippet('disqus') ?>

          </div>
        </div>
      </div>

      <?php snippet('blog-navigation') ?>

    </div>

<?php snippet('footer') ?>
