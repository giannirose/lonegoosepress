<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
	<?php perch_layout('global/header'); ?>
		<?php perch_content('Main Navigation'); ?>
			<div class="article">
				<?php perch_content('Article'); ?>	
			</div>

	<?php perch_layout('global/footer'); ?>