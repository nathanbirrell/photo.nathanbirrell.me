<?php snippet('header') ?>

<div class="row site-body" itemscope itemtype="http://schema.org/Article">
    <?php snippet('sidebar') ?>

    <section>
	  <article class="medium-9 medium-offset-3 columns panel post archive" itemprop="articleSection">

	    <?php
	    	$archive = $page;
	    ?>

	    <header>

	      <h1 id="title" itemprop="name"><?php echo $archive->title() ?></h1>

	      <span class="hide author" itemprop="author"><?php echo $site->author() ?></span>
	      <a href="https://plus.google.com/116914196395616585208? rel=author" class="hide"><?php echo $site->author() ?></a>

	    </header>

	    <section itemprop="articleBody">
	      <?php echo kirbytext($archive->text()) ?>

	      <h3 class="archive-title">
	        <a href="<?php echo $archive->url() ?>"><?php echo html($archive->title()) ?></a>
	      </h3>
	      <ul>
	        <?php foreach($archive->children()->flip()->visible() as $post): ?>
	          <li class="archive-post">
	            <a href="<?php echo $post->url() ?>">
	              <?php echo html($post->title()) ?>
	            </a>
	            <p class="date"><?php echo html($post->date('d F, Y')) ?></p>
	          </li>
	        <?php endforeach ?>
	       </ul>

	    </section>

	  </article>
	</section>


    <?php snippet('sidebar-archive-mobile') ?>
</div>

<?php snippet('footer') ?>
