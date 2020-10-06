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
define( 'AUTH_KEY',         '5V>`SGB_]b#hPaGG)Z/z-4+69/!`g]h=S@M77iU!B%*puiJz-T}Y>8#=ft{MEgFl' );
define( 'SECURE_AUTH_KEY',  '*c&jb/@lu:<C6TCqA-U@TLaZY)fRvdfz*A#EFxr%|~P60tN9QW%&.rq48wwh; +3' );
define( 'LOGGED_IN_KEY',    'SHxx?6`Wv$^.qZv{pe>x&alWcmC7q&_RQ>H8UwB_1H4Gi(Z8Bn^p~K)n%R}moA!Y' );
define( 'NONCE_KEY',        'b:@/P|wT2_{yb2p62,fyW6Forx?</Vk<#LL;Zr1}O{9d)H!G>w2H#>MH6x 7uUfx' );
define( 'AUTH_SALT',        ')G~HJ#aHR`cGLx0g9<Z4aB.`e9OcCS%bgcNLIoi;Jb1,J %:pmh$.HreL&.1_7 M' );
define( 'SECURE_AUTH_SALT', '4)E!mov3lFcBvc#?MsD1ows@jGDA0sgRY>qE!!&Atp^M^~xh&9Gz#X[pBsh_Ki-p' );
define( 'LOGGED_IN_SALT',   'T3%0uzON/.ld<}H|j-o6kY:r$rpSj>>H|>cOl/jH#JtO&@|Q8MeCu}e+W:d1;f_f' );
define( 'NONCE_SALT',       'q2FME}soBo#i2b06~*lXLu>?ir+078.`eqL=4N{&wyoO4N<2i:hQ,#yI{46ZvwlC' );

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
