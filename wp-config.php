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
define('DB_NAME', 'annamalaiyar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'aa_n,y|6w2>s*iq>,a5AnWx(i()b;#$?!1{L:F_(]p7R 9qBh}c7V$~:/6[t_&c<');
define('SECURE_AUTH_KEY',  'O8>7`UTg0&`7oav~,P%~;z!]9^}GryFi/x-<6P[}Llx$Lj+ls=IVy9IF%b/R{|!,');
define('LOGGED_IN_KEY',    'q$Trjq;]gek5v_WJpqpDZ2hpGKr;Fa-}|Y}VrLmvvj&>GhHvHD/8h+_A0:)`2keM');
define('NONCE_KEY',        '~0Vyie^ 3g9zg?gzO^`4RVqlwGL.V-.^_#3*q:4<gt_ANI<O=i#AIQeR9.!u440#');
define('AUTH_SALT',        't8^Ktz0U:uZFRx`Psr,MB_`y9U_[8/E%g.5%V{y wcZv$TCYlhmf$@ASy~ag`lJA');
define('SECURE_AUTH_SALT', '/=NTwv*tba.2#/jDBamubqqz>~x5CW3P,1hA%v5UBZ1-ho{hK~j5x-~Y]7BWs9[Y');
define('LOGGED_IN_SALT',   'e-AtJsS(5|4T7oaHKsEZMJ3?kTbC- v*E<63@yKKW,zWFPWP>cJ!5yxC6OO_bm_N');
define('NONCE_SALT',       '<2Gf?Tjq M1`G~GtGFS$tx]:g|9d*k5G?d`5D/+X?t9iWa:!UGV6 JgF+G-8!7P;');

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
