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
define( 'DB_NAME', 'u998555632_ph_dev' );

/** Database username */
define( 'DB_USER', 'u998555632_ph_dev' );

/** Database password */
define( 'DB_PASSWORD', '916473#$%dev' );

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
define( 'AUTH_KEY',         'nQ)r?UurQ88-K}<#2sje7!J{6dVz3Z6w{~p#{H;7iv_R?tK3VDbP`!ZGbCq$53ML' );
define( 'SECURE_AUTH_KEY',  'Rz5TAz{O(87f4,KAqwOELZQOZb!cp6f^f5b_l(qxQB{d@O3:OZGE&@cXWEeW[0R7' );
define( 'LOGGED_IN_KEY',    '5bTIS%; e_e88h|Ex^>%Nxhh@171NeAY*NEs[MT[[~yBnzLs).6@boW<<J#55bDH' );
define( 'NONCE_KEY',        'WsP]hJ-br6xgQ/Y]V`#P (2R%e*W5i.8X;l&i=PA2o-* bF1?N[d(`Nf<xtO1qvm' );
define( 'AUTH_SALT',        ']6#9#ssB>F#m?<H[r ^0$$BgJ3wv2zZeRXw=oWi~`X30X>ZnzfT^HVKZ5}6pkQjP' );
define( 'SECURE_AUTH_SALT', 'bw$ X;2R6.X-(O{XKXun{1ZW0el3L{($xrQfRgAnm%qHRCMrNFOH}1;H@/)Fw5#%' );
define( 'LOGGED_IN_SALT',   'm@R`uC;wY`2zy14*Yu K~EEoZjv<t<$pe$#)6{TS`IolXe:e*-d>mm!zp.`+pa%&' );
define( 'NONCE_SALT',       'v`sxG  /03{|vOCQ;r<;O[vY~OJ[VP=u>O2LEb7DQ,8G,<=tI/l`Ij,eT*F?sq<u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ph_';

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
