<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
files: 
	sortable:true
fields:
  title:
    label: Title
    type:  text
  intro:
    label: Intro
    type: structure
    entry: >
      {{titre}} - {{icone}} - {{image}}<br />
      {{texte}}
    fields:
      titre:
        label: Title
        type: text
      texte:
        label: Text
        type: text
      icone:
      	label: Icon
      	type: text
      image:
        label: BG image
        type: select
        options: images
