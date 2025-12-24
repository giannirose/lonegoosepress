<?php if ($page->showPriceInfo()->toBool()): ?>
  <?php if ($page->price()->isNotEmpty()): ?>
    <div class="cart-print">
      <p class="cart-print">
        <strong>$<?= $page->price() ?></strong>
      </p>
      <div class="buy">
        <button id="addBookButton" class="btn button">Add to Cart</button>
      </div>
    <?php else: ?>
      <p class="print-notification cart-print"><strong>Out of Print</strong></p>
    </div>
  <?php endif ?>
<?php endif ?>