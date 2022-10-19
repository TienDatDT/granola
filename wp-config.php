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
define( 'DB_NAME', 'granola' );

/** Database username */
define( 'DB_USER', 'tiendat' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '#;t7..=-go(}B^_(ETSqmC%*$Howuten0=hJh9Wt-iAGZ<;I4:D$yjzc|60,3R3}' );
define( 'SECURE_AUTH_KEY',  'l&fXlTGIE+zTfpk{L;(=y^mP%X/o;C~lCVhW:6^DkXbA82UZs:0HgTx87>-p)2B*' );
define( 'LOGGED_IN_KEY',    '.|W?@C^!a?4^p6K*C#vL[9PxJKck/*fitypa)C{wqrk/e:?vfVQ=np~L,fD7#]xU' );
define( 'NONCE_KEY',        'z#+Abc(&J <cRWZlKt%EFe-9/.NL%q{Y7bAb+$ErOGBae>7Gfp:z,TIEupxVQ;A$' );
define( 'AUTH_SALT',        '`$$@O(gWv*=97fBV?3>W?&(=Mbr2qtbFPs5t%zs6iH;ddfd>-|k6;ttovZac_/VH' );
define( 'SECURE_AUTH_SALT', '9=v=02f`oo(KEoNM,ShQ{H5bWDm)h>zLxj 0K?.m=|&.?Y8{v+6E)QoTvH#-TAi3' );
define( 'LOGGED_IN_SALT',   'hp0fR),(=D4ZEPrCWY;:x|~2u#:WH(*pJdiE^P6rornOh./O8lcX.;#0_^@0p[s,' );
define( 'NONCE_SALT',       '&8+hT<gv9L*br?F8xR&B2wQ*Xs2A&H%<g^^FGHt6vnuoST#JRY(^~J:j3h/ |o%F' );

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
