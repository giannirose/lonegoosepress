<?php snippet('head') ?>

<body>
  <div class="wrapper">
    <main class="main">

      <p class="h1">lone goose press</p>

      <!-- Begin navigation -->
      <?php snippet('navSet') ?>
      <!-- End Navigation -->

      <section class="blogs">

        <h1><?= $page->title()->html() ?></h1>
        <?= $page->subheadline()->kt() ?>

        <?php snippet('blogsCardsGridSubgrid') ?>
        <!-- 
        <div class="blog-grid">
          <?php foreach ($page->children()->listed()->flip() as $subpage): ?>
            <article class="blog-card">
              <p class="h1"><?= $subpage->title()->html() ?></p>
              <?= $subpage->intro()->excerpt(80) ?>
              <p><?= $subpage->text()->excerpt(80) ?></p>
              <a href="<?= $subpage->url() ?>">Read more…</a>
            </article>
          <?php endforeach ?>
        </div> -->

      </section>

    </main>
    <?php snippet('footer') ?>

  </div> <!-- close wrapper -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/accordion-1.js" type="text/javascript"></script>
  <script src="../assets/js/navMobile.js" type="text/javascript"></script>
  <script src="../assets/js/navSet.js" type="text/javascript"></script> -->
  <?php snippet('scriptSource') ?>
</body>

</html>