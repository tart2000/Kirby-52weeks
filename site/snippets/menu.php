<header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
	      <!-- Title -->
	    <span class="mdl-layout-title"><a href="<?php echo $site->url() ?>">52weeks</a></span>
	      <!-- Add spacer, to align navigation to the right -->
	    
	    <nav class="mdl-navigation">
		    <?php if ($page->template() == 'post') : ?>
			    <a class="mdl-navigation__link" href="<?php echo $page->parent()->url() ?>">> <?php echo $page->parent()->title() ?></a>
			<?php endif ?>
		</nav>

	    <div class="mdl-layout-spacer"></div>
	      <!-- Navigation -->
	    <nav class="mdl-navigation">
	      	<!-- add other links here (FAQ?) -->
	    	<!-- <a class="mdl-navigation__link" href="">Link</a> -->

	  		<?php if($user = $site->user()): ?>
	  			<?php snippet('avatar',array('author'=>$user,'size'=>30,'ifid'=>'pop')) ?>
		      	<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="pop">
			    	<?php $name = $user->username() ?>
			    	<?php $challenges = page('challenges')->children()->filterBy('author', '==', $name) ?>
			    	<?php foreach ($challenges as $c) : ?>
				  		<li class="mdl-menu__item"><a href="<?php echo $site->url() ?>/panel/#/pages/show/<?php echo $c->uri() ?>/p:1">New in <?php echo $c->title() ?></a></li>
				  	<?php endforeach ?>
				  <li class="mdl-menu__item"><a href="<?php echo $site->url() ?>/panel/#/users/edit/<?php echo $user->username() ?>">Edit profile</a></li>
				  <li class="mdl-menu__item"><a href="<?php echo url('logout') ?>">Logout</a></li>
				</ul>
			<?php else : ?>
				<a class="mdl-navigation__link" href="#">Sign up</a>
				<a class="mdl-navigation__link" href="<?php echo url('login') ?>">Log in</a>
			<?php endif ?>

		</nav>
    </div>
</header>

<div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><a href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a></span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="<?php echo $site->url() ?>/challenges">Challenges</a>
      <a class="mdl-navigation__link" href="#">FAQ</a>
      <hr>
      <a class="mdl-navigation__link" href="#">Feedback</a>
      <hr>
      <?php if($user = $site->user()): ?>
		    	<?php $name = $user->username() ?>
		    	<?php $challenges = page('challenges')->children()->filterBy('author', '==', $name) ?>
		    	<?php foreach ($challenges as $c) : ?>
			  		<a href="<?php echo $site->url() ?>/panel/#/pages/show/<?php echo $c->uri() ?>/p:1" class="mdl-navigation__link">New in <?php echo $c->title() ?></a>
			  	<?php endforeach ?>
			  <a href="<?php echo $site->url() ?>/panel/#/users/edit/<?php echo $user->username() ?>" class="mdl-navigation__link">Edit profile</a>
			  <a href="<?php echo url('logout') ?>" class="mdl-navigation__link">Logout</a>
		<?php else : ?>
			<a class="mdl-navigation__link" href="#">Sign up</a>
			<a class="mdl-navigation__link" href="<?php echo url('login') ?>">Log in</a>
		<?php endif ?>

<!--       	<hr>
      	<strong>Categories</strong>
      	<?php foreach (page('categories')->children() as $cat) : ?>
      		<a class="mdl-navigation__link" href="<?php echo $site->url() ?>/challenges"><?php echo $cat->title() ?></a>
	    <?php endforeach ?> -->
    </nav>
</div>