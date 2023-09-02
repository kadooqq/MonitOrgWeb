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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'usr' );

/** Database password */
define( 'DB_PASSWORD', 'usr' );

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
define( 'AUTH_KEY',         '?A:MwAE.DWZ0Q$6=|bwb_Qd[RA|#h7U|ty!Q-(lms!=CuB>%OR(Q/4#bXGPA>/X{' );
define( 'SECURE_AUTH_KEY',  '/Pm?<[2hc;yJZmm^y6fBjqq{Kx+,MyLK}4Q+WgrC1B:uFxp.XW0?Y2P n}1ZA%,m' );
define( 'LOGGED_IN_KEY',    'Em77;t$5E>/|mKl|fFmryD%u,*Izd)|B_cRl^Tzf7Kh)=_nQCdc.ZA$|T]L-`RkV' );
define( 'NONCE_KEY',        'Jpa:SjTajv0#w8/wAqI40g`r>evhNc+$!3 S/LC%6f7J2C8L](,B0U0p=(.v*6`T' );
define( 'AUTH_SALT',        'H,f,!Sq[Y4:!8Hq7&AWt]%,4->0T|hhOO|]5k]+hsnyQ>S$dY].f<@(aET*S_uIs' );
define( 'SECURE_AUTH_SALT', ':]O#i,#l*nCP!d)wMJf2nv?4#&bxNwB2-+]vFxPx)8UhJ>q~8BElZhzx2ICEy@+y' );
define( 'LOGGED_IN_SALT',   'p4YCg64)D&kr-CML$rdkrniM>#@S|!GkP8vkwqh[.COWEfOnu{yk4#)6>`7&<O^?' );
define( 'NONCE_SALT',       '8J]y3Lhi^CkXB6s1B$q*XCmr2|[|=Ar+u]k)TBR:a*a=39]q6h[]HL;`J~r9Ve`u' );

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
