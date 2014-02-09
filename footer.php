<div class="clear"></div>

</div> <!-- end #content -->

</div> <!-- end #page_inr -->

</div> <!-- end #page_outr -->

<div id="footer">
	<div class="footer-nav">
		<div id="cc"><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="Creative Commons Attribution License"><span>Creative Commons</span></a></div>
		<div class="colgroup1">
			<div class="col1">
				<h2>Elsewhere</h2>
				<ul>
					<li><a href="http://wordpress.org/" title="<?php _e('WordPress', 'sandbox'); ?>" rel="generator"><?php _e('WordPress', 'sandbox'); ?></a></li>
					<li><a href="http://recordsonribs.com/ribcage/" title="Ribcage - Record Label Management for Wordpress">Ribcage</a></li>
					<li><a href="http://validator.w3.org/check?uri=referer" title="W3C XHTML Validation"><abbr title="Extensible Hypertext Markup Language">XHTML</abbr></a> <span class="amp">&amp;</span> <a href="http://jigsaw.w3.org/css-validator/check/referer" title="W3C CSS Validation"><abbr title="Cascading Style Sheets">CSS</abbr></a></li>
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
				<h2><a href="http://bryan.ivystreet.net/" title="Ivy Street Designs" target="_blank">Designed by Ivy Street</a>.</h2>
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
					<form method="post" action="http://scripts.dreamhost.com/add_list.cgi"> 
						<input type="hidden" name="list" value="list@recordsonribs.com" /> 
						<input type="hidden" name="recordsonribs.com" value="DomainName" />
						<input type="hidden" name="emailit" value="1" />
						<input name="email" type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'your.name@gmail.com':this.value;" value="your.name@gmail.com" />
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
