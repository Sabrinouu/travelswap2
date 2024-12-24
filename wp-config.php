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
define( 'DB_NAME', 'travelswap2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'hL8tKOKxNsdKa7)|g$! #)4LMHR^YT{%pQ7L(dHD}SN4%,)nW!NBmh=I{O;{cnd=' );
define( 'SECURE_AUTH_KEY',  '~C}AI8~;3=OMj2t qDc$dBbk8IMm*ZLZiQfs<Pi]#YJ/N5A:l:Mh|<s72),}$=}4' );
define( 'LOGGED_IN_KEY',    'Kup=0:)Fk@jx0nND$&xpwhQz[X;?_e|capwKRSaQ=q~vTXpRJRkn`Y&)P$^jR/Gf' );
define( 'NONCE_KEY',        '#n].Mvc[k1g/*MZ`F,5mvmuEr%35}vRf7,-{mR+T%8g%SPbL4;)*r%,$:)>C72$v' );
define( 'AUTH_SALT',        'VPHw&)y[)-h,9YZOyz`5_6QD4i45,buQ Dah4M?&5ww`CuON%=&.&wWC>9av%f@I' );
define( 'SECURE_AUTH_SALT', '*a&vyqZ&6]]]Du,~tr2k5[t#CgD=]C!wTMI;!ix4sj74K[aJ4heF)6Q&%:XOqC?n' );
define( 'LOGGED_IN_SALT',   'aIFlrUO}VjE/52SZVQ8%`^p96|Xg1TcakNoGU,:QFPw)Av%laZ5fo&}HyGntqA{U' );
define( 'NONCE_SALT',       'RwKYP:u%*L*]yrL}|sb%Ijt{~x]?2c=G><m4>~g5*~}|qJX|=6W~x2?85%$w5.K^' );

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
$table_prefix = 'prefix_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
