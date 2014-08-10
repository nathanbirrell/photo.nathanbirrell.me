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
          $tall = "";
          if ($h > $w) {
            $tall = "tall";
          }
        ?>
        <div class="full-image">
          <img
            src="<?php echo $img->url() ?>"
            alt="<?php echo $img->name() ?>"
            class="<?php echo $tall ?>"
          />
        </div>
      <?php endforeach ?>
    </div>

</div>

<?php snippet('footer') ?>
