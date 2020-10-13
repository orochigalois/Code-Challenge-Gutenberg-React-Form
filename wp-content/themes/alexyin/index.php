<?php get_header(); ?>

<div class="container">
<?php if(have_posts()): ?>
		<div class="posts">
			<?php while(have_posts()): the_post(); ?>
				<div class="post">
					<?php include locate_template('partials/post.php'); ?>
				</div>
			<?php endwhile; ?>
			
		</div>
	<?php else: ?>
		<div class="no-posts">
			<p>No posts were found</p>
		</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
