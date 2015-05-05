<? snippet('header') ?>

<main>

  <? if ( $next ) { ?>
    <section class="upcoming">
      <article>
        <div class="column full <?= $next->lightness() ?>" style="background-image: url(<?= $next->poster()->url() ?>)">
          <?= html::a($next->url(), $next->title()) ?>
        </div>
      </article>
    </section>
  <? } ?>

  <section class="artists">
    <article>
      <? foreach ( page('artists')->children() as $artist ) { ?>
        <div class="column third artist">
          <h3>
            <a href="<?= $artist->link() ?>"><?= $artist->title() ?></a>
          </h3>
          <?= $artist->bio()->kirbytext() ?>
        </div>
      <? } ?>
    </article>
  </section>

  <section class="this-term">
    <article>
      <div class="column half">
        <h2>This Term</h2>
      </div>
      <div class="column half">
        <ul>
          <? foreach ( $current_term->children() as $event ) { ?>
            <li><?= html::a($event->url(), $event->title()) ?></li>
          <? } ?>
        </ul>
      </div>
    </article>
  </section>

</main>

<? snippet('footer') ?>
