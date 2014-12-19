<?php snippet( 'header'); ?>
<main role="main">
    <div class="container">
        <article>
            <div class="row">
                <nav class="span3 submenu">
                    
                    <h1><?= html($page->title()) ?></h1>
                </nav>
                <div class="span6">
                    <header class="post-meta">
                        <h5><a href='<?php echo $page->parent()->url() ?>'>
                            Back to <?php echo $page->parent()->title() ?>
                        </a></h5>
<!--
                        <h3>
                            <?php echo ucwords(preg_replace('/-/',' ',$site->uri()->path()->last(),1))?>
                            <?php ($page->title()=='')? html('
                            <b>Un-named Project</b>'):''?>
                            <?php echo html($page->title())?></h3>
-->
                    </header>
                    <div class="content">
                        
                        <h4><?= kirbytext($page->shortdesc())?></h4>
                        <blockquote><h5><?= html($page->names())?></h5>
                        <h5><?= html($page->studentids())?></h5>
                        <h5><?= html($page->programme())?></h5>
                        <h5><?= "Supervisor: " .html($page->supervisor())?></h5>
                        <h5><a href='<?= $page->prjurl()?>'><h6><?= html($page->prjurl())?></h6></a></h5>
                        </blockquote>
                        <table class="table table-hover table-condensed table-striped">
                            <tr>
                                <th>Primary Area:<th>
                                <th>Primary Tech:<th>
                                <th>Primary OS:<th>
                                <th>Secondary Tech:<th>
                            </tr>
                            <tr>
                                <td><?= html($page->primaryarea())?><td>
                                <td><?= html($page->primarytechnology())?><td>
                                <td><?= html($page->primaryos())?><td>
                                <td><?= html($page->secondarytechnology())?><td>
                            </tr>
                        </table>
                        <?php echo html($page->description()) ?>
                        <?php snippet( 'gallery') ?>
                    </div>
                    <?php snippet( 'prevnext') ?>
                </div>
                <div class="span3">
                    <h4><a href='<?= $page->prjurl() ?>'><i class='icon-github icon-large'></i>&nbsp;&nbsp;<?= $page->title() ?> Blog</a></h4>
                    <?php if($page->hasImages()) {
                        echo '<img src=' . $page->images()->first()->url() .'>';
                        }
                    else {
                     echo '<img src="http://lorempixel.com/g/200/200/">';
                    }
                    ?>
<!--                    <?php echo markdown($page->practices())?>-->
                </div>
            </div>
        </article>
    </div>
</main>
<?php snippet( 'footer') ?>