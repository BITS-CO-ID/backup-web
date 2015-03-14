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
define('DB_NAME', 'c6aps1');

/** MySQL database username */
define('DB_USER', 'c6aps1');

/** MySQL database password */
define('DB_PASSWORD', 'B1f20f89dfbd2e86');

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
define('AUTH_KEY',         '!I(J#1WC@pzjLB@fMFOgbQ$MhrY0YsxRQw9%ewxBICLWuj*j90uCZJJ^%dRx@D4D');
define('SECURE_AUTH_KEY',  'uoyMlr9KdDAMUBH*w2SBt8Wh)3*NOTMOHFsTV0f9gY6d)ZJ&hv8QuMm)8gppIa4D');
define('LOGGED_IN_KEY',    'G1F6N9Ktdqg%qy)PhTNrRui2dmiK^^CwThuAM$uJCNOTxALf#4SBEyWm^RSJ#T3s');
define('NONCE_KEY',        'WulbKQ44UyqHYJDsr45KwHERu*dW!r*D8#sfyl3Jp9OBPSU%To8IGO)04!RwDoc4');
define('AUTH_SALT',        'HAxYq08e3eCeyq)Zwkp#XCkcsvk(aH7ycjZ6Y0)WzcqTGffgjXUIVTHhNxJ(v3is');
define('SECURE_AUTH_SALT', 'F2UnqW4MNlZLNk#*vfpy(n%X3959BL3Z^!HU!B!j!WPysh4blNZcSWrr1#act5VR');
define('LOGGED_IN_SALT',   'evtXO!0(Dq5SHsLgJ545V#zqvOs4Lwc6odMfdmMVDfN#4xruGsrIMAavvjrCqwLG');
define('NONCE_SALT',       'L00otC9K3kEAKNxK&W6WqH9mpD1Sr8KG)m6J*TP5hZiT*n@HQLVKvaWhw(PAwypR');
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
