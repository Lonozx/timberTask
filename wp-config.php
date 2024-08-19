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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'C?7=yL#&F50;p(%8doYAZsG#TY,y5T5ePtolaTuSG+luc--$q%4WR@)3@XJaM&kz' );
define( 'SECURE_AUTH_KEY',  'i_6d(>~BLPEw0tTHY^v.U&FD&AV8G$`*BMYfZ~mx&&mHBhhMKeTIdWS$]7Tp=@g.' );
define( 'LOGGED_IN_KEY',    'Rj&^:K^)s@Dm1i`<kX5vRXYd:WM%W$v& [+C{F}zgd_=~,|-l/0;tV5ZC{Ro5ZX6' );
define( 'NONCE_KEY',        'WY*$Y&=SCn(FP2/7(>wnv>pcsUqtbv9ZZm!f..G&9j=COS/I#L`.|}.CzCRecn<T' );
define( 'AUTH_SALT',        'xIT+N5Hlf8zJ-Y+L?4|<*#BpQzH@y+Y.c?]4<?eqKRQ.`J]q}ih=WA3A7h U2S#q' );
define( 'SECURE_AUTH_SALT', 'z=xR7-biRthmzDN5sE8Ev:P@up,K4v$bh!Gu.Jvz:C%cYJ^ODn3;LE:aOxrY)gy>' );
define( 'LOGGED_IN_SALT',   'BIf/q.QoL5@u,P9U65^F#gw(~/yfh6dxa-kkOQ.]ku.FF4m9Vyi9ZBr|i2KWMeoi' );
define( 'NONCE_SALT',       '9(RzA9oIyqtNTyN17FC5io}ayFu?dV@f-/%2Z933-6vV@/ L<N.qVkF;j]q]-kXH' );

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
