<?php $galleryImages = $page->images()->template('galleryImage')->sortBy('sort', 'asc') ?>
<?php if ($galleryImages->isNotEmpty()): ?>
  <div class="container">
    <div class="gallery-image">

      <?php foreach ($galleryImages as $file): ?>
        <figure>
          <a href="<?= $file->url() ?>">
            <img src="<?= $file->url() ?>" alt="<?= $file->alt() ?>">
          </a>
          <?php if ($file->caption()->isNotEmpty()): ?>
            <figcaption><?= $file->caption()->kt() ?></figcaption>
          <?php endif ?>
          <?php if ($file->citation()->isNotEmpty()): ?>
            <cite><?= $file->citation()->kt() ?></cite>
          <?php endif ?>
        </figure>
      <?php endforeach ?>
    </div>
  </div>
<?php endif ?>