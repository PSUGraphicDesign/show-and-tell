<?php snippet('header') ?>

<main>

  <section class="page-title">
    <article class="kebab">
      <div class="column full">
        <h1><?php echo $page->title()->html() ?></h1>
      </div>
    </article>
  </section>

  <section class="artist-list">
    <article>
      <?php foreach ( $artists as $artist ) { ?>
        <div class="column half artist">
          <h3><?php echo $artist->title()->html() ?></h3>
          <?php echo $artist->bio()->kirbytext() ?>
        </div>
      <?php } ?>
    </article>
  </section>

</main>

<?php snippet('footer') ?>
