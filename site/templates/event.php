<?php snippet('header') ?>

<main>

  <section class="page-title <?php echo $page->lightness() ?>" style="background-color: <?php echo $page->color() ?>">
    <article class="kebab">
      <div class="column three-quarters">
        <?php if ( $speaker->link() ) { ?>
          <h1>
            <a href="<?php echo $speaker->link() ?>" target="_blank"><?php echo $page->title()->html() ?></a>
          </h1>
        <?php } else { ?>
          <h1><?php echo $page->title()->html() ?></h1>
        <?php } ?>
      </div>
      <div class="column quarter">
        <?php echo $page->date('F jS, Y') ?>
      </div>
    </article>
  </section>

  <section class="event-info">
    <article>
      <div class="column two-thirds">
        <div class="info-group text">
          <?php echo $speaker->bio()->kirbytext() ?>
        </div>

        <?php if ( $speaker->link() ) { ?>
          <div class="info-group link">
            <a href="<?php echo $speaker->link() ?>" target="_blank">Website</a>
          </div>
        <?php } ?>

        <?php if ( $page->info()->length()) { ?> 
          <div class="info-group link">
            <?php echo $page->info()->kirbytext() ?>
          </div>
        <?php } ?>

        <?php if ( $speaker->other_events($page)->count() ) { ?>
          <div class="info-group other-events">
            <h3><?php echo $speaker->title() ?> was also a <em>Show & Tell</em> guest on:</h3>
            <ul>
              <?php foreach ( $speaker->other_events($page) as $other ) { ?>
                <li><?php echo html::a($other->url(), $other->date('F jS, Y')) ?></li>
              <?php } ?>
          </div>
        <?php } ?>
      </div>
      <div class="column third">
        <?php echo html::img($page->poster()) ?>
      </div>
    </article>
  </section>

  <section class="pagination">
    <article>
      <div class="column half previous">
        <?php if ( $page->hasPrev() ) { ?>
          <a href="<?php echo $page->prev()->url() ?>">
            <span class="direction">Previous</span>
            <?php echo $page->prev()->title() ?>
          </a>
        <?php } ?>
      </div>
      <div class="column half next">
        <?php if ( $page->hasNext() ) { ?>
          <a href="<?php echo $page->next()->url() ?>">
            <span class="direction">Next</span>
            <?php echo $page->next()->title() ?>
          </a>
        <?php } ?>
      </div>
    </article>
  </section>

</main>

<?php snippet('footer') ?>
