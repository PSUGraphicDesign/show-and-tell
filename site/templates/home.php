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

  <section class="this-term">
    <article>
      <div class="column half">
        <h2>This Term</h2>
      </div>
      <div class="column half">
        <? if ( $current_term->count() ) { ?>
          <ul>
            <? foreach ( $current_term->events() as $event ) { ?>
              <li><?= $event->time_sensitive_link() ?></li>
            <? } ?>
          </ul>
        <? } else { ?>
          We're not in session right now. Check back in the Fall!
        <? } ?>
      </div>
    </article>
  </section>

</main>

<? snippet('footer') ?>
