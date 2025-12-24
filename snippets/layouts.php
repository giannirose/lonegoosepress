<?php foreach ($field->toLayouts() as $layout): ?>
  <section class="margin-xl grid blog" id="<?= $layout->id() ?>">
    <?php foreach ($layout->columns() as $column): ?>
      <div class="column" style="--span:<?= $column->span() ?>">
        <?= $column->blocks() ?>
      </div>
    <?php endforeach ?>
  </section>
<?php endforeach ?>