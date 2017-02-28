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
define('DB_NAME', 'wpPlay');

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
define('AUTH_KEY',         'DW*~UPXbS^Koyq|BBz?uh.h>n -9$($YWH;Kz]A9IsfaH=ghJ#oHn;H%Sq,zJp*t');
define('SECURE_AUTH_KEY',  'k^N#@D)?j}|jzf%9]2cz-6Y]nLwa:!NC(N,;jHFZOV8lOI>~okUXf&;)x>NE7V |');
define('LOGGED_IN_KEY',    'gb+hsBOO6ouOo!JXQ0/jk8Y;eE9j-{?0rGw a&UqzX[+(#jy4II~ zDV.9$OZE}J');
define('NONCE_KEY',        'KK@T}`eyzJE7SqE0K]u#*E4{LRV5{Zw/[&ry5qUUMlmgGq}9EXR^kn$0E:n9q;_>');
define('AUTH_SALT',        'lIYF-INK/p@MBN.I{7~[EO6Z5NeP`>5|vLU4V{JOxE6*g=)ZVV&YXyCv0LWk3#zn');
define('SECURE_AUTH_SALT', ')vF$kHd`tKA%^zB2i!F6<{Xz3XX5a0~`e3UBjxwoyWG[vQeJR&~{%<Yg{F;4}JJh');
define('LOGGED_IN_SALT',   'zw-A$_(sKq uEn<pr`f858N:I]Wc|?b:Agk1+f^8YQDF/j!fFt{c4y+_1[4;+^aT');
define('NONCE_SALT',       '0{L%D<z@VtS@?(enOoArEE$#5WzhmExRG(VoZa#MOm~RiopuF%dF~9Xc:(j49T[g');

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
