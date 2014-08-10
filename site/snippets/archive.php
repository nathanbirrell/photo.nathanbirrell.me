<nav class="menu">
  <ul class="clearfix">
    <?php foreach($pages->visible() AS $p): ?>
      <li>
        <h3><?php echo html($p->title()) ?></h3>
      </li>
       <ul>
        <?php foreach($p->children()->visible() as $post): ?>
        <li>
          <a href="<?php echo $post->url() ?>">
            <?php echo html($post->title()) ?>
          </a>
        </li>
        <?php endforeach ?>
       </ul>
    <?php endforeach ?>
  </ul>
</nav>
