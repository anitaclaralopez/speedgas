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
define( 'DB_NAME', 'speedgas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*#5Egu=Jp>k9KhDQ%W?|~ffZ;%sueAL->GimgEN#/iiaEG^Rt1AnF27~2@2H|apE' );
define( 'SECURE_AUTH_KEY',  '~>ta>77RP.i_>j:E`NXh^[5NOX4WsvG@ >)DBtK4SXuRLKDw7y0J3E>01V/~jvC~' );
define( 'LOGGED_IN_KEY',    'sYBFSTOypUGa?Je(WbhIT}^_n3/QwXQi@<U2l#]rxZK`ILh4|+M#eUosVul^#3{#' );
define( 'NONCE_KEY',        'tLct&}yr25kw%,:.T4X3,U3&IO9Hcw$-djm6G?5~SLq1$+qRS-qC:FQiMb`I$s:5' );
define( 'AUTH_SALT',        '?$NcZ$pV?<|8*_t%_7fuA/g;pd){3cq]qz`|rKdkC=bl7),8/D?}CTwKr&>$Q sB' );
define( 'SECURE_AUTH_SALT', '^Y!xymOnGwFoVvw23`n,-cS2G; KXYye<Pm(jVvHjYUw`cXWhs;W-WNHV3k7t9Yi' );
define( 'LOGGED_IN_SALT',   'B`H4[s]uND:5sQFW9GDvrU;Ze=uN`dm 0rw:+aeo%(z23C=B]h%R]_]o~nz`qje_' );
define( 'NONCE_SALT',       '3Lvtd?;EPihec|7y:+i5:`0+p9,g*uhmt,~RlloZ{A}nDtFlW+~~uDPB6.XR8y81' );

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
