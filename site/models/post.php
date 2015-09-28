<?php
class PostPage extends Page {
  public function cover() {
    return $this->files()->findBy('name', 'header');
  }

  public function author() {
    return (parent::author()->empty())? false : kirby()->site()->users()->find(parent::author());
  }

  public function blog() {
    return kirby()->site()->index()->filterBy('template', 'home')->first();
  }
}
