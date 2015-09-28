<?php snippet('header') ?>

<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
      <!-- top banner -->
      <?php if ($page->hasImages()) : ?>
        <div class="challenge-head" style="background-image:url('<?php echo $page->images()->first()->url() ?>');">
          <div class="logo">
            <img src="<?php echo $site->url() ?>/assets/images/52weeks2.png">
          </div>
          <div class="challenge-title">
            <h3>Get better at <span id="text-anim">technology</span>!</h3>
          </div>
        </div>
      <?php endif ?>
      <!-- end banner --> 

      <!-- script animation -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script type="text/javascript">
      $(function(){
      var words = [
            'craft',
            'photography',
            'drawing',
            'writing',
            'film & video',
            'music',
            'technology'
            ], i = 0; // i for counting

          setInterval(function(){
              $('#text-anim').fadeOut(function(){ //fadeout text
                  $(this).html(words[i=(i+1)%words.length]).fadeIn(); //update, count and fadeIn
              });
          }, 2000 ); //2s
      });
      </script>

      <!-- Something about what it is here -->
      <div class="presentation">
        <div class="col-3">
          <i class="material-icons">map</i>
          <p>Choose your category and set your goal</p>
        </div>
        <div class="col-3">
          <i class="material-icons">gesture</i>
          <p>Get inspired and practice your craft</p>
        </div>
        <div class="col-3">
          <i class="material-icons">mood</i>
          <p>Share it with the world and get better</p>
        </div>
      </div>

  
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
