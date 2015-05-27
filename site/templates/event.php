<? snippet('header') ?>

<main>

  <section class="page-title <?= $page->lightness() ?>" style="background-color: <?= $page->color() ?>">
    <article class="kebab">
      <div class="column three-quarters">
        <? if ( $speaker->link() ) { ?>
          <h1>
            <a href="<?= $speaker->link() ?>" target="_blank"><?= $page->title()->html() ?></a>
          </h1>
        <? } else { ?>
          <h1><?= $page->title()->html() ?></h1>
        <? } ?>
      </div>
      <div class="column quarter">
        <?= $page->date('F jS, Y') ?>
      </div>
    </article>
  </section>

  <section class="event-info">
    <article>
      <div class="column two-thirds">
        <div class="info-group text">
          <?= $speaker->bio()->kirbytext() ?>
        </div>

        <? if ( $speaker->link() ) { ?>
          <div class="info-group link">
            <a href="<?= $speaker->link() ?>" target="_blank">Website</a>
          </div>
        <? } ?>

        <? if ( $speaker->other_events($page)->count() ) { ?>
          <div class="info-group other-events">
            <h3><?= $speaker->title() ?> was also a <em>Show & Tell</em> guest on:</h3>
            <ul>
              <? foreach ( $speaker->other_events($page) as $other ) { ?>
                <li><?= html::a($other->url(), $other->date('F jS, Y')) ?></li>
              <? } ?>
          </div>
        <? } ?>
      </div>
      <div class="column third">
        <?= html::img($page->poster()) ?>
      </div>
    </article>
  </section>

  <section class="pagination">
    <article>
      <div class="column half previous">
        <? if ( $page->hasPrev() ) { ?>
          <a href="<?= $page->prev()->url() ?>">
            <span class="direction">Previous</span>
            <?= $page->prev()->title() ?>
          </a>
        <? } ?>
      </div>
      <div class="column half next">
        <? if ( $page->hasNext() ) { ?>
          <a href="<?= $page->next()->url() ?>">
            <span class="direction">Next</span>
            <?= $page->next()->title() ?>
          </a>
        <? } ?>
      </div>
    </article>
  </section>

</main>

<? snippet('footer') ?>
