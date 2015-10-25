<?php snippet('header') ?>

  <main class="mdl-layout__content demo-blog--blogpost">
    <div class="demo-blog__posts mdl-grid">
      <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col post">
        <div class="mdl-card__media mdl-color-text--grey-50 mdl-color--primary" style="background-image: url('<?php snippet('cover-image', array('post'=>$page)) ?>')">
          <h3><?php echo $page->title() ?></h3>
        </div>
        <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
          <?php $author = $site->user($page->parent()->author()) ?>
          <?php $week = $page->num() ?>
          <?php snippet ('avatar', array('author'=> $author, 'size'=>44,'ifid'=>'')) ?>
          <div class="left">
            <?php if ($author->firstName() || $author->lastName()): ?>
              <strong><?php echo $author->firstName() ?> <?php echo $author->lastName() ?></strong>
            <?php else: ?>
              <strong><?php echo $author->username() ?></strong>
            <?php endif ?>
              <span>week <?php echo $week ?> in <a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a></span>
          </div>
          <div class="section-spacer"></div>
          <!-- <div class="meta__favorites">425 <i class="material-icons">favorite</i></div> -->
          <?php snippet('share') ?>
        </div>
        <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
          <div id="gallery">
            <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
          </div>
          <script>
            images = [
            <?php foreach ($page->images() as $i) : ?> 
              "<?php echo $i->url() ?>",
            <?php endforeach ?>
            ]
          </script>
          <script src="<?php echo $site->url() ?>/assets/js/linear-partition.js"></script>
          <script src="<?php echo $site->url() ?>/assets/js/grid-maker.js"></script>
          <?php if (!$page->text()->empty()): ?>
            <?php echo $page->text()->kirbytext() ?>
          <?php endif ?>
          <?php if ($page->tool() != '') : ?>
            <strong>Made with <?php echo $page->tool() ?></strong>
          <?php endif ?>
          <?php if ($page->link() != '') : ?>
            <a href="<?php echo $page->link() ?>" target="_blank"><?php echo $page->link() ?></a>
          <?php endif ?>
          <?php if ($page->hasFiles()) : ?>
            <?php foreach ($page->files() as $doc) : ?>
              <?php if ($doc->type() != 'image') : ?>
                <a href="<?php echo $doc->url() ?>" download><?php echo $doc->name() ?> (<?php echo $doc->niceSize() ?>)</a>
              <?php endif ?>
            <?php endforeach ?>
          <?php endif ?>
        </div>
        <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
          <div class="comment mdl-color-text--grey-700">

            <?php snippet('disqus') ?>

          </div>
        </div>
      </div>

        <?php if ($page->hasNext()) : ?>
          <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-phone">
            <a href="<?php echo $page->next()->url() ?>" class="mdl-button nav-button mdl-js-button mdl-button--raised">
              ← Week <?php echo $page->num()+1 ?> 
            </a>        
          </div>
        <?php endif ?>
        <?php if ($page->hasPrev()) : ?>
          <?php if ($page->hasNext()) : ?>
          <?php else : ?>
            <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-phone"><span></span></div>
          <?php endif ?>  
          <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-phone right">
            <a href="<?php echo $page->prev()->url() ?>" class="mdl-button nav-button mdl-js-button mdl-button--raised">
              Week <?php echo $page->num()-1 ?> →
            </a>
          </div>
        <?php endif ?>

    </div>

<?php snippet('footer') ?>
