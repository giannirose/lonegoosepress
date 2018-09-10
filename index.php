<?php include ('perch/runtime.php');?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title>lone goose press</title>
	<?php perch_page_attributes(); ?>
	<!--<link rel="stylesheet" type="text/css" href="/stylesheets/accordion_w3c.css">-->
	<!--<link rel="stylesheet" type="text/css" href="/stylesheets/accordion_cp01.css">-->
	<?php perch_get_css(); ?>
	<?php perch_get_javascript(); ?>

</head>
<body>
	<div class="wrapper">
		<header class="header text-center">

			<img src="/perch/resources/images/klp384161.png" srcset="/perch/resources/images/klp512215.png 512w, /perch/resources/images/klp768323.png 768w,  /perch/resources/images/klp960403.png 960w, /perch/resources/images/klp1024430.png 1024w" alt="image of the press" >
			<!--<nav class="menu">
				<ul class="navigation-top">
					<li class="menulink"><a href="menulinks.php">Menu</a></li>
					<li class="right-nav"><a href="">Cart</a></li>
				</ul>
			</nav>-->
				<div class="title">		
					<h1 class="site-title">lone goose press</h1>
				</div>

		</header>
		<div class="page-content">

			<?php perch_content('Main Navigation'); ?>
		
			<div class="home-style"> <!--for all main content columns-->

				<h2 class="center-headline"><?php perch_content('Headline'); ?></h2>

				<div class="center-content"> <!--div for main content column-->
					<?php perch_content('Main Home Content'); ?>
				</div>


					<?php perch_content('Left Sidebar'); ?>

					
				<aside class="aside-right">
					<?php perch_content('Right Sidebar'); ?>

				</aside>
			</div>
		</div><!--Close div class=page-content-->

	<?php perch_layout('global/footer'); ?>



</body>
</html>