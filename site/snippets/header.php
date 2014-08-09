<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <!-- <link rel="stylesheet" href="assets/stylesheets/app.css" /> -->
  <?php echo css('assets/stylesheets/app.css') ?>
  <?php echo js('bower_components/modernizr/modernizr.js') ?>


  <!-- // <script src="bower_components/modernizr/modernizr.js"></script> -->

  <script src=""></script>

</head>

<body>

  <header class="row">
    <div class="small-12 small-centered columns">
      <h1 class="text-center title"><?php echo html($site->title_short()) ?></h1>
      <h2 class="text-center subtitle"><?php echo html($site->subtitle()) ?></h2>
    </div>
  </header>
