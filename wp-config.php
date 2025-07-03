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
define( 'DB_NAME', 'proyect_audiophile' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'baltasar2003' );

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
define( 'AUTH_KEY',         'DB3)I8Tiw%%sPhDJicGI7gKUIjN)Uz:.ba&:x<nx$v%@T/u,cgF+u/ewESt{.>e!' );
define( 'SECURE_AUTH_KEY',  'BJ9<R x#!<&f0VG#O:Op}f)An,Vi4ZLpPf&a|[hG41+=;Z=k,HE,[/{OhxRRLAQz' );
define( 'LOGGED_IN_KEY',    'Q1oyElG*`+U.@Wdnwx$`Q[PX AKv! $Yv,T7nze=w1X/ 6Q!-C{[s`D+=zzfyDhF' );
define( 'NONCE_KEY',        'F,a_q]~3Mw2MlsK/%UM=QM-V<;K19D^/KweHiTWj]oeMw,fL`]s)8~<=G.xFARmb' );
define( 'AUTH_SALT',        '%9U=Er)I)Rj}AoYf$[_oismq7pW)i.Aay{w<b&3;c4j/&H81zIBy /g#x?c<uAS8' );
define( 'SECURE_AUTH_SALT', '.mUD&H]9qM[bFREpX<8q_)SKr6w0 N|L1peEyU8~p]fA]odvc4S0U9.bW-u,Q0V3' );
define( 'LOGGED_IN_SALT',   'hLlRO-8j3qRa!|6j69&`Bp+:T{Ha]*WIC~R`k+B^r].$3x:kTSXieIdD`DCvu8`4' );
define( 'NONCE_SALT',       'e0.Q(}Nv![]u3ap_7T)vB0So^gqQC2ce,!+iU_R%/+Dwm0&T~6{YYgFTl}vA(brt' );

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
// define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
@ini_set( 'display_errors', 0 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
