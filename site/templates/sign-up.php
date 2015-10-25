<?php snippet('header') ?>

  <main class="mdl-layout__content">
    <div class="demo-blog__posts mdl-grid">
      <div class="login">

            <form method="post">
              <div>
                <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" type="text" id="username" name="username">
                  <label class="mdl-textfield__label" for="username"><?php echo $page->username()->html() ?></label>
                </div>
              </div>

              <div>
                <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" type="text" id="password" name="challenge">
                  <label class="mdl-textfield__label" for="challenge">Challenge title</label>
                </div>
              </div>

              <div>
                <div class="mdl-textfield mdl-js-textfield">
                  <select class="mdl-textfield__input" type="text" id="category" name="category">
                    <option label="Category"></option>
                    <?php foreach (page('categories')->children() as $cat) : ?>
                      <option value="<?php echo $cat->title() ?>"><?php echo $cat->title() ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>

              <div>
                <div class="mdl-textfield">
                  <em>We're still running in private Beta. You'll receive an email when we're ready for you. Thank you for your patience.</em>
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