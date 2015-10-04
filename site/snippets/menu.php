<header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
	      <!-- Title -->
	    <span class="mdl-layout-title"><a href="<?php echo $site->url() ?>">52weeks</a></span>
	      <!-- Add spacer, to align navigation to the right -->
	    <div class="mdl-layout-spacer"></div>
	      <!-- Navigation -->
	    <nav class="mdl-navigation">
	      	<!-- add other links here -->
	    	<!-- <a class="mdl-navigation__link" href="">Sign in</a> -->
	    
      	

  		<?php if($user = $site->user()): ?>
	      <?php if($avatar = $user->avatar()): ?>
	      	<div id="pop" class="minilogo" style="background-image: url(<?php echo $avatar->url() ?>)"></div>
	      <?php else: ?>
	      	<div id="pop" class="minilogo" style="background-image: url(<?php echo url('assets/images/avatar.jpg') ?>)"></div>
	      <?php endif ?>
	      	<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
		    for="pop">
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