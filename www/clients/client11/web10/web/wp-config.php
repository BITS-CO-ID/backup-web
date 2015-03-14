<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c11aps1');

/** MySQL database username */
define('DB_USER', 'c11aps1');

/** MySQL database password */
define('DB_PASSWORD', 'A60df5e7465dfac2');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UwN)UFayv3F&^Xe!!asuJ1wt3mxMoBKyT9ZoiSMt((OT@4reZFZ*YNx8FqXTFJRF');
define('SECURE_AUTH_KEY',  'k34SwrYDuXlL1IYVBCUl7Ru8yiduLP&6R!!VQxR82MTtpLL)@ZKG#GDiV)FdPZ%u');
define('LOGGED_IN_KEY',    'IO5B0!N7^ZVUf%l2RN7qvDSxz79^k6QTq0Nw1%1bMsiaObP6Bg4EKJ1WaWWq1#%C');
define('NONCE_KEY',        'VnXkV^&e6Yg2K#*%cUhOaS#V%VvkV^**9xpvco(N#ovf*Xv6DX)^IIn*Jj)Qua@0');
define('AUTH_SALT',        'paRN2z2&jNkn5wNCA!Y!mIWMOJdOZjjn^Ecrg!!G5&PXDwTbDMHSl6BStO7*v@7D');
define('SECURE_AUTH_SALT', 'myS4ZKZQYtu^hWnjX)1cQM!N9pC7!%MlZ0DKWyMWL%pK9G3p2l49NIK1XZ&cYiuP');
define('LOGGED_IN_SALT',   '4mU#POZbtz5X9iQ!NoJUPwp%jA$oW%SQbvcNjOMi%GsSJzFLK@dHTg#&%h&cF77U');
define('NONCE_SALT',       '6OyGmiHedKS5b8Yuw2bQdrfxmjTLqt^d0MnHhn&nh9ud64YTgGWYJIH)!KDhkW0Q');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'id_ID');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
