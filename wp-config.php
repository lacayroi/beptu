<?php
define( 'WP_POST_REVISIONS', false );
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
define('DB_NAME', 'beptu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'i0qt015*?[Ve}a3hK7i#!F=,D)L:q~Phs_=voilp/Pqic[Xz|]GYZZlGwuUSqsl+');
define('SECURE_AUTH_KEY',  'Q]H!ZTQtBJtsg.s-{r9@cK~[|^Ia]QrD!+DMFu+ }aXD5xW4t;LMI/7u944PxY/1');
define('LOGGED_IN_KEY',    'MNNzL$1qSp9llc1Ve[G:t,`B/xlXcS+2buhnkG]0trZnL7[45<3KDF4U^/}B o57');
define('NONCE_KEY',        '.!C+gLu[YOHys?R~Z>?a,h0<!S?AMvN1mxV~DQGX6~rqBez&|hdsl]l&L6M[BDY3');
define('AUTH_SALT',        '5FVXl?SyuYZnOog+P:PJMx%CFV?qLG&<^qdDi%BRfFo:Yc6h3<^2Tg,<#W`s.ZNr');
define('SECURE_AUTH_SALT', '-.tGfwumS&Y,0WnY^ek>YBWGZ_W,;Fp,fe*rUK^2JR8v-D$,73]wUm6eb)#:P7>l');
define('LOGGED_IN_SALT',   '=WdMo/vw1H5{iET)tT-<d!opxd?_@c{FOqXY[$%~0m~j22hr%46n#Qa>vvX#~U;z');
define('NONCE_SALT',       '<6/z]&r%&d}b%-1X=#~=4hUA+)r1}/P5DGE50Sp&*G/CYwe6emX/=c@^yw;-{7`?');

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
