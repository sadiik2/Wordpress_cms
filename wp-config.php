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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         'R,>z,Osh2VHnw&y!?p15I% -KIVb(+ h(~<]S6?d%}D<&G@4[j!z;5;t]iz8U339' );
define( 'SECURE_AUTH_KEY',  'iwRu6HFhAU$r,$W2]Gx5;,^i,(Z)UtZxTn+QyXly`qZ.|(FS3ybJfm|><[W|KLpZ' );
define( 'LOGGED_IN_KEY',    'yHRP|gi+~K%&U(AAMC-+L?/~FV{sm!$gOTAVU^!wWfO=!&hAXj)4Qov9~$3qO~*`' );
define( 'NONCE_KEY',        '=1`m6 1B[.)S+?;j>N)hx6KMc<|y.leY!;+rh  EMH,#=Kw#?lzbdo`[<_>%~M%p' );
define( 'AUTH_SALT',        'tkQsiFrX+;ne;_js[e[qC*/wMyN5g15?~.G0VFMg~rqnXtJ7GHISiws<%t,bK.G`' );
define( 'SECURE_AUTH_SALT', 'L|#q6~-4{QB^`RQK3.8c`A;j,kF9$5d8LFOuSQY*ECfgo$Dtk?H0Ek?[#Pcb1nY8' );
define( 'LOGGED_IN_SALT',   ',T]~#qVR9HGY_Sy.s8UYTn8ig,o(oxT7WJF% -~HTHdJytg_Ta_L t_a{|bA +Di' );
define( 'NONCE_SALT',       ',NRI!]Y7.rrw&4p?^z5z5w<WCo&}BF?;w}K6weKQVGV:&=CcB>GN=K:crnQ]CLRw' );

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
