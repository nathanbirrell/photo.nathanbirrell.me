<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="stylesheet" href="assets/css/app.min.css">

  <script src="assets/js/modernizr.min.js"></script>

</head>

<body>

  <header class="row">
    <div class="small-12 small-centered columns">
      <h1 class="text-center title"><?php echo html($site->title_short()) ?></h1>
      <h2 class="text-center subtitle"><?php echo html($site->subtitle()) ?></h2>
    </div>
  </header>
