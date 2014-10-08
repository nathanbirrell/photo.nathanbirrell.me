<?php snippet('header') ?>

<div class="row site-body" itemscope itemtype="http://schema.org/Article">
    <section>

	  <article class="medium-7 medium-offset-1 columns panel post" itemprop="articleSection">

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

	      <h1 id="title" itemprop="name"><?php echo $post->title() ?></h1>

	      <span class="date">
	        <time datetime="<?php echo $dateRaw ?>" itemprop="datePublished" content="2014-08-21">
	          <?php echo $date ?>
	        </time>
	      </span>

	      <span class="hide author" itemprop="author"><?php echo $site->author() ?></span>
	      <a href="https://plus.google.com/116914196395616585208? rel=author" class="hide"><?php echo $site->author() ?></a>

	    </header>

	    <section itemprop="articleBody">
	      <?php echo kirbytext($post->text()) ?>

	      <?php snippet('post-images') ?>
	    </section>

	  </article>

	</section>
</div>

<?php snippet('footer') ?>
