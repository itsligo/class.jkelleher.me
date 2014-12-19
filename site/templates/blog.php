<?php snippet( 'header'); ?>
<main role="main">
<?php snippet('tagcloud');?>
<?php $articles = tags($pages);?>
    <div class="container">
        <article>
            <div class="row">
                <nav class="span3 submenu">
                    <?php $blog=$pages->find('blog'); $tags = tagcloud($blog); ?>
                    <ul class="nav ">
                        <li><a href="/blog"><h3>All Posts</h3></a></li>
                    </ul>
                        <?php foreach($tags as $tag): ?>
                            <a class="tag"  href="<?php echo $tag->url() ?>">
                                <?php echo $tag->name() ?></a>
                            <?php endforeach ?>
                </nav>
                <div class="span6">
                    <header class="post-meta">
                        <h5>
                            <?php snippet( 'alert')?>
                        </h5>
                    </header>
                    <?php foreach($articles as $article): ?>
                    <article class="blog format_text">
                        <header class="post-meta">
                            <h1>
                                <a href="<?php echo $article->url() ?>">
                                    <?php echo html($article->title()) ?></a>
                            </h1>
                            <h6>Posted on<time datetime="<?php echo $article->date('c') ?>">
                                <?php echo $article->date('d.m.Y'); ?></time></h6>
                            <?php if ($article->categories() != ''): ?> in
                            <ul class="category">
                                <?php foreach(str::split($article->categories()) as $category): ?>
                                <li>
                                    <a href="<?php echo url('category:' . urlencode($category)) ?>">
                                        <?php echo $category; ?>
                                    </a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                            <?php endif ?>
                        </header>
                        <p>
                            <?php if ($article->hasImages()):?>
                            <img class="img-rounded" style="width:100px; margin:0px 10px 5px 10px; float:left" src="<?php echo $article->images()->first()->url()?>">
                            <?php endif ?>
                            <?php echo excerpt($article->text(), 400) ?></p>
                        <a class="read_more pull-right" href="<?php echo $article->url() ?>">read more →</a>
                    </article>
                    <?php endforeach ?>
                    <?php if($articles->pagination()->hasPages()): ?>
                    <nav class="pagination cf">
                        <?php if($articles->pagination()->hasPrevPage()): ?>
                        <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; newer posts</a>
                        <?php endif ?>
                        <?php if($articles->pagination()->hasNextPage()): ?>
                        <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">older posts &rsaquo;&rsaquo;</a>
                        <?php endif ?>
                    </nav>
                    <?php endif?>
                </div>
                <div class="span3"></div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>