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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

//$P$BvK6Q5hzWMJB2tbzXNoWIjjUjiDvQs/

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'caips_db' );

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
define( 'AUTH_KEY',         'y9@l2 (u]bf[EGea}f6-$W,>_wzS;?j}!.iHWH_&?qK8U-xx~@BRN5|#F?MRSP5s' );
define( 'SECURE_AUTH_KEY',  'FfNv}yR,.?:7n^:dQ)Dq-<d-@s[0KNWC/ZczmH`l1I,Tv>}gMPhLEaFNq#iR=^m[' );
define( 'LOGGED_IN_KEY',    'o&g+H?.1UHf+*+0Tjpt7cQP?[rvGt#;Wl<j,9YV]G<{B ~Z1d3T5`~(Z@O%QJ>i|' );
define( 'NONCE_KEY',        '@JyE`/ =zmSUPJ}#WSgu9HhiR!FV7K158Iys08K!8_tMGftEO/9L 1|w0cf^McNi' );
define( 'AUTH_SALT',        '|5!QV6+rU}a DC&Q)xTKcJ{o<82Y>&NEToNPr+&Qt!u?+F|wBI4.j=v= ,dEor*T' );
define( 'SECURE_AUTH_SALT', 'fZM$6dm1(b&WN[.ipUD)*h#r6Jq_r _T5rZr@d}x22ht>&GM8sk9GHxyx+yQw;){' );
define( 'LOGGED_IN_SALT',   '%{!OhkQbP-`<3~H&[s,G6u6*(TDw9cQxaXo>C9|y-kO?,yFo;)pdbmNZ}dm4+Y}`' );
define( 'NONCE_SALT',       'Q!b.+i[8m3#qY51=0?Ed23*Aeol36]#>qPO2PM30H:Qfx>}lT~IKhiTh@^C16{,R' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
