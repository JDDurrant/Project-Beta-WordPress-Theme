<?php get_header(); ?>
	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="border">
				<h2><a name="title" class="link"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
				<p><?php the_time('j F Y'); ?> - <a name="comments"><?php comments_number('No comments', '1 comment', '% comments'); ?></a></p>
			</div>
			<div id="comments">
				<?php comments_template(); ?>
			</div>
		<?php endwhile; else: ?>
			<div class="post">
				<h2>Post not found</h2>
				<p>Sorry, the blog post you requested could not be found on this site. Please make sure you typed the URL correctly. If this post was added to your bookmarks, try searching for it as the URL for it may have changed.</p>
			</div>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>