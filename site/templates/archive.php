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
	      <ul class="small-block-grid-2 medium-block-grid-3">
	        <?php foreach($archive->children()->flip()->visible() as $post): ?>
	          <li class="archive-post">
	            <?php $img = $post->images()->first(); ?>
	            <div class="archive-image imageFill">
				    <a href="<?php echo $post->url() ?>">
					    <img
					      src="<?php echo $img->url() ?>"
					      alt="<?php echo $img->name() ?>"
					      class=""
					      itemscope itemtype="http://schema.org/ImageObject"
		  			      itemprop="image"
					      itemprop="contentUrl"
					    />
				    </a>
			    </div>
	            <br />
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
	
</div>

<?php snippet('footer') ?>
