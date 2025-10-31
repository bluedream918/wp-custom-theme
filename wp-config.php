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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cV?C25?hkDuj2A3?s2groaT{6}~xw$6XA~-{T0_cNw*vLj;CDc!^,hmkJizk`&Sn' );
define( 'SECURE_AUTH_KEY',   'w$7+]f3+1&,3zSyrfdpQ%&!Cc~PzkJ~!3$)P?zyU.&.c7B*_{gYh{4VC2C  Ey3P' );
define( 'LOGGED_IN_KEY',     '5qidw_<K0cSA!Gxt{g]0~G~O8A9<P{.RbH/]qR1[{COM:T>D)|.yRsUv8<`w6.20' );
define( 'NONCE_KEY',         'NA,8RD-><P&x&?C,+=.7{yRDqo6.WJg|/XT@r4n6YnJKy1Wti:nE8s3Nk)vRX|(q' );
define( 'AUTH_SALT',         'oK(`jg%oN{Z|B[PTxLp>nx$Rfe 2zc&vo 4eslxUL7v{m.O9mWnI!DQy`QZPps7T' );
define( 'SECURE_AUTH_SALT',  '9!8-tU(G+;OZ#MNXInfgZm_v Q]IiqQ?lE@W9^[(fiR01PsCU!HA#_j..q%R ns ' );
define( 'LOGGED_IN_SALT',    'J&1MuNE[I?_y`2{$Ay+${NdE`OqHM]$hVGGi=6as]uF?eWu/tjno[2) cJlMi0/E' );
define( 'NONCE_SALT',        'fof+@aEJ-{72<Nr-`Lu*g?LWY]Cr fX-3^N|Dd+W&$hE:BpVivVR<xwT5Zfz$,pF' );
define( 'WP_CACHE_KEY_SALT', 'Nuh)Gs%h8SKM|f{57j%1g:}}wqpzj6%7P=RVxu{F<]bz9sdRc- Lzf_]udCmK#hQ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
