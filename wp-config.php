<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'parax' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2 $E{9?{-rDQZRI]|7~w/G9MeTQOe^%o~2wJ)`S+.tK3;2(L;aY[l_v?2cOjxosd' );
define( 'SECURE_AUTH_KEY',  '+yoEKmSS,:{&(;ygVMD!zb;xgJIUv4rP-8;0E7sZE{3y$%wr3}*WE/j>65e0Hf2l' );
define( 'LOGGED_IN_KEY',    'c49PA#b*e3vbr|<6c&~_27&8Au=vm25kzgMU3|zX2I~U$Jw1#;caa]u69>Bu4o)3' );
define( 'NONCE_KEY',        'p4gSq&~@zm{wW^lE&e&i!.}QYi&O}57A%OZlJi4Sjx~tsJYap|}PZ)5d)BCk~AP ' );
define( 'AUTH_SALT',        '[b`RAU}^@;+Zpt{<{eqTi0?9O{Ru-Y=dh%_=cP(MpAz7AC~R_#**LB^<Z2KfMKm(' );
define( 'SECURE_AUTH_SALT', 'wj!^5G s|TR091E`Wq7J9nn/&]d_N,gL;|tVkvY0J.):qYI5L*yOc=WkE5m?e#68' );
define( 'LOGGED_IN_SALT',   '; K=f<,j{$-Mcs-_=Fh9g`gQ)9ft1ERT|M].TH;BoCgHET64Kxxw}:vO 7k[[Del' );
define( 'NONCE_SALT',       'VrW[Vmb+;ItkfQ%6<fW!t84pCu2a;E50gOW#e(WtGo+=N}.NJ@y|>6NL[F-PPiZP' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
