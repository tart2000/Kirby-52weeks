<?php snippet('header') ?>

  <main class="mdl-layout__content">
    <div class="demo-blog__posts mdl-grid">
      <div class="login">
            <?php if($error): ?>
            <div class="alert"><?php echo $page->alert()->html() ?></div>
            <?php endif ?>

            <form method="post">
              <div>
                <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" type="text" id="username" name="username">
                  <label class="mdl-textfield__label" for="username"><?php echo $page->username()->html() ?></label>
                </div>
              </div>
              <div>
                <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" type="password" id="password" name="password">
                  <label class="mdl-textfield__label" for="password"><?php echo $page->password()->html() ?></label>
                </div>
              </div>
              <div>      
                <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="login" value="<?php echo $page->button()->html() ?>">
              </div>
            </form>
      </div>
  </main>
</div>




<?php snippet('footer') ?>