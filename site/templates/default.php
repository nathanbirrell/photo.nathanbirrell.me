<?php snippet('header') ?>

<div class="row site-body">

    <div class="medium-3 columns panel header">
      <h1 class="title">
        <a href="<?php echo $pages->findByTitle("home") ?>">
          <?php echo html($site->title()) ?>
        </a>
      </h1>

      <?php echo kirbytext($pages->findByDirname("about")->Text()) ?>

      <?php snippet('menu') ?>

      <div class="footer">
        <?php echo kirbytext($site->copyright()) ?>
      </div>
    </div>

    <div class="medium-9 columns panel">

    </div>

</div>

<?php snippet('footer') ?>
