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
define( 'DB_NAME', 'ibkwu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'tz)9h=L8Y*JX>[,lDnDh<q0 usr.jlNAoR[@7j_N)]!`82?K*X_bM$:AM&;a+B%k' );
define( 'SECURE_AUTH_KEY',  'FfUp=ODGHVhsX0B64iqh*v:Yv,pSEJ[%[{<$ZhTtf0Q;{rE?HT%O^F#Xjkl7(Xi>' );
define( 'LOGGED_IN_KEY',    '++:EwW<|cmZc%><_~$ja!?{ B:{2klS(h;;8-8wSb<QLsnaD; 63$^kSmLp6.}es' );
define( 'NONCE_KEY',        'zFhW{ghq>(+^^d8|!4m5E-Mr!_Z.f[`c`3a`@0@/4@>Oaq<b-5dxQg)T(Qx}EU+/' );
define( 'AUTH_SALT',        ')Kpmg*.8epmJX9d53rC>3mAG4@7x<7AFc=(jjnsb0MfyGqE)dZ/bg<W-v3 T(z3q' );
define( 'SECURE_AUTH_SALT', 'PGtG-Z7Leg14VK}r302YtN |~#MGk5IQ<(38~S Ne@`hJStC3qRyQ,F}(e<JEx,O' );
define( 'LOGGED_IN_SALT',   'z(B`!A[Bg(5zo.2c[O=fY)X7K:G#tkMKDbx>b)yd9.tAXqCU{z<x@5p?[UUty@A4' );
define( 'NONCE_SALT',       'W|AUd&tQSjy>j$;@}$|7,+eqQM)!JEo_[%u*c/.W(zHoPHhf%8%.[Q/Sn+uirF}P' );

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

