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
define( 'DB_NAME', 'WorpressDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'p2_db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '8ks04jT1_)+rR4W<Wb?<*a33vE#RR;&VL6 Z|-::]/?x-sx * yl!5]@Qw%|nv/w');
define('SECURE_AUTH_KEY',  'KgPPKW`s:-`0U@UT9v]gycmo7?ja0hz],Q$ZD)~>:u$35|tDAAOnl*:^Nt=7ONUi');
define('LOGGED_IN_KEY',    'm*}lxSh(9)) k=d3M+$0Tqy|Zgl.&W@L|+,(D.&9[Rgr4KvQ+r CUD.-_A$;Y~~Z');
define('NONCE_KEY',        '=$fLi:;`f_h!w+$Xr[|~_f]kx72:nd434(F:JrX^<dsx+K5-E%(Y$T|ke2=V77h~');
define('AUTH_SALT',        'VCMJ4~|KxHxP`u*dA%J(&QMR]* [U[5baXxblafm]52F*QTXAw-<.R`H!^i`-b2@');
define('SECURE_AUTH_SALT', '>56e{|l3qJvEY|0S|$>U{R+!7SFQ=FSQ<YFl;A%{0|C|Y@lP-& iFI65#P7%t{tM');
define('LOGGED_IN_SALT',   '|T.VXTVa7B+r5+Z2U-E;S + v~mF!|9LjA;wM#blr+mZ+8[o/(w81N6-*RW*_ofZ');
define('NONCE_SALT',       '|(<[(fji|KF|FaIJE/(-NG%e-K$3cU^h4G+;(n@!b x]YZuFr+ByCku!NQ`S>HD|');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
ini_set('display_errors', 1);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
