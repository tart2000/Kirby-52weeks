<?php $columns = 12/$columns; ?>
<div class="mdl-card on-the-road-again mdl-cell mdl-cell--<?php echo $columns ?>-col mdl-shadow--2dp">
    <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php snippet('cover-image', array('post'=>$challenge)) ?>)">
      <h3><a href="<?php echo $challenge->url() ?>"><?php echo $challenge->title(); ?></a></h3>
    </div>
	
    <?php if ($challenge->author()): ?>
        <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
          <?php $author = $site->user($challenge->author()) ?>
          <?php $week = $page->children()->count() ?>
          <?php snippet('avatar', array('author'=>$author)) ?>
          <div class="left">
            <?php if ($author->firstName() || $author->lastName()): ?>
              <strong><?php echo $author->firstName() ?> <?php echo $author->lastName() ?></strong>
            <?php else: ?>
              <strong><?php echo $author->username() ?></strong>
            <?php endif ?>
              <span>week <?php echo $challenge->children()->count() ?></span>
          </div>
        </div>
  	<?php endif ?>
  	<div class="progress">
  	<?php $percent = $challenge->children()->count()/52*100 ?>
		<div class="percent" style="width:<?php echo $percent ?>%"></div>
	</div>
</div>