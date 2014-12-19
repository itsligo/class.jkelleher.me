<?php snippet( 'header'); ?>
<!-- <?php snippet('menu'); ?>-->
<main role="main">
    <div class="container">
        <article>
            <div class="row">
                <div class="span12" style='margin-top:-60px;'>
                    <div id='slider' class="flexslider">
                        <ul class="slides">
                            <?php foreach($page->images()->shuffle()->limit(5) as $image): ?>
  <li data-thumb=''>
    <img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" />
<!--      <img class="lazy" data-src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" src="/assets/img/devon.jpg" alt="<?php echo $image->name() ?>" />-->
      <p class="flex-caption"><?php echo $image->name()?></p>
  </li>
  <?php endforeach ?>
                        </ul>
                    </div>
                    <h4>
                            <?php snippet('alert')?>
                    </h4>
                    <div class="row">
                    <div class="content span7">
                        <?php echo kirbytext($page->text()) ?></div>
                        </div>
                </div>
                <div class="">
                    <!-- <ul class="nav nav-list" data-spy="affix" data-offset-top="50">
                        <li>
                            <h3>Sidebar</h3>
                        </li>
                        <li>
                            <a href="#one">
                                <i class="icon-chevron-right"></i>One</a>
                        </li>
                        <li>
                            <a href="#two">
                                <i class="icon-chevron-right"></i>Two</a>
                        </li>
                        <li>
                            <a href="#three">
                                <i class="icon-chevron-right"></i>Three</a>
                        </li>
                    </ul>
-->
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>