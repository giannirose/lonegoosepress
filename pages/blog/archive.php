<?php perch_layout('global/header-blog'); ?>

	<?php perch_content('Blog Heading') ?>

		<!--<?php 
			//perch_content('Main Navigation'); 
			?>
		-->

		<?php perch_content('Timely Alert'); ?>


<div class="posts-list">
		    <?php
		        // defaults for all modes
		        $posts_per_page = 10;
		        $template 		= 'post_in_list.html';
		        $sort_order		= 'DESC';
		        $sort_by		= 'postDateTime';

		        // Have we displayed any posts yet?
		        $posts_displayed = false;

		        /*
		        	perch_get() is used to get options from the URL.

					e.g. for the URL
						/blog/archive.php?cat=news

					perch_get('cat') would return 'news' because cat=news.


					The code below looks for different options in the URL, and then displays different types of listings based on it.
		        */


		        /* --------------------------- POSTS BY CATEGORY --------------------------- */
		        if (perch_get('cat')) {
		            echo '<h1>Archive of: '.perch_blog_category(perch_get('cat'), true).'</h1>';

		            perch_blog_custom([
							'category'   => perch_get('cat'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ]);

		            $posts_displayed = true;
		        }


		        /* --------------------------- POSTS BY TAG --------------------------- */
		        if (perch_get('tag')) {
		            echo '<h1>Archive of: '.perch_blog_tag(perch_get('tag'), true).'</h1>';

		            perch_blog_custom([
							'tag'   	 => perch_get('tag'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ]);

		            $posts_displayed = true;
		        }



		        /* --------------------------- POSTS BY DATE RANGE --------------------------- */
		        if (perch_get('year')) {

					$year              = intval(perch_get('year'));
					$date_from         = $year.'-01-01 00:00:00';
					$date_to           = $year.'-12-31 23:59:59';
					$title_date_format = '%Y';


		            // Month and Year?
		            if (perch_get('month')) {
						$month             = intval(perch_get('month'));
						$date_from         = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
						$date_to           = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
						$title_date_format = '%B, %Y';
		            }

		            echo '<h1>Archive of: '.strftime($title_date_format, strtotime($date_from)).'</h1>';

		            perch_blog_custom([
							'filter'     => 'postDateTime',
							'match'      => 'eqbetween',
							'value'      => $date_from.','.$date_to,
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ]);

		            $posts_displayed = true;
		        }



		        /* --------------------------- POSTS BY AUTHOR --------------------------- */
		        if (perch_get('author')) {

		        	echo '<h1>Posts by '.perch_blog_author(perch_get('author'), [
		        											'template' => 'author_name.html',
		        											], true).'</h1>';


		        	perch_blog_custom([
							'author'   	 => perch_get('author'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ]);

		            $posts_displayed = true;
		        }


		      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */

		      	if ($posts_displayed == false) {

		      		// No other options have been used; no posts have been displayed yet.
		      		// So display all posts.

		      		echo '<h1>Archive</h1>';

		      		perch_blog_custom([
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ]);

		      	}

		    ?>
	</div>
	<div>
		<nav class="sidebar">
		    <h2>Filter archive</h2>
		    <!--  By category listing -->
		    <?php perch_blog_categories(); ?>
		    <!--  By tag -->
		    <?php perch_blog_tags(); ?>
		    <!--  By year -->
		    <?php perch_blog_date_archive_years(); ?>
		    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
		    <?php perch_blog_date_archive_months(); ?>
    	</nav>
	</div>

<?php ('global/footer-blog'); ?>
