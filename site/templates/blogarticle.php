<?php snippet( 'header'); ?>
<main role="main">
    <div class="container">
        <article>
            <div class="row">
                <div class="span3">
                    <ul class="nav ">
                        <li><a href="/blog"><h3>All Posts</h3></a></li>
                    </ul>
                    <?php $blog=$pages->find('blog'); $tags = tagcloud($blog); ?>
                    <?php snippet('tagcloud');?>
                    <?php $articles = tags($pages);?>
                        <?php foreach($tags as $tag): ?>
                            <a class="tag"  href="<?php echo $tag->url() ?>">
                                <?php echo $tag->name() ?></a>
                            <?php endforeach ?>
                    </div>  
                <div class="span6">
                    <header class="post-meta">
                        <h5><?php snippet('alert')?></h5>
                        <h3>
                            <?php echo kirbytext($page->description())?></h3>
                    </header>
                    <div class="content">
                        <?php echo kirbytext($page->text()) ?></div>
                </div>
                <div class="span3">
                    <?php snippet('twitter')?>
<!--
                    <ul class="nav nav-list" data-spy="affix" data-offset-top="50">
                        <li>
                            <?php if ($page->parent()==TRUE):?>
                            <h4>
                                <a href="<?php echo html($page->parent()->url()) ?>">Back to
                                    <?php echo html($page->parent()->title()) ?></a>
                            </h4>
                            <?php endif ?>
                        </li>
                        <?php foreach((($page->haschildren())?$page->children():$page->siblings()) as $p): ?>
                        <li>
                            <a<?php echo ($p->isOpen()) ? ' class="current-page"' : '' ?> href="
                                <?php echo $p->url() ?>">
                                <i class="icon-chevron-right"></i>
                                <?php echo html($p->title()) ?></a>
                        </li>
                        <?php endforeach ?>
                    </ul>
-->
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>