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
define( 'DB_NAME', 'fresh dev' );

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
define( 'AUTH_KEY',         ' 4Ge#pS9e49,Ru.)fWhF:4FFif4gN56]?H7v!%1P;+gz;BAVw1bG-L;Oh!DK?uGc' );
define( 'SECURE_AUTH_KEY',  'cN~jmGL7:*wR g%Q;E#R&1D#1f12:HUn)G9}cI`y,f[mV.ZSm yyy<(^jx0:)W+i' );
define( 'LOGGED_IN_KEY',    '5CFQZhceNW>0[2#n-&~1#O^Qq9]U7;>E~CSMRIYyK4L3[6dZllZ2GT.L]8Nx2kGB' );
define( 'NONCE_KEY',        'e${)(@?7_?((-Wd %sv2Ey3]B+GS|SbN)wn4Svqx/X:A?u?o-Q0(^~#w>h[s8.;l' );
define( 'AUTH_SALT',        'kYhLu*Xl}p;Bdw&W49xt=%X8o}Fe8qG42F*2<-OLO5eZ/&pX|qQ]UIlHQ?C9U`{%' );
define( 'SECURE_AUTH_SALT', ':k(~=Mt19>~b;KoqN1s:NzeAe0*a>N@2}Z P`29+[^R:ck]+d&<*HA1jXQYI>SY!' );
define( 'LOGGED_IN_SALT',   '$:r.3s!xyL[%<d)OF9rg>FsMB98n n&NRkIC*9]?R%@JzF{M:YVjM{co6WiEqFM!' );
define( 'NONCE_SALT',       '&Z`34oOZ*cvI-%B288(Ojw8P6!LJ,=a+t9oQcZXF(?JnlS!b:Jl{;sA8C<V(m zP' );

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
