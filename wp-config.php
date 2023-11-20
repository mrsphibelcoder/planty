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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plantyp6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'p;^uMH11`P$My7O.Zm%C@fv6.qycDRgW8L{*oB+zCzOQ:18@|dgtk}*oR_mFTV5i' );
define( 'SECURE_AUTH_KEY',  'd3i&iYNh|GW^T18X~vzCQS/Mr[WgdMF9+ei4@rF7E4y6}1g*$&j|+RJ{IRcd0V8W' );
define( 'LOGGED_IN_KEY',    '/Ky^>`PG^+X+)=v?w-_`xgEnOsf)5pj*F6g,jY[aC)P-53PnQo:u]9KZFrPGI}%L' );
define( 'NONCE_KEY',        'YsR0=au7Un.,T,:WPwWcS}qcm|h@Xld)!v L@7^$c8pFjDsi`r7Zro8`j9Z9@o3&' );
define( 'AUTH_SALT',        'GTmRHST>=g%%F^vUe+^?+=x_`SKd*jEFQMr_,UV2&8#)Bpxy[axf~1J!-j@}[ 6E' );
define( 'SECURE_AUTH_SALT', '`,Pn=M#G0=Z7O h^6;;hAiLbODdU[v`%wc4Rn[VAY%MZM2kH[,,i):(5*]M!-z_1' );
define( 'LOGGED_IN_SALT',   '`y5;GMxZ|WyBr&}zMB8oKV.cGm]w:@5U?2l$rPOyO?YE(KMT#J46V3tlc65-4JO7' );
define( 'NONCE_SALT',       '7lV2)c*_k~aug&Ak$n6,|1bS-J>]U3)si()A]o5R<7re/}0h+UA,6@u5hyQS|N^(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
