<?php snippet( 'header'); ?>
<main role="main">
    <?php $pj=strtolower($page->title())?>
    <div class="container">
        <article>
            <div class="row">
                <nav class="span3 submenu">
                <?php echo snippet( 'modulemenu')?>
                    </nav>
                <div class="span6">
                    <header class="post-meta">
                        <h4>
                            <?php ($page->session()=='')? html('
                            <b>Session</b>'):''?>
                            <?php echo html($page->session())?></h4>
                    </header>
                    <h4>
                            <?php snippet('alert')?>
                    </h4>
                    <div class="content">
                        <?php echo kirbytext($page->text()) ?></div>
                    <?php $items = $page->children()->visible()?>
                    <?php if($items && $items->count()): ?>
                    <nav class="submenu">
                        <ul class="nav nav-list">
                            <?php foreach($items AS $item): ?>
                            <li>
                                <a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="
                                    <?php echo $item->url() ?>">
                                    <?php echo ucwords(preg_replace('/-/',' ',substr($item->url(),strrpos($item->url(),"/")+1),1));?>
                                    <?php echo html($item->description())?>
                                </a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </nav>
                    <?php endif ?>
                </div>
                <div class="span3">
                    
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>