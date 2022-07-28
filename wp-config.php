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
define( 'DB_NAME', 'odc' );

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
define( 'AUTH_KEY',         'lpx2/[0,5W$}~^ HtkiLq%{C:H [jkqV`ciJSSs_LiIa9O>#QZlV0w*WM|ftxI&B' );
define( 'SECURE_AUTH_KEY',  '}infCUo)!K=gsWP&vKST  sSM b{2IUhHKbJR_nP>X1}ew]xr&l($l1DYSGnLhu}' );
define( 'LOGGED_IN_KEY',    'SG?,3C$.eh=(,$}I%g7TC*9h>wA;u=E+q_[f^O.3?oyMPTjr2K*P_cv)j`+lfqjW' );
define( 'NONCE_KEY',        'Y`?2}0.3u.N^6b6NZl3y5OUI hJWO&MLW`aglQ6_17D3]&V~Bj|GCju@A;QL#8fC' );
define( 'AUTH_SALT',        'uO;m0$l$6$:iQ$CUxNqb/!C&^r=ZYo_.sbh!MI]{~qPBg_?Quvk~TNT(C<+4RBu|' );
define( 'SECURE_AUTH_SALT', 'W00KA;&`(46lc~:p<j}]tyI5HY!Uq;L9R13%9F?g(,[Hw?=%-=~=[hH8Dm%}hSf`' );
define( 'LOGGED_IN_SALT',   '-ff}M<;xV+>(XX}42<nF+:|7{q8xTW, Pfg$p:fcvf^*W_vr!#ekQK&sAm7I)Bce' );
define( 'NONCE_SALT',       '&A61*jXP_ecY<#alsYa<zt0rF4[!jw%8vOgKL_Jw_JxuT*z=n&@NU}9r,l-bvPWG' );

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
