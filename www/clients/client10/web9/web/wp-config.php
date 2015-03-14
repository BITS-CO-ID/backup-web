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
define('DB_NAME', 'c10aps1');

/** MySQL database username */
define('DB_USER', 'c10aps1');

/** MySQL database password */
define('DB_PASSWORD', '61e7937463e923bc');

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
define('AUTH_KEY',         ')2ed3rkDs7kUnup4w7pyBJMmHtxwNhFOihol1R*iu)jx!AHnpUlx9VxEDxYsD2uE');
define('SECURE_AUTH_KEY',  'U2nD#MbO^(ku4X8bbj3*Sut^E*MXN!)i5G*Ky!v)l)y0Ks(U)^ZaBVWqXb*ELzfg');
define('LOGGED_IN_KEY',    'pdwo*bsUVhGZEkTF8yaOGLlK5h9j@xG0VK9H**M7T9L57%2niv^ng087chHg$VC)');
define('NONCE_KEY',        '%Z$uxsvn080OR&wdfe81hNNMNW@R$R^zjqGj%GdWre#4jr$Y^z@c(P#^UhJ6l2ex');
define('AUTH_SALT',        'MrU5x!EC5j63^NRQw!*dVjy6YcaD!Pz7wVsN&AIbf4Si&%)fHXZet5gGmxBpue6*');
define('SECURE_AUTH_SALT', 'xiSL^^KCjSQEjG!n*EtzPGir#2haHVVGWnyFtBGH5&4p40LRyUW(KKFF7nyF8RuL');
define('LOGGED_IN_SALT',   'A(ZGJi*aNvQxatexqQqmYTxp#kZlT!eDb7dlguEM@UiC&B!os@SZwoAoYBeEOY9g');
define('NONCE_SALT',       '8cwgV(EOA3nO$AMIwTQCT9YoUSj7k)a&OvLbHTRnEsJdec9NE9Z)ozHm2wPMeM9r');
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
