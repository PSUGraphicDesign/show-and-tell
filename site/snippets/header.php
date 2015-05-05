<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <?= css('assets/css/show-and-tell.css') ?>

</head>
<body class="<?= ST::body_classes() ?>">
  <header>
    <section>
      <article>
        <div class="column half">
          <h1><?= $site->title()->html() ?></h1>
        </div>
        <div class="column half">
          <ul class="navigation">
            <li><?= ST::link_for(page('home'), 'Home') ?></li>
            <li><?= ST::link_for(page('artists'), 'Artists') ?></li>
            <li><?= ST::link_for(page('archive'), 'Archive') ?></li>
          </ul>
        </div>
      </article>
    </section>
  </header>
