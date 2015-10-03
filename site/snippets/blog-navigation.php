

  <nav class="demo-nav mdl-cell mdl-cell--12-col">
    <?php if($pagination->hasNextPage()): ?>
      <a href="<?php echo $pagination->nextPageUrl() ?>" class="demo-nav__button">
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
          <i class="material-icons">arrow_backward</i>
        </button>
        <?php echo l::get('prev') ?>
      </a>
    <?php endif ?>
    <div class="section-spacer"></div>
    <?php if($pagination->hasPrevPage()): ?>
      <a href="<?php echo $pagination->prevPageUrl() ?>" class="demo-nav__button">
        <?php echo l::get('next') ?>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
          <i class="material-icons">arrow_forward</i>
        </button>
      </a>
    <?php endif ?>
  </nav>




