<div id="right">

<?php if (is_ribcage_page()) { ?>
	<ul>
	<?php if ( function_exists ( dynamic_sidebar(1) ) ) : ?>
		<?php dynamic_sidebar (1); ?>
	<?php endif; ?>
	</ul>
<?php } elseif (is_home() || is_archive() || is_page('archives')) { ?>
	<?php if (is_author()) { ?>
		<?php
			if(isset($_GET['author_name'])) :
				$curauth = get_userdatabylogin($author_name);
			else :
				$curauth = get_userdata(intval($author));
			endif;
		?>
		<div class="mod">
			<h3>About <span class="fancy">the</span> author</h3>
			<div class="author-name"><?php echo get_avatar( $curauth->ID, '70' ); ?><strong><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></strong></div>
			<div class="author-description"><?php echo $curauth->user_description; ?></div>
		</div>
	<?php } ?>

	<ul>
	<?php if ( function_exists ( dynamic_sidebar(2) ) ) : ?>
		<?php dynamic_sidebar (2); ?>
	<?php endif; ?>
	</ul>
<?php } elseif (is_single()) { ?>
	<ul>
	<?php if ( function_exists ( dynamic_sidebar(3) ) ) : ?>
		<?php dynamic_sidebar (3); ?>
	<?php endif; ?>
	</ul>
<?php } elseif (is_page('events')) { ?>
	<ul>
	<?php if ( function_exists ( dynamic_sidebar(4) ) ) : ?>
		<?php dynamic_sidebar (4); ?>
	<?php endif; ?>
	</ul>
<?php } elseif (is_page('manifesto') || is_page('contact') || is_page('donate')) { ?>
	<ul>
	<?php if ( function_exists ( dynamic_sidebar(5) ) ) : ?>
		<?php dynamic_sidebar (5); ?>
	<?php endif; ?>
	</ul>
<?php } ?>
</div>