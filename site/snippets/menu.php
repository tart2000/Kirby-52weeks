<?php $items = $site->index()->filterBy('template' ,'default')->visible() ?>
<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">
  <?php if ($page->intendedTemplate() != 'home'): ?>
    <li><a href="<?php echo $site->url() ?>"><button class="mdl-menu__item mdl-js-ripple-effect"><?php echo l::get('home') ?></button></a></li>
  <?php endif ?>
  <?php foreach ($items as $item): ?>
    <li><a href="<?php echo $item->url() ?>"><button class="mdl-menu__item mdl-js-ripple-effect"><?php echo $item->title() ?></button></a></li>
  <?php endforeach ?>
</ul>
<button id="menubtn" class=" demo-menu mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>
