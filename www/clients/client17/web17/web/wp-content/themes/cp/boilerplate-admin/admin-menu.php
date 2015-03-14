<?php
	define('H5BP_URL', get_template_directory_uri());

		if ( ! function_exists( 'H5BP_create_boilerplate_admin_page' ) ):
			function H5BP_create_boilerplate_admin_page() {
				add_theme_page('Nurul Imam Themes', 'Nurul Imam Themes', 'administrator', 'boilerplate-admin', 'H5BP_build_boilerplate_admin_page');
			}
		endif; // H5BP_create_boilerplate_admin_page
		add_action('admin_menu', 'H5BP_create_boilerplate_admin_page');

		//	You get this if you click the left-column "Nurul Imam Themes" (added above)
		if ( ! function_exists( 'H5BP_build_boilerplate_admin_page' ) ):
			function H5BP_build_boilerplate_admin_page() {
			?>
				<div id="boilerplate-options-wrap">
					<div class="icon32" id="icon-tools"><br /></div>
					<h2>Nurul Imam Themes</h2>
					<p>Terimakasih sudah menggunakan jasa kami.</p>
<p><a href="http://www.nurulimam.com/">Nurul Imam</a></p><p>CEO / Founder</p><p><a href="http://www.banten-it.com/">Banten IT Solutions</a>.</p>
					</form>
				</div>
			<?php
			}
		endif; // H5BP_build_boilerplate_admin_page


/*	2)	Add Admin Page CSS if on the Admin Page */

		if ( ! function_exists( 'H5BP_admin_register_head' ) ):
			function H5BP_admin_register_head() {
				echo '<link rel="stylesheet" href="' .H5BP_URL. '/boilerplate-admin/admin-style.css">'.PHP_EOL;
			}
		endif; // H5BP_admin_register_head
		add_action('admin_head', 'H5BP_admin_register_head');


/*	3)	Add "Nurul Imam Themes" Page options */

		//	Register form elements
		if ( ! function_exists( 'H5BP_register_and_build_fields' ) ):
			function H5BP_register_and_build_fields() {
				register_setting('plugin_options', 'plugin_options', 'H5BP_validate_setting');
				add_settings_section('main_section', '', 'H5BP_section_cb', 'boilerplate-admin');
				add_settings_field('H5BP_toolbar', 'IE6 Image Toolbar?:', 'H5BP_toolbar_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_google_chrome', 'IE-edge / Google Chrome?:', 'H5BP_google_chrome_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_google_verification', 'Google Verification?:', 'H5BP_google_verification_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_viewport', '<em><abbr title="iPhone, iTouch, iPad...">iThings</abbr></em> use full zoom?:', 'H5BP_viewport_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_favicon', 'Got Favicon?:', 'H5BP_favicon_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_favicon_ithing', 'Got <em><abbr title="iPhone, iTouch, iPad...">iThing</abbr></em> Favicon?', 'H5BP_favicon_ithing_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_ie_css', 'IE CSS?:', 'H5BP_ie_css_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_modernizr_js', 'Modernizr JS?:', 'H5BP_modernizr_js_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_respond_js', 'Respond JS?:', 'H5BP_respond_js_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_jquery_js', 'jQuery JS?:', 'H5BP_jquery_js_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_plugins_js', 'jQuery Plug-ins JS?:', 'H5BP_plugins_js_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_site_js', 'Site-specific JS?:', 'H5BP_site_js_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_search_form', 'HTML5 Search?:', 'H5BP_search_form_setting', 'boilerplate-admin', 'main_section');
				add_settings_field('H5BP_cache_buster', 'Cache-Buster?:', 'H5BP_cache_buster_setting', 'boilerplate-admin', 'main_section');
			}
		endif; // H5BP_register_and_build_fields
		add_action('admin_init', 'H5BP_register_and_build_fields');

		//	Add Admin Page validation
		if ( ! function_exists( 'H5BP_validate_setting' ) ):
			function H5BP_validate_setting($plugin_options) {
				$keys = array_keys($_FILES);
				$i = 0;
				foreach ( $_FILES as $image ) {
					// if a files was upload
					if ($image['size']) {
						// if it is an image
						if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) {
							$override = array('test_form' => false);
							// save the file, and store an array, containing its location in $file
							$file = wp_handle_upload( $image, $override );
							$plugin_options[$keys[$i]] = $file['url'];
						} else {
							// Not an image.
							$options = get_option('plugin_options');
							$plugin_options[$keys[$i]] = $options[$logo];
							// Die and let the user know that they made a mistake.
							wp_die('No image was uploaded.');
						}
					} else { // else, the user didn't upload a file, retain the image that's already on file.
						$options = get_option('plugin_options');
						$plugin_options[$keys[$i]] = $options[$keys[$i]];
					}
					$i++;
				}
				return $plugin_options;
			}
		endif; // H5BP_validate_setting

		//	in case you need it...
		if ( ! function_exists( 'H5BP_section_cb' ) ):
			function H5BP_section_cb() {
				// i don't do anything here, but you could if you wanted...
			}
		endif; // H5BP_section_cb

		//	callback fn for H5BP_toolbar
		if ( ! function_exists( 'H5BP_toolbar_setting' ) ):
			function H5BP_toolbar_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_toolbar']) && $options['H5BP_toolbar']) ? 'checked="checked" ' : '';
				echo '<input class="check-field" type="checkbox" name="plugin_options[H5BP_toolbar]" value="true" ' .$checked. '/>';
				echo '<p>Kill the IE6 Image Toolbar that appears when users hover over images on your site.</p>';
				echo '<p>Selecting this option will add the following code to the <code>&lt;head&gt;</code> of your pages:</p>';
				echo '<code>&lt;meta http-equiv="imagetoolbar" content="false"&gt;</code>';
			}
		endif; // H5BP_toolbar_setting

		//	callback fn for H5BP_google_chrome
		if ( ! function_exists( 'H5BP_google_chrome_setting' ) ):
			function H5BP_google_chrome_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_google_chrome']) && $options['H5BP_google_chrome']) ? 'checked="checked" ' : '';
				echo '<input class="check-field" type="checkbox" name="plugin_options[H5BP_google_chrome]" value="true" ' .$checked. '/>';
				echo '<p>Force the most-recent IE rendering engine or users with <a href="http://www.chromium.org/developers/how-tos/chrome-frame-getting-started">Google Chrome Frame</a> installed to see your site using Google Frame.</p>';
				echo '<p>Selecting this option will add the following code to the <code>&lt;head&gt;</code> of your pages:</p>';
				echo '<code>&lt;meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"&gt;</code>';
			}
		endif; // H5BP_google_chrome_setting

		//	callback fn for H5BP_google_verification
		if ( ! function_exists( 'H5BP_google_verification_setting' ) ):
			function H5BP_google_verification_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_google_verification']) && $options['H5BP_google_verification'] && $options['H5BP_google_verification_account'] && $options['H5BP_google_verification_account'] !== 'XXXXXXXXX...') ? 'checked="checked" ' : '';
				$account = (isset($options['H5BP_google_verification_account']) && $options['H5BP_google_verification_account']) ? $options['H5BP_google_verification_account'] : 'XXXXXXXXX...';
				$msg = ($account === 'XXXXXXXXX...') ? ', where </code>XXXXXXXXX...</code> will be replaced with the code you insert above' : '';
				echo '<input class="check-field" type="checkbox" name="plugin_options[H5BP_google_verification]" value="true" ' .$checked. '/>';
				echo '<p>Add <a href="http://www.google.com/support/webmasters/bin/answer.py?answer=35179">Google Verificaton</a> code to the <code>&lt;head&gt;</code> of all your pages.</p>';
				echo '<p>To include Google Verificaton, select this option and include your Verificaton number here:<br />';
				echo '<input type="text" size="40" name="plugin_options[H5BP_google_verification_account]" value="'.$account.'" onfocus="javascript:if(this.value===\'XXXXXXXXX...\'){this.select();}"></p>';
				echo '<p>Selecting this option will add the following code to the <code>&lt;head&gt;</code> of your pages'.$msg.'</p>';
				echo '<code>&lt;meta name="google-site-verification" content="'.$account.'"&gt;</code>';
			}
		endif; // H5BP_google_verification_setting

		//	callback fn for H5BP_viewport
		if ( ! function_exists( 'H5BP_viewport_setting' ) ):
			function H5BP_viewport_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_viewport']) && $options['H5BP_viewport']) ? 'checked="checked" ' : '';
				$setting = (isset($options['H5BP_viewport_setting']) && $options['H5BP_viewport_setting']) ? $options['H5BP_viewport_setting'] : 'width=device-width';
			}
		endif; // H5BP_viewport_setting

		//	callback fn for H5BP_favicon
		if ( ! function_exists( 'H5BP_favicon_setting' ) ):
			function H5BP_favicon_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_favicon']) && $options['H5BP_favicon']) ? 'checked="checked" ' : '';
			}
		endif; // H5BP_favicon_setting

		//	callback fn for H5BP_favicon_ithing
		if ( ! function_exists( 'H5BP_favicon_ithing_setting' ) ):
			function H5BP_favicon_ithing_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_favicon_ithing']) && $options['H5BP_favicon_ithing']) ? 'checked="checked" ' : '';
			}
		endif; // H5BP_favicon_ithing_setting

		//	callback fn for H5BP_ie_css
		if ( ! function_exists( 'H5BP_ie_css_setting' ) ):
			function H5BP_ie_css_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_ie_css']) && $options['H5BP_ie_css']) ? 'checked="checked" ' : '';
			}
		endif; // H5BP_ie_css_setting

		//	callback fn for H5BP_modernizr_js
		if ( ! function_exists( 'H5BP_modernizr_js_setting' ) ):
			function H5BP_modernizr_js_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_modernizr_js']) && $options['H5BP_modernizr_js']) ? 'checked="checked" ' : '';
			}
		endif; // H5BP_modernizr_js_setting

		//	callback fn for H5BP_respond_js
		if ( ! function_exists( 'H5BP_respond_js_setting' ) ):
			function H5BP_respond_js_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_respond_js']) && $options['H5BP_respond_js']) ? 'checked="checked" ' : '';
			}
		endif; // H5BP_respond_js_setting

		//	callback fn for H5BP_jquery_js
		if ( ! function_exists( 'H5BP_jquery_js_setting' ) ):
			function H5BP_jquery_js_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_jquery_js']) && $options['H5BP_jquery_js']) ? 'checked="checked" ' : '';
				$version = (isset($options['H5BP_jquery_version']) && $options['H5BP_jquery_version'] && $options['H5BP_jquery_version'] !== '') ? $options['H5BP_jquery_version'] : '1.10.2';
				$inhead = (isset($options['H5BP_jquery_head']) && $options['H5BP_jquery_head']) ? 'checked="checked" ' : '';
			}
		endif; // H5BP_jquery_js_setting

		//	callback fn for H5BP_plugins_js
		if ( ! function_exists( 'H5BP_plugins_js_setting' ) ):
			function H5BP_plugins_js_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_plugins_js']) && $options['H5BP_plugins_js']) ? 'checked="checked" ' : '';
			}
		endif; // H5BP_plugins_js_setting

		//	callback fn for H5BP_site_js
		if ( ! function_exists( 'H5BP_site_js_setting' ) ):
			function H5BP_site_js_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_site_js']) && $options['H5BP_site_js']) ? 'checked="checked" ' : '';
				$inhead = (isset($options['H5BP_site_head']) && $options['H5BP_site_head']) ? 'checked="checked" ' : '';
				echo '<input class="check-field" type="checkbox" name="plugin_options[H5BP_site_js]" value="true" ' .$checked. '/>';
				echo '<p>If you would like to add your own site JavaScript file, Boilerplate provides a starter file located in:</p>';
				echo '<code>' .H5BP_URL. '/js/script-starter.js</code>';
				echo '<p>I recommend using that as a start file, then creating and making your changes to the following file:</p>';
				echo '<code>' .H5BP_URL. '/js/script.js</code>';
				echo '<p>This allows you to maintain your own code that will not get overwritten during Theme updates.</p>';
				echo '<p>Selecting this option will add the following code to your pages just before the <code>&lt;/body&gt;</code>:</p>';
				echo '<code>&lt;script type=\'text/javascript\' src=\'' .H5BP_URL. '/js/script.js\'&gt;&lt;/script&gt;</code>';
				echo '<p>(The single quotes and no-longer-necessary attributes are from WP, would like to fix that... maybe next update...)</p>';
				echo '<p><input class="check-field" type="checkbox" name="plugin_options[H5BP_site_head]" value="true" ' .$inhead. '/>';
				echo '<strong>Note: <a href="http://developer.yahoo.com/blogs/ydn/posts/2007/07/high_performanc_5/">Best-practices</a> recommend that you load JS as close to the <code>&lt;/body&gt;</code> as possible.  If for some reason you would prefer your site-specific JS to be in the <code>&lt;head&gt;</code>, please select this option.</strong></p>';
			}
		endif; // H5BP_site_js_setting

		//	callback fn for H5BP_search_form
		if ( ! function_exists( 'H5BP_search_form_setting' ) ):
			function H5BP_search_form_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_search_form']) && $options['H5BP_search_form']) ? 'checked="checked" ' : '';
				$placeholder = (isset($options['H5BP_search_placeholder_text']) && $options['H5BP_search_placeholder_text']) ? $options['H5BP_search_placeholder_text'] : '';
				echo '<input class="check-field" type="checkbox" name="plugin_options[H5BP_search_form]" value="true" ' .$checked. '/>';
				echo '<p>HTML5 allows numerous new input <code>type</code>s, including <code>type="search"</code>.  These new <code>type</code>s default to <code>type="text"</code> if the browser doesn\'t understand the new <code>type</code>, so there is no real penalty to using the new ones.  ';
				echo 'The new <code>search</code> also comes with a new <code>placeholder</code> attribute (sample text); to include <code>placeholder</code> text, type something here:<br />';
				echo '<input type="text" size="10" name="plugin_options[H5BP_search_placeholder_text]" value="'.$placeholder.'"></p>';
				echo '<p>Selecting this option will replace your existing <code>&lt;input type="text"...&gt;</code> with the following code on all of your pages:</p>';
				echo '<code>&lt;input type="search" placeholder="'.$placeholder.'"... /&gt;</code>';
			}
		endif; // H5BP_search_form_setting

		//	callback fn for H5BP_cache_buster
		if ( ! function_exists( 'H5BP_cache_buster_setting' ) ):
			function H5BP_cache_buster_setting() {
				$options = get_option('plugin_options');
				$checked = (isset($options['H5BP_cache_buster']) && $options['H5BP_cache_buster']) ? 'checked="checked" ' : '';
				$version = (isset($options['H5BP_cache_buster_version']) && $options['H5BP_cache_buster_version']) ? $options['H5BP_cache_buster_version'] : '1';
				echo '<input class="check-field" type="checkbox" name="plugin_options[H5BP_cache_buster]" value="true" ' .$checked. '/>';
				echo '<p>To force browsers to fetch a new version of a file, versus one it might already have cached, you can add a "cache buster" to the end of your CSS and JS files.  ';
				echo 'To increment the cache buster version number, type something here:<br />';
				echo '<input type="text" size="4" name="plugin_options[H5BP_cache_buster_version]" value="'.$version.'"></p>';
				echo '<p>Selecting this option will add the following code to the end of all of your CSS and JS file names on all of your pages:</p>';
				echo '<code>?ver='.$version.'</code>';
			}
		endif; // H5BP_cache_buster_setting


/*	4)	Create functions to add above elements to pages */

		//	$options['H5BP_toolbar']
		if ( ! function_exists( 'H5BP_add_toolbar' ) ):
			function H5BP_add_toolbar() {
				echo '<meta http-equiv="imagetoolbar" content="false">'.PHP_EOL;
			}
		endif; // H5BP_add_toolbar

		//	$options['H5BP_google_chrome']
		if ( ! function_exists( 'H5BP_add_google_chrome' ) ):
			function H5BP_add_google_chrome() {
				echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'.PHP_EOL;
			}
		endif; // H5BP_add_google_chrome

		//	$options['H5BP_google_verification']
		if ( ! function_exists( 'H5BP_add_google_verification' ) ):
			function H5BP_add_google_verification() {
				$options = get_option('plugin_options');
				$account = $options['H5BP_google_verification_account'];
				echo '<meta name="google-site-verification" content="'.$account.'">'.PHP_EOL;
			}
		endif; // H5BP_add_google_verification

		//	$options['H5BP_viewport']
		if ( ! function_exists( 'H5BP_add_viewport' ) ):
			function H5BP_add_viewport() {
				$options = get_option('plugin_options');
				$setting = (isset($options['H5BP_viewport_setting']) && $options['H5BP_viewport_setting']) ? $options['H5BP_viewport_setting'] : 'width=device-width';
				echo '<meta name="viewport" content="'.$setting.'">'.PHP_EOL;
			}
		endif; // H5BP_add_viewport

		//	$options['H5BP_favicon']
		if ( ! function_exists( 'H5BP_add_favicon' ) ):
			function H5BP_add_favicon() {
				echo '<link rel="shortcut icon" href="/favicon.ico">'.PHP_EOL;
			}
		endif; // H5BP_add_favicon

		//	$options['H5BP_favicon_ithing']
		if ( ! function_exists( 'H5BP_add_favicon_ithing' ) ):
			function H5BP_add_favicon_ithing() {
				echo '<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">'.PHP_EOL;
				echo '<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">'.PHP_EOL;
				echo '<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">'.PHP_EOL;
				echo '<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">'.PHP_EOL;
				echo '<link rel="apple-touch-icon" href="/apple-touch-icon.png">'.PHP_EOL;
			}
		endif; // H5BP_add_favicon_ithing

		//	$options['H5BP_ie_css'];
		if ( ! function_exists( 'H5BP_add_ie_stylesheet' ) ):
			function H5BP_add_ie_stylesheet() {
				$cache = H5BP_cache_buster();
				echo '<!--[if IE ]><link rel="stylesheet" href="' .H5BP_URL. '/css/ie.css'.$cache.'"><![endif]-->'.PHP_EOL;
			}
		endif; // H5BP_add_ie_stylesheet

		//	$options['H5BP_modernizr_js']
		if ( ! function_exists( 'H5BP_add_modernizr_script' ) ):
			function H5BP_add_modernizr_script() {
				$cache = H5BP_cache_buster();
				wp_deregister_script( 'ieshiv' ); // get rid of IEShiv if it somehow got called too (IEShiv is included in Modernizr)
				wp_deregister_script( 'modernizr' ); // get rid of any native Modernizr
				echo '<script src="' .H5BP_URL. '/js/modernizr.js'.$cache.'"></script>'.PHP_EOL;
			}
		endif; // H5BP_add_modernizr_script

		//	$options['ieshiv_script']
		if ( ! function_exists( 'H5BP_add_ieshiv_script' ) ):
			function H5BP_add_ieshiv_script() {
				$cache = H5BP_cache_buster();
				echo '<!--[if lt IE 9]>'.PHP_EOL;
				echo '	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>'.PHP_EOL; // try getting from CDN
				echo '	<script>window.html5 || document.write(unescape(\'%3Cscript src="' .H5BP_URL. '/js/ieshiv.js'.$cache.'"%3E%3C/script%3E\'))</script>'.PHP_EOL; // fallback to local if CDN fails
				echo '<![endif]-->'.PHP_EOL;
			}
		endif; // H5BP_add_ieshiv_script

		//	$options['H5BP_respond_js']
		if ( ! function_exists( 'H5BP_add_respond_script' ) ):
			function H5BP_add_respond_script() {
				$cache = H5BP_cache_buster();
				echo '<!--[if lt IE 9]><script src="' .H5BP_URL. '/js/respond.js'.$cache.'"></script><![endif]-->'.PHP_EOL;
			}
		endif; // H5BP_add_respond_script

		//	$options['H5BP_jquery_js']
		if ( ! function_exists( 'H5BP_add_jquery_script' ) ):
			function H5BP_add_jquery_script() {
				$cache = H5BP_cache_buster();
				$options = get_option('plugin_options');
				$version = ($options['H5BP_jquery_version']) ? $options['H5BP_jquery_version'] : '1.10.2';
				wp_deregister_script( 'jquery' ); // get rid of WP's jQuery
				echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>'.PHP_EOL; // try getting from CDN
				echo '<script>window.jQuery || document.write(unescape(\'%3Cscript src="' .H5BP_URL. '/js/jquery.js'.$cache.'"%3E%3C/script%3E\'))</script>'.PHP_EOL; // fallback to local if CDN fails
			}
		endif; // H5BP_add_jquery_script

		//	$options['H5BP_plugins_js']
		if ( ! function_exists( 'H5BP_add_plugin_script' ) ):
			function H5BP_add_plugin_script() {
				$cache = H5BP_cache_buster();
				echo '<script src="' .H5BP_URL. '/js/plugins.js'.$cache.'"></script>'.PHP_EOL;
			}
		endif; // H5BP_add_plugin_script

		//	$options['H5BP_site_js']
		if ( ! function_exists( 'H5BP_add_site_script' ) ):
			function H5BP_add_site_script() {
				$cache = H5BP_cache_buster();
				echo '<script src="' .H5BP_URL. '/js/script.js'.$cache.'"></script>'.PHP_EOL;
			}
		endif; // H5BP_add_site_script

		//	$options['H5BP_search_form']
		if ( ! function_exists( 'H5BP_search_form' ) ):
			function H5BP_search_form( $form ) {
				$options = get_option('plugin_options');
				$placeholder = $options['H5BP_search_placeholder_text'];
				$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
				<div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
				<input type="search" placeholder="'.$placeholder.'" value="' . get_search_query() . '" name="s" id="s">
				<input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'">
				</div>
				</form>';
				return $form;
			}
		endif; // H5BP_search_form

		//	$options['H5BP_cache_buster']
		if ( ! function_exists( 'H5BP_cache_buster' ) ):
			function H5BP_cache_buster() {
				$options = get_option('plugin_options');
				return (isset($options['H5BP_cache_buster']) && $options['H5BP_cache_buster']) ? '?ver='.$options['H5BP_cache_buster_version'] : '';
			}
		endif; // H5BP_cache_buster



/*	5)	Add Boilerplate options to page as requested */
		if (!is_admin() ) {

			// get the options
			$options = get_option('plugin_options');

			// check if each option is set (meaning it exists) and check if it is true (meaning it was checked)
			if (isset($options['H5BP_toolbar']) && $options['H5BP_toolbar']) {
				// if yes to both, apply option
				add_action('wp_print_styles', 'H5BP_add_toolbar');
			}

			// repeat, repeatedly...
			if (isset($options['H5BP_google_chrome']) && $options['H5BP_google_chrome']) {
				add_action('wp_print_styles', 'H5BP_add_google_chrome');
			}

			if (isset($options['H5BP_google_verification']) && $options['H5BP_google_verification'] && $options['H5BP_google_verification_account'] && $options['H5BP_google_verification_account'] !== 'XXXXXXXXX...') {
				add_action('wp_print_styles', 'H5BP_add_google_verification');
			}

			if (isset($options['H5BP_viewport']) && $options['H5BP_viewport']) {
				add_action('wp_print_styles', 'H5BP_add_viewport');
			}

			if (isset($options['H5BP_favicon']) && $options['H5BP_favicon']) {
				add_action('wp_print_styles', 'H5BP_add_favicon');
			}

			if (isset($options['H5BP_favicon_ithing']) && $options['H5BP_favicon_ithing']) {
				add_action('wp_print_styles', 'H5BP_add_favicon_ithing');
			}

			if (isset($options['H5BP_modernizr_js']) && $options['H5BP_modernizr_js']) {
				add_action('wp_print_styles', 'H5BP_add_modernizr_script');
			} else {
				// if Modernizr isn't selected, add IEShiv inside an IE Conditional Comment
				add_action('wp_print_styles', 'H5BP_add_ieshiv_script');
			}

			if (isset($options['H5BP_respond_js']) && $options['H5BP_respond_js']) {
				add_action('wp_print_styles', 'H5BP_add_respond_script');
			}

			if (isset($options['H5BP_ie_css']) && $options['H5BP_ie_css']) {
				add_action('wp_print_styles', 'H5BP_add_ie_stylesheet');
			}

			if (isset($options['H5BP_jquery_js']) && $options['H5BP_jquery_js'] && isset($options['H5BP_jquery_version']) && $options['H5BP_jquery_version'] && $options['H5BP_jquery_version'] !== '') {
				// check if should be loaded in <head> or at end of <body>
				$hook = (isset($options['H5BP_jquery_head']) && $options['H5BP_jquery_head']) ? 'wp_print_styles' : 'wp_footer';
				add_action($hook, 'H5BP_add_jquery_script');
				// for jQuery plug-ins, jQuery must also be set
				if (isset($options['H5BP_plugins_js']) && $options['H5BP_plugins_js']) {
					add_action($hook, 'H5BP_add_plugin_script');
				}
			}

			if (isset($options['H5BP_site_js']) && $options['H5BP_site_js']) {
				// check if should be loaded in <head> or at end of <body>
				$hook = (isset($options['H5BP_site_head']) && $options['H5BP_site_head']) ? 'wp_print_styles' : 'wp_footer';
				add_action($hook, 'H5BP_add_site_script');
			}

			if (isset($options['H5BP_search_form']) && $options['H5BP_search_form']) {
				add_filter( 'get_search_form', 'H5BP_search_form');
			}


		} // if (!is_admin() )

/*	End customization for Boilerplate */

?>
