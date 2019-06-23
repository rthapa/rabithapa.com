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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'js30jackson');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n(9i>b1CUh~Cy$#Ti-Zevx_){`+=A{cS*zu&|lHk8%zAxcl+)]z&&w6y*Bac1& S');
define('SECURE_AUTH_KEY',  'H}dIx<R3hU${@#1@qua<nZ?Kw!zxL_v[7SlHm8vKiWNQ%`0DF@^02;T[Aayl$OaP');
define('LOGGED_IN_KEY',    '4^I#0trxvI=DFQuUrUl|?Pp/^rPNaC5eYxvz)CvoU>K_84ot+{GvzM]KB*.!C*B[');
define('NONCE_KEY',        '.qE649AWMH5W|,@[:>E[IQa^CZ#Q?AIx)KBMG0lk8=wVmF#jQ0 VA~|?&ZR@jpr:');
define('AUTH_SALT',        'h)l!|Au;xc=NiUzn=JZ4u-fe=+k`3a9$|u,*vC3tso.j_lkhSnqZOp^aE>a9gADK');
define('SECURE_AUTH_SALT', '#81I.A=Jf;}_6av;tB_v}`lKN0t4[*Ja(^t:4yQ+QsOtBlP:EfGBYCN9ljXb1Hep');
define('LOGGED_IN_SALT',   '>+(|ppL::>v|Pkz)y/~dIjYquv[LFw#Y`Ru}`ky&!6b*8IR+pw18M{Vnv_dGGZoi');
define('NONCE_SALT',       '!Rn|B,kGAVRPf4^nMPR?UpKb7LJr:rXukJn=|y;9>n`aqG=)rj~vEv(E>Q./:jq5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
