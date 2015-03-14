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
define('DB_NAME', 'c9aps1');

/** MySQL database username */
define('DB_USER', 'c9aps1');

/** MySQL database password */
define('DB_PASSWORD', '943a1dbbaded59da');

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
define('AUTH_KEY',         'J&xW87nD4KPOYb!1#85^5&Of^ozU#&hpK1nbbx$cR9@EWD#dNdjn5whtbgl2sTSI');
define('SECURE_AUTH_KEY',  'nPbeHFQ(Qd%$MuZPo5ZUWK6IpDs##rKY*qPv89yL%oL*%wDkFPQeRM4qE&kJvIKX');
define('LOGGED_IN_KEY',    '4*n7z3HaP!)lCGEC5EBx3v%qrx1N^IuHV5fpt3$qg29JYzaEWk0THX)rTQGRkNz(');
define('NONCE_KEY',        'd3s!k4c^1$qSP4qlKwdqq9geuqcZhTGXB^KeOv3ObwF*4C*XjdBIyj(95IwP%UMr');
define('AUTH_SALT',        'u&^luaST6fWbo6AmQEZJIOp!^@ED1rjIk@zUu)npCX&Q1BrXE@YpHXujdFtOz@9g');
define('SECURE_AUTH_SALT', 'jxh9JCHtupEkpJLQ(E!!G@iwhLL2E4vI^lW8E$FWhGRjj%Bf*@YoH5eqn0DvB6qh');
define('LOGGED_IN_SALT',   '7wq3^lo@ZxyPWPYP%kGFP6VI8v@!Dp^vKb$$Lf9k*2ZhrvWWM5XvapRKGk6EMfi^');
define('NONCE_SALT',       'Bo&qb1olpSgh)#83hL!uR!&2SOQ0%PeL4AQ8bB4m!X*RoiMjKGTvvaXI4Gxw^u@N');
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
define ('WPLANG', 'en_US');

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
