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
define( 'DB_NAME', 'vaquitas' );

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
define( 'AUTH_KEY',         '1J]VR)VCEY!G6ZR94jU4qKDX>^r!k_#x@I^dRQ7V=3&^p^Yc,7 _Xm@6SoQ~@{ju' );
define( 'SECURE_AUTH_KEY',  'b/}7e1+h[/iKKR,rdG?`Kd^cCwvRHmv[#,aYtcz=V?_0}jeKEt  x2w)I<MAM~=J' );
define( 'LOGGED_IN_KEY',    'f>T)mUz3Tq{K@338w(P?@FeA;2yYC)k@x63gAr~7KuB-jL-z.ZZ9*@kv2uhB}(^(' );
define( 'NONCE_KEY',        '~(,ZdyCoe4Wl^#30(N)_gCYdoA<3|D$!9|%D/RZ`}7K/!Y_RqjiRlFx?/i1,/^N@' );
define( 'AUTH_SALT',        '9>7RG)QvXklC8jCISO3S!{Uo_r_|Rt^ATgz5!Ird_ I2ptxVL-CSV}aFWTNR8@y)' );
define( 'SECURE_AUTH_SALT', '`+g+E~ThfD]32AgC}qu6,Js`-s@(e0+guJ^gLC6v)B^KM!=HFdo2pkzGn[P7-[<Z' );
define( 'LOGGED_IN_SALT',   '+VP(Fq}[2zx7i8T5|)Y`a]U5#HHXvt0LA(|G0])%O#Rz>DsmtCX;31Uab^!X:/^S' );
define( 'NONCE_SALT',       '/Mrf!ogRj}2^(RR/$P^[Tyg/ImQH<5JNmX,?8yxmtX~q*wX&Q(}ChB&|Y0xVWPMT' );

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
