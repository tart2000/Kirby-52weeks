<?php if ($author->avatar() != '') : ?>
	<?php $avatar = $author->avatar()->url() ?>
<?php elseif ($author->gravatar() != '') : ?>
	<?php $avatar = $author->gravatar() ?>
<?php else : ?>
	<?php $avatar = '/assets/images/avatar.jpg' ?>
<?php endif ?>

<div class="minilogo" style="background-image: url(<?php echo $avatar ?>)"></div>
<div class="left">
	<?php if ($author->firstName() || $author->lastName()): ?>
		<strong><?php echo $author->firstName() ?> <?php echo $author->lastName() ?></strong>
	<?php else: ?>
		<strong><?php echo $author->username() ?></strong>
	<?php endif ?>
		<span>week <?php echo $week ?></span>
</div>