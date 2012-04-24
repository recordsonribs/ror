<?php
/*
Template Name: Splash Page
*/
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
















	<!--

		Copyright (c) 2009 by Bryan Klausmeyer
		http://bryan.ivystreet.net/

	 ____                                   __                                  ____        __                
	/\  _`\                                /\ \                                /\  _`\   __/\ \               
	\ \ \L\ \     __    ___    ___   _ __  \_\ \    ____        ___     ___    \ \ \L\ \/\_\ \ \____    ____  
	 \ \ ,  /   /'__`\ /'___\ / __`\/\`'__\/'_` \  /',__\      / __`\ /' _ `\   \ \ ,  /\/\ \ \ '__`\  /',__\ 
	  \ \ \\ \ /\  __//\ \__//\ \L\ \ \ \//\ \L\ \/\__, `\    /\ \L\ \/\ \/\ \   \ \ \\ \\ \ \ \ \L\ \/\__, `\
	   \ \_\ \_\ \____\ \____\ \____/\ \_\\ \___,_\/\____/    \ \____/\ \_\ \_\   \ \_\ \_\ \_\ \_,__/\/\____/
	    \/_/\/ /\/____/\/____/\/___/  \/_/ \/__,_ /\/___/      \/___/  \/_/\/_/    \/_/\/ /\/_/\/___/  \/___/ 

												R E V I S I O N   2 . 0

	-->





























<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Records on Ribs: Year Two</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/splash.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/mootools-1.2.4-core.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/mootools-1.2.4.2-more.js"></script>

	<script type="text/javascript">
		<!--
		function getWindowHeight() {
			var windowHeight = 0;
			if (typeof(window.innerHeight) == 'number') {
				windowHeight = window.innerHeight;
			}
			else {
				if (document.documentElement && document.documentElement.clientHeight) {
					windowHeight = document.documentElement.clientHeight;
				}
				else {
					if (document.body && document.body.clientHeight) {
						windowHeight = document.body.clientHeight;
					}
				}
			}
			return windowHeight;
		}
		function setContent() {
			if (document.getElementById) {
				var windowHeight = getWindowHeight();
				if (windowHeight > 0) {
					var contentElement = document.getElementById('content');
					var contentHeight = contentElement.offsetHeight;
					if (windowHeight - contentHeight > 0) {
						contentElement.style.position = 'relative';
						contentElement.style.top = ((windowHeight / 2) - (contentHeight / 2)) + 'px';
					}
					else {
						contentElement.style.position = 'static';
					}
				}
			}
		}
		window.onload = function() {
			setContent();
		}
		window.onresize = function() {
			setContent();
		}
		//-->
	</script>

</head>

<body>
<div id="content" class="splash">
	<div class="logo">
		<h1><span>Records on Ribs</span></h1>
	</div> <!-- end div.logo -->
	<div class="teaser">
		<h2>Records on Ribs <strong>v2</strong></h2>
		<h3>Coming Soon</h3>
	</div> <!-- end div.teaser -->
	<div class="elsewhere">
		<ul>
			<li class="twitter"><a href="http://twitter.com/recordsonribs" target="_blank" title="Twitter"><span>Twitter</span></a></li>
			<li class="lastfm"><a href="http://www.last.fm/label/Records+On+Ribs" target="_blank" title="Last.fm"><span>Last.fm</span></a></li>
		</ul>
		<br clear="all" />
	</div>
</div> <!-- end div.splash -->

<script type="text/javascript">
	var div = $$('div.splash div');
	var i = 0; //the current timeout
	div.each(function(e) {
		i += 1000; //adding the increment
		setTimeout( function() {
			e.set('tween', {duration: 3000}).tween('opacity', 0, 1);
		}, i);
	});
</script>
</body>
</html>