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


if ( file_exists( dirname( __FILE__ ) . '/../env_local' ) ) {

    	// Local Environment
    	define('WP_ENV', 'local');
    	define('WP_DEBUG', true);

    	define('DB_NAME', 'capwordpress');
    	define('DB_USER', 'capwordpress');
    	define('DB_PASSWORD', 'sbear99');
    	define('DB_HOST', 'localhost');

} elseif ( file_exists( dirname( __FILE__ ) . '/../env_playground' ) ) {
	// Playground Environment
	define('WP_ENV', 'playground');
	define('WP_DEBUG', true);

	define('DB_NAME', 'capwordpress');
	define('DB_USER', 'capwordpress');
	define('DB_PASSWORD', 'sbear99');
	define('DB_HOST', 'localhost');
} else {

	// Production Environment
	define('WP_ENV', 'production');
	define('WP_DEBUG', false);

	define('DB_NAME', 'capwordpress');
	define('DB_USER', 'capwordpress');
	define('DB_PASSWORD', 'sbear99');
	define('DB_HOST', 'localhost');
}


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
define('AUTH_KEY',         '/8#]O8+-}d~LAAlR+*{Ia|W~|n<<us}U@jf6AQi6 x&WD:<Y8( vthc`Y/cF9|lT');
define('SECURE_AUTH_KEY',  'X-?5}/G|*/YvK?4_7l4aPP$flJ{()x5BA#)pt%s{k~mBWRj9dV0%4bgZV$m/pO_#');
define('LOGGED_IN_KEY',    '{^E:s}_-9^,cewT|/Q_HC[9Hvt-q{K34sWoX(ZYi,#qFsd;CRgj;x@G4O[Yyg//S');
define('NONCE_KEY',        'ODP]Eugh`DVInv,u6MiT2S{%<-r~gZ`iIRB@NX}QK[ZtVR/e@UAq6e7!6YVyf`!P');
define('AUTH_SALT',        'VKBXKh.Q(|+s8dQN_oW/9<&/QD**I4;W|(WEYw#,Kex DY%@4eVHZU?WR|sM3I^>');
define('SECURE_AUTH_SALT', '3I$VJb=E#GlK0%ZUUI;2$NWXF@dMAuNBHR0N9z4Mo{=f@Ti[F+.U3jzJB$40y2<}');
define('LOGGED_IN_SALT',   '#S$5AH~ata9&|%X2M,gCmV5pSP3{d{^q{tgO1goSgJ#f!-e4H3c&jv`KKi80$Xs#');
define('NONCE_SALT',       '}+lWm8bgI|oF_kt|>(KX(V<+0$PMQY]@W~SMXKT6bB=kyr9S%GJ;qbnd.%+F/%_[');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
