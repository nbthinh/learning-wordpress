<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maccaiquan' );

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
define( 'AUTH_KEY',         'vI>p*:ovz1Hf)(hD%w,ycp%g41:*F_UnSzE+[,CHS%avzR4j)BYP?gi~t*t^WndB' );
define( 'SECURE_AUTH_KEY',  'cfzLt4FpMpVMj6#[B*+6Py31%]6L:Ac8?3wNad#zw$Rp[7I K&wJOmk:k:P~ZUwy' );
define( 'LOGGED_IN_KEY',    '(::CKc|Y(n<M<X0HXlI>VOCU7=;YG@^;DUcY5h(9hdu]M^h|l#9&vtNl3QeBXXgJ' );
define( 'NONCE_KEY',        'FIJ|},gEujseCEH*N:m$gr-_vuqr}I=!^:MS4c5!s%Yo[FlVI[I%p|7vunv;X:Wa' );
define( 'AUTH_SALT',        'u!SZqSp-8v?~TI^kX%- O*X.o$Qgj>+TM=gXPVN:BK.Ztu!hWm_K<$OXp:QPp]$U' );
define( 'SECURE_AUTH_SALT', '-H7G_JE~fZ#YZ2`M{9ab,xcP_2(qx>96/=kO4z:43K7x!DtcVf4z7MMKjWhE~5Y-' );
define( 'LOGGED_IN_SALT',   '!FL*12v9@$.5kRQj@lPfL#y0TKiT4~5Iy@4@Ifhhi(mfL$w};p`~_kP6yCr1dR,!' );
define( 'NONCE_SALT',       'N@b:QlLioOgYeau;OzcRJg^gBzF.Y`Ns&7[9:+Nff7H;Y2-I#JvTo2IC,]T{zMQ!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
