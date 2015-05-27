<? snippet('header') ?>

<main>

  <section class="page-title">
    <article class="kebab">
      <div class="column full">
        <h1><?= $page->title()->html() ?></h1>
      </div>
    </article>
  </section>

  <section class="artist-list">
    <article>
      <? foreach ( $artists as $artist ) { ?>
        <div class="column half artist">
          <h3><?= $artist->title()->html() ?></h3>
          <?= $artist->bio()->kirbytext() ?>
        </div>
      <? } ?>
    </article>
  </section>

</main>

<? snippet('footer') ?>
