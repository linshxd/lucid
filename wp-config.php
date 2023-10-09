<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'lucid_db' );

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
define( 'AUTH_KEY',         'Hya_4!WD|WeE t;[mL_?j+l}dY/5b9;SQcOH ;X):b%IeNn^A-%]<wt/hj X~|^U' );
define( 'SECURE_AUTH_KEY',  'CnZKUzDaMxZb=]j?zaiPsz-!Z;n>0W(snSnl6(bM|6J7~Yrp>|B&AjWrU+KuS_:Q' );
define( 'LOGGED_IN_KEY',    'rN:<oP^zM1/Ia++gzL&XbV1BP8Vgtz=Yc?yR$7;6iT=8Xrq$Vn09V7vvj7_RnF;{' );
define( 'NONCE_KEY',        'H$Bc0;U=qBYEi]]OAwk+/a@lQj#dIHl&OAZ{WpZ2;KB7:%LB(m{|XhDqQ7W5J[gF' );
define( 'AUTH_SALT',        'W~u}=1H5~mKp[b4A&Ox&I9G2pX+fraF_!]X?q/-hC&w>rkLY|IbU(]oh4hKtmVp,' );
define( 'SECURE_AUTH_SALT', 'acbtmV]j)^r9/R%y.UE}h!s/sZsqk[ JUnG*|n,df:#rn9kMfDe6QJ?sEu9@8G5:' );
define( 'LOGGED_IN_SALT',   '&53|%CkT4n5A;Sp_<sXO]e~yZ@-n[yjSd|LqBj_Fgpy5^tm@]YRcf/bNG.Z-OrAb' );
define( 'NONCE_SALT',       'o?)f^p}c^,2%ZQ?{l9I*;:yM3P_3d;s?pG2pTy,;@V856Y/&hG>|.O$KH6d*?[F>' );

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
