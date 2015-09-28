<?php snippet('header') ?>

<!-- top banner -->
<?php if ($page->hasImages()) : ?>
  <div class="challenge-head" style="background-image:url('<?php echo $page->images()->first()->url() ?>');">
    <div class="challenge-title">
      <h3>Get better at <span class="text-anim">Technology</span></h3>
      <p><?php echo $page->text() ?></p>
    </div>
  </div>
<?php endif ?>
<!-- end banner --> 

  <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-blog__posts mdl-grid">

          <?php $first = true ?>
          <?php foreach ($posts as $post): ?>
            <div class="mdl-card mdl-cell mdl-cell--<?php echo ($first) ? '8' : '6' ?>-col">
              <?php if ($post->cover()): ?>
                <div class="mdl-card__media mdl-color-text--grey-50 mdl-color--primary" style="background-image: url(<?php echo $post->cover()->url() ?>)">
              <?php else: ?>
                <div class="mdl-card__media mdl-color-text--grey-50 mdl-color--primary">
              <?php endif ?>
                <h3><a href="<?php echo $post->url() ?>"><?php echo $post->title() ?></a></h3>
              </div>
              <?php if (!$post->text()->empty()): ?>
              <div class="mdl-color-text--grey-600 pad16">
                  <?php echo kirbytext(str::short($post->text(), 250)); ?>
              </div>
              <?php endif ?>
              <?php if ($post->author()): ?>
                <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                  <div class="minilogo" style="background-image: url(<?php echo $post->author()->avatar()->url() ?>)"></div>
                  <div>
                  <?php if ($post->author()->firstName() || $post->author()->lastName()): ?>
                    <strong><?php echo $post->author()->firstName() ?> <?php echo $post->author()->lastName() ?></strong>
                  <?php else: ?>
                    <strong><?php echo $post->author()->username() ?></strong>
                  <?php endif ?>
                    <span><?php echo kirbytext('(relativedate: ' . $post->date('Y-m-d') . ' lang: ' . $site->language()->code() . ')') ?></span>
                  </div>
                </div>
              <?php endif ?>
            </div>

            <!-- Display the meta card only after the first card -->
            <?php if ($first): ?>
              <?php snippet('meta-card') ?>
              <?php $first = false; ?>
            <?php endif ?>

          <?php endforeach ?>

          <?php snippet('blog-navigation') ?>
        </div>

<?php snippet('footer') ?>
