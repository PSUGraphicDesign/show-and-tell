<? snippet('header') ?>

<main>

  <? if ( $next ) { ?>
    <section class="next has-flag" style="background-image: url(<?= $next->poster() ?>)">
      <article class="origin-right">
        <div class="column third flag right <?= $next->lightness() ?>">
          <h2 style="color: <?= $next->color() ?>"><?= html::a($next->url(), $next->title()) ?></h2>
          <div class="date">
            <?= $next->date('F jS') ?>
          </div>
          <? if ( $next->speaker()->short_bio()->length() ) { ?>
            <?= $next->speaker()->short_bio()->kirbytext() ?>
          <? } else { ?>
            <?= $next->speaker()->bio()->kirbytext() ?>
          <? } ?>
        </div>
      </article>
    </section>
  <? } ?>

  <section id="about" class="about has-flag">
    <article class="header origin-right">
      <div class="column third flag no-space right">
        <h2>About</h2>
      </div>
    </article>
    <article class="info">
      <div class="column full">
        <?= $about->text()->kirbytext() ?>
      </div>
    </article>
    <article class="extra kebab">
      <div class="column quarter flag left yellow no-space address">
        <?= $about->details()->kirbytext() ?>
      </div>
      <div class="column three-quarters department-logos">
        <? foreach ( $departments as $department ) { ?>
          <a href="<?= $department['url'] ?>">
            <?= html::img($about->image($department['logo'])->url(), ['class' => 'logo']) ?>
          </a>
        <? } ?>
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
        <?= html::img($current_term->image($current_term->poster())->url()) ?>
      </div>
      <div class="column half">
        <? if ( $current_term->count() ) { ?>
          <ul>
            <? foreach ( $current_term->events() as $event ) { ?>
              <li>
                <a href="<?= $event->url() ?>" class="<?= $event->status() ?>">
                  <h6>
                    <?= $event->date('F jS') ?>
                  </h6>
                  <h3>
                    <?= $event->title() ?>
                  </h3>
                </a>
              </li>
            <? } ?>
          </ul>
        <? } else { ?>
          We're not in session right now. Check back in the Fall!
        <? } ?>
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
      <? foreach ( $events as $event ) { ?>
        <div class="column quarter tablet-third mobile-half event" style="background-color: <?= $event->color() ?>; background-image: url('<?= $event->poster() ?>')">
          <a href="<?= $event->url() ?>" class="tile-content">
            <h3><?= $event->title()->html() ?></h3>
          </a>
        </div>
      <? } ?>
    </article>
  </section>

  <section id="archive-more" class="archive-visit dark">
    <article class="more centered-layout">
      <div class="column third mobile-full more">
        <?= html::a(page('archive')->url(), 'Full Archive', ['class' => 'button large gray']) ?>
      </div>
    </article>
  </section>

</main>

<? snippet('footer') ?>
