<aside>
  <div id="sidebar" class="medium-3 columns panel sidebar">
    <h1>
      <a href="<?php echo $pages->find('home')->url() ?>">
        <?php echo html($site->title()) ?>
      </a>
    </h1>
    <h2 class="subtitle">
      <?php echo $site->subtitle() ?>
    </h2>

    <?php
      $about = $pages->find('about');
      echo kirbytext($about->text());
    ?>

    <?php snippet('sidebar-archive') ?>
  </div>
</aside>
