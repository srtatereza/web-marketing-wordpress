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
define( 'DB_NAME', 'marketing' );

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
define( 'AUTH_KEY',         '9T3*0pG*`8;= =ck(|P3P]>5+VJ0qrl.-F.=/EVnWWkkG%CcYSHO}n,%s=u?.VyP' );
define( 'SECURE_AUTH_KEY',  '#p:{/k:?p&P|%+_>VFs{^$YO2+oXCQ)}F]7:qj[@kN1f<YQoneK*2ZuNQCqw`lmA' );
define( 'LOGGED_IN_KEY',    'w~L( JCP;Xb]1K=[{+U1^P3{H(.xol1%KsUyQ6,v^[Jb$rYG2q%N`:UJL}@c-/Xv' );
define( 'NONCE_KEY',        ' bw$pPz2b@E2)rRxHQ2Vr//<dU!Qm(~G;n,sdV(ejQyUDJ$q;ZAJ:,.p&j AOre=' );
define( 'AUTH_SALT',        '@L^<r_A2%?SIlaJ?S-sKc.4[#!ue#!zL=<-v61AA1n=1Tx2Ee;P)pg02d+tgWtZX' );
define( 'SECURE_AUTH_SALT', '=-L4#G&QG71Or0~)b}c>BF@D7=wU~f4e)jx&/s?%RzR>Gv^hd|fsk4C,NVmPh(j)' );
define( 'LOGGED_IN_SALT',   '7a]aa>#^7I+Oygw4,<d|KH6b ;^Jw>?#O],~nQV$+29cCs9}YDZAWT2775w3=(OJ' );
define( 'NONCE_SALT',       ')9#$3%y|v[Vfpi[uG~Dv>j_V.@P/dmpIpb$O?sxu%ja`BpUD|?s,K,z7sG|[8(XQ' );

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
