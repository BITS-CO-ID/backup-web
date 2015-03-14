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
define('DB_NAME', 'c8aps1');

/** MySQL database username */
define('DB_USER', 'c8aps1');

/** MySQL database password */
define('DB_PASSWORD', 'A10faaa6e0c899b1');

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
define('AUTH_KEY',         '60$k7!AUobSh^m)mu9Md(yBINBX8eRtNkTkjPF4WePAxV%yYMAKA^1C*b$1&pN@s');
define('SECURE_AUTH_KEY',  'B(UBIeI7i&U@Lj2^MApn%5bW8YBUUcgjwCiQhh@1x!if27pOMCSFSC&4RzCL!3#@');
define('LOGGED_IN_KEY',    '2odw$VRfP!TFkK7#@hqXoaPSL8qenAXSV*F9i4k$9V&lp2*1*j8SELl@3&f7u6uR');
define('NONCE_KEY',        'dCe1N$qPoIi#cnsI$*UU@))0u8aAOLhje&2h!@!7NRpa0GBghMmUfwlobxbuDtHI');
define('AUTH_SALT',        'UQ*DU(Gkn05T7DBgWrljzdMsia7Swtr5bIc1r0LoEQeMPirMF8fV%S2XO8QHnjFd');
define('SECURE_AUTH_SALT', '5hZg%59QW$L)R8cy1DfQz%SxDwI!f(4fGDUz$hjJehBOP^IoIv7LQR9^iV7D*djy');
define('LOGGED_IN_SALT',   'p*U)stxSUR@g4B0N7QUILMZHow3$9JOQV8*iuwL1ZX@ge#LNJ7KB42$olG)pn(9!');
define('NONCE_SALT',       'hysWQuOT*(jCE)K9nO(ePb4XeU3^q$tbZBsgqO&vbz*1kotTtX#A5Q&dP9Ke*C^5');
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
