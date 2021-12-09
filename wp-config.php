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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'At85$vg_@G]8*@H7__-29QZN}NVDf&~p^c#U{.tCk|h?F~ZHq@>K32,{+@T$oUOj');
define('SECURE_AUTH_KEY',  'w>s9%Cjr2ZC<rUsd?hU||ZW,em8ZV}.SH}1lM9+{{2+[$0VC[-e@Xz@AY.xBw5(e');
define('LOGGED_IN_KEY',    ';f5$1kEguE!m]I@E}UBO|G@[-.6r^rUM7[4eb02P{q-Y#R++Qe]$;dCM,}7:>&^n');
define('NONCE_KEY',        'GJB{7{rkP%O%fcd#9S;=E$$_N-kpcfKvQy+?xZ-e.sFV1uqn0Y: 1Pxh+RC;wn$9');
define('AUTH_SALT',        'k<.HA_[)?;E8hnV%;ye2Jnl3Rbu+C>5n)_eNyq])zg?/CZ~SS)SB)c0t` m(2BB`');
define('SECURE_AUTH_SALT', '4y>)bX26(4UxY.:IyKV-rD6S0 s/,gC|EXF&A(>xk#m2e,:m9z)9k}7c+Yv|goLq');
define('LOGGED_IN_SALT',   'AHm(<s+10PPF3hSE>{EV])&K3RW^pu-0>q S3E;CIkv/&!iz58;-pfF.C3AffYN-');
define('NONCE_SALT',       'E0fE|x/Zu[%-X=d2x3QXzTSp`eY$n.,D~F;l~44x.9.*=@(wcXYr]+_%2hy59st<');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_demo_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
