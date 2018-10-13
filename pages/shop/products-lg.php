<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>

<?php
   $catSlug = perch_get('category');

   if($catSlug) {
      // category view
      $cat = perch_category("products/$catSlug/", ['skip-template' => true]);
  
      // if the category doesn't exist, use 404 page
      if(!$cat) {
         PerchSystem::use_error_page(404);
      exit;
      }

   } else {
    // regular view - i.e. /shop
   }
?>

<?php perch_layout('global/header'); ?>
   <?php perch_content('Main Navigation'); ?>

<!--Product and store pages-->
<!--   <div class="folio-list-shop product boxer">-->
      <?php
         if($catSlug) {
            perch_shop_products([
               'category' => "products/$catSlug/",
               'template' => '/products/list_lg.html',
               'sort' => 'sorting_number',
               'sort-order' => 'ASC',
               'sort-type' => 'numeric',
            ]);
         } else {
            perch_shop_products([
               'sort' => 'sorting_number',
               'template' => '/products/list.html',
               'sort' => 'sorting_number',
               'sort-order' => 'ASC',
               'sort-type' => 'numeric',
            ]);
         }
      ?>
<!--   </div>-->
     
<?php perch_layout('global/footer'); ?>
