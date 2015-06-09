<?php snippet('header') ?>

<main>

  <?php if ( $next ) { ?>
    <section class="next has-flag" style="background-image: url(<?php echo $next->poster() ?>)">
      <article class="origin-right">
        <div class="column third flag right <?php echo $next->lightness() ?>">
          <h2 style="color: <?php echo $next->color() ?>"><?php echo html::a($next->url(), $next->title()) ?></h2>
          <div class="date">
            <?php echo $next->date('F jS') ?>
          </div>
          <?php if ( $next->speaker()->short_bio()->length() ) { ?>
            <?php echo $next->speaker()->short_bio()->kirbytext() ?>
          <?php } else { ?>
            <?php echo $next->speaker()->bio()->kirbytext() ?>
          <?php } ?>
        </div>
      </article>
    </section>
  <?php } ?>

  <section id="about" class="about has-flag">
    <article class="header origin-right">
      <div class="column third flag no-space right">
        <h2>About</h2>
      </div>
    </article>
    <article class="info">
      <div class="column full">
        <?php echo $about->text()->kirbytext() ?>
      </div>
    </article>
    <article class="extra kebab">
      <div class="column quarter flag left yellow no-space address">
        <?php echo $about->details()->kirbytext() ?>
      </div>
      <div class="column three-quarters department-logos">
        <?php foreach ( $departments as $department ) { ?>
          <a href="<?php echo $department['url'] ?>">
            <?php echo html::img($about->image($department['logo'])->url(), ['class' => 'logo']) ?>
          </a>
        <?php } ?>
      </div>
    </article>
  </section>

  <section id="upcoming" class="this-term has-flag">
    <article class="origin-right header">
      <div class="column third flag right">
        <h2>Upcoming</h2>
      </div>
    </article>
    <article class="event-list kebab">
      <div class="column half">
        <?php echo html::img($current_term->image($current_term->poster())->url()) ?>
      </div>
      <div class="column half">
        <?php if ( $current_term->count() ) { ?>
          <ul>
            <?php foreach ( $current_term->events() as $event ) { ?>
              <li>
                <a href="<?php echo $event->url() ?>" class="<?php echo $event->status() ?>">
                  <h6>
                    <?php echo $event->date('F jS') ?>
                  </h6>
                  <h3>
                    <?php echo $event->title() ?>
                  </h3>
                </a>
              </li>
            <?php } ?>
          </ul>
        <?php } else { ?>
          We're not in session right now. Check back in the Fall!
        <?php } ?>
      </div>
    </article>
  </section>

  <section id="archive" class="archive has-flag">
    <article class="origin-right">
      <div class="column third flag right">
        <h2>Archive</h2>
      </div>
    </article>
    <article class="tiles full-bleed">
      <?php foreach ( $events as $event ) { ?>
        <div class="column quarter tablet-third mobile-half event" style="background-color: <?php echo $event->color() ?>; background-image: url('<?php echo $event->poster() ?>')">
          <a href="<?php echo $event->url() ?>" class="tile-content">
            <h3><?php echo $event->title()->html() ?></h3>
          </a>
        </div>
      <?php } ?>
    </article>
  </section>

  <section id="archive-more" class="archive-visit dark">
    <article class="more centered-layout">
      <div class="column third mobile-full more">
        <?php echo html::a(page('archive')->url(), 'Full Archive', ['class' => 'button large gray']) ?>
      </div>
    </article>
  </section>

</main>

<?php snippet('footer') ?>
