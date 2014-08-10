<div class="medium-9 columns panel post">
  <?php
    $post = $pages->find('a')->children->last();
    $date = $post->date('d M, Y');
  ?>

  <h1><?php echo $post->title() ?></h1>

  <span class="date"><?php echo $date ?></span>

  <?php echo kirbytext($post->text()) ?>

  <?php foreach($post->images() as $img): ?>
    <?php
      $w = $img->width();
      $h = $img->height();
      $class = "post-image";
      if ($h > $w) {
        $class = "post-image-tall";
      }
    ?>
    <div class="full-image">
      <img
        src="<?php echo $img->url() ?>"
        alt="<?php echo $img->name() ?>"
        class="<?php echo $class ?>"
      />
    </div>
  <?php endforeach ?>
</div>
