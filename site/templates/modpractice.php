<?php snippet( 'header'); ?>
<main role="main">
    <div class="container">
        <article>
            <div class="row">
                <nav class="span3">
                    <?php echo snippet( 'modulemenu')?>
                </nav>
                <div class="span6">
                    <header class="post-meta">
                        <h4>
                            <?php ($page->session()=='')? html('
                            <b>Session</b>'):''?>
                            <?php echo html($page->session())?></h4>
                    </header>
                    <div class="content">
                        <a href='<?php echo $page->parent()->url() ?>'>
                            Back to <?php echo $page->parent()->title() ?>
                        </a>
                        <?php echo kirbytext($page->text()) ?>
                    </div>
                    <?php snippet( 'gallery') ?>
                    <?php snippet( 'prevnext') ?>
                </div>
                <div class="span3">
                    <h4>Practices</h4>
                    <i class='icon-github icon-large'><a href='<?php echo $page->solution1()?>'>&nbsp;<?=$page->practice1()?></a></i>
                    <i class='icon-github icon-large'><a href='<?php echo $page->solution1()?>'>&nbsp;<?=$page->practice1()?></a></i>
                    <i class='icon-github icon-large'><a href='<?php echo $page->solution1()?>'>&nbsp;<?=$page->practice1()?></a></i>
                    <i class='icon-github icon-large'><a href='<?php echo $page->solution1()?>'>&nbsp;<?=$page->practice1()?></a></i>
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>