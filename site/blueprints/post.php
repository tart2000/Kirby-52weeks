<?php if(!defined('KIRBY')) exit ?>

title: Week Project
pages: false
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    width: 1/2
    default: now
  link:
    label: Link?
    type: url 
    width: 1/2
  tool:
    label: Tool(s) used (comma separated)
    type: text
    width: 1/2
  happiness: 
    label: Happy about it?
    type: select
    options: 
      1 : 1
      2 : 2
      3 : 3
      4 : 4
      5 : 5
    width: 1/2
  postimage:
    label: Cover image
    type:  selector
    mode:  single
    types:
        - image
  text:
    label: Text
    type: textarea
