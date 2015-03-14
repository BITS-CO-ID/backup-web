<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c18aps1');

/** MySQL database username */
define('DB_USER', 'c18aps1');

/** MySQL database password */
define('DB_PASSWORD', 'c18aps1-26');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
//define('AUTH_KEY',         'put your unique phrase here');
//define('SECURE_AUTH_KEY',  'put your unique phrase here');
//define('LOGGED_IN_KEY',    'put your unique phrase here');
//define('NONCE_KEY',        'put your unique phrase here');
//define('AUTH_SALT',        'put your unique phrase here');
//define('SECURE_AUTH_SALT', 'put your unique phrase here');
//define('LOGGED_IN_SALT',   'put your unique phrase here');
//define('NONCE_SALT',       'put your unique phrase here');

define('AUTH_KEY',         'V>t7-_37}1^6<Gbn#?@(X:XY`^*X(FVQ`y?;Wh4Ju6`k+H7@VxHzm^-:O,Hx5P@N');
define('SECURE_AUTH_KEY',  '+s|1/%~ &_^5KHg+}UKw;RR6{|JSk;@_FbnOUp&fyrR0+whm,+eZ4`VM|:F1v:^Z');
define('LOGGED_IN_KEY',    'Ae=kX>FkL+SX#.~3{(OXG0cF|HHAF+~Y5M75vC,$|dd]OtCjs~0 AB?;m]3ga~_P');
define('NONCE_KEY',        'jhK9dPqY?o)$L4Qdr1KpI]%/FkFU@} p@JyVpy|~|W^_ygPo2AcDum;8l1RUfY:,');
define('AUTH_SALT',        '_5ma6Ms],R0J=5D1.G.cnL!cc%{^29cp4WO)2TGd|d:;smUSt*gpx5Jk+;Zn7DZ;');
define('SECURE_AUTH_SALT', 'FT)iPzWII[23wlbx]oNaHjk&-2(yl`S9%1_*Mec|<{T(m*bbD--+Gi$.ieFM|TDD');
define('LOGGED_IN_SALT',   'Xj#Q-QaCN7|!j0(Nx$cw7t5%;D$ @Cf<|xN2V0%DQCjT+sG`x~n3Kr8$7cc`Tb`:');
define('NONCE_SALT',       'Z+s6fy.Z6<s7*,EoEDuJT !.wb9L g8^oF*2ocM[v`EDH=P?w)!/IzG`,B+FH`OW');



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bits_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
