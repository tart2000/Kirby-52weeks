<?php if ($author->avatar() != '') : ?>
	<?php $avatar = $author->avatar()->url() ?>
<?php elseif ($author->gravatar() != '') : ?>
	<?php $avatar = $author->gravatar() ?>
<?php else : ?>
	<?php $avatar = '/assets/images/avatar.jpg' ?>
<?php endif ?>

<div class="minilogo" <?php e($ifid,'id='.$ifid) ?> style="background-image: url(<?php echo $avatar ?>); <?php e($size!='','width:'.$size.'px;') ?> <?php e($size!='','height:'.$size.'px;') ?>"></div>
