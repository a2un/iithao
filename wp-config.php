<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'iithaawordpress');

/** MySQL database username */
define('DB_USER', 'iithaaadmin');

/** MySQL database password */
define('DB_PASSWORD', 'iith1234');

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
define('AUTH_KEY',         '/U/ZV^um#3oW_.n6V-O+>/LMWleCia}@x(XV|OY;+QUX@wtse?x4ngG++[f,kH+J');
define('SECURE_AUTH_KEY',  '}Gk|.k/x&>co+sSYz:NC5Vl[Y+76I4d[v&cTBxm=$n- @.p37Du^Z`nC;dV2Z:z%');
define('LOGGED_IN_KEY',    'TIGw8IQ.PW+KF:jv2;-Z`:gXpj;u-NoSj_o<OIN+lB?y4l+?.ve|WM5evz*$j^xp');
define('NONCE_KEY',        'U{zlu;YqKkIS>O)3E;lV$@M(?i7dKS/|X:3>RN.%w+F>G4!@}t7L-2x]9zOa>3Dw');
define('AUTH_SALT',        'nDM=PP[c222Di|)2u0[gbw7f}[Tn]fM0^9Z++&2Z  Zp,.N^sgE}MO)s:v 1,;E:');
define('SECURE_AUTH_SALT', 'zOwNyKGIj*gsDu35-woCp@$kB5J;u>]Y3Y i_^rY~!_-1IJ@<;1Rr=vM;?i~Lq -');
define('LOGGED_IN_SALT',   'X3V7%:[e_OFZq|EmQ[WOM<lx/lNYMnR?B>tUk dui69ii%}Nf;[45`P^bO/|,<22');
define('NONCE_SALT',       'k]Xb|OV7mk::8VH_lwFHdm0!.E-W)q.%vi&+Sx^/PAN> ZVBADI<2)R7bx%6xzAb');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
