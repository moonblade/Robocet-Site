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
define('DB_NAME', 'robocet');

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
define('AUTH_KEY',         ']F1b_VY+|%t{w1&L|kX&^Gdk-d^:+Y- @o&v!eL+nZR]~fG_wqL8[sAsToGy7e1r');
define('SECURE_AUTH_KEY',  'M-?LX?6)jrZ}dw=9n43-IK1y28IKO8eAs-z;9mi&:,i}-AY,-h;?ZK-r~lMtSO?+');
define('LOGGED_IN_KEY',    '[5SqngPy;Rv|G*Yawxpw9tN=wZzweP3YlO6MEcEhpa7p`Zt=6+<z{KADilv;%)}N');
define('NONCE_KEY',        'NkPA9Ef|:6C~DWM+YP)2O#FS#aBQN8H!4eCOG3u?q]Ua-u[)wtJF>m[MNM]e6^tP');
define('AUTH_SALT',        ')iNl%J6^b|jF8|s:22-gU*TW{i}`_,K/[Qw94?+K ,$o7RGB+@ycHWnX9p[qvP:c');
define('SECURE_AUTH_SALT', '-@oYvseGNT7mS*`Sjoz7&OUX)Q4{uZPxwk ;m^vEDtMp(mymb@>^sdsA*PQRJo;]');
define('LOGGED_IN_SALT',   'L%kEspo*+Ty~s+Y.<{P[r:KY9tcCl$-E8;lP[VMa(]j&Yd2s=d}K*vSa=bZSl)*;');
define('NONCE_SALT',       'D< [9mEQ2a->`)#.R}xt?=X/a;Ps`y+nw$PJ7X&)j@eo|`^Jl!$V=>|UJuECs|@^');

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

