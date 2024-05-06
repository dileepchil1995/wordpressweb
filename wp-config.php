<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'normal_db2' );

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
define( 'AUTH_KEY',         '- LXP-/i1|xdJ32QB5%Sz_0B,#T{a`k|X,+FUf4#=$A=NW?Ra}&>:`Koe/cDZ&@v' );
define( 'SECURE_AUTH_KEY',  'w!YsD=*wdCS)JsM?<^zfW|?3@6.2Hq_!5L3{@P O@tEqff$[9);007S$X#B!0h*P' );
define( 'LOGGED_IN_KEY',    'l)1[#Q8h7kip>ZYyq*XCjjx$KFg{`*gq`0V[(/Fj#=2,0m=34roYBR~<ToyUM,xL' );
define( 'NONCE_KEY',        'Q!7~xD8z?k>+jqq#_<+AwayY%y1$/r40XJ+j5?qu,O3#aq*E^1ya;QP|3&sK%]2X' );
define( 'AUTH_SALT',        'yTbTNIJ-7~,2Q=_=$.*X5d@n/y9+X{u{5^gh6lY%8f3~WAHime#&c/{Q}E=5A#8z' );
define( 'SECURE_AUTH_SALT', 'mYszm)5:CYQC1 ,BAJJDJB=:q {p&{?C1D7v7qpEa&)`n$vJT4$r1$}_TOqQ7Cn7' );
define( 'LOGGED_IN_SALT',   '*|MbdU{jNdr0u(5~H,[RQ[)oUI17N+>U97AzJuHnG,!0AL`,lS~5]f.)vuk,,2T2' );
define( 'NONCE_SALT',       'vaU*iF~z>D,0_@s=L;DQ].O8Zr{+YWN#wX>4++F8f 4OYW<6VTos6t@TZH%;(M!3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
