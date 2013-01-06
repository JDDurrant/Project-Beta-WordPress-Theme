<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('-','true','right'); ?><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s Latest Posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php printf( __( '%s Latest Comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<!-- [if IE]>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/iescript.js" type="text/javascript"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrapper">
			<div id="navigation">
				<?php wp_nav_menu( $menuParameters = array(
				'nav' => 'Header Navigation',
				'items_wrap' => '%3$s',
				'container' => false,
				'echo' => false,
				'depth' => 0, ) );
				echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
				<form role="search" action="<?php bloginfo('url'); ?>" method="get">
					<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="search" />
				</form>
			</div>