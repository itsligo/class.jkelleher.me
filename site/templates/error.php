<?php snippet( 'header'); ?>
<!-- <?php snippet('menu'); ?>-->
<main role="main">
    <div class="container">
        <article class="page">
            <div class="row">
                <div class="span4 offset1">
                    <img src="/content/error/gus.jpg" style="width:300px; height:300px"  class="img-circle">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
                <div class="span7">
                <h1><?php echo html($page->title()) ?></h1>
                    <br/>
                <div class="content">
                    <?php echo kirbytext($page->text()) ?></div>
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>