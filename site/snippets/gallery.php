<?php if($page->hasImages()): ?>
<ul style='list-style-type:none'>
  <?php foreach($page->images() as $image): ?>
  <li>
    <a rel='prettyPhoto'  href="<?php echo $image->url() ?>"><img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" /></a>
      <p></p>
  </li>
  <?php endforeach ?>
</ul>
<?php endif ?>