        <footer class="mdl-mini-footer">
          
          <div class="mdl-mini-footer--left-section">
            <!-- 
            <?php if (!$site->facebook()->empty()): ?>
            <a href="https://twitter.com/<?php echo $site->twitter() ?>" target="_blank"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter"></button></a>
            <?php endif ?>
            <?php if (!$site->twitter()->empty()): ?>
            <a href="https://facebook.com/<?php echo $site->facebook() ?>" target="_blank"><button class="mdl-mini-footer--social-btn social-btn social-btn__blogger"></button></a>
            <?php endif ?>
            -->
            <a href="#">Feedback</a>
          </div> 
          <div class="mdl-mini-footer--right-section">
          <?php snippet('share', array('align' => 'top-right', 'class' => 'mdl-mini-footer--social-btn social-btn__share')) ?>
          </div>
        </footer>
      </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
  </body>

  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
  <?php echo js("assets/js/main.min.js") ?>
  <?php echo js("@auto") ?>

  <?php snippet('analytics') ?>
</html>
