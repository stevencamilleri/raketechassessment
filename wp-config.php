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
define('DB_NAME', 'raketech');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '+%mal*8}|L<EuNdNR4s&r(=OREWBuv79&*SXN0P1q5[f.{8GrR/D:E6})NFtC!ib');
define('SECURE_AUTH_KEY',  'E]_{BYD0u.9X[1/e)(RV6NOu4A+.PUoWB#jSrIE{|n-d;c^E1C`f5-4?(ce])E/p');
define('LOGGED_IN_KEY',    '8x+uBU)@(aK%:aJKV!H/T:&3PMZ%I9}l^$^x+NHv1_r::UQvp%hn_+K)`[T>V]cb');
define('NONCE_KEY',        '`rT[bk3(Uwt#3%SigP^>J<k)61Z2%iAynFW66KAp)4#X[D)+yZ>Ha[#(KH(@JnOf');
define('AUTH_SALT',        'DF:s$X74tIm6rhJD[?s1l{,I.H0L0G,7;k5I+;K-vrJqqYr0m[TLTpMnQ}1XYbn:');
define('SECURE_AUTH_SALT', '^2y~5+z5vTrG)^K1>ylx:<Z@BF3T(O>Z6UkqbiyzfU/Mr+|isG_a$A|NH/U!!Erp');
define('LOGGED_IN_SALT',   'm>Wl`(^X#Gk_0ujy!xo`uefS[y?$CMlR-45/z6`O(8P@!Eo/u.:I`N[x~9aEHgYG');
define('NONCE_SALT',       'AVI}@R5l.PEz!opk+BPHUIfG6l`q1*/12f&6hgL!50>{vxD6>AcFB {pf[TP Y9e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
