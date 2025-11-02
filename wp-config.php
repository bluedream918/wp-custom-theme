<?php
/**
 * The base configuration for WordPress
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 * @package WordPress
 */

// ** Database settings - from LocalWP ** //
define( 'DB_NAME',     'local' );   // LocalWP default (change if yours differs)
define( 'DB_USER',     'root' );    // LocalWP default
define( 'DB_PASSWORD', 'root' );    // LocalWP default

/**
 * DB host:
 * - Use the Local socket for web requests ('localhost')
 * - Use TCP with explicit port for WP-CLI (e.g., 127.0.0.1:10005)
 *   -> Update 10005 to match your Local site's DB port.
 */
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	define( 'DB_HOST', 'localhost' ); // <-- change 10005 to your Local DB port
} else {
	define( 'DB_HOST', 'localhost' );
}

/** Database charset/collation */
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Change these to different unique phrases!
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
 */
$table_prefix = 'wp_';

/* Add any custom values between this line and the "stop editing" line. */

/** For developers: WordPress debugging mode. */
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