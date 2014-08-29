<aside>
  <div id="sidebar" class="medium-3 columns panel sidebar">
    <h1>
      <a href="<?php echo $pages->find('home')->url() ?>" itemprop="name">
        <?php echo html($site->title()) ?>
      </a>
    </h1>
    <h2 class="subtitle">
      <?php echo $site->subtitle() ?>
    </h2>

    <span class="hide" itemscope itemtype="http://schema.org/Person">
      <span itemprop="name">
        <?php echo $site->author() ?>
      </span>
    </span>

    <?php
      $about = $pages->find('about');
      echo kirbytext($about->text());
    ?>

    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup" class="row">
      <form action="//nathanbirrell.us9.list-manage.com/subscribe/post?u=274a5d146eb25fae774256095&amp;id=d8f71524f4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate large-12 columns" target="_blank" novalidate>
        <div class="row collapse">
          <label for="mce-EMAIL">Subscribe via email</label>
          <div class="small-10 columns">
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email" required>
          </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_274a5d146eb25fae774256095_d8f71524f4" tabindex="-1" value=""></div>
            <div class="small-2 columns clear">
              <input type="submit" value="Go" name="subscribe" id="mc-embedded-subscribe" class="button postfix">
            </div>
          </div>
      </form>
    </div>
    <!--End mc_embed_signup-->

    <?php snippet('sidebar-archive') ?>
  </div>
</aside>
