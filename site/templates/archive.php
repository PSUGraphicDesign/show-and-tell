<? snippet('header') ?>

<main>

  <section class="page-title">
    <article>
      <div class="column full">
        <h1><?= $page->title()->html() ?></h1>
      </div>
    </article>
  </section>

  <? foreach ( $archive as $year ) { ?>
    <section class="archive-year">
      <article>
        <div class="column full">
          <h2><?= $year->title()->html() ?></h2>
        </div>
      </article>
      <article class="terms">
        <? foreach ( $year->terms() as $term ) { ?>
          <div class="column third term">
            <h3><?= $term->title() ?></h3>
            <? if ( $term->events()->count() ) { ?>
              <ul>
                <? foreach ( $term->events() as $event ) { ?>
                  <li>
                    <h6><?= $event->date('M jS') ?></h6>
                    <h4><?= html::a($event->url(), $event->title()) ?></h4>
                  </li>
                <? } ?>
              </ul>
            <? } else { ?>
              <em>No events scheduled this term!</em>
            <? } ?>
          </div>
        <? } ?>
      </article>
    </section>
  <? } ?>
  
</main>

<? snippet('footer') ?>
