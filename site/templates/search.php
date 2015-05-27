<? snippet('header') ?>

<main>

  <section class="page-title <?= $page->lightness() ?>" style="background-color: <?= $page->color() ?>">
    <article class="kebab">
      <div class="column full">
        <? if ( get('term') ) { ?>
          <h1>Search: <span class="results"><?= $results->count() ?> Results</span></h1>
        <? } else { ?>
          <h1>Search: <span class="results">Nada!</span></h1>
        <? } ?>
      </div>
    </article>
  </section>

  <? if ( $results->count() ) { ?>
    <section class="search-results found">
      <? foreach ( $results as $result ) { ?>
        <article class="result">
          <div class="column two-thirds">
            <h3>
              <?= $result->title() ?>
            </h3>
            <? if ( $result->short_bio()->length() ) { ?>
              <?= $result->short_bio()->kirbytext() ?>
            <? } else { ?>
              <?= $result->bio()->excerpt() ?>
            <? } ?>
          </div>
          <div class="column third">
            <? if ( $result->events()->count() ) { ?>
              <h4>Events</h4>
              <ul>
                <? foreach ( $result->events() as $event ) { ?>
                  <li><?= html::a($event->url(), $event->date('M jS, Y')) ?></li>
                <? } ?>
              </ul>
            <? } ?>
          </div>
          <div class="column full">
          </div>
        </article>
      <? } ?>
    </section>
  <? } else { ?>
    <section class="search-results none">
      <article>
        <div class="column full">
          Sorry, couldn't find anything!
        </div>
      </article>
    </section>
  <? } ?>


</main>

<? snippet('footer') ?>
