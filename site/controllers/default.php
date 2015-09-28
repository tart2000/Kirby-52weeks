<?php

return function($site, $pages, $page) {

  $header = $page->files()->findBy('name', 'header');

  return compact('header');

};
