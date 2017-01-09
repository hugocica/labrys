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
define('DB_NAME', 'labrys');

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
define('AUTH_KEY',         '1`D-;o+*<Ltz]6j$JI#W;aOdt$SLxF9`9xItP|Le>:jXg]16&)!M3!`*KpcaqCP2');
define('SECURE_AUTH_KEY',  'm1kX-DDf8>kH&7^Sxt1ayAD}((KFI#s+?Dm5Y:L%ZQ#)o1^uer?ZyNoYn50R*@;W');
define('LOGGED_IN_KEY',    'JeGHa}1=pW5wMrOC)YV%G5N/4~ux 6gFR2`L![q46nV(7 nvY;-krOXEg,4zPej)');
define('NONCE_KEY',        'eeQM|Emy1uM*~Bivoiyk+=8;pwQQq<Xt;*sHK~Opj7BUM9<UU0WJdvwmlfPRHth1');
define('AUTH_SALT',        '/lfu|YN].Z]k}t.0Ftd51lJ%HEn|)OMX*:iVWB9Zw1=$`bZFS+dp4Yo]f JjIkxW');
define('SECURE_AUTH_SALT', 'Gr9_lt5m]baPNRq.Yx?lW33H&@P9DkyBDhQl^p~ucbwIDCYgm/qd)l/-AZTNz9S0');
define('LOGGED_IN_SALT',   'nB;,%#2EzZ4[F^*4Ox`Rs9!KTv{ S[VXR0->^gdA2`kX38;kGNT_^7}yNBNkJzXd');
define('NONCE_SALT',       '1^Y{,S^Ze85+7Y4TJC+i$`[lAnv3{&_20M[Nz]b~o,h}AkquJyddbS(o}EuvAF%r');

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
