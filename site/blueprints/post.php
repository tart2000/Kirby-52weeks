<?php if(!defined('KIRBY')) exit ?>

title: Week Project
pages: false
fields:
  metas:
    label: Metas
    type: headline
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    width: 1/2
    default: now
  text:
    label: Text
    type: textarea
