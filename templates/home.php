<?php snippet('head') ?>

<body>
  <div class="wrapper">


    <main class="main">

      <header class="header text-center">
        <div class="largeScreen">
          <img class="home-image" src="<?= $page->image()->url() ?>" alt="<?= $page->image()->alt() ?>"
            dimensions="<?= $page->image()->dimensions() ?>">
          <div class="title">
            <h1><?= $site->title() ?></h1>
          </div>
        </div>

        <div class="smallScreen">
          <img class="home-image" src="<?= $page->image()->crop(500, 300, 'center')->url() ?>"
            alt="<?= $page->image()->alt() ?>" dimensions="<?= $page->image()->dimensions() ?>">
          <div class="title">
            <h1><?= $site->title() ?></h1>
          </div>
        </div>
      </header>


      <?php snippet('navSet') ?>


      <div class="page-content">
        <div class="home-style">
          <h2 class="center-headline"><?= $page->subhead() ?></h2>
          <div class="home-content">
            <?= $page->text()->kt() ?>
          </div>

    </main>




    <?php snippet('footer') ?>
  </div> <!-- Close .wrapper -->


  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <!-- <script src="../assets/js/accordion-nojquery1.js" type="text/javascript"></script>
  <script src="../assets/js/navMobile.js" type="text/javascript"></script>
  <script src="../assets/js/accordion-1.js" type="text/javascript"></script> -->

  <?php snippet('scriptSource') ?>


</body>

</html>