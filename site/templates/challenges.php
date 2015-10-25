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
	    			<a href="<?php echo $site->url().'/challenges/'.'cat:'.$cat->uid() ?>">
		    			<div class="category mdl-shadow--2dp">
							<?php echo $cat->title() ?>
						</div>
					</a>
		    	<?php endforeach ?>
	    	</div>
    	</div>

        
    	<!-- catégorie as param ? -->
    	<?php $challenges   = $page->children(); ?>
		<?php if($cat = param('cat')) : ?>
		  <?php $challenges = $challenges->filterBy('cat', '*=',$cat); ?>
		  	<div class="demo-blog__posts mdl-grid">
			  <h3><?php echo $cat ?> (<?php echo $challenges->count() ?> challenges)</h3>
			</div>
		<?php endif ?>
		<!-- pagination -->
		<?php $challenges = $challenges->paginate(20); ?>
		<?php $pagination = $challenges->pagination(); ?>
		
		<div class="demo-blog__posts mdl-grid">	
			<?php foreach($challenges as $challenge) : ?>
				<?php snippet('challenge', array('page'=>$page, 'challenge'=>$challenge, 'columns'=>3)) ?>	
			<?php endforeach ?>
		</div>

		<!-- à vérifier un jour -->
		<div class="" role="navigation">
			<ul class="pager">
				<?php if($pagination->hasPrevPage()): ?>
				<li class="previous">
					<a href="<?php echo $pagination->prevPageUrl() ?>">
				  	&larr; previous
					</a>
				</li>
				<?php endif ?>

				<?php if($pagination->hasNextPage()): ?>
				<li class="next">
					<a href="<?php echo $pagination->nextPageUrl() ?>" class>
					  next &rarr;
					</a>
				</li>
				<?php endif ?>
			</ul>
		</div>


		
<?php snippet('footer') ?>