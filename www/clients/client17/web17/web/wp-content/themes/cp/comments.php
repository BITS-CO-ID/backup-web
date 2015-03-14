<?php if ( post_password_required() ) : ?>
				<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'boilerplate' ); ?></p>
<?php
		return;
	endif;
?>

<?php if ( have_comments() ) : ?>
			<h3 id="comments-title"><?php
				printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'boilerplate' ),
				number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'boilerplate' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'boilerplate' ) ); ?>
<?php endif; // check for comment navigation ?>

			<ol>
				<?php
					wp_list_comments( array( 'callback' => 'boilerplate_comment' ) );
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'boilerplate' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'boilerplate' ) ); ?>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:
	if ( ! comments_open() ) :
?>
	<p><?php _e( 'Comments are closed.', 'boilerplate' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php comment_form(); ?>