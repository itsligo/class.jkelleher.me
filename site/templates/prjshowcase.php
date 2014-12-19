<?php snippet( 'header'); ?>
<main role="main">
    <?php $pj=strtolower($page->title())?>
    <div class="container">
        <article>
            <div class="row">
                <nav class="span3 submenu">
                    <h2><a href="<?php echo url('/prj300')?>">PRJ300</a></h2>
                    <h2><a href="<?php echo url('/prj400')?>">PRJ400</a></h2>
                </nav>
                <div class="span6">
                    <header class="post-meta">
                        <h4><?= $page->title() ?></h4>
                    </header>
                    <h4>
                            <?php snippet('alert')?>
                    </h4>
                    <div class="content">
                        <?php echo kirbytext($page->text()) ?></div>
                    <?php $items = $page->children()->visible()?>
                    <?php if($items && $items->count()): ?>
<!--                    <nav class="submenu">-->
<!--                        <ul class="nav nav-list">-->
                        <table class='table table-hover table-striped table-condensed'>
                            <?php foreach($items AS $item): ?>
                            <tr><td>
                                <a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="
                                    <?php echo $item->url() ?>">
<!--                                    <b><?php echo ucwords(preg_replace('/-/',' ',substr($item->url(),strrpos($item->url(),"/")+1),1)) .'&nbsp;&nbsp;&nbsp;';?></b>-->
                                    <b><?= $item->title() ?></b></br>
                                    <?= $item->names() ?></br>
                                    <?php echo html($item->shortdesc())?></br>
                                </a></td>
                            </tr>
                            <?php endforeach ?>
                        </table>
<!--                        </ul>-->
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