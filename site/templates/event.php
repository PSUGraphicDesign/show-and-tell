<? snippet('header') ?>

<main>

  <section class="page-title">
    <article>
      <div class="column half">
        <h1><?= $page->title()->html() ?></h1>
      </div>
    </article>
  </section>

  <section class="artist-poster">
    <article>
      <div class="column quarter event" style="background-color: <?= $event->color() ?>; background-image: url('<?= $event->poster() ?>')">
      </div>
    </article>
  </section>

  <section class="event-info">
    <article>
      <div class="column half">
        <p>
          <?= $next->speaker()->bio()->kirbytext() ?>
        </p>
      </div>
    </article>
  </section>

</main>

<? snippet('footer') ?>
