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
define( 'DB_NAME', 'db_humberto' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
define( 'FS_METHOD', 'direct' );
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
define( 'AUTH_KEY',         '$l5._-u42%G[Dy!:YX90p0umB/Uqf&mKu+0RO 6iBdoYs;<s33D*<kJ5p2D!&LQF' );
define( 'SECURE_AUTH_KEY',  '~TemdfvAf&Q`vb5,y35p1k~cnVqG,f+1/I[M1E%m}pm{7afq,ue,V_l_eQx-Lcj4' );
define( 'LOGGED_IN_KEY',    '?Cmxj akUfBES3,FTd,qd};EQ//,pEg LH|u3kS2orh@=pDsSvqeCidV2G0suu-1' );
define( 'NONCE_KEY',        '}p}7U4]_vzgef~MRMZt(,WxF.Fr?u1._~:v%77/(p}d,>hW|U(SKTEe#|WY5!@p;' );
define( 'AUTH_SALT',        'GvTAjJta{0/n5@$D:+7?^u::hcd1%i},$T1RkC!ioXN`|P7ISR7aKbSlMvIlPBvn' );
define( 'SECURE_AUTH_SALT', 'QHk{kH!u+lKFm}Kl#slMlWp847MWKR0f>$;9gs8:ut8g;!,S%LZ{Z#5xcTvQQ]LM' );
define( 'LOGGED_IN_SALT',   ']bds)b9-|.Hi;.H%7WtZJg&T]i;y;,6d76EgaM&<74`AXj,M%JPHc:N_4P~H~NE-' );
define( 'NONCE_SALT',       'gK,k2#7l0KoD0L!FLDwrN) gEL !(W[&px~U;5[:AXWz?00e]5XnbjIOxrE`m tW' );

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
