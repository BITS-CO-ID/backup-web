<?php
/**
 * Your Inspiration Themes
 *
 * @package WordPress
 * @subpackage Your Inspiration Themes
 * @author Your Inspiration Themes Team <info@yithemes.com>
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

add_filter('yit_plugins', 'yit_add_plugins');
function yit_add_plugins( $plugins ) {
    return array_merge( $plugins, array(

        array(
            'name' 		=> 'WooCommerce',
            'slug' 		=> 'woocommerce',
            'required' 	=> false,
            'version'=> '2.0.12',
        ),
    ));
}