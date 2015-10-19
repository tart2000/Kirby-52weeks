<?php snippet('header') ?>

    <?php if ($header = $page->files()->findBy('name', 'header')): ?>
      <div class="demo-ribbon mdl-color--primary mdl-layout__content" style="background-image: url(<?php echo $header->url() ?>)">
    <?php else: ?>
      <div class="demo-ribbon mdl-color--primary mdl-layout__content">
    <?php endif ?>
            <div class="demo-back">
      <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php echo $site->index()->filterBy('template', 'home')->first()->url() ?>">
        <i class="material-icons">arrow_back</i>
      </a>
    </div>
            <?php snippet('menu') ?>
            <!-- <div class="mdl-layout-spacer"></div> -->
      </div>
    <main class="demo-main mdl-layout__content">
      <div class="demo-container mdl-grid">
        <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            <?php snippet('breadcrumb') ?>
          <?php 
			$users = $site->users();
			foreach($users as $user) {
			  echo $user->firstname() . " " . $user->lastname();
			}
			?>
        </div>
      </div>

<?php snippet('footer') ?>

