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
define('DB_NAME', 'carhouse');

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
define('AUTH_KEY',         ' .:+a 5`qwnmdwQF8ow9H-uW/Ib?B*YjhI(YKNKC}N=(&Z2XqoUirn |xTShfAt)');
define('SECURE_AUTH_KEY',  '%I%ye~Um99^6mLe]-/7N0XWYKGmRk{qWJ3f]@=w<MfpbSxbEMttG(oKD/6$z+mz+');
define('LOGGED_IN_KEY',    '$3^o%H@*|=a:ePR7gC;.a[PCJ(^__+bOc`[Q%?)m%m7E^Ruwe=8gdAD)Q]w3Czb|');
define('NONCE_KEY',        'v+`>{@T|Qclh<_ f[v~pr4l+iv+sgOFkfAKpWD%.vx7%cr(}i3yReh8NF!z4l9pS');
define('AUTH_SALT',        '$t9jO MEUEO`2&k+kuqqBKy4D(N6|p_`xqNn}{C-yI,{ftxJ|Xra8mLY$<sfMUFI');
define('SECURE_AUTH_SALT', '<X@O: CR,B%FepsghSg,Az#8@22hA8IgAB>fQMj<O]3aN%Ij8_8@Ti1Id0([x$=P');
define('LOGGED_IN_SALT',   'a]%jQtO5?+X>]H-ukeTRnvgQ7`M4X^{YIv} *`u-T.lNpf6TVG3ofm5Ax8CE=rD7');
define('NONCE_SALT',       '|eh<$fm)`4i3[^Io}7#?7)]LcuMi!Mb7i}9?oKLJ7h?Glh>I]BS0I7,kwsrE)C#k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'carhouse_';

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
