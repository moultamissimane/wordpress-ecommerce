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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9D)vIF0b~+-hlXUu-5!{)b*):aN?G22f03vVlUh8ZEf*9ShFc8)*BtHB:(0dqLFt' );
define( 'SECURE_AUTH_KEY',  'fU-ip3C:Wlre!$]0gb_M~Qu-LJnss/u>8C-.?y!?U-4WIO4z3n#@vGW/R-B(@K4*' );
define( 'LOGGED_IN_KEY',    'Cml{$wF#+ua2`m~h~e]{r0z8mTQ4OL_wCx?_x<OBW.8ZT5`2O-oky |;*4&Y;+]U' );
define( 'NONCE_KEY',        '{CwoH/b:@_}8I#Oh9^R)4OG;K.9rY+*N]-o,S9dl!;UE*at:xDD}uDCRq|47u9-#' );
define( 'AUTH_SALT',        '#3]/gs+:m9EEA^&vbRvXtNAg(EVt:Y.t9/0be?OC :*[N4:QlYj/.N0|za200YA{' );
define( 'SECURE_AUTH_SALT', '^p33#%8r<CJ^M=}>Y9?_Q:^r5#WHrBpGy2U3.=LPMH`*<gOuw;1[TMl:n3#1q>*h' );
define( 'LOGGED_IN_SALT',   'Fo:Y*vk.qnO.b3?7vQ.s,3Tll#Q)XO= ^%HN8Dh,ja%W&,Z3`bsB}c/u2`f~_%  ' );
define( 'NONCE_SALT',       '3c>Vf{30:d[QRM`,hwv9nHokE=9O2EV438[>]V.wL}H_B2CsT3uT?0_K#o<h})d ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
