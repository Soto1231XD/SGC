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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_sgc' );

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
define( 'AUTH_KEY',         'WvQOH$y[ijSRQSIavX.yK>/PNHoaUaB(_9Q7@x1{w5_-Cc.tbX:_hOtKX]7m,w)T' );
define( 'SECURE_AUTH_KEY',  'B&i7TA^S.t};;8/%Z[|+-%/CdxZea}|aeU:phiAxP!I!7C;R*N@~!*dfSMX@`)Xa' );
define( 'LOGGED_IN_KEY',    'T}f_d)*IDC7ExAJV8n$L5:p!cegodVNs8k$sdY%V/*Cc6W9c</mx|+EmP#vpO%zr' );
define( 'NONCE_KEY',        '6=5f9>!1($>d~v:T-q,dL!7Jq `n$[c8dN muJ aMD^/9u 1<(DruRs-<-.VBOil' );
define( 'AUTH_SALT',        'C1cFdfB+(9tn`A>}D*E0<&o,?~_wz4hEwt%?nLq=.b^~7}[aB+++Rg|p^/ef#;lc' );
define( 'SECURE_AUTH_SALT', 'S{)Q7U)A >iRQ7Q;Ke#-LRQ|z]d^e5DE])KwAvgf{!So8URTqS3;Zo=rb:Rf8/dS' );
define( 'LOGGED_IN_SALT',   '12fAnE?@uATS+x<G_MV{u@T)EZcL?9F6rVMb64TwDK4.a~3;WF{+t[2=Qoif.Vl5' );
define( 'NONCE_SALT',       's|$1e+:bi!EnkfQjqJLYI 3^_c%nkPKB!25Ed0my(G!?4{R}7aXN;j*N0`x,(a}c' );

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
