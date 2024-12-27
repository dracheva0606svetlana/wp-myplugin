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
define( 'DB_NAME', 'u2954478_default' );

/** Database username */
define( 'DB_USER', 'u2954478_default' );

/** Database password */
define( 'DB_PASSWORD', 'q1zTf5gxT7uYD42O' );

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
define( 'AUTH_KEY',         'U5x7*:cq~`aD{a92TS{RdkR@4=la)hiq]5_I0dOg,r)k`<o#Zv857atsk #bV8{K' );
define( 'SECURE_AUTH_KEY',  'dk-_g556R@hX>Npakakx0}=$1s3[bvHm|!]1PkI?6pqf^9ie*``R)+4Xxp6=ru94' );
define( 'LOGGED_IN_KEY',    'V}6htY<?5V6(m&,!Y<4PfD3bOe;lRDsKR{xKsncTB/!n7b[}3B5*D_rquV_#Z4b3' );
define( 'NONCE_KEY',        ']Uu6|apT<@! )dE1-4N{DOM{@S?-FQT$JAJy6;x:*gQz[n12m(&Gy^J7Epmke4Wn' );
define( 'AUTH_SALT',        ';@Nh[G&rphE;@o?00ps}$hb[/1dv8DmQJYh!=F]wq#cE7%v?8x{Z8rYdl]LdX[S[' );
define( 'SECURE_AUTH_SALT', '^HRxP9->:cd[R-k}bmsS0$3qk|y8E)V~,p6rE:+Uh/w$qt|OdVPy=uI}bSw|%RxJ' );
define( 'LOGGED_IN_SALT',   'V7zXH*H=x!sd18liD;mh/f%Qg:3%@Xu)[NM2@6w[2,b!8@m,/FL*SQNQ%8P.znY]' );
define( 'NONCE_SALT',       '*~}`k]ujMIPrw(|irxHsnT7Z%x`i3h~Uduxv9RkzCIM]bo8vTQ/)z~3yMcQLy#&<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
