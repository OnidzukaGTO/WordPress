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
define( 'AUTH_KEY',         'ysvm1L/jeEWVLV:PscKAX,kwv?Q8Nib9E^#MlX}/)UR_y(qd:L9?.fF]*cu~AK9/' );
define( 'SECURE_AUTH_KEY',  'SkOr]f[cQd[809]@KfzMd0?3o4u5AW}p<C,T|g~0-|4A4]0~8,=~L6B:: ?MF9j8' );
define( 'LOGGED_IN_KEY',    'IRTvBh?Xbh;W2Z1)NxWCB#&)^|134!og*nLveZ/XMN6o@Xdk&WjaMG`ru@3@hCQv' );
define( 'NONCE_KEY',        't>Jl)a+Mx]X_mQLxVQk=R1jrsy6%w~x>sCu6YqYB06W6dTmc:v0-.E&QPn&6:JIB' );
define( 'AUTH_SALT',        'Ak6/A 9lR,JFdk> jF%CeVeMdV`tk;;)Qe=-yc^Tl23$gl#-,@o2%:^j/?q*g$&y' );
define( 'SECURE_AUTH_SALT', '?qA&h@l.RZBg[8{Y=(rf9{t i4OC@b)O?6#WdTv{uH%Gp:Zqizmv*@N6$6v+6/aG' );
define( 'LOGGED_IN_SALT',   '7yzgm{)En/bJ1@ThS>X+,7@Dqa5J-}`)<CZ:qC2qP=|R<*]+eEW$m/k;HzX5YGZW' );
define( 'NONCE_SALT',       'zt=wP}.m+v?|vcX`}v U2ZzT,keFLoD&d.bEPn/tIVJNrnM4))vTcRXf5=0bv@=|' );


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
