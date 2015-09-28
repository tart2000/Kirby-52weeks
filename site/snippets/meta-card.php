

<div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
  <form class="mdl-color-text--accent-contrast" action="<?php echo $page->url() ?>">
    <div class="mdl-textfield mdl-js-textfield textfield-demo">
      <input class="mdl-textfield__input mdl-color-text--accent-contrast" type="text" id="search" name="s" autofocus />
      <label class="mdl-textfield__label mdl-color-text--accent-contrast" for="search"><?php echo l::get('search.placeholder') ?></label>
    </div>
  </form>
  <button class="mdl-button mdl-button--fab mdl-color--accent mdl-button--search">
    <i class="material-icons mdl-color-text--accent-contrast icon--search">search</i>
    <i class="material-icons mdl-color-text--accent-contrast icon--close">close</i>
  </button>
  <div class="mdl-card__media mdl-color--primary mdl-color-text--grey-600" <?php echo ($color = c::get('meta-card.color'))? 'style="background-color:' . $color . ' !important;"' : '' ?>>
    <?php if ($i = $site->files()->findBy('name', 'logo')): ?>
      <img src="<?php echo $i->url() ?>">
    <?php endif ?>
    <a href="<?php echo $page->url() ?>"></a>
  </div>
  <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
    <div>
      <a href="<?php echo $page->url() ?>"><strong><?php echo $site->title()->html() ?></strong></a>
    </div>
    <?php snippet('menu') ?>
  </div>
</div>
