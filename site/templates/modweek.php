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
                        <h4>
                            <?php echo ucwords(preg_replace('/-/',' ',$site->uri()->path()->last(),1))?>
                            <?php ($page->session()=='')? html('
                            <b>Session</b>'):''?>
                            <?php echo html($page->session())?></h4>
                        <h5><a href='<?php echo $page->parent()->url() ?>'>
                            Back to <?php echo $page->parent()->title() ?>
                        </a></h5>
                    </header>
                    <div class="content">
                        <?php snippet( 'alert') ?>
                        <?php echo kirbytext($page->text()) ?></div>
<!--                    <?php snippet( 'prevnext') ?>-->
                </div>
                <div class="span3">
                <!-- Removed when practices moved to Github
                     Will list subfolders with modpractice.txt files. Instead using README.md files on Github.    -->
                    <!-- <?php if ($page->hasChildren()):?>
                    <h4>Practices</h4>
                    <?php endif?>
                    <?php snippet('childrenMenu')?>
-->
                    <?php if ($page->practices()):?>
                        <h3><a href='http://www.github.com'><i class='icon-github icon-large'></i></a>&nbsp;&nbsp;Practice</h3>
                        <?php echo markdown($page->practices())?>    
                    <?php endif?>
                    
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>