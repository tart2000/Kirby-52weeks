<?php

echo $site->index()
          ->filterBy('template', 'blog')
          ->children()
          ->visible()
          ->sortBy('date', 'desc')
          ->limit(c::get('feed.postNumber', 10))
          ->feed(array(
              'url' => $page->url(),
              'title'=> $site->title(),
              'description' => $site->description()
            ));

?>
