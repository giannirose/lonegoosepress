<div class="blog">
  <header>
    <h1>
      <?= $page->headline()->or($page->title())->html() ?>
    </h1>
    <?= $page->subheadline()->kt() ?>
  </header>

  <?php foreach ($page->files()->template('cover') as $coverImage): ?>
    <figure class="imintroblogphp <?= $coverImage->figclass() ?> ">

      <a href="<?= $coverImage->url() ?>">

        <img src="<?= $coverImage->url() ?>" alt="<?= $coverImage->alt() ?>" class="<?= $coverImage->imgclass() ?> figure"
          loading="lazy">
      </a>

      <figcaption>
        <?= $coverImage->caption() ?>
      </figcaption>

      <cite>
        <?= $coverImage->citation() ?>
      </cite>
    </figure>
  <?php endforeach ?>

  <div class="blog-intro">
    <?= $page->intro()->kirbytext() ?>
  </div>

  <!-- Add a cover image in a div -->
  <div class="blog-intro-cover" style="display: <?= $page->stylediv() ?>;">

    <!-- Local site had this blanked out and working -->
    <!-- &lt;?php if ($page->cover()->toFile()->url()->isNotEmpty()): ?> -->
    <!-- End test comment-out -->

    <p class="h3 imagehead">
      <?= $page->figurehead() ?>
    </p>



    <!-- Commented out when local site worked -->
    <!-- &lt;?php endif ?> -->
    <!-- End comment out section -->

    <div class="coverintro">
      <!-- Add some explanatory text below the figure -->
      <?php if ($page->coverintro()->isNotEmpty()): ?>

        <?= $page->coverintro()->kirbytext() ?>

      <?php endif ?>
    </div>
  </div>

  <!-- End cover image in a div-->
</div>