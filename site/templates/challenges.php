<?php snippet('header') ?>

<!-- top banner -->
<?php if ($page->hasImages()) : ?>
	<div class="challenge-head" style="background-image:url('<?php echo $page->images()->first()->url() ?>');">
		<div class="challenge-title">
			<h3><?php echo $page->title() ?></h3>
			<!-- <p><?php echo $page->text() ?></p> -->
		</div>
	</div>
<?php endif ?>
<!-- end banner --> 

<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
    <main class="challenge_content">
    	<div class="demo-blog__posts">
	    	<div class="categories">
	    		<?php foreach(page('categories')->children() as $cat) : ?>
	    			<div class="category mdl-shadow--2dp">
						<?php echo $cat->title() ?>
					</div>
		    	<?php endforeach ?>
	    	</div>
    	</div>

        <div class="demo-blog__posts mdl-grid">
		<?php foreach($page->children() as $challenge) : ?>
			<?php snippet('challenge', array('page'=>$page, 'challenge'=>$challenge, 'columns'=>3)) ?>	
		<?php endforeach ?>
		</div>
		
<?php snippet('footer') ?>