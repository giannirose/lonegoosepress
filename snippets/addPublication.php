<button id="addBookButton" data-id="<?= $page->idValue() ?>" data-title="<?= $page->titleValue() ?>"
  data-author="<?= $page->author() ?>" data-price="<?= $page->price()->value() ?>">
  Add Book
</button>

<button id="addAuxiliaryButton" data-id="<?= $page->auxiliaryId() ?>" data-title="<?= $page->auxiliaryTitle() ?>"
  data-author="<?= $page->auxiliaryAuthor() ?>" data-price="<?= $page->auxiliaryPrice()->value() ?>">
  Add Auxiliary
</button>

<script src="../assets/js/addPublication.js"></script>
<script>
  // Wire up the buttons using the data-* attributes
  document.getElementById('addBookButton').addEventListener('click', (e) => {
    const btn = e.currentTarget;
    checkAndAddToBooksList(
      btn.dataset.id,
      btn.dataset.title,
      btn.dataset.author,
      parseInt(btn.dataset.price, 10)
    );
    setAddToCartText('addBookButton');
  });

  document.getElementById('addAuxiliaryButton').addEventListener('click', (e) => {
    const btn = e.currentTarget;
    checkAndAddToBooksList(
      btn.dataset.id,
      btn.dataset.title,
      btn.dataset.author,
      parseInt(btn.dataset.price, 10)
    );
    setAddToCartText('addAuxiliaryButton');
  });
</script>