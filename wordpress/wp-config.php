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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'one_page' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0[^UI1)U|fNx!QTxPwK0&:EmbuztWmX6`kDE$sZp6IK,5C=hMR*m(#R-^8-f?VUp' );
define( 'SECURE_AUTH_KEY',  'b<,5&fl4Ta%%CE_$)~}:gsy%n02&CM}!S=qNPz]e@[;PD<N`mRB16]/e>)8NJhTk' );
define( 'LOGGED_IN_KEY',    '*MZ:M2[/tRBY3!z6ti7iCP<KhfmcK[ zjM=+igP_$x[BMK,OO]W`8W*&_(0ZbH56' );
define( 'NONCE_KEY',        '$k{(bfB.4wP6X!^v%UVia9Ww{@4V]cG#D|e>|YM>T)U$k5A3 X#hW8L/$yWhN}0i' );
define( 'AUTH_SALT',        '*hI8K<ds9~]pQDbI!WW!s,xj2^x&Ej[cXj*OJ0Z!(0xWwHtS1+2D.p7I1:e/Jr<8' );
define( 'SECURE_AUTH_SALT', '`o1jWSVFgU#j!!q!/!&8ku(ID,UOgbFi6dQqLU*^Jmu6C#yk.0!; 1a[MXKC/qUb' );
define( 'LOGGED_IN_SALT',   '>Bu0bt/p^]%Cax@0SCOslB3t{?:oZjH(j`6@5BZ/7cA8B)-iRAv.3bW{qp%[H;N8' );
define( 'NONCE_SALT',       'S(uJ@~3mZK3KeC4!&qprmaIHbI`C/@>aA=&XrAgT.;W0zr]4@nk;5wOz*RyU0UB}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
