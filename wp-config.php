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
define( 'AUTH_KEY',         '79p>$Zlt2]MLH:DjV6Xj_gSzR9Uk|sbc`ll}m(6CEvmt8C#:y3R[l7.M[ozF*`E=' );
define( 'SECURE_AUTH_KEY',  '2(kyr:t#i7oaYOwm4g<=DBcFSbQ5NcS yO1h[cG< D%/`K+a];@AHoj^d(?-V`F:' );
define( 'LOGGED_IN_KEY',    'U|oIdNdz9T Oz!xx6}XuOVZC02]#M,Ur#Q+i$en?DBZ#^9dO6]7s!@6b$MetB4wM' );
define( 'NONCE_KEY',        'h`~{ i8`oE.ytyj_Bo]NAwFwW6EyM2^qyIvt!30F,QS?f C[G:2;.(iNJ-6^5P@b' );
define( 'AUTH_SALT',        '$x$Q;PK13)8,p^q*px4!k?Ky=YwyCb?)s.+GArJ#$@e^|eXqL9R|ES86-+$J|%p5' );
define( 'SECURE_AUTH_SALT', 'd$PFQACtgb.*%m*$JvwPh{5;(:Xx229^q/][,ib|X0vGTM13U&fW_N#=`M/E(.Up' );
define( 'LOGGED_IN_SALT',   'q/+R*1]I<~/wksQAY!shcEq;GQ5I&lCjn!G[3I]N[N<N{=!0 H=[S[fKT`Ad8]9d' );
define( 'NONCE_SALT',       'cz&?3AGaZFuc/>V*7O(PxP#6_25W17.blbaVdVGJ{cDK=Qu18)0?$>QuYb8$95{#' );

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
