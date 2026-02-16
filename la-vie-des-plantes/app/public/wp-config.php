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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          'O2x)<`#d3%;:-.942/+v%LfpC[w{(y^7JJg1f3]Nkdsl/XvGi0%aq(/dY o-iM%[' );
define( 'SECURE_AUTH_KEY',   'P0T]Q1S1b+Z&CiXd2AU}yO5hC-R8pvTn8uuMBS+Ykn;4E#vtD?%Cs2 eU;XlX?*~' );
define( 'LOGGED_IN_KEY',     'CU0#QKY!>lE, C]}jHk46}f/]|x~7U`>)9-~K /keWstX82e0%X}#5-,`OCgpjd_' );
define( 'NONCE_KEY',         'I^Q09!.#8fM^iN3ps{ZD#:},ztaCD5f<CU3&cRNOSpB4l-I>Y4$hW9dd|Vh99Gw4' );
define( 'AUTH_SALT',         '*:(~nR] G@x;nhkzF# vB5E`XIYz5;v ~%`Bk/+/yWjK=P=V5HCas~gct$-oPzHP' );
define( 'SECURE_AUTH_SALT',  '[P5Z6zW<xZ;h=Z`}K(J#.h=uv9Y)8fR0Ef6 )ioG*mhy*Q-DhZ9!0C-oI|V~8]Be' );
define( 'LOGGED_IN_SALT',    'b|W ou5BLjQkD5;EVli_aNmYag:{8Xw}Fo. F%<Hy`wuM]KEc*bt-W7Rz}?YMq+?' );
define( 'NONCE_SALT',        ',)zaw6sraAm-IuWg:%4f{q0Z]<WT{ //OaP1!&Qf6wgdN,Cd=A]cQ=Weq:x**:]O' );
define( 'WP_CACHE_KEY_SALT', '1C@D;p|!L)!tR[;2X$eSj_Y+4mVq8b[>jz%bd}6d#dBXWhLQYt/fV]Y hTJ*3~>|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
