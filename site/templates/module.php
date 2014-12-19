<?php snippet( 'header'); ?>
<main role="main">
    <div class="container">
        <article>
            <div class="row">
                <nav class="span3 submenu">
                    <?php echo snippet( 'modulemenu')?>
                </nav>
                <div class="span6">
                    <header class="post-meta">
                        <h5>
                            <?php snippet( 'alert')?>
                        </h5>
                        <h4>
                            <?php ($page->session()=='')? html('
                            <b>Session</b>'):''?>
                            <?php echo html($page->session())?></h4>
                    </header>
                    <div class="content">
                        <?php echo kirbytext($page->text()) ?></div>
                </div>
                <div class="span3">
                    <?php snippet('twitter')?>
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet('updateNav',array('menu'=>'module'))?>
<?php snippet( 'footer') ?>