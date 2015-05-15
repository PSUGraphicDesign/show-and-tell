<? snippet('header') ?>

<main>

  <? if ( $next ) { ?>
    <section class="upcoming" style="background-image: url(<?= $next->poster()->url() ?>)">
      <article>
        <div class="column third <?= $next->lightness() ?>">
          <h2><?= html::a($next->url(), $next->title()) ?></h2>
          <?= $next->speaker()->bio()->kirbytext() ?>
        </div>
      </article>
    </section>
  <? } ?>

  <section class="about">
    <article class="header">
      <div class="column third">
        ABOUT
      </div>
    </article>
    <article class="info">
      <div class="column full">
        <?= $about->text()->kirbytext() ?>
      </div>
    </article>
    <article class="extra">
      <div class="column quarter address">
        <?= $about->details()->kirbytext() ?>
      </div>
      <div class="column three-quarters department-logos">
        <? foreach ( $departments as $department ) { ?>
          <?= html::img($about->image($department['logo'])->url()) ?>
        <? } ?>
      </div>
    </article>
  </section>

  <section class="this-term">
    <article class="header">
      <div class="column third">
        THIS TERM
      </div>
    </article>
    <article class="event-list">
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

</main>

<? snippet('footer') ?>
