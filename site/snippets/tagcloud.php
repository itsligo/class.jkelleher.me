<?php 
function tags($pages)
{
    if(param( 'category')) { $articles=$pages->find('blog')->children()->visible()->filterBy('categories', param('category'), ',') ->flip() ->paginate(4); echo ('
    <h1 class="results">Category Archives:
        <em>'), (param('category')), ('</em>
    </h1>'); } else { 
    if(param('tag')) {

  $articles = $pages->find('blog')
                    ->children()
                    ->visible()
                    ->filterBy('tags', param('tag'), ',')
                    ->flip()
                    ->paginate(10);

} else {
  $articles = $pages->find('blog')
                    ->children()
                    ->visible()
                    ->flip()
                    ->paginate(10);

}
}
return $articles;
}
    ?>