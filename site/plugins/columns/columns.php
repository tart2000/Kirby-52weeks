<?php

/**
 * Columns Plugin
 *
 * @author Bastian Allgeier <bastian@getkirby.com>
 * @version 1.0.0
 */
kirbytext::$pre[] = function($kirbytext, $text) {

  $text = preg_replace_callback('!\(columns(.*?)\)(.*?)\((…|\.{3})columns\)!is', function($matches) use($kirbytext) {

    $columns = preg_split('!(\n|\r\n)\+{4}\s+(\n|\r\n)!', $matches[2]);
    $config = array();
    preg_match('/\s?(size\s?:\s?(?<size>[0-9\/]+))?\s?(phone-size\s?:\s?(?<phonesize>[0-9\/]+))?\s?(tablet-size\s?:\s?(?<tabletsize>[0-9\/]+))?/is', $matches[1], $config);
    $html = array();
    $classes = 'mdl-cell';

    switch ($config['size']) {
      case '1':
        $classes .= ' mdl-cell--12-col';
        break;
      case '1/2':
        $classes .= ' mdl-cell--6-col';
        break;
      case '1/3':
        $classes .= ' mdl-cell--4-col';
        break;
      case '1/4':
        $classes .= ' mdl-cell--3-col';
        break;
      case '1/6':
        $classes .= ' mdl-cell--2-col';
        break;
      case '1/12':
        $classes .= ' mdl-cell--1-col';
        break;
      default:
        $classes .= ' mdl-cell--12-col';
        break;
    }

    switch ($config['tabletsize']) {
      case '1':
        $classes .= ' mdl-cell--8-col-tablet';
        break;
      case '1/2':
        $classes .= ' mdl-cell--4-col-tablet';
        break;
      case '1/3':
        $classes .= ' mdl-cell--4-col-tablet';
        break;
      case '1/4':
        $classes .= ' mdl-cell--2-col-tablet';
        break;
      case '1/8':
        $classes .= ' mdl-cell--1-col-tablet';
        break;
    }

    switch ($config['phonesize']) {
      case '1':
        $classes .= ' mdl-cell--4-col';
        break;
      case '1/2':
        $classes .= ' mdl-cell--2-col';
        break;
      case '1/4':
        $classes .= ' mdl-cell--1-col';
        break;
    }

    foreach($columns as $column) {
      $field = new Field($kirbytext->field->page, null, trim($column));
      $html[] = '<div class="' . $classes . '">' . kirbytext($field) . '</div>';
    }

    return '<div class="mdl-grid mdl-grid--alt">' . implode($html) . '</div>';

  }, $text);

  return $text;

};
