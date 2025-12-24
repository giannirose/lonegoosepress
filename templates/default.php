<?php snippet('head') ?>

<body>
  <div class="wrapper">
    <main class="main">

      <p class="h1">lone goose press</p>

      <!-- Begin navigation -->
      <?php snippet('navSet') ?>
      <!-- End Navigation -->

      <h1><?= $page->title() ?></h1>
    </main>
    <?php snippet('footer') ?>
  </div> <!-- Close .wrapper -->
  <?php snippet('scriptSource') ?>
</body>

</html>