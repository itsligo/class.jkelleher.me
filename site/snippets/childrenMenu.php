<?php $open=$page; $items=($open) ? $open->children()->visible() : false; ?>
<?php if($items && $items->count()): ?>
<nav class="submenu">
    <ul class="nav nav-list">
        <?php foreach($items AS $item): ?>
        <li><h4>
            <a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="
                <?php echo $item->url() ?>"><i class="icon-github icon-4x"></i>
                <?php echo html($item->title()) ?></a></h4>
        </li>
        <?php endforeach ?>
    </ul>
</nav>
<?php endif ?>