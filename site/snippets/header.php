<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <?= css('assets/css/show-and-tell.css') ?>
  <?= js('//use.typekit.net/yzr6wth.js') ?>
  <script>try{Typekit.load();}catch(e){}</script>

</head>
<body class="<?= ST::body_classes() ?>">
  <header>
    <section class="branding">
      <article class="centered-layout">
        <div class="column quarter tablet-third mobile-half logo">
          <a href="<?= $site->url() ?>">
            <img src="<?= ST::asset('images', 'ShowTell.png') ?>">
          </a>
        </div>
      </article>
    </section>
    <section class="menu">
      <article class="kebab navigation">
        <div class="column sixth link">
          <a href="<?= $site->url() ?>#about">About</a>
        </div>
        <div class="column sixth link">
          <a href="<?= $site->url() ?>#upcoming">Upcoming</a>
        </div>
        <div class="column sixth link">
          <?= ST::link_for(page('artists'), 'Artists') ?>
        </div>
        <div class="column sixth link">
          <?= ST::link_for(page('archive'), 'Archive') ?>
        </div>
        <div class="column third link search">
          <? snippet('search-menu') ?>
        </div>
      </article>
    </section>
  </header>
