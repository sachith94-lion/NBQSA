<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_nbqsa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i2FC05#0XXAJDqX0,^Gp}2RUlMjpxp8q5+.ug}Wrgp`U WODn@beH5A49S)^f:~}' );
define( 'SECURE_AUTH_KEY',  '7jnWvsYcwm6y1`Gv4#I_`^i%cmi7J=U]uU04m+ s+KOXcg)yKlK9vyiY>aXYF{lB' );
define( 'LOGGED_IN_KEY',    '1-@l;^wdI?S0:g%n-:|tAad-[]5oFystthqK@D<8;9TYTrpkF{Dlr,A,icSfz :D' );
define( 'NONCE_KEY',        '3m/0k/f4H.6LPvcit#hwB>o3$tUJYg@Q~3oQfX2W/x~h<w#H:EW=mRK3l%SW(^F1' );
define( 'AUTH_SALT',        '1`JCsC0.zKs=+eaL3pD<T3=?4LVVKvb20A2(Ucf]}fhlG#sl #I>f^Y?$]qo_pgU' );
define( 'SECURE_AUTH_SALT', 'PC@Q*=OZa&jAGcbPO5 }VVH0Me.w2^oTqwhg_zJ,ipn9:C;nD;8|1$1wf}4vI*WH' );
define( 'LOGGED_IN_SALT',   '?k_l?,zqPn(* 0 D(e/9Szp-bxgIg?^s d{I%:2[MQ^Zc14RB@(,qXn<k<On}N]_' );
define( 'NONCE_SALT',       'S/ Zq<V_u((RC^,j?^utD6oHF*i3/N}HKH9i5A^x?weui>n=}7d&k?;&NGn8KY4!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
