<?php

kirbytext::$pre[] = function($kirbytext, $text) {

  $text = preg_replace_callback('!\(lead(…|\.{3})\)(.*?)\((…|\.{3})lead\)!is', function($matches) use($kirbytext) {

    $lead = $matches[2];
    $field = new Field($kirbytext->field->page, null, trim($lead));
    $html = '<div class="lead">' . kirbytext($field) . '</div>';

    return $html;
  }, $text);

  return $text;
};
