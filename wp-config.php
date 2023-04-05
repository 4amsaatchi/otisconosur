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
define( 'DB_NAME', 'otisconosur' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'desarrolloSaatchi2019!' );

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
define( 'AUTH_KEY',         '7qLSn_<@Wo]K+9,=4BnswKM4Xatkly#LFOeD3}gmL9Dv<UM^ o@6oE!6pV?A*R4;' );
define( 'SECURE_AUTH_KEY',  'O[7 e#*>;y|hHw9?/S$2dEy8~qD&S%qV(w-5TmulAlFBf1J8OHr%;{Jt<n4BYceN' );
define( 'LOGGED_IN_KEY',    '.o4oEM3Ze^)2FG,%&&t6ul~+Wpz-v^61p52Y,g<CI9hoalrSffP]k4<wMX+,FDj ' );
define( 'NONCE_KEY',        'aQpMa#]I$McRl|IkU+sbSZ-h/(6P%&9!F51nuTm+zRsoxr*^g~C2XA/&;:h;.!gd' );
define( 'AUTH_SALT',        '[!kO,D*RaAHxC5}c/XMGdDqtwWuTmaF0a{26(aL?$GZ&``h$|?Ikg1)}ymsgMZvi' );
define( 'SECURE_AUTH_SALT', 'D$! w-g_*r8A BMJIeWa$Tx+I~$Q&W.4>k1wzOg$ 6&wQ]#y[rRLQjz&P.4uRkRT' );
define( 'LOGGED_IN_SALT',   'C/E6U)q@h(7~s3aOj<vs1_[OAF)f(j/H]^:m)JgxW0%Z`W}&LwA<92Q<0$z?1!>u' );
define( 'NONCE_SALT',       '8f@l5a/%9K44w>1D|8N5+[:IuDi@xs<RIR/pe1{^piGW*EnW!NGh:B@$-!Xk4?Qj' );

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

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', '138.197.102.237' );
define( 'PATH_CURRENT_SITE', '/otisconosur/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
