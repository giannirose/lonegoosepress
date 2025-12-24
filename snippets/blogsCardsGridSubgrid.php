<!-- <div class="folio-grid"> Parent grid container from Publications -->
<div class="">
  <ul class="blogs-grid card-grid">
    <!-- Add flip() for blog (Impressions) listing -->
    <?php foreach ($page->children()->listed()->flip() as $subpage): ?>
      <li class="card blog-card">
        <div class="card-title blog-excerpt-title">
          <a href="<?= $subpage->url() ?>">
            <h2><?= $subpage->title()->html() ?></h2>
          </a>
        </div>



        <div class="card-image card-figure blog-excerpt-image blog-excerpt-figure figure">

          <?php
          $cover = $subpage->images()->template('cover')->first();

          if ($cover):
            $croppedCover = $cover->crop(200, 200, 'top center');
            if ($croppedCover): ?>

              <figure class="cover">
                <a href="<?= $subpage->url() ?>"></a>
                <img src="<?= $croppedCover->url() ?>" alt="<?= $croppedCover->alt() ?>" loading="lazy">
                </a>
                <!--     <figcaption><?= $croppedCover->caption() ?></figcaption> -->
              </figure>

            <?php endif;
          else:
            $defaultImage = $subpage->images()->template('image')->first();
            if ($defaultImage):
              $image = $defaultImage->crop(200, 200, 'top center');
              if ($image): ?>
                <figure class="cover">
                  <a href="<?= $subpage->url() ?>">
                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy">
                  </a>
                  <!--        <figcaption><?= $image->caption() ?></figcaption> -->
                </figure>
              <?php endif;
            endif;
          endif;
          ?>
        </div>



        <div class="card-excerpt blog-date-and-text card-excerpt">
          <p class="blog-excerpt-date card-date">
            <a href="<?= $subpage->url() ?>">


              <time class="blog-excerpt-date" datetime="<?= $subpage->published('c') ?>">
                <?= $subpage->published() ?>
              </time>

            </a>
          </p>


          <?php if ($subpage->excerptself()->isNotEmpty()): ?>
            <p class="excerpt">
              <?= $subpage->excerptself()->excerpt(90) ?>
            </p>

          <?php else: ?>
            <?php if (($excerpt ?? true) !== false): ?>
              <p class="excerpt">
                <?= $subpage->intro()->excerpt(90) ?>

              </p>

            <?php endif ?>
          <?php endif ?>




          <!--      <?= $subpage->excerptself()->excerpt(120)->kt() ?> -->
        </div>
        <div class=" cta instructions card-instructions">
          <a class="blog-read-link card-link" href="<?= $subpage->url() ?>">Read on…</a>
        </div>
      </li>
    <?php endforeach ?>
</div>