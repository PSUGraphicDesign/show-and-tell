<? snippet('header') ?>
<main>
  <section>
    <article>
      <div class="column full">
<h1><?= $page->title()->html() ?></h1>
      </div>
    </article>
  </section>

  <section class="artists">
    <article>
<? foreach ( page('artists')->children() as $artist ) { ?>
      <div class="column third artist">
        <h2>
          <a href="<?= $artist->link() ?>"><?= $artist->title() ?></a>
        </h2> 
        <?= $artist->bio()->kirbytext() ?>
      </div>
<? } ?>
    </article>
  </section>

</main>

<? snippet('footer') ?>
