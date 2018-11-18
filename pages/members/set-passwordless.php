<?php

	perch_layout('global.above-lg', array(
			'title'           => perch_page_title(true),
			'section_heading' => 'shop',
		));

	perch_content('Password reset information');

	perch_member_form('set_passwordless.html');

	perch_layout('global.below');
?>
