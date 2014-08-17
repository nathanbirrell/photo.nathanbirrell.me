<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo html($page->title()) ?> | <?php echo html($site->author()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">

  <?php echo css('assets/styles/app.css') ?>
  <?php echo js('bower_components/modernizr/modernizr.js') ?>

</head>

<body>
