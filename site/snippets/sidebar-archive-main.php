<?php foreach($pages->visible() AS $topLevelPage): ?>
<li class="archive-title">
  <h3>
    <a href="<?php echo $topLevelPage->url() ?>"><?php echo html($topLevelPage->title()) ?></a>
  </h3>
</li>
  <ul>
    <?php $i = 0; ?>
    <?php foreach($topLevelPage->children()->flip()->visible() as $post): ?>
      <li class="archive-post">
        <a href="<?php echo $post->url() ?>">
          <?php echo html($post->title()) ?>
        </a>
      </li>
      <?php if (++$i == 8) break; ?>
    <?php endforeach ?>
   </ul>
<?php endforeach ?>