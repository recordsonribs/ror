<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<div class="mod commentheader">
		<div class="mod-meta"></div>
		<div class="mod-body">
			<h2><?php comments_number('No comments', '1 comment', '% comments' );?></h2>
		</div>
	</div>

<div class="comments_all"><?php wp_list_comments('type=comment&style=div&callback=comments'); ?></div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>

<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

	<div class="mod post respond">
		<div class="mod-meta"></div>
		<div class="mod-body">
			<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
			<div class="cancel-comment-reply">
				<small><?php cancel_comment_reply_link(); ?></small>
			</div>
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
				<p>You must be <a href="<?php echo home_url(); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>
				<form action="<?php echo home_url(); ?>/wp-comments-post.php" method="post" id="commentform">
					<?php if ( $user_ID ) : ?>
						<p>Logged in as <a href="<?php echo home_url(); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
					<?php else : ?>
						<div class="item"><label for="author">Name:</label><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /><span class="required"><small><?php if ($req) echo "Required"; ?></small></span><div class="clear"></div></div>
						<div class="item"><label for="email">E-Mail:</label><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /><span class="required"><small><?php if ($req) echo "Required"; ?></small></span><div class="clear"></div></div>
						<div class="item"><label for="url">Website:</label><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /><div class="clear"></div></div>
					<?php endif; ?>
					<div class="item"><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></div>
					<div class="item last"><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment &rsaquo;" /><?php comment_id_fields(); ?></div>
					<?php do_action('comment_form', $post->ID); ?>
				</form>
			<?php endif; // If registration required and not logged in ?>
		</div> <!-- end div.mod-body -->
	</div> <!-- end div.mod -->
<?php endif; // if you delete this the sky will fall on your head ?>
