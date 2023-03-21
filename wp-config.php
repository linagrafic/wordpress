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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wprueba' );

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
define( 'AUTH_KEY',         'v*<hUoi5RQPAK0Clu4zK7};8fOBh5,q<[7qci]|zxLY{%>:Xkw&E9Q_OC`f7J`aU' );
define( 'SECURE_AUTH_KEY',  '(c36AJ#E61d&97NH&WnsNAQsc>zGQrE*DpZvEekgvbs`Pj@1:jcs#wsK$2&YTz@E' );
define( 'LOGGED_IN_KEY',    '7w1d4r5f:DqB=bPZi!EcQhUmD1tvFy<=vWmEvdVb4Zlfo+zx}Swlq{B5.KF4xV9w' );
define( 'NONCE_KEY',        '/hfbf[-GYdg(,zHh^ [G%A@EW.|?x]<(rD#$OaBQP`+~xYgIj8::LFcA`-aS &(y' );
define( 'AUTH_SALT',        '(iO(C,46MDWM/6~1F{zr,y|(jsIP- {s/mkOyqQ8?aw4b0jVeA/8nmENIc)bJPQ[' );
define( 'SECURE_AUTH_SALT', 'C`_4@Cv4+_0m(A1k&H?hyFB-9WsvpHQy&Ul.hB#KBS155.J/9zEBP2?jtwF?.B(t' );
define( 'LOGGED_IN_SALT',   'A7lu(_p#X,n) K5/qzxHaQ;Hj}1l,/q,aB(3J+O~CID.4V[q>(dBAXEw/E|q#%P]' );
define( 'NONCE_SALT',       '/; :CRb,j?f7hpBm1mwSUFh ?n^I;_{IxS.@A=/yXsq+5Vn[LE.1gB%TGqQ,3XJb' );

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
