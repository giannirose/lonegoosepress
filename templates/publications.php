<?php snippet('head') ?>

<body>
  <div class="wrapper">
    <div class="main">

      <p class="h1">lone goose press</p>

      <!-- Begin navigation -->
      <?php snippet('navSet') ?>
      <!-- End Navigation -->

      <h1 class="catTitle"><?= $page->title() ?></h1>

      <div class="folio intro-folio"> <!-- Introductory text and image -->
        <div class="intro-img">
          <figure class="figure-ctr">
            <img src="<?= $page->image()->url() ?>" alt="<?= $page->image()->alt() ?>">
            <figcaption class="italic">
              <?= $page->image()->caption() ?>
            </figcaption>
          </figure>
        </div> <!-- end class intro-img -->
        <div class="intro-txt"> <!-- Introductory Text -->
          <?= $page->introText()->kt() ?>
        </div>
      </div> <!-- end class folio -->




      <div class="folio-grid"> <!-- Parent grid container -->
        <?php foreach ($page->children()->listed() as $subpage): ?>
          <div class="folio"> <!-- Each .folio spans 2 columns -->
            <div class="folio-img folio-item">
              <?php
              $cover = $subpage->images()->template('cover')->first();

              if ($cover): ?>
                <a href="<?= $subpage->url() ?>">
                  <figure class="cover">
                    <img src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>" loading="lazy" ?>
                    <caption><?= $cover->caption() ?></caption>
                  </figure>
                </a>
              <?php else:
                $defaultImage = $subpage->images()->template('default')->first();
                if ($defaultImage && $image = $defaultImage->crop(300, 300)): ?>
                  <a href="<?= $subpage->url() ?>">
                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy">
                  </a>
                <?php endif ?>
              <?php endif ?>
            </div>

            <div class="folio-txt folio-item">
              <a href="<?= $subpage->url() ?>">
                <h4><?= $subpage->title() ?></h4>
              </a>
              <p><?= $subpage->author() ?></p>
              <p><?= $subpage->artist() ?></p>
              <?php if ($subpage->year()->isNotEmpty()): ?>
                <p><?= $subpage->year() ?></p>
              <?php endif ?>
              <p><strong><?= $subpage->publishInfo() ?></strong></p>
            </div>
            <hr class="disp-none">
          </div>

        <?php endforeach ?>

      </div>



    </div> <!-- End list of books -->
    </main>
    <?php snippet('footer') ?>
  </div> <!-- Close .wrapper -->

  <?php snippet('scriptSource') ?>
</body>

</html>