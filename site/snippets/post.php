<div class="medium-9 columns panel post">
  <?php
    if ($page->isHomePage()) {
      $post = $pages->find('a')->children->last();
    } else {
      $post = $page;
    }
    $date = $post->date('d M, Y');
  ?>

  <h1><?php echo $post->title() ?></h1>

  <span class="date"><?php echo $date ?></span>

  <?php echo kirbytext($post->text()) ?>

  <?php snippet('post-image') ?>
</div>
