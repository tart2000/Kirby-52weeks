<?php if(!defined('KIRBY')) exit ?>

title: Challenge
pages:
  field: date
  sort: flip
  template: post
fields:
  info: 
    label: Info
    type: info
    text: > 
      Click 'Page / Add' to add a project. Then click on it to edit it.</br> 
      Use 'Files / Add' to upload an image, and then select the one you want as a cover. 
  title:
    label: Title
    type:  text
  author:
    label: Author
    type: user
    width: 1/2
  cat: 
    label: Category
    type: select
    options: query 
    query: 
      page: categories
      fetch: children
    width: 1/2
  postimage:
    label: Cover image
    type:  selector
    mode:  single
    types:
      - image
  text: 
  	label: Objectives
  	type: textarea