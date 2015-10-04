<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="<?php echo $site->language()->code() ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo (($page->template() == 'post' || $page->template() == 'default') && !$page->text()->empty())? str::excerpt($page->text(), 250) : $site->description() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page->title()->html() ?> - <?php echo $site->title()->html(); ?></title>

    <?php snippet('social-metas') ?>

    <!-- RSS feed -->
    <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="<?php echo $site->title() ?>" />

    <!-- Alternate languages url for SEO -->
    <?php foreach ($site->languages() as $language): ?>
      <?php if ($site->language() != $language): ?>
        <link rel="alternate" hreflang="<?php echo $language->code() ?>" href="<?php echo $page->url($language->code()) ?>" />
      <?php endif ?>
    <?php endforeach ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php if (!$site->colors()->empty()): ?>
      <?php $colors = $site->colors()->split(); ?>
      <?php if(count($colors) < 2) array_push($colors, $colors[0]); ?>
      <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.<?php echo $colors[0] ?>-<?php echo $colors[1] ?>.min.css" />
    <?php else: ?>
      <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.css" />
    <?php endif ?>

    <?php echo css('assets/css/main.css') ?>
    <?php echo css('@auto') ?>
  </head>
  <?php if (!$bg = $page->files()->findBy('name', 'bg')) $bg = $site->files()->findBy('name', 'bg'); ?>
  <body>

  <?php snippet('menu') ?>
