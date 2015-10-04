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
	    </nav>
      	

  		<?php if($user = $site->user()): ?>
	      <?php if($avatar = $user->avatar()): ?>
	      	<div id="pop" class="minilogo" style="background-image: url(<?php echo $avatar->url() ?>)"></div>
	      <?php else: ?>
	      	<div id="pop" class="minilogo" style="background-image: url(<?php echo url('assets/images/avatar.jpg') ?>)"></div>
	      <?php endif ?>
	      	<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
		    for="pop">
			  <li class="mdl-menu__item">Some Action</li>
			  <li class="mdl-menu__item">Another Action</li>
			  <li disabled class="mdl-menu__item">Edit profile</li>
			  <li disabled class="mdl-menu__item">Logout</li>
			</ul>
		<?php endif ?>
    </div>
  </header>