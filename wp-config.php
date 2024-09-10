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
define( 'DB_NAME', 'webEjemplo' );

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
define( 'AUTH_KEY',         'dMpH#chf$]R%rBb@fFEE!mCHCTIDE+pOCU{N;|sujscN-hgr9E;Ny;u+rwpJe|;v' );
define( 'SECURE_AUTH_KEY',  'b#`25e)4F04[EUM;Ej<0i-C2<}y{m;CLn8qG6* m1$)0Yk+;>WtotwP_F _|TC)d' );
define( 'LOGGED_IN_KEY',    'v.(l{8dSv&%=RpM_TVK]lRq8Xg*|a+KqW#c!Q^2Jpcmq$eZ`+2a-u{vEa5p}o{GV' );
define( 'NONCE_KEY',        ',~}_bOL$SfuzUcxV;.3d[{vvfHo&~b$xuzu+>gApIo>Ys$g|XsdrU`.X<|O?2$xb' );
define( 'AUTH_SALT',        ':|j7MLClujzs)-QPF~i}a+& ]@p|8q[H?bvKr!> :f6mVp}>E{w<CC}_#6L}rjwB' );
define( 'SECURE_AUTH_SALT', 'G|.Nqmtd=ONcj,{pk7hjzt{98F[[Y&Dsyqz7|~G2f#yAVe|sl`6/(},@5_Q/zK6x' );
define( 'LOGGED_IN_SALT',   '^6R:S#M8E]UHvC;Xs*<?G|6qt>fa-9hrrt-7;X3=E7Jt28$rz6|y.f0Kl?yb?.ck' );
define( 'NONCE_SALT',       '+bDHjSDI-(27k^!Db[Q/Zq0%tTh4C|6?Vyryq*hAknd^CThk(n.D#Rhy`B80NJ9)' );

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
