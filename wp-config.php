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
define('DB_NAME', 'localwp');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
#define('AUTH_KEY',         'put your unique phrase here');
#define('SECURE_AUTH_KEY',  'put your unique phrase here');
#define('LOGGED_IN_KEY',    'put your unique phrase here');
#define('NONCE_KEY',        'put your unique phrase here');
#define('AUTH_SALT',        'put your unique phrase here');
#define('SECURE_AUTH_SALT', 'put your unique phrase here');
#define('LOGGED_IN_SALT',   'put your unique phrase here');
#define('NONCE_SALT',       'put your unique phrase here');

define('AUTH_KEY',         'f&;~R+`_`Z0  |3i$QO[5.47>jL%Hy-:i+C_qsIAjzVTy-^Vp7MJ)_?p8>`,g{a3');
define('SECURE_AUTH_KEY',  'P1]0{x=pE7b4kQgPt[Wi~R, Ie-+}FFF5:8i=||NW_g9WODRD1^6c-rx[ y>gT1l');
define('LOGGED_IN_KEY',    '5nC:F*/x|Ej/z^aZf`9{K7?;O>q,SZs`K|AHi`xqo<H>-Efkr)>o+]=f(4X_P;?Q');
define('NONCE_KEY',        'YJ_5jRNP(hbqfePq|eJM_Ns,GVfDU&D@kSy(dte^q|C32G]fN::#KJ}.eWA_a&u ');
define('AUTH_SALT',        'or0L~BN$z,ZFl}D)G5UbRj-}Rg)o}Nl)M3`j:(#(p4A+C5e[gwF(b/;g-k(/:|R>');
define('SECURE_AUTH_SALT', '$5}4i|Jk@<7L|ML4wA`2|Y+B-Z;NQ =;,_nPRG^TV$;U|8$pV Ii.4J!_QjOm1|_');
define('LOGGED_IN_SALT',   '<J`tPi7nF<nwa[!thjsExMO`*3s^q?//8/L6Jb;*5&As2 rjF(7cD*Th!p{:_ (I');
define('NONCE_SALT',       '1s#K9n|gKHO#_e,*_QGeqG$MY!<--{)r~3C;FOs9KzlD{Vk]c|uIBjto%umTf`E-');

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
