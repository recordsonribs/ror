<?php get_header(); ?>

<div id="left" class="news_page">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<?php $myDate = the_date('\<\s\p\a\n \c\l\a\s\s\=\"\d\a\y\"\>j\<\/\s\p\a\n\> \<\s\p\a\n \c\l\a\s\s\=\"\m\o\n\t\h\"\>F\<\/\s\p\a\n\> \<\s\p\a\n \c\l\a\s\s\=\"\y\e\a\r\"\>Y\<\/\s\p\a\n\>','<div class="mod-meta"><h3>','</h3></div>',false); ?>

	<div class="mod post<?php if($myDate == "") { echo " sameday"; } ?>" id="post-<?php the_ID(); ?>">
		<?php echo $myDate; ?>
		<div class="mod-body">
			<a href="<?php bloginfo('url'); ?>/author/<?php the_author_login(); ?>/" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 35 ); ?></a>
			<h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<p class="author">Posted by <a href="<?php bloginfo('url'); ?>/author/<?php the_author_login(); ?>" title="<?php the_author(); ?>/"><?php the_author(); ?></a> at <?php the_time('g:i a') ?></p>
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
			<p class="metadata"><span class="categories">Posted in: <?php the_category(', '); ?></span> <span class="tags"><?php the_tags('Tags: #', ', #', ''); ?></span> <?php comments_popup_link('', '1', '%','comments'); ?></p>
		</div>
	</div>
<?php endwhile; ?>

<div class="clear"></div>

<div class="mod navigation">
	<div class="mod-meta"></div>
	<div class="mod-body">
		<div class="next"><p><strong><?php next_posts_link('&lsaquo; Older Entries') ?></strong></p></div>
		<div class="prev"><p><strong><?php previous_posts_link('Newer Entries &rsaquo;') ?></strong></p></div>
		<div class="clear"></div>
	</div>
</div>

</div> <!-- end #left -->

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
