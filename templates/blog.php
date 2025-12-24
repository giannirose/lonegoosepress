<?php snippet('head') ?>

<body>
  <div class="wrapper">
    <main class="main">

      <p class="h1">lone goose press</p>

      <!-- Begin navigation -->
      <!-- Begin navigation -->
      <?php snippet('navSet') ?>
      <!-- End Navigation -->

      <section class="blog">
        <article>
          <!-- The intro to the blog includes a centered image-->
          <?php snippet('intro-blog') ?>

          <?php snippet('layouts', ['field' => $page->layout()]) ?>



        </article>
      </section>
      <div class="center">
        <?php if ($page->hasPrevListed()): ?>
          <a href="<?= $page->prevListed()->url() ?>">Previous Page</a>
        <?php endif ?>
        <span>&nbsp; &nbsp; &nbsp;<— &nbsp;... &nbsp;—> &nbsp; &nbsp; &nbsp;</span>

        <?php if ($page->hasNextListed()): ?>
          <a href="<?= $page->nextListed()->url() ?>">Next Page</a>
        <?php endif ?>
      </div>
    </main>
    <?php snippet('footer') ?>
  </div> <!-- Close .wrapper -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/accordion-1.js" type="text/javascript"></script>

  <script src="../assets/js/navSet.js" type="text/javascript"></script>
</body>

</html>