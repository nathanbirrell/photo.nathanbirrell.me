<?php snippet('header') ?>

<div class="row site-body">

    <div class="medium-3 columns panel header">
      <h1>
        <a href="<?php echo $pages->find('home')->url() ?>">
          <?php echo html($site->title()) ?>
        </a>
      </h1>
      <h2 class="subtitle">
        <?php echo html($site->subtitle()) ?>
      </h2>

      <?php
        $about = $pages->find('about');
        echo kirbytext($about->text());
      ?>

      <?php snippet('menu-archive') ?>

      <div class="footer">
        <?php echo kirbytext($site->copyright()) ?>
      </div>
    </div>


    <?php snippet('post-images') ?>


</div>

<?php snippet('footer') ?>
