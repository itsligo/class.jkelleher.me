<?php $pj=strtolower($page->title())?>
    <h1>
        <?php echo html($page->title()) ?>
</h1>
    <?php $pj  = $pages->findOpen();?>
    <ul class="nav nav-list">
        <li>
            <a href="<?php echo $pj->url()?>">Home</a>
        </li>
        <li>
            <a href="<?php echo $pj->url() . '/schedule'?>">Schedule</a>
        </li>
        <li>
            <a href="<?php echo $pj->url() . '/assess'?>">Assessment</a>
        </li>
        <!-- <li>
            <a href="<?php echo $pj->url() . '/slides'?>">Slides</a>
        </li> -->
        <li>
                                <a href="https://www.google.com/calendar/embed?src=jkelleher%40itsligo.ie&ctz=Europe/Dublin)">
                                    <i class="icon-calendar"></i>Calendar</a>
                            </li>
    </ul>