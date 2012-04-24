<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>

	<div id="left">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<div class="mod page events">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
		<?php endwhile; ?>

	<?php endif; ?>


	</div> <!-- end #left -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
