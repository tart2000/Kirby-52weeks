<?php snippet('header') ?>

<!-- bouton back -->
<div class="demo-back">
  <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php echo $site->index()->filterBy('template', 'home')->first()->url() ?>">
    <i class="material-icons">arrow_back</i>
  </a>
</div>

<!-- top banner -->
<?php if ($page->hasImages()) : ?>
	<div class="challenge-head" style="background-image:url('<?php echo $page->images()->first()->url() ?>');">
		<div class="challenge-title">
			<h3><?php echo $page->title() ?></h3>
			<p><?php echo $page->text() ?></p>
		</div>
	</div>
<?php endif ?>
<!-- end banner --> 

<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
    <main class="challenge_content">
        <div class="demo-blog__posts mdl-grid">
		<?php foreach($page->children() as $challenge) : ?>
			<div class="mdl-card on-the-road-again mdl-cell mdl-cell--6-col mdl-shadow--2dp">
	            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php echo $challenge->images()->first()->url() ?>)">
	              <h3><a href="<?php echo $challenge->url() ?>"><?php echo $challenge->title(); ?></a></h3>
	            </div>
	            <?php if ($challenge->author()): ?>
	                <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
	                  <?php $author = $site->user($challenge->author()) ?>
	                  <div class="minilogo" style="background-image: url(<?php echo $author->avatar()->url() ?>)"></div>
	                  <div>
	                  <?php if ($author->firstName() || $author->lastName()): ?>
	                    <strong><?php echo $author->firstName() ?> <?php echo $author->lastName() ?></strong>
	                  <?php else: ?>
	                    <strong><?php echo $author->username() ?></strong>
	                  <?php endif ?>
	                    <span><?php echo 'week '.$challenge->children()->count().'/52' ?></span>
	                  </div>
	                </div>
              	<?php endif ?>
	        </div>
		<?php endforeach ?>
		</div>
		
<?php snippet('footer') ?>