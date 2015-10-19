<?php snippet('header') ?>


<!-- top banner -->
<?php if ($page->hasImages()) : ?>
	<div class="challenge-head" style="background-image:url('<?php snippet('cover-image', array('post'=>$page)) ?>');">
		<div class="challenge-title">
			<?php $user = $page->author() ?>
			<?php $author = $site->user($page->author()) ?>
			<div class="center">
				<?php snippet('avatar', array('author'=>$author, 'size'=>150, 'ifid'=>'')) ?>
			</div>
			<h3><?php echo $page->title() ?></h3>
			<p><strong>by <?php echo $user ?></strong></p>
			<p><?php echo $page->text() ?></p>
			<?php if ($page->cat() != '') : ?>
				<a href="#">
					<div class="category mdl-shadow--2dp">
						<?php echo $page->cat() ?>
					</div>
				</a>
			<?php endif ?>
			
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
		<?php foreach($page->children()->flip() as $week) : ?>
			<?php snippet('week', array('week'=>$week, 'col'=>2)) ?>
		<?php endforeach ?>
		</div>
		
<?php snippet('footer') ?>


