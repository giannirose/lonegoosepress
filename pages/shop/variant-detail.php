<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>

      <?php perch_layout('global/header'); ?>
         <?php perch_content('Main Navigation'); ?>

            <?php
               // check you have a variant ID in the URL
               if(perch_get('variantID')) {
               // display a single variant
                  perch_shop_product_variants(perch_get('s'), [
                     'template' => 'products/variant_lg.html',
                     'filter' => 'productID',
                     'value' => perch_get('variantID'),
                  ]);
               }
            ?>     

<?php perch_layout('global/footer'); ?>

