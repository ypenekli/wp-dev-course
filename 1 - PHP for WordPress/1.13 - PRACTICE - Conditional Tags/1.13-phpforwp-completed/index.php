<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP for WordPress</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
		<link rel="stylesheet" href="/wp-content/themes/1.13-phpforwp-completed/style.css">
	</head>
  <body class="<?php body_class(); ?>">

    <header id="masthead">
    	<h1><a href="#">PHP for WordPress</a></h1>
    </header>

    <div id="content">

			<!-- Static Front Page -->
			<?php if( is_front_page() && !is_home() ): ?>

				<h1>Static Front Page</h1>

			<?php endif; ?>

			<!-- Blog Home -->
			<?php if( is_home() ): ?>

				<h1>Blog Home</h1>

			<?php endif; ?>

			<!-- Page (Not Front Page) -->
			<?php if( is_page() &&  !is_front_page() ): ?>

				<h1>Page</h1>

			<?php endif; ?>

			<!-- Single Post -->
			<?php if( is_single() && !is_attachment() ): ?>

				<h1>Post</h1>
				<?php the_content(); ?>

			<?php endif; ?>

			<!-- Attachment (Media) -->
			<?php if( is_attachment() ): ?>

				<h1>Attachment</h1>
				<?php the_content(); ?>

			<?php endif; ?>

			<!-- Category Archive -->
			<?php if( is_category() ): ?>

				<h1><?php single_cat_title(); ?></h1>

			<?php endif; ?>

			<!-- Tag Archive -->
			<?php if( is_tag() ): ?>

				<h1><?php single_tag_title(); ?></h1>

			<?php endif; ?>

			<!-- Author Archive -->
			<?php if( is_author() ): ?>

				<h1><?php the_archive_title(); ?></h1>

			<?php endif; ?>

			<!-- Date Archive -->
			<?php if( is_date() ): ?>

				<h1><?php the_archive_title(); ?></h1>

			<?php endif; ?>

			<!-- 404 Page -->
			<?php if( is_404() ): ?>

				<h1><?php _e( '404 - Content not found', 'phpforwp' ); ?></h1>

			<?php endif; ?>

		</div>

	</body>
</html>
