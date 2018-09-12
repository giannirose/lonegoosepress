<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
	<?php perch_layout('global/header'); ?>
		<?php perch_content('Main Navigation'); ?>
		<h2 class="text-center" ><?php perch_content('Page Title'); ?></h2>
			<div class="article">
				<?php perch_content('Article'); ?>	
			</div>
	<?php perch_layout('global/footer'); ?>