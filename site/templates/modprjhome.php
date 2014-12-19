<?php snippet( 'header'); ?>
<main role="main">
    <?php $pj = strtolower($page->title())?>
    <div class="container">
        <article>
            <div class="row">
                <aside class="span3">
                    <h1><?php echo html($page->title()) ?></h1>
                    <?php snippet('submenu')?>
                </aside>
                <div class="span6">
                    <header class="post-meta">
<!--                         <h1><?php echo html($page->title()) ?></h1>-->
                        <h4>
                            <?php snippet('alert')?>
                        </h4>
                        <h4>
                            <?php ($page->session()=='')? html('
                            <b>Session</b>'):''?>
                            <?php echo html($page->session())?></h4>
                    </header>
                    <div class="content">
                        <?php echo kirbytext($page->text()) ?></div>
                    <div class="what-we-do">
                        <div class="row">
                            <div class="service span2">
                                <div class="icon-awesome" style="text-align:center">
                                    <a style='box-shadow:none;background:transparent; color:#888' href="<?php echo url($pj . '/begin')?>">
                                        <i class="icon-eye-open"></i>
                                    </a>
                                </div>
                                <div style="margin-left:15px">
                                    <h4>Beginning <?php echo $pj?></h4>
                                    <p>New to <?php echo $pj?>? Read how to organise your work and learn what is required and when.</p>
                                    <a href="<?php echo url($pj . '/begin')?>">Read More...</a>
                                </div>
                            </div>
                            <div class="service span2">
                                <div class="icon-awesome" style="text-align:center;">
                                    <a style='box-shadow:none;background:transparent; color:#888' href="<?php echo url($pj . '/supports')?>">
                                        <i class="icon-table"></i>
                                    </a>
                                </div>
                                <div style="margin-left:15px">
                                    <h4><?php echo $pj?> Supports</h4>
                                    <p>Learn what you need to do as you undertake your project, pitfalls, planning, organising.</p>
                                    <a href="<?php echo url($pj . '/supports')?>">Read More...</a>
                                </div>
                            </div>
                            <div class="service span2">
                                <div class="icon-awesome" style="text-align:center;">
                                    <a style='box-shadow:none;background:transparent; color:#888' href="<?php echo url($pj . '/handup')?>">
                                        <i class="icon-magic"></i>
                                    </a>
                                </div>
                                <div style="margin-left:15px">
                                    <h4>Handing Up</h4>
                                    <p>As you near completion, consider carefully on your deliverables and how to deliver them.</p>
                                    <a href="<?php echo url($pj . '/handup')?>">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span3">
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
                         <li>
                                <?php echo html($page->title()) ?>
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