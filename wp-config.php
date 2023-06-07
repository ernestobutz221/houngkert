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
define( 'DB_NAME', 'houngkert' );

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
define( 'AUTH_KEY',         'qKYVd^X:fjQ8EXyd|@:TghFC38?3S}T@:Nee!Pz4K>RN@~Y[<c5HpUFUz|umfr2)' );
define( 'SECURE_AUTH_KEY',  'a<%([,_{Ld$8@t7+ibNa`sJ*q%eF`0q~Dr(?:u:JYS&z$|s%o*{UVg >Go^$wP$@' );
define( 'LOGGED_IN_KEY',    'C1TB}ynhs(WO2~o>X  PXy%?El-i:5Ku=we},f2;W_Hr^F^YPRbx!/-DX+Z<(gk:' );
define( 'NONCE_KEY',        'gQHiB`alq+C)8[Un3rl1HFCh`,|e S@e(lXo)!{|p&8TjQa|</k_5m?=gG9Mv4b:' );
define( 'AUTH_SALT',        'w4+-~*.8Hsb(6(;*u&} E{i8^zNS.OHmb0I_X-a<_lGb=SF^yXEAcqIK>HEC>1>s' );
define( 'SECURE_AUTH_SALT', '}++,*nOl5VoA0uYpRn-C@QAaCm,$%`Q41UJB,+e!Em4FFopfmbjz%N}E!Vu6MZ{`' );
define( 'LOGGED_IN_SALT',   'j0OTiegWu @MOqQ|Z`yc}OzF5rLb]%Fdvv!Zpu$>~iG; p~1b(RDQ(F1h:P,x?+X' );
define( 'NONCE_SALT',       '&G!kF~nypoI]}pp;z<>R=:9I)-_.f3?j)v_9sg(WBDF(c HyqsL|08arD>&P0//<' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
