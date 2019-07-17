<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define( 'DB_NAME', 'sophomore-internship_db' );

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
define( 'AUTH_KEY',         '1Q&$0{x>G:.3J0-^So(hSo:c=G_2s]y~a J}BrM%c6v(+vUH>kKT(!A[lvyN!#en' );
define( 'SECURE_AUTH_KEY',  '4yd),*>8IO0^[V%^cDEAREm`8lf]*)~a.Xq`^JN+B<o:y50d#l@ nsZ6J@v?`RRP' );
define( 'LOGGED_IN_KEY',    'tY-#;b`~#BcrErM8b5mmsY,LE:(W x]}5):(VRRo!E=n+,K~MAQvZ:N.*OpNU1<0' );
define( 'NONCE_KEY',        'gKPX(^|hULoEtIo>XpQ&TQfZKOz3{J=*TtTsC4mzb,E1sfbG%M76sE26 IQ$n6F<' );
define( 'AUTH_SALT',        '!&[ISdA.S-`$]_=S(cmQY H`*|[|#EOgv-6Qgqo|N<FVS9/uFs.3_rf&Ou~o#/;C' );
define( 'SECURE_AUTH_SALT', 'f>HAP~|2~q_n#9j2lt9a8s?-JRfBHeoFif<T}4(a&eK,R#4QpIuM.woEj,#{w6Ep' );
define( 'LOGGED_IN_SALT',   '%$aFCA;}g7G`Z+~12B&G;|ZSa*[N;&#-_L(o]CuE47.CPHN2yS!L:;|~@6k&=(nq' );
define( 'NONCE_SALT',       'OkQ5h41pCB.Vrb<GQm:MkFj]-FhOeTrOW b+U,cDi1nvz_ic}{S%x6Lvm/]dPYV!' );

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
