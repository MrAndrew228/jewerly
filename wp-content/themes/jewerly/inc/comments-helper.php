<?php
if (!function_exists('better_comments')):
	function better_comments($comment, $args, $depth)
	{
		?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div class="comment">
			<div class="img-thumbnail d-none d-sm-block">
				<?php echo get_avatar($comment, $size = '61'); ?>
			</div>
			<div class="comment-block">
				<div class="comment-arrow"></div>
				<?php if ($comment->comment_approved == '0') : ?>
					<em><?php esc_html_e('Your comment is awaiting moderation.', 'jewerly') ?></em>
					<br/>
				<?php endif; ?>
				<span class="comment-by">
                    <strong class="author"><?php echo get_comment_author() ?></strong>
                    <span class="wrap-btn-reply">
                        <span> <a href="#"><i
				                        class="fa fa-reply"></i> <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
                    </span>
                </span>
				<span class="date"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s', 'jewerly'), date('F j, Y ', strtotime(get_comment_date())),date('g:i a', strtotime(get_comment_time()))  ) ?></span>
				<p class="comment-text"> <?php comment_text() ?></p>
			</div>
		</div>

		<?php
	}
endif;