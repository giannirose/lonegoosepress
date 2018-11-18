<?php
	perch_layout('global/header');

			perch_shop_product('', [
			'template' => 'products/thank_you.html',
			]);
?>
<div class="text-center">
<h4 >Thank you for visiting lone goose press!</h4>

<ul>
	<li>Go to our <a href="/">Home Page</a>.</li>
	<li>Shop our <a href="/shop/books">books</a>.</li>
	<li>Shop our <a href="shop/broadsides">broadsides</a>.</li>
</ul>
</div>

<?php
	perch_layout('global/footer'); 
?>
