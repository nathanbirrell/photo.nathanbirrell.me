<nav class="menu">
  <ul class="clearfix">
    <?php foreach($pages->visible() AS $p): ?>
      <li>
        <a class="center" <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>">
          <?php echo html($p->title()) ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
