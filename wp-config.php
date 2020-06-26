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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '9sUu5gZeQWrEr28v4l*NT3$e`cSWpOW[tt+ie`I87S].~k.!%fGEhm(yn0(_@5b[' );
define( 'SECURE_AUTH_KEY',  'PgGD2j^T6mc?CK>Jy220J8gc=q f% yi)Ne+ons ?2q(;f]>BY>e3&J rqhSGN9n' );
define( 'LOGGED_IN_KEY',    '{!m+[a_F7&<tZZ7swz3o3+WMS||n[Tp.Qf5(D._Mw|;yn4^l+w l#V`qnQPNU?2W' );
define( 'NONCE_KEY',        '/vttaHs&-i]0<eW3s]$Y_o< 1DYQ{UDy+.5C?wor!GH/3&lR?F2RT:[z5?j`[M(!' );
define( 'AUTH_SALT',        '/3<kNWmQ*bPWn,u)nT;,c xL^&je?kCkPv4JU+Q!dR6z*:Q`b-[^1,--5wGth>2,' );
define( 'SECURE_AUTH_SALT', 'qtxYX/9-F}~)(>8<b{O8Oh&$hY]&&Ani{ilcH`U6^SE@c^yEj]dtF+<0ZbtE|;N_' );
define( 'LOGGED_IN_SALT',   '[WdxThq$mw;!/+Q~dv1LlU[}]u6.CS8[d|5inxKf%zZDj6kMejA8M5n Xv0,|osh' );
define( 'NONCE_SALT',       ';IH7)-k6woNZ>1)csM=[[>?pxdB]t#T=;<,xm859m( BKXO U{6lv*NWQ AW2V-J' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
