
<?php snippet('header') ?>


    <main class="mdl-layout__content">
      <!-- top banner -->
      <?php if ($page->hasImages()) : ?>
        <div class="challenge-head" style="background-image:url('<?php echo $page->url().'/content/'.$page->diruri().'/'.'header.jpg' ?>');">
          <div class="logo">
            <img src="<?php echo $site->url() ?>/assets/images/52weeks2.png">
          </div>
          <div class="challenge-title">
            <h1>Get better at <span id="text-anim">craft</span>!</h1>
          </div>
        </div>
      <?php endif ?>
      <!-- end banner --> 

      <!-- script animation -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script type="text/javascript">
      $(function(){
      var words = [
            'photography',
            'drawing',
            'writing',
            'film & video',
            'music',
            'technology',
            'craft',
            ], i = 0; // i for counting

          setInterval(function(){
              $('#text-anim').fadeOut(function(){ //fadeout text
                  $(this).html(words[i=(i+1)%words.length]).fadeIn(); //update, count and fadeIn
              });
          }, 2000 ); //2s
      });
      </script>

      <!-- New intro -->
      <div class="mdl-grid grid-fix">
        <?php foreach ($page->intro()->yaml() as $cta) : ?>
          <div class="mdl-cell mdl-cell--4-col col-fix mdl-cell--12-col-phone" style="background-image:url('<?php echo $page->url().'/content/'.$page->diruri().'/'.$cta['image'] ?>')">
            <div class="icon">
              <i class="material-icons"><?php echo $cta['icone'] ?></i>
            </div>
            <h4><?php echo $cta['titre'] ?></H4>
            <p><?php echo $cta['texte'] ?></p>
          </div>
        <?php endforeach ?>
      </div>


      <div class="demo-blog__posts mdl-grid challenge_content">
        <div class="mdl-cell mdl-cell--12-col">
          <h4>Recent activity</h4>
        </div>
        <?php $last= $site->index()->filterBy('template', 'post')->sortBy('date', 'desc')->limit(3) ?>
        <?php foreach ($last as $post) : ?>
          <?php snippet('week', array('week'=>$post, 'col'=>3)) ?>
        <?php endforeach ?>
      </div>

      <div class="demo-blog__posts mdl-grid challenge_content">
        <div class="mdl-cell mdl-cell--12-col">
          <h4>Challenges</h4>
        </div>
        <?php foreach (page('challenges')->children() as $challenge): ?> 
          <?php if ($challenge->children()->count() > 0) : ?>
          <?php snippet('challenge', array('page'=>$page, 'challenge'=>$challenge, 'columns'=>3)) ?>
          <?php endif ?>
        <?php endforeach ?>

        <?php snippet('blog-navigation') ?>
      </div>

<?php snippet('footer') ?>
