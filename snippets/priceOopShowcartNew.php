<?php
function priceDollars($page)
{
  $cents = $page->price()->isNotEmpty() ? $page->price()->toInt() : 0;
  return (float) ($cents / 100);
}
?>
=
<?php if ($page->showPriceInfo()->toBool()): ?>
  <?php if ($page->price()->isNotEmpty()): ?>
    <div class="cart-print">
      <p class="cart-print">
        <strong>$<?= number_format(priceDollars($page), 2) ?></strong>
      </p>
      <div class="buy">
        <button id="addBookButton" class="btn button">Add to Cart</button>

      </div>
    <?php else: ?>
      <p class="print-notification cart-print"><strong>Out of Print</strong></p>
    </div>
  <?php endif ?>
<?php endif ?>

<!-- <?php var_dump($page->price()->toInt());
?> -->
