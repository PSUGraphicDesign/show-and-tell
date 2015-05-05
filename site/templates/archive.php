<? snippet('header') ?>

<main>

  <section class="page-title">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
  </section>

  <? foreach ( $archive as $year ) { ?>
    <section class="archive-year">
      <article>
        <div class="column full">
          <h4><?= $year->title()->html() ?></h4>
        </div>
      </article>
      <? foreach ( $year->terms() as $term ) { ?>
        <article class="term">
          <div class="column third">
            <h5><?= $term->title() ?></h5>
            <ul>
              <? foreach ( $term->events() as $event ) { ?>
                <li><?= $event->title() ?></li>
              <? } ?>
            </ul>
          </div>
        </article>
      <? } ?>
    </section>
  <? } ?>
  
</main>

<? snippet('footer') ?>
