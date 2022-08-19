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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thapasan_vistadalagoa' );

/** MySQL database username */
define( 'DB_USER', 'thapasan_sangam11' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S@ng@m865421' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|T:}l1Mw0SE5wxD+ncsy$zx7Q-uClGmLy;jODK}>rsYdj7N,aU]q,YC>gt!%#h[2' );
define( 'SECURE_AUTH_KEY',  'WXu#<U),2aQ y+NoJ;|#$o$l6nP=iakIIewU(i,F[bPyf^x/VCa$=9p$iDO-2`j@' );
define( 'LOGGED_IN_KEY',    'z)6mPe mgPABn STM?q2*Lxq3RTwU|K/HO|iaM9dEI%C[S;PPrbW2/Iq2lP,q+W2' );
define( 'NONCE_KEY',        '{~|{/`},[wf8s;C</mw;_q)%YVv*|?&^mQ$VN*b7y4yGzY05MPNO24=QXs]Qq+c$' );
define( 'AUTH_SALT',        'z0Kf2=6ZGP>gKS)jOD)e-JIgAWa~>G1l-o=t,Nq7fO;F~(B~nCcIVhJ}itc@0s+N' );
define( 'SECURE_AUTH_SALT', 'J<?ecG&C*}?:~eYSirwt}l;OH},Z[z6Ewwx#g+Aa8uTYl3;f[ I2**;$D~<gmA]q' );
define( 'LOGGED_IN_SALT',   'A->][x E_S9cbWq$M(RhdU-0e<3$N q8t-~^+|tNvyo-Dy,kmTM9iK`SrQ8g2(?r' );
define( 'NONCE_SALT',       'S$ToSs1CR?_t;!O$qeFLikQeYJF%O%a3U M>^=@_rsuKbMT>^4xtP^TfIY x)Ma1' );

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
