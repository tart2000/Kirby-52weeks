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
			<?php snippet('challenge', array('page'=>$page, 'challenge'=>$challenge, 'columns'=>2)) ?>	
		<?php endforeach ?>
		</div>
		
<?php snippet('footer') ?>