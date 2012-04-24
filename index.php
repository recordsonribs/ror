<?php
/*
Template Name: Index Page
*/
?>

<?php get_header(); ?>

<?php if (is_front_page()) { ?>

	<div id="left" class="index">
		<div class="mod page">
			<div class="col1">
				<?php
					global $release;
					$releases = list_recent_releases_blurb('1');
				?>

				<?php while ( have_releases () ) : the_release(); ?>
				<?php $artist = get_artist($release['release_artist']); ?>
					<div id="first">
						<h3>Latest Release</h3>
						<div class="album_art">
							<a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>" title="<?php release_title(); ?>"><span style="background: url(<?php release_cover_large();?>) no-repeat center center;"><em><?php release_title(); ?></em></span></a>
						</div>
						<div class="blurb">
							<?php $artist = get_artist($release['release_artist']); ?>
							<div class="ribcage-release">
								<small class="artist"><strong><a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>/"><?php artist_name(); ?></a></strong></small>
								<h1 class="album"><a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>"><?php release_title(); ?></a></h1>
								<p><?php release_blurb_short(); ?></p>
							</div> <!-- end div.ribcage-release -->
							<div class="artist_slug_info">
								<ul class="artist_slug_meta">
									<li class="more"><a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>">More</a></li>
									<li class="listen"><a href="javascript:popUp('<?php release_player_link (); ?>')">Listen</a></li>
									<?php if (release_physical()) : ?>
										<li class="download"><a href="<?php echo get_option('siteurl'); ?>/download/<?php release_slug(); ?>/" title="Free Download">Download</a></li>
										<li class="last buy"><a href="<?php get_option('siteurl'); ?>/buy/<?php release_product_id(); ?>">Buy</a></li>
									<?php else: ?>
										<li class="download"><a href="<?php echo get_option('siteurl'); ?>/download/<?php release_slug(); ?>/" title="Free Download">Download</a></li>
										<li class="last buy disabled"><span class="buy">Buy</span></li>									<?php endif; ?>
								</ul>
								<div class="clear"></div>
							</div> <!-- end div.artist_slug_info -->
						</div> <!-- end div.blurb -->
						<div class="mod col6 artist">
							<h3>Featured Artist</h3>
							<?php random_artist(); ?>
							<div class="blurb">
							<div class="featured_artist">
								<a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>" title="<?php release_title(); ?>"><span style="background: url(<?php artist_thumb(); ?>) no-repeat center center;"><em><?php artist_name(); ?></em></span></a>
							</div>
								<h1><a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>" title="<?php artist_name(); ?>"><?php artist_name(); ?></a></h1>
								<p><?php artist_blurb_tiny(); ?></p>
								<p class="more_link"><a href="<?php echo get_option('siteurl'); ?>/artists/" title="Artists">more artists &rsaquo;</a></p>
							</div>
							<div class="clear"></div>
						</div>
					</div> <!-- end #first -->
				<?php endwhile; ?>
			</div> <!-- end div.col1 -->
			<?php
				global $releases;
				$releases = list_recent_releases_blurb('13');
				the_release();
			?>
			<div class="col2">
				<h3>Recent Releases</h3>
					<div id="next">
						<div class="col page1">
							<?php while ( have_releases () ) : the_release(); ?>
								<?php $artist = get_artist($release['release_artist']); ?>
								<div class="artist_slug">
									<div class="album_art">
										<a class="slug" href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>"><img src="<?php release_cover_tiny();?>" alt="<?php release_title(); ?>" title="<?php release_title(); ?>" /></a>
										<div class="artist_slug_info">
											<ul class="artist_slug_main">
												<li class="artist"><a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>/"><?php artist_name(); ?></a><h2><a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>"><?php release_title(); ?></a></h2></li>
											</ul>
											<ul class="artist_slug_meta">
												<li class="more"><a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>">More</a></li>
												<li class="listen"><a href="javascript:popUp('<?php release_player_link (); ?>')">Listen</a></li>
											<?php if (release_physical()) : ?>
												<li class="download"><a href="<?php echo get_option('siteurl'); ?>/download/<?php release_slug(); ?>/">Free Download</a></li>
												<li class="last buy"><a href="<?php get_option('siteurl'); ?>/buy/<?php release_product_id(); ?>">Buy</a></li>
											<?php else: ?>
												<li class="last download"><a href="<?php echo get_option('siteurl'); ?>/download/<?php release_slug(); ?>/">Free Download</a></li>
											<?php endif; ?>
											</ul>
										</div> <!-- end div.artist_slug_info -->
									<div class="clear"></div>
									</div> <!-- end div.album_art -->
								</div> <!-- end div.artist_slug -->
						<?php endwhile; ?>
						</div> <!-- end div.col -->
					</div> <!-- end #next -->
				<div class="clear"></div>
				<div class="col3">
					<div class="mod col4">
						<h3>Blog Posts</h3>
						<?php
							//The Query
							query_posts('posts_per_page=2');

							//The Loop
							if ( have_posts() ) : while ( have_posts() ) : the_post();
						?>
							<div class="news">
								<a href="<?php bloginfo('url'); ?>/author/<?php the_author_login(); ?>/" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('id'), '35' ); ?></a>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<small>Posted by <a href="<?php bloginfo('url'); ?>/author/<?php the_author_login(); ?>" title="<?php the_author(); ?>/"><?php the_author(); ?></a> on <?php the_time('j F Y') ?></small>
								<div class="entry">
									<?php the_advanced_excerpt(); ?>
								</div>
								<p class="metadata"><span class="categories">Posted in: <?php the_category(', '); ?></span> <span class="tags"><?php the_tags('Tags: #', ', #', ''); ?></span> <?php comments_popup_link('', '1', '%','comments'); ?> <?php if (function_exists('sharethis_button')) { sharethis_button(); } ?> <?php edit_post_link('Edit', '', ' '); ?></p>
							</div>
						<?php
							endwhile;
							endif;

							//Reset Query
							wp_reset_query();
						?>
						<p class="more_link"><a href="<?php echo get_option('siteurl'); ?>/blog/" title="News">more news &rsaquo;</a></p>
					</div> <!-- end div.col4 -->
					<div class="mod col5">
						<h3>Events</h3>
						<ul class="events">
							<?php dbem_get_events_list("limit=3&scope=al&order=DESC"); ?>
						</ul>
						<p class="more_link"><a href="<?php echo get_option('siteurl'); ?>/events/" title="Events">more events &rsaquo;</a></p>
					</div> <!-- end div.col5 -->
					<div class="mod col7">
						<h3>Links</h3>
						<ul>
							<?php wp_list_bookmarks( 'category_name=Frontpage&title_li=&title_before=&title_after=&categorize=0' ); ?>
						</ul>
					</div> <!-- end div.col7 -->
					<div class="clear"></div>
				</div> <!-- end div.col3 -->
			</div> <!-- end div.col2 -->
			<div class="clear"></div>
		</div> <!-- end div.page -->
	</div> <!-- end #left -->

<?php get_footer();





// IF THE CURRENT PAGE IS NOT THE HOME PAGE,
// HAVE WORDPRESS DISPLAY THE TEMPLATE FOR THE NEWS PAGE:





} elseif (is_home()) { ?>

	<div id="left" class="news_page">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php $myDate = the_date('\<\s\p\a\n \c\l\a\s\s\=\"\d\a\y\"\>j\<\/\s\p\a\n\> \<\s\p\a\n \c\l\a\s\s\=\"\m\o\n\t\h\"\>F\<\/\s\p\a\n\> \<\s\p\a\n \c\l\a\s\s\=\"\y\e\a\r\"\>Y\<\/\s\p\a\n\>','<div class="mod-meta"><h3>','</h3></div>',false); ?>

			<div class="mod post<?php if($myDate == "") { echo " sameday"; } ?>" id="post-<?php the_ID(); ?>">
				<?php echo $myDate; ?>
				<div class="mod-body">
					<a href="<?php bloginfo('url'); ?>/author/<?php the_author_login(); ?>/" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('id'), '35' ); ?></a>
					<h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p class="author">Posted by <a href="<?php bloginfo('url'); ?>/author/<?php the_author_login(); ?>" title="<?php the_author(); ?>/"><?php the_author(); ?></a> at <?php the_time('g:i a') ?></p>
					<div class="entry">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
					<p class="metadata"><span class="categories">Posted in: <?php the_category(', '); ?></span> <span class="tags"><?php the_tags('Tags: #', ', #', ''); ?></span> <?php comments_popup_link('', '1', '%','comments'); ?> <?php if (function_exists('sharethis_button')) { sharethis_button(); } ?> <?php edit_post_link('Edit', '', ' '); ?></p>
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

<?php } ?>
