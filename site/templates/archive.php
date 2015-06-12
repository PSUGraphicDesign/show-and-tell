<?php snippet('header') ?>

<main>

  <section class="page-title">
    <article>
      <div class="column full">
        <h1><?php echo $page->title()->html() ?></h1>
      </div>
    </article>
  </section>

  <?php foreach ( $archive as $year ) { ?>
    <section class="archive-year">
      <article>
        <div class="column full">
          <h2><?php echo $year->title()->html() ?></h2>
        </div>
      </article>
      <article class="terms">
        <?php foreach ( $year->terms() as $term ) { ?>
          <div class="column third term">
            <h3><?php echo $term->title()->html() ?></h3>
            <?php if ( $term->events()->count() ) { ?>
              <ul>
                <?php foreach ( $term->events() as $event ) { ?>
                  <li>
                    <h6><?php echo $event->date('M jS') ?></h6>
                    <h4><?php echo html::a($event->url(), $event->title()) ?></h4>
                  </li>
                <?php } ?>
              </ul>
            <?php } else { ?>
              <em>Sorry, we haven't added any events for <?php echo $term->title()->html() ?>.</em>
            <?php } ?>
          </div>
        <?php } ?>
      </article>
    </section>
  <?php } ?>
  
</main>

<?php snippet('footer') ?>
