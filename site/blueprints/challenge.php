<?php if(!defined('KIRBY')) exit ?>

title: Challenge
pages:
  num: date
  field: date
  template: post
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type: user
  postimage:
    label: Cover image
    type:  selector
    mode:  single
    types:
      - image
  text: 
  	label: Objectives
  	type: textarea