<aside>
  <div id="sidebar" class="medium-3 columns panel sidebar">
    <h1>
      <a href="<?php echo $pages->find('home')->url() ?>" itemprop="name">
        <?php echo html($site->title()) ?>
      </a>
    </h1>
    <h2 class="subtitle">
      <?php echo $site->subtitle() ?>
    </h2>

    <span class="hide" itemprop="author" itemscope itemtype="http://schema.org/Person">
      <span itemprop="name">
        <?php echo $site->author() ?>
      </span>
    </span>

    <?php
      $about = $pages->find('about');
      echo kirbytext($about->text());
    ?>

    <?php snippet('sidebar-archive') ?>
  </div>
</aside>
