<?php snippet('header') ?>

<main>

  <section class="page-title <?php echo $page->lightness() ?>" style="background-color: <?php echo $page->color() ?>">
    <article class="kebab">
      <div class="column full">
        <?php if ( get('term') ) { ?>
          <h1>Search: <span class="results"><?php echo $results->count() ?> Results</span></h1>
        <?php } else { ?>
          <h1>Search: <span class="results">Nada!</span></h1>
        <?php } ?>
      </div>
    </article>
  </section>

  <?php if ( $results->count() ) { ?>
    <section class="search-results found">
      <?php foreach ( $results as $result ) { ?>
        <article class="result">
          <div class="column two-thirds">
            <h3>
              <?php echo $result->title() ?>
            </h3>
            <?php if ( $result->short_bio()->length() ) { ?>
              <?php echo $result->short_bio()->kirbytext() ?>
            <?php } else { ?>
              <?php echo $result->bio()->excerpt() ?>
            <?php } ?>
          </div>
          <div class="column third">
            <?php if ( $result->events()->count() ) { ?>
              <h4>Events</h4>
              <ul>
                <?php foreach ( $result->events() as $event ) { ?>
                  <li><?php echo html::a($event->url(), $event->date('M jS, Y')) ?></li>
                <?php } ?>
              </ul>
            <?php } ?>
          </div>
          <div class="column full">
          </div>
        </article>
      <?php } ?>
    </section>
  <?php } else { ?>
    <section class="search-results none">
      <article>
        <div class="column full">
          Sorry, couldn't find anything!
        </div>
      </article>
    </section>
  <?php } ?>

</main>

<?php snippet('footer') ?>
