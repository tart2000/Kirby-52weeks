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
			<?php $user = $page->author() ?>
			<div class="avatar">
				<?php if($avatar = $site->user($user)->avatar()): ?>
					<?php $image = $avatar->url() ?>
					<?php echo thumb($avatar, array('width' => 150, 'height' => 150, 'crop' => true)) ?>
				<?php endif ?>
			</div>
			<h3><?php echo $page->title() ?> - Week <?php echo $page->children()->count() ?>/52</h3>
			<p><?php echo $page->text() ?></p>
			<strong>by <?php echo $user ?></strong>
		</div>

	</div>
<?php endif ?>
<!-- end banner --> 

<div class="progress">
	<?php $percent = $page->children()->count()/52*100 ?>
	<div class="percent" style="width:<?php echo $percent ?>%"></div>
</div>

<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
    <main class="challenge_content">
        <div class="demo-blog__posts mdl-grid">
        <?php $counter = 1 ?>
		<?php foreach($page->children() as $week) : ?>
			<div class="mdl-card on-the-road-again mdl-cell mdl-cell--6-col">
	            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php echo $week->images()->first()->url() ?>)">
	              <h3><a href="#"><?php echo $week->title(); ?></a></h3>
	            </div>
	            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
	              	<div>
	                	<strong><?php echo $page->title() ?> - Week <?php echo $counter ?>/52</strong>
	              	</div>
	            </div>
	        </div>
 			<?php $counter++ ?>
		<?php endforeach ?>
		</div>
<?php snippet('footer') ?>


