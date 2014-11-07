<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'db172217_wordpress');

/** MySQL database username */
define('DB_USER', 'db172217');

/** MySQL database password */
define('DB_PASSWORD', 'ik3UCRc7jhSQL!');

/** MySQL hostname */
define('DB_HOST', 'external-db.s172217.gridserver.com');

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
define('AUTH_KEY',         'g3|W#geo#aTVcW j[ L_5tS>An^!Ll?<NM3vx`@N$@`+raB]qi>XP*c%-f3 LFeA');
define('SECURE_AUTH_KEY',  'XY4(3z{ES:]/(y4VHAOE|9{XAqL<h&!mE}_fa+(mT]|,h^D ,kAimmA2KHG1Veyc');
define('LOGGED_IN_KEY',    'VqxS8S5T4/7Kub-Nq9Y1#vu:~s)a($AnN.kCLfv)%<A}L7!hZ+7$w+vY+,e*pioB');
define('NONCE_KEY',        'j8~5qBs9<!Z:y;>zvK]zca+v5dcK]?C@n]oMp/5:hE,<!K.~24.+O}dJ(d-8S,|=');
define('AUTH_SALT',        'l+*uhtv-rK/m)VA&lE_6Zr~me~gN<*!5%X={U?#K_}+_hf]<I|F[IRX<l2st,J,c');
define('SECURE_AUTH_SALT', 'mDRulo)vQ&ZF2dTKq-^H7cXh6^~6N61-^H:_KKZU~j#_7 ?A&VaOC6c5&uP<D|R^');
define('LOGGED_IN_SALT',   ',P=yo}m>u4^7509|Y]k&@wN![-Q/1UsPHRb:5s/G#-CACbP10{4(_3rD8~T27{n0');
define('NONCE_SALT',       'O&6!R.gltYRuh{5.M/Rc^EOA$R1K;J5Sr[I6E!_4 V;67#)BZIv.e/9%Enq9KN;b');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
