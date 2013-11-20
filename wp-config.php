<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'beer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+9;ZN_ +1ld8`^qbapOd6{O2@K7L&?.9LPD<5@q;LdKGk.uYTv=wbj`>t0q!I%|6');
define('SECURE_AUTH_KEY',  'h:6sJ{BB#VyP-Mmn&N$@7[W/yrXtPCE|C{SFaOy+FD(#f+Ejw|*tKHXdBi1sH5+g');
define('LOGGED_IN_KEY',    'jC|m,_@ZmP$[;CM.c7-KzlSvBwT2&M7>jNN=B1 &)8Dg7I&;Ef:5?9mif|!{z:Gn');
define('NONCE_KEY',        'fswjDBc1HV3|#/1^$I60*8yVI_zu:Zyq[#f_r p|<|}s3L.u0}%!A]fzA2fV_MXX');
define('AUTH_SALT',        ')x0]Ng]?:ZoDSavt>mrkXTvE~|FE/LPI_7oy[@0n*qqga&wNT#IfsgZ[ni,v<|~x');
define('SECURE_AUTH_SALT', 'S0D(Kud9C_5B41*X-aS^GL4l+4s8VQ:vGh16`}i^`oyxd?H&deP@UDmQ}IU,P ;W');
define('LOGGED_IN_SALT',   'q}a{@P./z;ZSrBU:`+9lUgEE.2l8|o+s;v]iIvw2<<s[io4L|[~r}bb+/Xw_i3&o');
define('NONCE_SALT',       '5SxrGhLX:&*(.9.CEe0)*3H{V// D0+?.O%nU2ASg7>z~E0}SuNq:i9SCpb9{3Z3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
