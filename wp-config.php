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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O_7!h5_tgzH (WM:XFUcD(:L9iAD06H<n+ov$2b _?:1tu: xPD.XH]`J9/FZ1Ms' );
define( 'SECURE_AUTH_KEY',  '[-+1Ix)`JW&3IFKV%Z@]W5C8/98c!{E-G(xr~^ d^b|>kA%oPv_(xv7`eaRF-j.J' );
define( 'LOGGED_IN_KEY',    '[jE6@*sf>6?R.E3n`k~>K?iybOv+cFM jMl4T60niEh8VCj~I#80].b&}`YyV(C2' );
define( 'NONCE_KEY',        '+LZ^V))omRPt]X[g`;4z{FsR++vR]GqZ!gMTQJXcj23bSbABBL|E|:b@Sl5r2D>[' );
define( 'AUTH_SALT',        'prHm|m}vmB8X`j]0J8p]a|u&l1THK9O:a4vEk&OK`~m,d<]w4i{:L)2?Ai10G5Lx' );
define( 'SECURE_AUTH_SALT', 'iJ/IJ]%Lq2.<JJ;~=f_][n!EIv!0h2I/GnuIkQ-O8S|+,#0M7P6bF({-{$`ay{H#' );
define( 'LOGGED_IN_SALT',   'B/>#T$2aN) +HxUH/aHuvlLSq!A@GiC?/j,FMnifJJf%#5o05cuTQzC4eqeltY%.' );
define( 'NONCE_SALT',       'tZ{|@AJut[QeV2$?.j%?dhWhE|Imd.xnPDeo[gSN~,e-Wd1E<AVz6W8<B6FZY;_1' );

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
