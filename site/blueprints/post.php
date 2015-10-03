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
  link:
    label: Link?
    type: url 
    width: 1/2
  tool:
    label: Tool(s) used (comma separated)
    type: text
  postimage:
    label: Cover image
    type:  selector
    mode:  single
    types:
        - image
  text:
    label: Text
    type: textarea
