<div class="clear"></div>

</div> <!-- end #content -->

</div> <!-- end #page_inr -->

</div> <!-- end #page_outr -->

<div id="footer">
	<div class="footer-nav">
		<div id="cc"><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="Creative Commons Attribution License"><span>Creative Commons</span></a></div>
		<div class="colgroup1">
			<div class="col1">
				<h2>About This Site</h2>
				<ul>
					<li><a href="http://recordsonribs.com/cookies/" title="Cookies Policy">Cookies Policy</a></li>
					<li><a href="http://wordpress.org/" title="WordPress" rel="generator">Powered by WordPress</a></li>
					<li><a href="http://recordsonribs.com/ribcage/" title="Ribcage - Record Label Management for Wordpress">Using the Ribcage plugin</a> </li>
				</ul>
			</div>
			<div class="col1">
				<h2>Feeds</h2>
				<ul>
					<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0 Feed">News</a></li>
					<li class="rss"><a href="/releases/feed/" title="RSS 2.0 Feed">Releases</a></li>
					<li class="rss"><a href="/?dbem_rss=main" title="RSS 2.0 Feed">Events</a></li>
				</ul>
			</div>
			<div class="col3 ivystreet">
				<h2><a href="http://bryan.is/a/designer" title="Bryan Klausmeyer" target="_blank">Designed by Bryan</a>.</h2>
			</div>
			<div class="clear"></div>
		</div> <!-- end div.colgroup1 -->

		<div class="colgroup2">
			<div class="col1 albums">
				<h2><a href="<?php echo home_url(); ?>/releases/" title="Recent Releases">Releases</a> &rsaquo;</h2>
				<?php
					global $releases, $release, $artist;
					$releases = list_recent_releases_blurb('10');
					while ( have_releases () ) : the_release() ; ?>
					<?php $artist = get_artist($release['release_artist']); ?>
						<div class="artist_slug">
							<a href="<?php echo home_url(); ?>/artists/<?php artist_slug(); ?>/<?php release_slug(); ?>"><img src="<?php release_cover_tiny ();?>" alt="<?php release_title(); ?>" title="<?php release_title(); ?>" /></a>
						</div>
					<?php endwhile; ?>
			</div>
			<div class="col2">
				<h2>Mailing List</h2>
				<div class="mailing-list">
					<form action="//recordsonribs.us5.list-manage.com/subscribe/post?u=c398430401592b15b5b394a5a&amp;id=4d70861eac" method="post" name="mc-embedded-subscribe-form" target="_blank">						
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_c398430401592b15b5b394a5a_4d70861eac" tabindex="-1" value=""></div>
						<input type="email" name="EMAIL" id="mce-EMAIL" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'your.name@email.com':this.value;" value="your.name@email.com">
						<input type="submit" name="submit" value="Join" />
					</form>
				</div> <!-- end div.mailing-list -->
				<div class="twitter">
					<div class="clear"></div>
				</div> <!-- end div.twitter -->
			</div>
			<div class="clear"></div>
		</div> <!-- end div.colgroup2 -->

	<div class="clear"></div>

	</div> <!-- end div.footer-nav -->
</div>	
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/mootools-1.2.4-core.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/mootools-1.2.4.2-more.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/hover.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/slimbox.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/css_browser_selector.js"></script>
<?php wp_footer(); ?>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</body>
</html>
