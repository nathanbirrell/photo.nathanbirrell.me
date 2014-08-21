<section>

  <article class="medium-9 medium-offset-3 columns panel post">

    <a href="https://plus.google.com/116914196395616585208? rel=author" class="hide">+</a>

    <?php
      if ($page->isHomePage()) {
        $post = $pages->find('a')->children->last();
      } else {
        $post = $page;
      }
      $date = $post->date('d F, Y');
      $dateRaw = $post->date("Y-m-d\TH:i:s");
    ?>

    <header>

      <h1 id="title"><?php echo $post->title() ?></h1>

      <span class="date"><time datetime="<?php echo $dateRaw ?>"><?php echo $date ?></time></span>

    </header>

    <?php echo kirbytext($post->text()) ?>

    <?php snippet('post-images') ?>

  </article>

</section>
