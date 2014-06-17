<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
/* Live creds 
define('DB_NAME',     'conscious-blog');
define('DB_USER',     'myong');
define('DB_PASSWORD', 'dKt0el9U');
define('DB_HOST',     'tunnel.pagodabox.com:3307');
*/
/* Test creds */
define('DB_NAME',     'mrhistory');
define('DB_USER',     'root');
define('DB_PASSWORD', 'root');
define('DB_HOST',     'localhost');

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
define('AUTH_KEY',         'goYOHfqLN30%r)Z (`+E<G+ONMSAlWx!Sy11JQ(&?{?p020l$&{mX*|*dI6dv+[x');
define('SECURE_AUTH_KEY',  '&>{[t]n<ZR-Z>j5i~E;,lslC6J4RXsh1Kah)L[&^KL;v|oL!8yyFNmJ=RR0O?wd^');
define('LOGGED_IN_KEY',    'COB=4N$khj|h!be-~p<Kh-i|3jMWr~kn6+7xs+#xa.sX[+Qn{iqAIU[M10;}zl-#');
define('NONCE_KEY',        'y$AMLX/Biw`N>)g6R}%?D7Md9|H?aegu2?-5_E4>}4:7Dt8v-[9(=0#y0d&+ZXGO');
define('AUTH_SALT',        'Jj /&qFJ55AX%v@3xz(yo Cu^i:Z=*%LeKA>%-mveFr%1&j;FTOn|JGh)STKIrT:');
define('SECURE_AUTH_SALT', 'k^gV-mh1kv#5|*voJ=4^kd~/cX!`-%!,Ql(C4IJAkII/1K|dbOj`!mEWW1mVRZ_b');
define('LOGGED_IN_SALT',   't3vn5O+9Fq}HU1XQ7;-<&-t?Rl6GX<C$@68r :Nea*7-PZh!lA0L+>QvW3c2/W:q');
define('NONCE_SALT',       '@y-|s7G>_H9iYY-X[u>28(+:t0/Fves=;dqz|~=j9^E2,U}#-Ne.A!kPQgsQ-*Ly');

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
