<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
		<?php perch_layout('global/header'); ?>
			<?php perch_content('Main Navigation'); ?>

				<div class="basicgrid page-margin">	
	 				<ul>
      				<div class="colorarraylt">
							<?php perch_content('Folio Items'); ?>

      				</div><!--End div with class colorarray.-->
					</ul>
				</div>

		<?php perch_layout('global/footer'); ?>



