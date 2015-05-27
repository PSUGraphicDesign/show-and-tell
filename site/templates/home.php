<? snippet('header') ?>

<main>

  <? if ( $next ) { ?>
    <section class="next has-flag" style="background-image: url(<?= $next->poster() ?>)">
      <article class="origin-right">
        <div class="column third flag right <?= $next->lightness() ?>">
          <h2 style="color: <?= $next->color() ?>"><?= html::a($next->url(), $next->title()) ?></h2>
          
          <?= $next->speaker()->bio()->kirbytext() ?>
        </div>
      </article>
    </section>
  <? } ?>

  <section id="about" class="about has-flag">
    <article class="header origin-right">
      <div class="column third flag right">
        <h2>About</h2>
      </div>
    </article>
    <article class="info">
      <div class="column full">
        <?= $about->text()->kirbytext() ?>
      </div>
    </article>
    <article class="extra kebab">
      <div class="column quarter flag left yellow address">
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
              <li><?= $event->date('F jS') ?>: <?= $event->time_sensitive_link() ?></li>
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
    <article class="full-bleed">
      <? foreach ( $events as $event ) { ?>
        <div class="column quarter event" style="background-color: <?= $event->color() ?>; background-image: url('<?= $event->poster() ?>')">
          <div class="tile-content">
            <div class="tile-artist-name">
              <p><?= $event->title()->kirbytext() ?></p>
            </div>
          </div>
        </div>
      <? } ?>
    </article>
  </section>

</main>

<? snippet('footer') ?>
