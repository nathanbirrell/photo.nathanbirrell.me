<?php
    if ($page->isHomePage()) {
      $post = $pages->find('a')->children->last();
    } else {
      $post = $page;
    }
?>

<?php foreach($post->images() as $img): ?>
  <?php
    $w = $img->width();
    $h = $img->height();
    $class = "post-image";

    // style tall images
    if ($h > $w) {
      $class = "post-image-tall";
    }
  ?>
  <div class="full-image" itemscope itemtype="http://schema.org/ImageObject">
    <img
      src="<?php echo $img->url() ?>"
      alt="<?php echo $img->name() ?>"
      class="<?php echo $class ?>"
      itemprop="image"
      itemprop="contentUrl"
    />
  </div>
<?php endforeach ?>
