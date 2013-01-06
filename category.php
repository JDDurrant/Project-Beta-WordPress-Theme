<?php get_header(); ?>
	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
				<p><?php the_time('j F Y'); ?> - <a href="<?php comments_link(); ?>" class="link"><?php comments_number('No comments', '1 comment', '% comments'); ?></a></p>
			</div>
		<?php endwhile; else: ?>
			<div class="post">
				<h2>No posts found</h2>
				<p>Sorry, there are not yet any posts in this category.</p>
			</div>
		<?php endif; ?>
		<p class="nav"><?php posts_nav_link(); ?></p>
	</div>
<?php get_footer(); ?>