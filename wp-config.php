<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ubmweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~ n~p(n5igtt;E>mmov)(., lCzJ?3!]8sy$&2GU7RElZu#1L1wON/K/qCN{&8$W' );
define( 'SECURE_AUTH_KEY',  '*P4p_T-HHNff%Y{cb7Xl3ip^&4W6PVq<*fth_m{WovZE8Zo#jm&OAOXy)M,OuC~d' );
define( 'LOGGED_IN_KEY',    'l5x~_VnmSdH;1P$(cpA|~I3l6r95UD|~2UxjS}]6HK>Vv?l<) wtP&C{(B%FLwj+' );
define( 'NONCE_KEY',        'V-f?n.~SuWpeBMu/aV&Nyczi}zTHKmVt]&Y+!nn.U&t(pV~}TfFKm/le^Zq4.L!p' );
define( 'AUTH_SALT',        '(O#-=:89J>m,|~?2@bQyzEl+WT0JgjJPL(l>WZw+.~t>=lw~)RmEkLD~`-AbpmV^' );
define( 'SECURE_AUTH_SALT', '8ML59e;1P|VY$VIM6_K}L-bZ%_<tUa+OisPaT=poGYGn0LJ}7PtNTx{i]HF_?RZ)' );
define( 'LOGGED_IN_SALT',   'yr&V#)G><d+9)DgRh,iH4xW%R/h;QKY,}1{`~f%Mtau{<!Q@xgfC^PVMwCPbS<6X' );
define( 'NONCE_SALT',       '!,X%l|[r>3oXRLm7QI^FH zd-QY6azo&r4>[oB#T;?lbrt2|]_MzXo/XPE:-;P:y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

define('VP_ENVIRONMENT', 'default');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
