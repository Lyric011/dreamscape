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
define( 'DB_NAME', 'login' );

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
define( 'AUTH_KEY',         'ZiQ^)R0OwQnB_4GML1e5~.CiXoM_h~i&{C&*YXTaVIPX2?14_ g0aqcHJ-Up3?Hb' );
define( 'SECURE_AUTH_KEY',  'W),$|QKnUlFBV04#.|W*N#}S|t<0,{S$k WZ^|**`lN#P.JGe00Px.taf3zJkMVn' );
define( 'LOGGED_IN_KEY',    'GnmKwPjUK%B[G:W+dehz<>h3HPOEvS^)Q)<[^K9s/ZVY.Vid_]/)@%X}8P},C^bf' );
define( 'NONCE_KEY',        'T]XhriYGzk9wnl+3F)Lv*Y*:,j8X^D9Y/U;h_HvDIYvU8?TsPAgx/{z:k2LDdOuL' );
define( 'AUTH_SALT',        'poc; >{`gr4sBUpH75A0M[~CXs wInhb_C@7xyaPNF@6qaVv8eB>Nz4&H;?$Qld,' );
define( 'SECURE_AUTH_SALT', 'GM:i>zk-UH[Dh4+1l0RTlIi_:08Lb}eh9Ag+fd~0bly6,z)0Ond~RZ]|dcu!?f<x' );
define( 'LOGGED_IN_SALT',   '#@=EJL&.<X;TE0wM^8P6p`?;iObSrNXN,j1^ HuowzKL7/d`n7#l)_Bw|J8m?{h@' );
define( 'NONCE_SALT',       'RrZMy;z;<lc^(,J>2c`7qSpHiGB?WngCsMLuu@jY^~IMKR)KPESUZ&h?H6*Y: i*' );

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
