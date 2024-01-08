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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         'cOo`5}u^xzS`;i7u0c%yR5[02U)H~n|h6+Hy,y[zC+q~{mla=f`.eM#hdo(Bk@*c' );
define( 'SECURE_AUTH_KEY',  '!vny!O3#RaC82.(]Uo]etu{;O0f,^0S[*}+n2OXVDmoBD:xMj_gs;B?8x-#.]7kh' );
define( 'LOGGED_IN_KEY',    '=6HGv.PP[u6henN>)Q(wRx6_.j1ipEHn%=SSQVr8Z%O+4M eWpfoo2 ,pPiA[.`r' );
define( 'NONCE_KEY',        'bW}?[ss~5XFS|-/ 1pKKd-Cl~O;s,4K++K7sQIM(=,8zxfw*l0~O4TkU1ugo|!Z$' );
define( 'AUTH_SALT',        'Tl8[D6y?Y-QH{*Z-[aojtOW`cXYF^N&RJ nrxU#mw2h1:CxH,lC{Q_.>96+_&I7X' );
define( 'SECURE_AUTH_SALT', 'R<Xp,JUb.D=Ov?T?(P<k~KXHY;-#w?3G1l EX?v40CIDr$HDwrx$~yZmpQ/,0{S ' );
define( 'LOGGED_IN_SALT',   'l)B<ikI#o-6A1)H=fAKb)7<C5aW=Bq7djtoe_`.C 8IsZ6F47MJrW(]M(2cfX8h`' );
define( 'NONCE_SALT',       '|[`,ayzIo*X.UFeBvBx&kJvp+2fNPCZ$)]Ixt TXC+r7bVU4snM#=,V-yM?lb5e&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
