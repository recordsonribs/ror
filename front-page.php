<?php get_header(); ?>
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
						<a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>" title="<?php release_title(); ?>"><img src="<?php release_cover_large();?>"></a>
					</div>
					<div class="blurb">
						<?php $artist = get_artist($release['release_artist']); ?>
						<div class="ribcage-release">
							<small class="artist"><strong><a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/"><?php artist_name(); ?></a></strong></small>
							<h1 class="album"><a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>"><?php release_title(); ?></a></h1>
							<p><?php release_blurb_short(); ?></p>
						</div> <!-- end div.ribcage-release -->
						<div class="artist_slug_info">
							<ul class="artist_slug_meta">
								<li class="more"><a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>">More</a></li>
								<li class="listen"><a href="javascript:popUp('<?php release_player_link (); ?>')">Listen</a></li>
								<?php if (release_physical()) : ?>
									<li class="download"><a href="<?php echo home_url(); ?>/download/<?php release_slug(); ?>/" title="Free Download">Download</a></li>
									<li class="last buy"><a href="<?php home_url(); ?>/buy/<?php release_product_id(); ?>">Buy</a></li>
								<?php else: ?>
									<li class="download"><a href="<?php echo home_url(); ?>/download/<?php release_slug(); ?>/" title="Free Download">Download</a></li>
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
							<a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>" title="<?php release_title(); ?>"><span style="background: url(<?php artist_thumb(); ?>) no-repeat center center;"><em><?php artist_name(); ?></em></span></a>
						</div>
							<h1><a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>" title="<?php artist_name(); ?>"><?php artist_name(); ?></a></h1>
							<p><?php artist_blurb_tiny(); ?></p>
							<p class="more_link"><a href="<?php echo home_url(); ?>/artists/" title="Artists">more artists &rsaquo;</a></p>
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
									<a class="slug" href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>"><img src="<?php release_cover_tiny();?>" alt="<?php release_title(); ?>" title="<?php release_title(); ?>" /></a>
									<div class="artist_slug_info">
										<ul class="artist_slug_main">
											<li class="artist"><a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/"><?php artist_name(); ?></a><h2><a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>"><?php release_title(); ?></a></h2></li>
										</ul>
										<ul class="artist_slug_meta">
											<li class="more"><a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>">More</a></li>
											<li class="listen"><a href="javascript:popUp('<?php release_player_link (); ?>')">Listen</a></li>
										<?php if (release_physical()) : ?>
											<li class="download"><a href="<?php echo home_url(); ?>/download/<?php release_slug(); ?>/">Free Download</a></li>
											<li class="last buy"><a href="<?php home_url(); ?>/buy/<?php release_product_id(); ?>">Buy</a></li>
										<?php else: ?>
											<li class="last download"><a href="<?php echo home_url(); ?>/download/<?php release_slug(); ?>/">Free Download</a></li>
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
							<a href="<?php bloginfo('url'); ?>/author/<?php the_author_login(); ?>/" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 35 ); ?></a>
							<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<small>Posted by <a href="<?php bloginfo('url'); ?>/author/<?php echo get_the_author_meta('login'); ?>" title="<?php the_author(); ?>/"><?php the_author(); ?></a> on <?php the_time('j F Y') ?></small>
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
					<p class="more_link"><a href="<?php echo home_url(); ?>/blog/" title="News">more news &rsaquo;</a></p>
				</div> <!-- end div.col4 -->
				<div class="clear"></div>
			</div> <!-- end div.col3 -->
		</div> <!-- end div.col2 -->
		<div class="clear"></div>
	</div> <!-- end div.page -->
</div> <!-- end #left -->

<?php get_footer(); ?>