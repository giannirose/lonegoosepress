<?php
function priceDollarsAux($page)
{
  $cents = $page->auxiliaryPrice()->isNotEmpty() ? $page->auxiliaryPrice()->toInt() : 0;
  return (float) ($cents / 100);
}
?>

<?php if ($page->showPriceInfo()->toBool()): ?>
  <?php if ($page->auxiliaryPrice()->isNotEmpty()): ?>
    <div class="cart-print">
      <p class="cart-print">
        <strong>$<?= number_format(priceDollarsAux($page), 2) ?></strong>
      </p>
    <?php else: ?>
      <p class="print-notification"><strong>Out of Print</strong></p>
    <?php endif ?>
  <?php endif ?>

  <div class="buy">
    <button id="addAuxiliaryButton" class="btn button">Add This Version to Cart</button>
  </div>

  <!-- <?php var_dump($page->auxiliaryPrice()->value()); ?> -->
