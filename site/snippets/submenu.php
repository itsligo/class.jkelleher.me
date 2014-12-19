<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; ?>
<?php if($items && $items->count()): ?>
<nav class="submenu">
  <ul class="nav nav-list">
      <li><a href="<?php echo $open->url() ?>"><?php echo $open->title()?></a></li>
    <?php foreach($items AS $item): ?>
    <li><a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
    <?php endforeach ?>
      <li>
      <a href="https://www.google.com/calendar/embed?src=jkelleher%40itsligo.ie&ctz=Europe/Dublin)">
                            <i class="icon-calendar"></i>Calendar</a>
      </li>
  </ul>
</nav>
<?php endif ?>
