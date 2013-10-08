<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_front_page()) { ?>
<title>Creative Commons Record Label - <?php bloginfo('name'); ?></title>
<?php } else { ?>
<title><?php bloginfo('name'); ?> <?php wp_title('&rsaquo;', true, 'left'); ?></title>
<?php } ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/png" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>

<div id="header"<?php if (!is_front_page()) { ?> class="small"<?php } ?>>
	<div id="logo"><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"></a></div>
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
	</div>
	<div id="nav">
		<ul>
			<li><a href="/blog/"><span>Blog</span></a></li>
			<li><a href="/artists/"><span>Artists</span></a></li>
			<li><a href="/releases/"><span>Releases</span></a></li>
			<li><a href="/events/"><span>Events</span></a></li>
			<li><a href="/manifesto/"><span>Manifesto</span></a></li>
			<li><a href="/donate/"><span>Donate</span></a></li>
			<li><a href="/contact/"><span>Contact</span></a></li>
		</ul>
	</div>
	<div class="clear"></div>
	<div id="title">
	<?php if (is_ribcage_page()) { ?>
		<h2><?php ribcage_title(); ?></h2>
	<?php } elseif (is_front_page()) { ?>
		<h2 class="home"><span>Records on Ribs</span> is a record label. We give away all our music
for <em>free download</em> under a Creative Commons license. We also provide
<em>beautifully made</em> and <em>fairly priced</em> physical releases. <a href="/manifesto/" title="Manifesto" class="readmore">read more &rsaquo;</a></span></h2>
	<?php } elseif (is_home()) { ?>
		<h2>Our Blog<?php if (is_paged()) { echo " &rsaquo; Page ". $paged; } ?></h2>
	<?php } elseif (is_archive()) { ?>
		<h2>Archive &rsaquo; <?php if(is_month()) { ?><?php $arc_year = get_the_time('Y'); ?><?php $arc_month = get_the_time('m'); ?><a href="<?php echo get_month_link($arc_year, $arc_month); ?>"><?php the_time('F Y'); ?></a><?php  } elseif (is_tag()) { ?><?php single_tag_title(''); ?><?php  } elseif (is_category()) { ?><?php single_cat_title(''); ?><?php } elseif (is_author()) { ?><?php  if(isset($_GET['author_name'])) : $curauth = get_userdatabylogin($author_name); else : $curauth = get_userdata(intval($author)); endif; echo $curauth->first_name; ?><?php } ?><?php if (is_paged()) { echo " &rsaquo; Page ". $paged; } ?></h2>
	<?php } elseif (is_single()) { ?>
		<h2><?php the_title(); ?></h2>
	<?php } elseif (dbem_is_category_page()) { ?>
		<?php $cat = dbem_get_category($_REQUEST['category']); ?>
			<h2><a href="/events" title="Events">Events</a> &rsaquo; <a href="/?category=<?php echo $cat['category_id'];?>"><?php echo $cat['category_name'];?></a></h2>
	<?php } elseif (dbem_is_single_event_page()) { ?>
		<h2><a href="/events" title="Events">Events</a> &rsaquo; <?php the_title(); ?></h2>
	<?php } elseif (dbem_is_multiple_events_page()) { ?>
		<h2><a href="/events" title="Events">Events</a></h2>
	<?php } elseif (is_404()) { ?>
		<h2>Oops...</h2>
	<?php } else { ?>
		<h2><?php the_title(); ?></h2>
	<?php } ?>
	</div>
</div>

<div id="page_outr">

<div id="page_inr">

<div id="content">

		<script type="text/javascript">
			
			window.addEvent('domready', function(){
				new pageLoader({loadInTo:'content'});
				new History();
			});
		</script>