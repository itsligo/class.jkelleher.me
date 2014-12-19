<?php snippet( 'header'); ?>
<!-- <?php snippet('menu'); ?>-->
<main role="main">
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <i class="icon-tasks page-title-icon"></i>
                    <h2>
                        <?php echo html($page->title()) ?></h2>
                    <p>
                        <?php echo html($page->shortDesc()) ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <article>
            <div class="row">
                <div class="span9">
                    <header class="post-meta">
                        <h1>
                            <?php echo html($page->title()) ?></h1>Posted on
                        <time datetime="<?php echo $page->date('c') ?>">
                            <?php echo $page->date('d.m.Y'); ?></time>
                        <?php if ($page->categories() != ''): ?> in
                        <ul class="category">
                            <?php foreach(str::split($page->categories()) as $category): ?>
                            <li>
                                <a href="<?php echo url('category:' . urlencode($category)) ?>">
                                    <?php echo $category; ?>
                                </a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                        <?php endif ?>
                    </header>
                    <div class="content">
                        <?php echo kirbytext($page->text()) ?></div>
                </div>
                <div class="span3">
                    <ul class="nav nav-list" data-spy="affix" data-offset-top="50">
                        <li>
                            <h3>Sidebar</h3>
                        </li>
                        <li>
                            <a href="#one">
                                <i class="icon-chevron-right"></i>One</a>
                        </li>
                        <li>
                            <a href="#two">
                                <i class="icon-chevron-right"></i>Two</a>
                        </li>
                        <li>
                            <a href="#three">
                                <i class="icon-chevron-right"></i>Three</a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>