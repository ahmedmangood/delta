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
define( 'DB_NAME', 'delta' );

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
define( 'AUTH_KEY',         '.7R}`U6l+x=gGmsR5fJ{1o>FGOI4<OdA2=ybb+ !vR|etGy7[,KT>tL~kC{EN>%(' );
define( 'SECURE_AUTH_KEY',  't<n5a{3F`ks_;?|{g+WG!QzE~$*4CLT(Uw`Rr}^!7  ;^;<j=)k~udCL?`Pp>jF2' );
define( 'LOGGED_IN_KEY',    ']GaVTj<[DO0?H{g-NU>Yr[ma98:$#`:05r@N,|mEJ*zk;NNqM54d|Y^NZ$f6;Eu@' );
define( 'NONCE_KEY',        '~J[T*#&9f9sZCp^][~D)l$Z{h~{}D;G0B9:xb;V0[07U(o!~,GV)Ch(#e3{5o7K2' );
define( 'AUTH_SALT',        'B-[-OXrSN.?%*5]g)0jl.Lk@T~.$=.zso93NJZJ!k.FKi._~ji>L0:/bWc^=FI%c' );
define( 'SECURE_AUTH_SALT', '0JLFFmqY4O-j0h3b&Bo:{@ I^r,%J@Q$io4?!1Tdh]B@h%drLIx?W.mWhd_6=n-g' );
define( 'LOGGED_IN_SALT',   'tK)P&x-?&4GsaLrQJ vSXYphNV#2g0{2TpP7e]T<`$}/(?C|AS7R#LiK)[t(.#NJ' );
define( 'NONCE_SALT',       '<RL<FBdaG3n(L}Q!)]9&RO8u_eu@l6sf&aMhuB6:!Z).E<l&9ufcA)*Po]0$a+91' );

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
