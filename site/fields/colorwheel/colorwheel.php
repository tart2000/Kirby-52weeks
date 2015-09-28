<?php
class ColorwheelField extends CheckboxesField {

  public $colors = array(
    'deep_orange' => 'Deep Orange',
    'red' => 'Red',
    'pink' => 'Pink',
    'purple' => 'Purple',
    'deep_purple' => 'Deep Purple',
    'indigo' => 'Indigo',
    'blue' => 'Blue',
    'light_blue' => 'Light Blue',
    'cyan' => 'Cyan',
    'teal' => 'Tean',
    'green' => 'Green',
    'light_green' => 'Light Green',
    'lime' => 'Lime',
    'yellow' => 'Yellow',
    'amber' => 'Amber',
    'orange' => 'Orange',
    'brown' => 'Brown',
    'blue_grey' => 'Blue Grey',
    'grey' => 'Grey',
  );

  public $forbidenAccent = array(
    'brown',
    'blue_grey',
    'grey'
  );

  static public $assets = array(
    'css' => array('colorwheel.css'),
    'js' => array('colorwheel.js')
  );

  public function options() {
    return $this->colors;
  }

  public function item($value, $text) {
    $item = parent::item($value, $text);
    $item->addClass('color');
    $item->addClass($value);
    return $item;
  }

  public function content() {
    $content = parent::content();
    $content->data(array(
      'field' => 'colorwheel'
    ));
    $content->addClass('colorwheel');

    $hidden = new Brick('input', null, array(
      'type' => 'hidden',
      'class' => 'result',
      'name' => $this->name() . '-result',
      'value' => implode(",", $this->value())
    ));

    $content->append($hidden);
    return $content;
  }

  public function validate() {
    if (!parent::validate()) return false;
    return count($this->value()) == 2;
  }

  public function result() {
    return get($this->name(). '-result');
  }

}
