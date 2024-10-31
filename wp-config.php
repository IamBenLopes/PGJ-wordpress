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
define( 'AUTH_KEY',         '@STzTAR)X[&E+fwA2]CG#rfI^)NT?{OgI<_M/q1v{4+jv9[)Svsv/{]x{ejd9/<q' );
define( 'SECURE_AUTH_KEY',  '6<`svRq6M#|z-`3z(o#Y2l6H^3L*BP<@+;]+1[y6^p[e{K4B7z/+vN6?Fe8vi7el' );
define( 'LOGGED_IN_KEY',    'GU1SX!b:`po}pGLinj)6z&V)81^z4A*_qF,p6#x#ff7Lb456@RFUM0Za-Om3e,fb' );
define( 'NONCE_KEY',        'o|t4rM3TcH?yP&g6h#7.D.3oFW_i2pJ8G.L6?-+i@kOQc_p=%z<TCMA*7|DMTfx7' );
define( 'AUTH_SALT',        '=!%~o!WwI#wZ:iLo.W6j~PA~!4C8Guhxi<7pK%{EC.~+m.P}njsBA@QV]KM=&cDg' );
define( 'SECURE_AUTH_SALT', 'S&>c3mQy8C)3t%eaBVW8N)co/2vwPi0o3%$+(iUa:SD;b?PV7i:P  38vX7&UV9(' );
define( 'LOGGED_IN_SALT',   '[*jT4XU$Df`O.N 0gWuQ+y,c:<[?6%2}`La~$ T{f%v+#f#|-P^kjI|=KX3FM]nS' );
define( 'NONCE_SALT',       'S(@[QYw1z_}65{U3FqkX7|m^NlCs^,>:<H@ITYw8N|n[;]CINFpNum:n,<1_).%Q' );

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
