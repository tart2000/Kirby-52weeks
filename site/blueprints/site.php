<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  twitter:
    label: Twitter
    type: text
    icon: twitter
    width: 1/4
  facebook:
    label: Facebook
    type: text
    icon: facebook
    width: 1/4
  googleplus:
    label: Google +
    type: text
    icon: github
    width: 1/4
  tehme:
    label: Theme
    type: headline
  colors:
    label: Primary and Accent Colors
    help: Choose Two
    type: colorwheel
    required: true
