<?php if(!defined('KIRBY')) exit ?>

title: Challenge
pages:
  num: date
  field: date
  sort: flip
  template: post
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type: user
  text: 
  	label: Objectives
  	type: textarea