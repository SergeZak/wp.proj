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
define('DB_NAME', 'wp.proj');

/** MySQL database username */
define('DB_USER', 'wp.proj');

/** MySQL database password */
define('DB_PASSWORD', 'ahtufn2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '%@O+*l+v`VfQ3QRkbDwBYc{*m+s2Vw$~Tt)#@t2$Mt5(n:|79rb3u?H5!m#V>3|C');
define('SECURE_AUTH_KEY',  '0Uu!>o:~a~QRxz]SN)J[O;[(q$/RIn=$oHA1`;1+e0h@+e0U1}^T6!h*y:|UK.1[');
define('LOGGED_IN_KEY',    'cQ`{}.O*Nqs:.~+Ng$M/ h9?@lg+>hJ8MCB-S?h[VO-oyz0+&wC1PX{Rg4D_5lYA');
define('NONCE_KEY',        '?9a1-5TjPMKgCTDiG[jD-(S4z5y-h:iy+7=f)@OepgD4%X5Z=#|6%s~.iwGmGT=!');
define('AUTH_SALT',        '|*3V.Tk qnu-tpAt)uDb6^CGO7#<la+|Pe%Tz-:Ko?m6j[tuTYXv/diR:[NE|4Ri');
define('SECURE_AUTH_SALT', '`&<tj:/V^K_uE[+n{{IZ3s,LyMx7|6F6Snm+.sJh7aD}e,2mPCn0?{t&H_@!0(:4');
define('LOGGED_IN_SALT',   '?B>yWJJo*(eO.c|br]l$/t|v5xqCDbKm8 @~}Lqr||<V<I)4!epfQ9qat3P?-zXa');
define('NONCE_SALT',       '(S~;u,q+P}18_>X+g4]>T#6B4s0-it0>C}l-/e5KDiL[Vjmb(+^b|.Y.9s$+y@4(');

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
