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
                        <a href='<?php echo $page->parent()->url() ?>'>Back to
                            <?php echo $page->parent()->title() ?></a>
                        <?php echo kirbytext($page->text()) ?>
                        <?php $items=$page->documents() ?>
                        <?php if($items && $items->count()): ?>
                        <nav class="submenu">
                            <ul class="nav nav-list">
                                <?php foreach($items AS $item): ?>
                                <li>
                                    <a<?php echo ($item->name()) ? ' class="active"' : '' ?> href="
                                        <?php echo $item->url() ?>">
                                        <?php echo html($item->name()) ?></a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </nav>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>