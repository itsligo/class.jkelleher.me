<?php snippet( 'header'); ?>
<main role="main">
    <div class="container">
        <article>
            <div class="row">
                <aside class="span3">
                    <h1>
                        <?php echo html($page->title()) ?></h1>
                    <?php snippet( 'submenu')?>
                </aside>
                <div class="span6">
                    <header class="post-meta">
                        <!-- <h1><?php echo html($page->title()) ?></h1>-->
                        <h4>
                            <?php ($page->session()=='')? html('
                            <b>Session</b>'):''?>
                            <?php echo html($page->session())?></h4>
                    </header>
                    <div class="content">
                        <?php echo kirbytext($page->text()) ?></div>
                </div>
                <div class="span3">
                    <ul class="nav nav-list" data-spy="affix" data-offset-top="50">
                        <li>
                            <?php if ($page->parent()==TRUE ):?>
                            <h4>
                                <a href="<?php echo html($page->parent()->url()) ?>">Back to
                                    <?php echo html($page->parent()->title()) ?></a>
                            </h4>
                            <?php endif ?>
                        </li>
                        <!-- <li>
                                <?php echo html($page->title()) ?>
                        </li>
-->
                        <?php foreach((($page->haschildren())?$page->children():$page->siblings()) as $p): ?>
                        <li>
                            <a<?php echo ($p->isOpen()) ? ' class="current-page"' : '' ?> href="
                                <?php echo $p->url() ?>">
                                <i class="icon-chevron-right"></i>
                                <?php echo html($p->title()) ?></a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>