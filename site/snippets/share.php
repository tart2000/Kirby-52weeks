<?php if(!isset($align)) $align = 'bottom-right'; ?>
<?php $uid = uniqid('share--') ?>
<button id="<?php echo $uid ?>" class="mdl-button mdl-js-button mdl-button--icon <?php if (isset($class)) echo $class ?>">
  <i class="material-icons">share</i>
</button>
<ul class="mdl-menu mdl-menu--<?php echo $align ?> mdl-js-menu mdl-js-ripple-effect" for="<?php echo $uid ?>">
  <li><button class="mdl-menu__item mdl-js-ripple-effect share--facebook">Facebook</button></li>
  <li><button class="mdl-menu__item mdl-js-ripple-effect share--twitter" data-message="Hey! This is awesome, you should read this: ">Twitter</button></li>
  <li><button class="mdl-menu__item mdl-js-ripple-effect share--googleplus" >Google+</button></li>
  <li><button class="mdl-menu__item mdl-js-ripple-effect share--linkedIn">LinkedIn</button></li>
  <li><button class="mdl-menu__item mdl-js-ripple-effect share--pinterest" data-image-url="<?php echo ($cover = $page->cover())? $cover->url() : $site->files()->findBy('name', 'social-header')->url() ?>">Pinterest</button></li>
  <li><button class="mdl-menu__item mdl-js-ripple-effect share--tumbler">Tumbler</button></li>
  <li><button class="mdl-menu__item mdl-js-ripple-effect share--reddit">Reddit</button></li>
</ul>
