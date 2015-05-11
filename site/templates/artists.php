<? snippet('header') ?>

<main>

  <section class="artist-list">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
    <article>
      <? foreach ( $artists as $artist ) { ?>
        <div class="column quarter">
          <h3><?= html::a($artist->url(), $artist->title()->html()) ?></h3>
          <?= $artist->bio()->kirbytext() ?>
        </div>
      <? } ?>
    </article>
  </section>

</main>

<? snippet('footer') ?>
