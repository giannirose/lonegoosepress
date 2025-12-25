<?php snippet('head') ?>

<body class="cart shop">

  <div class="wrapper">
    <header class="header-cart h1">
      <img src="assets/images/lonegoose.png" alt="lone goose image" width="72" height="72" />
      <a href=<?= $site->url(); ?>>
        <p class="h1">lone goose press</p>
      </a>
    </header>
    <nav> <!--Begin navigation-->
      <ul class="cart-navigation">
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/books">Keep Shopping Books</a>
        </li>
        <li>
          <a href="/broadsides">Keep Shopping Broadsides</a>
        </li>

      </ul>
    </nav>
    <!-- End navigation-->

    <div class="cart-content">
      <h1>Your cart</h1>
    </div>

    <table id="booksTable">
      <thead>
        <tr class="cart-row">
          <th class="cart-title cart-header cart-column" scope="col">Title</th>
          <th class="cart-author cart-header cart-column" scope="col">Author</th>
          <th class="cart-price cart-header cart-column" scope="col">Price</th>
          <th class="cart-quantity cart-column cart-header cart-column" scope="col">Count
          </th>
          <th class="cart-remove" scope="col"></th>
        </tr>
      </thead>
      <tbody class="cart-items">
        <!-- Table rows will be dynamically added here -->
      </tbody>
    </table>

    <div class="cart-total">Total Amount:
      <span id="totalPrice" class="cart-quantity-input cart-total-price">0</span>
    </div>
    <!-- The button has a data-stripe-key referenced in stripeCheckoutAtCart.js -->
    <div class="purchase-button" id="divButton">
      <button id="purchaseButton" class="btn btn-primary btn-purchase" type="button"
        data-stripe-key="<?= option('stripe.publishable') ?>">Purchase</button>
    </div>
  </div> <!--close wrapper-->

  <script src="https://js.stripe.com/v3/"></script>
  <script src="../assets/js/stripeCheckoutAtCart.js"></script>
  <script src="../assets/js/cartPageEnterAndUpdate.js" type="text/javascript"></script>

</body>

</html>
