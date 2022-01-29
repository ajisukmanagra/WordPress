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
define( 'DB_NAME', 'wp_mesjid' );

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
define( 'AUTH_KEY',         '{1t}g=egJhZ}%>H1oejx =VNd`79hCjicP:y~NU>bD,iD|W_Y7C2$Zg2uGN ~hXg' );
define( 'SECURE_AUTH_KEY',  '0bHm)p.3&cGW;+/^Y#*|nOfo1SR,n5)zXPh^ilY)!_rVRc)~}|AnxE;M}S9l@k&f' );
define( 'LOGGED_IN_KEY',    'Mhjxcw{.AXN[ay=,tKs]oO+lh#{D=3H1c|8Hv|IAeyNK,cmj:|I4-2W]C wKB3WZ' );
define( 'NONCE_KEY',        '/%|!G?ec-yq!iP0]K2I~?Mq1gW$;S[|V=L;Hy<17x36Y,v`sVb8C|%X*EL$(oXT|' );
define( 'AUTH_SALT',        ',lt!^N~A8F#u/L&.Py1MfMy-2%-$yd1Mj5fAD -0|jwDQD.jy`,,U~p4*`n?)9H5' );
define( 'SECURE_AUTH_SALT', 'a=gdB^IGr+y`o`Q1MVPfL>OTBvVV(P;E^Jwy}]w<Mxs],rQ*R<%CSpqLj.K-tFr4' );
define( 'LOGGED_IN_SALT',   'wkO2PI.iP:0XEmr|lQj6b?|oF`qt;i3$JRu?{#_,}_&Qo.Sxn`A Bc@I2_,~A7_O' );
define( 'NONCE_SALT',       'y!Dw3>ZLwN@KaXxn|Ws-,W3Yt!H^}[K> J3P0g]@M7[0K${fe`UhD 3x+1t&@8}i' );

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
