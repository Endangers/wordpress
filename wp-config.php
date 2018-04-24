<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'booklist');

/** MySQL database username */
define('DB_USER', 'booklist');

/** MySQL database password */
define('DB_PASSWORD', 'G9jUDYmQctFsLrHn');

/** MySQL hostname */
define('DB_HOST', 'matt-smith-v4.ics.uci.edu');

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
define('AUTH_KEY',         'B]axX$*W PSp)M|RVXcIa_$H[X<-?i7AS~iv2lr ;~-CFc9yrxwHhc<a?W(*g&q-');
define('SECURE_AUTH_KEY',  'Xj?QBzB-_(zohH1s/mo6.YfwWG$$&R1)f%~IpH10Bv|i(el)NJzNPy5kZy* o5nU');
define('LOGGED_IN_KEY',    'bW-?$T1$(AKL{v5>J(i*_&b20oM3MP<-IO5H##;?3? eP_NSlqB)1zy-T3cfz%Jv');
define('NONCE_KEY',        'F&5g)XljU|/BYb|vcc(d>|}_Q!*ZtG37F4aEo#@v:fUO_ZiJ]N9JUIhGtH%0-op!');
define('AUTH_SALT',        'GN%V9w=qR:/;j;Bv~BX3-=8i$T]`X>aWVY^iUoHxQ~%=sV|K[=^b`x!BIA3wkJbx');
define('SECURE_AUTH_SALT', 'fcOK;1KUX^GYmQ7-:BGxoQ@kY6U+;kB{5<Bl3z.*V>UC8n6|LrKZOWk`]fJx>J3}');
define('LOGGED_IN_SALT',   '/I]CXT3%F,2S8?-yu+#>@?wc}s*39H8K+fL=0Jx9H[p;@4rC>:]i?n6lrpH*nMg|');
define('NONCE_SALT',       '{t&>2ab-)x8hFj{LMA%`kFD})EO;=DkT1ZwJ$eNdC`jW=y^,VkoDRr/QnL>;SedL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_booklist';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


/*
	As directed by Du Lam from ICS Support:
	Adding the following shall help:
		- Add / Delete PLUGINS and THEMES through
			"wp-admin" (a.k.a. Wordpress Server Website
*/

define('FS_METHOD', 'ssh2');
define('FTP_PUBKEY', '/home/booklist/wp-user/wp_id_rsa.pub');
define('FTP_PRIKEY', '/home/booklist/wp-user/wp_id_rsa');
define('FTP_USER', 'booklist');
define('FTP_PASS', "");
define('FTP_HOST', 'emp1.ics.uci.edu:22');

