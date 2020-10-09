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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         '^bgK;Z:llI&3]51WDf[1ZML+VIcI`70Q^34Jyi!nS3R]a&YMr#-QE:d#9u~/)iEB' );
define( 'SECURE_AUTH_KEY',  'zs|y4PB+UJyLj>SfgW?c~=.dew9{8G_GPdXY?p/xJF6MR&;A3D~,Nv -d$+jKA`f' );
define( 'LOGGED_IN_KEY',    '_7N$,-7~)D?I,n;2;|tq)tsypg@/HnB&AA:Lt/`{x7{Q<(q03)uT0&q(rE0*hs 3' );
define( 'NONCE_KEY',        'P)HG:cl<4d6W5[VMvLG{J2)YBn]bm|]oa7AlmH,a;.[l{m9HPB/#`gF~vyZv#NBJ' );
define( 'AUTH_SALT',        'Q82zN$eS(BH@OfYYUhcmZW&(6}#XcX+.e!L!t6y6HdD6Kok647g #06Vp[-mzI|p' );
define( 'SECURE_AUTH_SALT', '&dIl(v]W+3CY{b[1,{R1Y6$:EbYp&K/X~Bog/T$wn02P#}0Z|0h4:VfI_+tZdI:F' );
define( 'LOGGED_IN_SALT',   'O}d9L!(2G<AIRWt->VFVhg*&AgDFny/I%qP$y_!iW*u-NF6xD_V-l-BJf,|cERWZ' );
define( 'NONCE_SALT',       ';xWuH^Rg<ZVN&2 m]]IG.n3xz6u`P{`=K#TltnG-kfS}03c(#)8e|Rabi@,%_oi#' );

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
