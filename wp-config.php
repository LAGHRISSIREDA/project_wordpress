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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#~!Jjy{fG6RSuDZiD#[~zi~6$|>J_lVQMHK=/_DF{Et%m94Cf$auK5DSa!8f9j(O' );
define( 'SECURE_AUTH_KEY',  'G((qL!S<&wykN3oITn?g[AIO*!1v1}m>&k8j%FKFSR(n8Ey<=8tv6xu<]#+tw`dK' );
define( 'LOGGED_IN_KEY',    'Ds;CZDSH*cVKU@^Yz^Mn=3paH].Hv<O>!U$>{ :Yl1wd}WO}2Uv)f#s,2cNnK[3W' );
define( 'NONCE_KEY',        'zzmsd9/R25}XjE8QWW0;U}>-ZPrx_Uqa91!!$PRK2lgypxb=-]jEOT*Xeif1reQf' );
define( 'AUTH_SALT',        '+)]%ByfcL6<df.Buk~JblyqvcQVg#~LrS$/Bin!+3FTuf1*tQgQDo~R!fX5AY7@a' );
define( 'SECURE_AUTH_SALT', 'PL#:_6eE3w7LJTW/U{|0@ReSW6?pW]iGJ[&`kEGp~b%3O`{#FjGZG)8=6 k2{U4_' );
define( 'LOGGED_IN_SALT',   'E#O]Alsyutf2!%<W[=!jgn>*)g4c#i{#i8=dGNwbnd*bky03!54 O!MVHPmA_&ot' );
define( 'NONCE_SALT',       'a{KnXy{>I!0.s<8}JL{N8s`3$1b+~.WJ=2LxW+b_,1hCZ^fX&4Le C$_+!Uk;+4t' );

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
