<?php
if ( ! isset( $content_width ) )
	$content_width = 640;

if ( ! function_exists( 'boilerplate_setup' ) ):
	function boilerplate_setup() {

		add_editor_style();
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __('Menu'),
		) );
		register_nav_menus( array(
			'info' => __('Information'),
		) );
		register_nav_menus( array(
			'category' => __('Categories'),
		) );
		register_nav_menus( array(
			'account' => __('My Accounts'),
		) );
		register_nav_menus( array(
			'contact' => __('Contact Us'),
		) );

function imam_info() {
        // display the WordPress Custom Menu if available
        wp_nav_menu(array(
                'container' => '',                              // remove nav container
                'container_class' => '',   // class of container (should you choose to use it)
                'menu' => __('Information'),
                // nav name
                'menu_class' => '',      
                // adding custom nav class
                'theme_location' => 'info',            
                // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0                                   // limit the depth of the nav
        ));
}
function imam_category() {
        // display the WordPress Custom Menu if available
        wp_nav_menu(array(
                'container' => '',                              // remove nav container
                'container_class' => '',   // class of container (should you choose to use it)
                'menu' => __('Categories'),
                // nav name
                'menu_class' => '',      
                // adding custom nav class
                'theme_location' => 'category',            
                // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0                                   // limit the depth of the nav
        ));
}
function imam_account() {
        // display the WordPress Custom Menu if available
        wp_nav_menu(array(
                'container' => '',                              // remove nav container
                'container_class' => '',   // class of container (should you choose to use it)
                'menu' => __('My Accounts'),
                // nav name
                'menu_class' => '',      
                // adding custom nav class
                'theme_location' => 'account',            
                // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0                                   // limit the depth of the nav
        ));
}
function imam_contact() {
        // display the WordPress Custom Menu if available
        wp_nav_menu(array(
                'container' => '',                              // remove nav container
                'container_class' => '',   // class of container (should you choose to use it)
                'menu' => __('Contact Us'),
                // nav name
                'menu_class' => '',      
                // adding custom nav class
                'theme_location' => 'contact',            
                // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0                                   // limit the depth of the nav
        ));
}

		if ( function_exists( 'add_theme_support' ) ) {
			add_theme_support( 'custom-background' );
		} else {
			add_custom_background();
		}

		// Your changeable header business starts here
		define( 'HEADER_TEXTCOLOR', '' );
		// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
		define( 'HEADER_IMAGE', '%s/images/headers/path.jpg' );

		// The height and width of your custom header. You can hook into the theme's own filters to change these values.
		// Add a filter to boilerplate_header_image_width and boilerplate_header_image_height to change these values.
		define( 'HEADER_IMAGE_WIDTH', apply_filters( 'boilerplate_header_image_width', 940 ) );
		define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'boilerplate_header_image_height', 198 ) );
		define( 'NO_HEADER_TEXT', true );

		// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
		register_default_headers( array(
			'berries' => array(
				'url' => '%s/images/headers/starkers.png',
				'thumbnail_url' => '%s/images/headers/starkers-thumbnail.png',
				/* translators: header image description */
				'description' => __('Nurul Imam Studio')
			)
		) );
	}
endif;
add_action('after_setup_theme', 'boilerplate_setup');

if ( ! function_exists( 'boilerplate_admin_header_style' ) ) :
	/**
	 * Styles the header image displayed on the Appearance > Header admin panel.
	 *
	 * Referenced via add_theme_support()/add_custom_image_header() in boilerplate_setup().
	 *
	 * @since Twenty Ten 1.0
	 */
	function boilerplate_admin_header_style() {
	?>
	<style type="text/css">
	/* Shows the same border as on front end */
	#headimg {
		border-bottom: 1px solid #000;
		border-top: 4px solid #000;
	}
	/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
		#headimg #name { }
		#headimg #desc { }
	*/
	</style>
	<?php
	}
endif;

if ( ! function_exists( 'boilerplate_filter_wp_title' ) ) :
	function boilerplate_filter_wp_title( $title, $separator ) {
		// Don't affect wp_title() calls in feeds.
		if ( is_feed() )
			return $title;

		// The $paged global variable contains the page number of a listing of posts.
		// The $page global variable contains the page number of a single post that is paged.
		// We'll display whichever one applies, if we're not looking at the first page.
		global $paged, $page;

		if ( is_search() ) {
			// If we're a search, let's start over:
			$title = sprintf( __('Search results for %s'), '"' . get_search_query() . '"' );
			// Add a page number if we're on page 2 or more:
			if ( $paged >= 2 )
				$title .= " $separator " . sprintf( __( 'Page %s'), $paged );
			// Add the site name to the end:
			$title .= " $separator " . get_bloginfo( 'name', 'display' );
			// We're done. Let's send the new title back to wp_title():
			return $title;
		}

		// Otherwise, let's start by adding the site name to the end:
		$title .= get_bloginfo( 'name', 'display' );

		// If we have a site description and we're on the home/front page, add the description:
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title .= " $separator " . $site_description;

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			$title .= " $separator " . sprintf( __( 'Page %s', 'boilerplate' ), max( $paged, $page ) );

		// Return the new title to wp_title():
		return $title;
	}
endif;
add_filter( 'wp_title', 'boilerplate_filter_wp_title', 10, 2 );

if ( ! function_exists( 'boilerplate_page_menu_args' ) ) :
	function boilerplate_page_menu_args( $args ) {
		$args['show_home'] = true;
		return $args;
	}
endif;
add_filter( 'wp_page_menu_args', 'boilerplate_page_menu_args' );

if ( ! function_exists( 'boilerplate_excerpt_length' ) ) :
	/**
	* Sets the post excerpt length to 40 characters.
	*
	* To override this length in a child theme, remove the filter and add your own
	* function tied to the excerpt_length filter hook.
	*
	* @since Twenty Ten 1.0
	* @return int
	*/
   function boilerplate_excerpt_length( $length ) {
	   return 40;
   }
endif;
add_filter( 'excerpt_length', 'boilerplate_excerpt_length' );

if ( ! function_exists( 'boilerplate_continue_reading_link' ) ) :
	/**
	 * Returns a "Continue Reading" link for excerpts
	 *
	 * @since Twenty Ten 1.0
	 * @return string "Continue Reading" link
	 */
	function boilerplate_continue_reading_link() {
		return ;
	}
endif;

if ( ! function_exists( 'boilerplate_auto_excerpt_more' ) ) :
	function boilerplate_auto_excerpt_more( $more ) {
		return ' &hellip;' . boilerplate_continue_reading_link();
	}
endif;
add_filter( 'excerpt_more', 'boilerplate_auto_excerpt_more' );

if ( ! function_exists( 'boilerplate_custom_excerpt_more' ) ) :
	function boilerplate_custom_excerpt_more( $output ) {
		if ( has_excerpt() && ! is_attachment() ) {
			$output .= boilerplate_continue_reading_link();
		}
		return $output;
	}
endif;
add_filter( 'get_the_excerpt', 'boilerplate_custom_excerpt_more' );

if ( ! function_exists( 'boilerplate_remove_gallery_css' ) ) :
	function boilerplate_remove_gallery_css( $css ) {
		return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
	}
endif;
add_filter( 'gallery_style', 'boilerplate_remove_gallery_css' );

if ( ! function_exists( 'boilerplate_comment' ) ) :
	function boilerplate_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case '' :
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>">
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'boilerplate' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'boilerplate' ); ?></em>
					<br />
				<?php endif; ?>
				<footer class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'boilerplate' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'boilerplate' ), ' ' );
					?>
				</footer><!-- .comment-meta .commentmetadata -->
				<div class="comment-body"><?php comment_text(); ?></div>
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!-- .reply -->
			</article><!-- #comment-##  -->
		<?php
				break;
			case 'pingback'  :
			case 'trackback' :
		?>
		<li class="post pingback">
			<p><?php _e( 'Pingback:', 'boilerplate' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'boilerplate'), ' ' ); ?></p>
		<?php
				break;
		endswitch;
	}
endif;

if ( ! function_exists( 'boilerplate_widgets_init' ) ) :
	function boilerplate_widgets_init() {
		// Widget Untuk Halaman Utama Yang Pertama
		register_sidebar( array(
			'name' => __('Konten Intro Pertama'),
			'id' => 'primary-widget-area',
			'description' => __('Isi Keterangan What We Do Dengan Widget HTML'),
			'before_widget' => '<section class="intro">',
			'after_widget' => '</section><section class="bersih"></section>',
			'before_title' => '<h2 id="intro">',
			'after_title' => '</h2><hr />',
		) );

		// Widget Untuk Halaman Utama Yang Kedua
		register_sidebar( array(
			'name' => __('Konten Intro Kedua'),
			'id' => 'secondary-widget-area',
			'description' => __('Isi Keterangan Operations Dengan Widget HTML'),
			'before_widget' => '<section class="intro">',
			'after_widget' => '</section><section class="bersih"></section>',
			'before_title' => '<h2 id="intro">',
			'after_title' => '</h2><hr />',
		) );

		// Widget Untuk Halaman Utama Peta
		register_sidebar( array(
			'name' => __('Peta Lokasi'),
			'id' => 'peta-ku',
			'description' => __('Isi Script Peta Dengan Widget HTML'),
			'before_widget' => '<section class="peta">',
			'after_widget' => '<div id="map_canvas"></div></section><section class="bersih"></section>',
			'before_title' => '',
			'after_title' => '',
		) );
	}
endif;
add_action( 'widgets_init', 'boilerplate_widgets_init' );

if ( ! function_exists( 'boilerplate_remove_recent_comments_style' ) ) :
	/**
	 * Removes the default styles that are packaged with the Recent Comments widget.
	 *
	 * To override this in a child theme, remove the filter and optionally add your own
	 * function tied to the widgets_init action hook.
	 *
	 * @since Twenty Ten 1.0
	 */
	function boilerplate_remove_recent_comments_style() {
		global $wp_widget_factory;
		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	}
endif;
add_action( 'widgets_init', 'boilerplate_remove_recent_comments_style' );

if ( ! function_exists( 'boilerplate_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post—date/time and author.
	 *
	 * @since Twenty Ten 1.0
	 */
	function boilerplate_posted_on() {
		// BP: slight modification to Twenty Ten function, converting single permalink to multi-archival link
		// Y = 2012
		// F = September
		// m = 01–12
		// j = 1–31
		// d = 01–31
		printf( __( '<span class="%1$s">Posted on</span> <span class="entry-date">%2$s %3$s %4$s</span> <span class="meta-sep">by</span> %5$s', 'boilerplate' ),
			// %1$s = container class
			'meta-prep meta-prep-author',
			// %2$s = month: /yyyy/mm/
			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
				home_url() . '/' . get_the_date( 'Y' ) . '/' . get_the_date( 'm' ) . '/',
				esc_attr( 'View Archives for ' . get_the_date( 'F' ) . ' ' . get_the_date( 'Y' ) ),
				get_the_date( 'F' )
			),
			// %3$s = day: /yyyy/mm/dd/
			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
				home_url() . '/' . get_the_date( 'Y' ) . '/' . get_the_date( 'm' ) . '/' . get_the_date( 'd' ) . '/',
				esc_attr( 'View Archives for ' . get_the_date( 'F' ) . ' ' . get_the_date( 'j' ) . ' ' . get_the_date( 'Y' ) ),
				get_the_date( 'j' )
			),
			// %4$s = year: /yyyy/
			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
				home_url() . '/' . get_the_date( 'Y' ) . '/',
				esc_attr( 'View Archives for ' . get_the_date( 'Y' ) ),
				get_the_date( 'Y' )
			),
			// %5$s = author vcard
			sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
				get_author_posts_url( get_the_author_meta( 'ID' ) ),
				sprintf( esc_attr__( 'View all posts by %s', 'boilerplate' ), get_the_author() ),
				get_the_author()
			)
		);
	}
endif;

if ( ! function_exists( 'boilerplate_posted_in' ) ) :
	/**
	 * Prints HTML with meta information for the current post (category, tags and permalink).
	 *
	 * @since Twenty Ten 1.0
	 */
	function boilerplate_posted_in() {
		// Retrieves tag list of current post, separated by commas.
		$tag_list = get_the_tag_list( '', ', ' );
		if ( $tag_list ) {
			$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'boilerplate' );
		} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
			$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'boilerplate' );
		} else {
			$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'boilerplate' );
		}
		// Prints the string, replacing the placeholders.
		printf(
			$posted_in,
			get_the_category_list( ', ' ),
			$tag_list,
			get_permalink(),
			the_title_attribute( 'echo=0' )
		);
	}
endif;
/*	End original TwentyTen functions (from Starkers Theme, renamed into this namespace) */

/*	Begin Boilerplate */
	// Add Admin
	require_once(get_template_directory() . '/boilerplate-admin/admin-menu.php');

	// remove version info from head and feeds (http://digwp.com/2009/07/remove-wordpress-version-number/)
	if ( ! function_exists( 'boilerplate_complete_version_removal' ) ) :
		function boilerplate_complete_version_removal() {
			return '';
		}
	endif;
	add_filter('the_generator', 'boilerplate_complete_version_removal');

	// add thumbnail support
	if ( function_exists( 'add_theme_support' ) ) :
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 200, 200 );
	endif;

/**
 * Change default fields, add placeholder and change type attributes.
 * @param  array $fields
 * @return array
 * from: http://wordpress.stackexchange.com/questions/62742/add-placeholder-attribute-to-comment-form-fields
 */
	function boilerplate_comment_input_placeholders( $fields ) {
		$fields['author'] = str_replace(
			'<input',
			'<input placeholder="'
			/* Replace 'theme_text_domain' with your theme’s text domain.
			 * I use _x() here to make your translators life easier. :)
			 * See http://codex.wordpress.org/Function_Reference/_x
			 */
				. _x(
					'Your Name',
					'comment form placeholder',
					'boilerplate'
					)
				. '"',
			$fields['author']
		);
		$fields['email'] = str_replace(
			'<input id="email" name="email" type="text"',
			/* We use a proper type attribute to make use of the browser’s
			 * validation, and to get the matching keyboard on smartphones.
			 */
			'<input type="email" placeholder="contact@example.com"  id="email" name="email"',
			$fields['email']
		);
		$fields['url'] = str_replace(
			'<input id="url" name="url" type="text"',
			// Again: a better 'type' attribute value.
			'<input placeholder="http://example.com/" id="url" name="url" type="url"',
			$fields['url']
		);
		return $fields;
	}
	add_filter( 'comment_form_default_fields', 'boilerplate_comment_input_placeholders' );
	// ATG: added to customize <textarea> also
	function boilerplate_comment_field_placeholder( $fields ) {
		$fields = str_replace(
			'<textarea',
			'<textarea placeholder="'
			/* Replace 'theme_text_domain' with your theme’s text domain.
			 * I use _x() here to make your translators life easier. :)
			 * See http://codex.wordpress.org/Function_Reference/_x
			 */
				. _x(
					'Your Comment',
					'comment form placeholder',
					'boilerplate'
					)
				. '"',
			$fields
		);
		return $fields;
	}
	add_filter( 'comment_form_field_comment', 'boilerplate_comment_field_placeholder' );

/*	End Boilerplate */

?>