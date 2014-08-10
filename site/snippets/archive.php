<nav class="menu">
  <ul class="clearfix">
    <?php foreach($pages->visible() AS $p): ?>
      <li>
        <h3><?php echo html($p->title()) ?></h3>
      </li>
       <ul>
        <?php foreach($p->children()->visible() as $post): ?>
        <li>
           <i><?php echo html($post->title()) ?></i>
        </li>
        <?php endforeach ?>
       </ul>
    <?php endforeach ?>
  </ul>
</nav>
