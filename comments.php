
<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments my-4">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
    <h3 class="mb-5"><?php _e('Comments:' , 'band_digital')?></h3>
			<?php
			$band_digital_comment_count = get_comments_number();
			if ( '1' === $band_digital_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'band-digital' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list p-0">
				<?php
				wp_list_comments(
					array(
						'walker'            => new Bootstrap_Walker_Comment(),  //какой шаблон использовать
						'max_depth'         => '2',   //максимальная вложенности
						'style'             => 'ol',  //во что оборачиваем
						'type'              => 'all',
						'reply_text'        => __('Reply', 'band_digital') . '<i class="fa fa-reply"></i>',
						'per_page'          => '10',
						'avatar_size'       => 80,
						'reverse_children'  => '',
						'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
						'echo'              => true,     // true или false
					)
				);
				?>
		</ol>
	
		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
				<p class="no-comments"><?php esc_html_e( 'Comments disabled.', 'band-digital' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$defaults = [
		'fields'               => [
			'author' => '<div class="row mb-4"><div class="col-lg-6">
				<input id="author" name="author" class="form-control"  placeholder="' . __('Name' , 'band_digital') . '" type="text" value="' . esc_attr( $commenter['comment_author'] ). '" size="30">
			</div>',

			'email'  => '<div class="col-lg-6">
				<input id="email" name="email" class="form-control" placeholder="' . __('Your email' , 'band_digital') . '" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes">
			</div></div>',
		],

		'comment_field'        => '<div class="form-group mb-3"> 
			<textarea id="comment" name="comment" class="form-control" placeholder="' . __('Your сomment' , 'band_digital') . '" cols="30" rows="6"  aria-required="true" required="required"></textarea>
		</div>',

		'must_log_in'          => '<p class="must-log-in">' .
			 sprintf( __( 'You need to <a href="%s">login</a> to leave a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink($post->ID) ) ) ) . '
		 </p>',

		'logged_in_as'         => '<p class="logged-in-as">' .
			 sprintf( __( '<a href="%1$s" aria-label="You are logged in as %2$s.">You are logged in as %2$s</a>. <a href="%3$s">Log off?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink($post->ID) ) ) ) . '
		 </p>',

		'comment_notes_before' => '<p class="mb-4">
			<span id="email-notes">' . __( 'Your E-mail is protected from spam' ) . '</span>
		</p>',

		'comment_notes_after'  => '',
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'class_container'      => 'comment-respond',
		'class_form'           => 'comment-form',
		'class_submit'         => 'btn btn-hero btn-circled',
		'name_submit'          => 'submit',
		'title_reply'          => __( 'Reply to comment' ),
		'title_reply_to'       => __( 'Reply %s' ),
		'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h3>',
		'cancel_reply_before'  => ' <small>',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Cancel' ),
		'label_submit'         => __( 'Send' ),
		'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
		'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
		'format'               => 'html5',
	];
	
	comment_form( $defaults );
	?>

</div><!-- #comments -->
 