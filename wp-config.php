<?php

define('WP_MEMORY_LIMIT', '64M');
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
define( 'DB_NAME', 'admin_media1one' );

/** MySQL database username */
define( 'DB_USER', 'm1_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password329!' );

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
define( 'AUTH_KEY',         'FsmomxyJ)jB|A82`yN`OQJ:%=73+oA,xIrNM,8*} =FR_N!C?8`WU.`A@EO?A;mt' );
define( 'SECURE_AUTH_KEY',  'nKI>2kzThr9E({]Wv!F>_r=r5_%QSbVT6R0Go$5Az-UVh=CZgXQ:8v|ubTz.hu7>' );
define( 'LOGGED_IN_KEY',    'ls`()24i6#6o50LuaL001_6J!bcU % c~34]L[) M=>D]0EyUE=1-mG6nQ<2mtX0' );
define( 'NONCE_KEY',        ',iDlZpSK/VD[^2p;knl8ZA;[#2$!2i*J^`X*cL9y[uPj2/Mvz:%</@K(0p-[.B@3' );
define( 'AUTH_SALT',        ')cy_~wwg{y0e<oT~n0o`.;sPu%2x,7R(in]bdX Z_JptlN+2uHHJ*0l> 5s UpK!' );
define( 'SECURE_AUTH_SALT', '^fGFXO?u.Wg2c[|rdAo_T1=#.{jJ-?|3.SF*JbHUryd]D!G|HT|ZO!XxK: #$F`C' );
define( 'LOGGED_IN_SALT',   'Yj(2CUEUVSi0]{:j%&~=n*fdve^?0P4#cWn8WC8$},/pn*.YY+~nDsQ(*xc<X#+g' );
define( 'NONCE_SALT',       '$[167Xn[H,1STZOb@5kfwx_hD;*(X5Qgsz{JZ$`zx+>N-_GRj0}mN4I[z^8sF2;b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
