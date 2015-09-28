<?php

return function($site, $pages, $page) {

  // fetch the blog posts
  $posts = $site->index()
                ->filterBy('template', 'blog')
                ->children()
                ->visible()
                ->sortBy('date', 'desc');

  // perform search
  if ($query = get('s')) {
    $posts = $posts->search($query, 'title|text')->visible();
    if($posts->count() < 1) {
      $posts = page('error')->children()->filterBy('template', 'post');
    }
  }

  $posts = $posts->paginate(c::get('blog.postPerPage', 5));
  $pagination = $posts->pagination();

  return compact('posts', 'pagination');

};
