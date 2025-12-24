<?php snippet('head') ?>

<body>
  <div class="wrapper">
    <div class="main">

      <p class="h1">lone goose press</p>

      <!-- Begin navigation -->
      <?php snippet('navSet') ?>
      <!-- End Navigation -->

      <h1><?= $page->title() ?></h1>
      <div class="text-center category">
        <?php if ($page->subhead()->isNotEmpty()): ?>
          <h4><?= $page->subhead() ?></h4>
        <?php endif ?>
        <?php if ($page->author()->isNotEmpty()): ?>
          <p>By <?= $page->author() ?></p>
        <?php endif ?>
        <?php if ($page->artist()->isNotEmpty()): ?>
          <p>Artwork by <?= $page->artist() ?></p>
        <?php endif ?>
        <?php if ($page->publishInfo()->isNotEmpty()): ?>
          <p><?= $page->publishInfo() ?></p>
        <?php endif ?>
      </div>


      <div class="folio">
        <div class="folio-img folio-item">
          <?php foreach ($page->files()->template('default') as $leadImage): ?>
            <figure class="<?= $leadImage->figclass() ?>">
              <a href="<?= $leadImage->url() ?>">
                <img src="<?= $leadImage->url() ?>" alt="<?= $leadImage->alt() ?>" class="<?= $leadImage->imgclass() ?>"
                  loading="lazy">
              </a>
              <figcaption class="figure-caption">
                <?= $leadImage->caption() ?>
              </figcaption>
              <cite><?= $leadImage->citation() ?></cite>
            </figure>
          <?php endforeach ?>
        </div>

        <div class="folio-txt folio-item cart-print">
          <?= $page->text()->kt() ?>

          <?php snippet('PriceOopShowcartNew') ?>
        </div>
      </div>
    </div>

    <?php if ($page->additionalIntroText()->isNotEmpty()): ?>
      <div class="two-column">
        <?= $page->additionalIntroText()->kt() ?>
      </div>
    <?php endif ?>


    <?php if ($page->supplementalText()->isNotEmpty()): ?>
      <div class="two-column">
        <?= $page->supplementalText()->kt() ?>
      </div>
    <?php endif ?>



    <?php if ($page->subheadTwo()->isNotEmpty()): ?>
      <div class="folio">
        <div class="folio-img folio-item">
          <?php if ($coverImage = $page->files()->findBy('template', 'addlPublicationsImage')): ?>
            <figure class="<?= $coverImage->figclass() ?>">
              <img src="<?= $coverImage->url() ?>" alt="<?= $coverImage->alt() ?>" class="<?= $coverImage->imgclass() ?>"
                loading="lazy">
              <figcaption><?= $coverImage->caption() ?></figcaption>
              <cite><?= $coverImage->citation() ?></cite>
            </figure>

          <?php endif ?>
        </div>
        <div class="folio-txt folio-item">
          <h4><?= $page->auxiliaryTitle() ?></h4>
          <?= $page->textTwo()->kt() ?>
          <?php if ($page->auxiliaryPrice()->isNotEmpty()): ?>
            <p><strong>$<?= $page->auxiliaryPrice() ?></strong></p>
          <?php else: ?>
            <p class="print-notification"><strong>Out of Print</strong></p>
          <?php endif ?>
          <div class="buy">
            <!--   <button id="addBookButton" class="btn button">Add Hardcover to Cart</button> -->
            <button id="addAuxiliaryButton" class="btn button">Add This Version to Cart</button>
          </div>
        </div>
      </div>
      <?php if ($page->supplementalText()->isNotEmpty()): ?>
        <div class="two-column">
          <h5><?= $page->supplementalTextIntro() ?></h5>
          <?= $page->supplementalText()->kt() ?>
        </div>
      <?php endif ?>
      <!--  </div> -->
    <?php endif ?>

    <?php snippet('galleryImagesTwo') ?>


    <?php if ($page->additionalPublicationText()->isNotEmpty()): ?>
      <div class="two-column">

        <h5><?= $page->additionalPublicationIntro() ?></h5>
        <?= $page->additionalPublicationText()->kt() ?>
      </div>
    <?php endif ?>

    <?php if ($addlImage = $page->images()->template('addlPublicationsImage')->offset(1)->isNotEmpty()): ?>
      <div class="folio-img folio-item">
        <?php foreach ($page->images()->template('addlPublicationsImage')->offset(1) as $addlImage): ?>

          <figure class="grid-set folio-img <?= $addlImage->figclass() ?>">
            <img src="<?= $addlImage->url() ?>" alt="<?= $addlImage->alt() ?>" class="<?= $addlImage->imgclass() ?>"
              loading="lazy">
            <figcaption>
              <?= $addlImage->caption() ?>
            </figcaption>
            <cite>
              <?= $addlImage->citation() ?>
            </cite>
          </figure>

        <?php endforeach ?>
      </div>
    <?php endif ?>


    <!-- Modal with header and footer animated: Note: I removed <h2> header -->
    <!-- Trigger/Open The Modal -->
    <?php if ($page->textModal()->isNotEmpty()): ?>
      <div class="text-center">
        <button class="modalcolor text-center" id="myBtn">Read the Text</button>
      </div>
    <?php endif ?>
  </div> <!-- close div class "main" -->



  <!-- The Modal -->
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
      </div>
      <div class="modal-body">
        <h3><?= $page->title() ?></h3>
        <div class="textModal">
          <?= $page->textModal()->kt() ?>
        </div>
        <hr>
        <?= $page->commentModal()->kt() ?>
      </div>

    </div>
  </div>
  <!--End modal-->




  <?php snippet('footer') ?>
  </div> <!-- Close class .wrapper -->
  <?php snippet('modal_broadsides') ?>
  <?php snippet('checkArrayCheckSubarrayAddBoth') ?>
  <?php snippet('scriptSource') ?>
</body>

</html>