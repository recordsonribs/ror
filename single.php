<?php
/*
Template Name: Single
*/
?>


<?php get_header(); ?>

	<div id="left">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="mod post" id="post-<?php the_ID(); ?>">
				<div class="mod-meta">
					<p><a href="<?php bloginfo('url'); ?>/author/<?php the_author_meta('user_login'); ?>/" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), '35' ); ?></a></p>
					<div class="meta author">Posted by <strong><a href="<?php bloginfo('url'); ?>/author/<?php the_author_meta('user_login'); ?>/" title="<?php the_author(); ?>"><?php the_author(); ?></a></strong> on <?php the_time('F j, Y','','',false); ?> at <?php the_time(); ?> in <?php the_category(', '); ?></div><div class="meta tags"><?php the_tags('Tags: #', ', #', ''); ?></div>
				</div>
				<div class="mod-body">
					<div class="entry">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
					<p class="metadata"><?php if (function_exists('sharethis_button')) { sharethis_button(); } ?> <?php edit_post_link('Edit', '', ' '); ?></p>
				</div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php comments_template(); ?>

	<?php endif; ?>

	</div> <!-- end #left -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
