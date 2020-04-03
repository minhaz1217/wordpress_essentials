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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_tut_essentials' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'chNU`:)RC`jbGUG[FQyt O8LL!z]`>{b&y9e{>ub{E+~z8$V1SmOPNmoC4&>Ehf-' );
define( 'SECURE_AUTH_KEY',  'K;`KXztaRQapbUqX.ctL`-.2?U>y:7={Y4X=36+jc;VpHa:#4.{*gX=IsNJ9*Fcy' );
define( 'LOGGED_IN_KEY',    'cI !fdc{L6A0omNQa86yUpk][16Vj``,1Mu +8aNf])=2cV!3fW;~3CC<hdZ9#W#' );
define( 'NONCE_KEY',        '[G].|aZX>i*&{T5Zk[nRkhyjl G4T+2hcyks^PFf|~A3<R71kA?q](?M@`|YEs1@' );
define( 'AUTH_SALT',        'C}-DRnk%Zh[bh7rK C#AkDz$yT_Y^Q^w~e*P~@ig/PKb=w,!3%@KLrYr[wc9[{UG' );
define( 'SECURE_AUTH_SALT', 'dxZ2/RN#GsE4JwRv(>^j4~7=~`Q+Sj/4<>>^^4/ZAUGmgPnPDT)n8-Ap/m]yqb-}' );
define( 'LOGGED_IN_SALT',   '*3u!zvp!Cx;a)]N>t&Lz13Z9?vqHIeE7y%=r~:e/tc>/*F=%m2hQz9KIm&w?9ji*' );
define( 'NONCE_SALT',       '>SEyc]s ^me[4>@YG+Asy/TkVk{>Z-*sX*5_9kx+$y]4*zLkM{=XRJ(v|j&?$&rM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tut_essentials';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
