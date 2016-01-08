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
define('DB_NAME', 'db4rodas');

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
define('AUTH_KEY',         '*aL6[VGKWfP0$RBB*r<WBB&ho`ork >F3jI[J-iWUr0;wM4VR)GO$3TVvP:;2Qhu');
define('SECURE_AUTH_KEY',  'F@zXDIVfa}e.Vp-0!?H!3nwk:vxTA=ukLG`RMT1ddCf%S.CaVU)}S-_d-u(3{n9Y');
define('LOGGED_IN_KEY',    '`vE[RH|L-j:o>|#bZa5%w+ckC$ D}j3+f)HdbG_(o9F_q2WCr|Y-AlpJP8|G7)H+');
define('NONCE_KEY',        '~wf3?am>QbvHdQ2&s?l0B1c=A8K=G38I1D%`:O*gRZWnBods-ib8;B?VCE x[jiy');
define('AUTH_SALT',        ')X(00$J~NH>%d;8u;mjr>NunrTL$.QHsjW#=m2CA.3,Uz?.=>K-8&qKJdpI:a+v$');
define('SECURE_AUTH_SALT', '|*-IW/]YW#M*<,MqO1q-K8pATBH!3u8G1O<gq|u.bbd=W:U]pviyV@*xC|ySB5oo');
define('LOGGED_IN_SALT',   'XE+)H6bGp+YTN,$!$<*v0wKR|$-lI.yu18BuNJ U}sHSCFS=I;Xoeejd[C_!m$.(');
define('NONCE_SALT',       'w##5iR_#Zpy5=)CM-q0nx!Ovrv*.{WYp]mYR@byYX$C$r^l{3#&Z-RpNq(bMCP8B');

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
