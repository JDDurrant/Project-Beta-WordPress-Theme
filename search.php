<?php get_header(); ?>
	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<p><?php the_time('j F Y'); ?> - <a href="<?php comments_link(); ?>" class="link"><?php comments_number('No comments', '1 comment', '% comments'); ?></a></p>
			</div>
		<?php endwhile; else: ?>
			<div class="post">
				<h2>No results found</h2>
				<p>Sorry, none of the posts on this site could be matched to your search query. If you would like to see a blog post like the one you just searched for, <a href="mailto:<?php bloginfo('admin_email'); ?>">Email me</a> as I am always open to suggestions of what I can write about.</p>
			</div>
		<?php endif; ?>
		<p class="nav"><?php posts_nav_link(); ?></p>
	</div>
<?php get_footer(); ?>