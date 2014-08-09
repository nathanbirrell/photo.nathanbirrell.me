<?php snippet('header') ?>

<div class="row site-body">
  <!-- <div class="medium-10 small-centered columns">

  </div> -->

    <div class="large-4 medium-4 columns">
      <div class="panel">
        <h1 class="title"><?php echo html($site->title()) ?></h1>

        <?php snippet('menu') ?>
      </div>
    </div>
    <div class="large-8 medium-8 columns">
      <div class="panel">
        <p>Four columns</p>
      </div>
    </div>

</div>

<?php snippet('footer') ?>
