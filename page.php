<?php get_header(); ?>

	<div id="left">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="mod page" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<p class="metadata"><?php edit_post_link('Edit', ' ', ''); ?></p>
			</div>

		<?php endwhile; ?>

	<?php endif; ?>

	</div> <!-- end #left -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
