<?php snippet('head') ?>

<body>
  <div class="wrapper">
    <main class="main">

      <p class="h1">lone goose press</p>

      <!-- Begin navigation -->
      <?php snippet('navSet') ?>
      <!-- End Navigation -->

      <h1><?= $page->title() ?></h1>


      <?php foreach ($page->layout()->toLayouts() as $layout): ?>
        <section class="grid" id="<?= $layout->id() ?>">
          <?php foreach ($layout->columns() as $column): ?>
            <div class="column" style="--span:<?= $column->span() ?>">
              <div class="blocks">
                <?= $column->blocks() ?>
              </div>
            </div>
          <?php endforeach ?>
        </section>
      <?php endforeach ?>

    </main>
    <?php snippet('footer') ?>
  </div> <!-- Close .wrapper -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/accordion-1.js" type="text/javascript"></script>
</body>

</html>