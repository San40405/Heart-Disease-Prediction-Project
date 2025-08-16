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
define( 'DB_NAME', 'heart' );

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
define( 'AUTH_KEY',         '@(*rO0JB%AdE^>%Y6Wuh[4 T4GxLO4)1j5^rKtb y4r[)GFr0ckF3GyW_QHL4G-K' );
define( 'SECURE_AUTH_KEY',  'dfTs#!zP~LW?AlpqMXhUFkOuLRXc;+Xe&zk>>j(%hp$ dJylo&5y^.a4_!OmG;0v' );
define( 'LOGGED_IN_KEY',    'Be 86-!Irh=Avht/j SOOBmXBK29*JpWHSGnCb)`&9U,E.cK6~zIv8N|E+OconPJ' );
define( 'NONCE_KEY',        'TS83fJ$K` 6cEJ7I<>YO)$D9u7y7bOy/@,.sU=gG] :j_7h,z0p7Go.DEA$_-f~;' );
define( 'AUTH_SALT',        '}6}`%{9Z!kCG$a){s7P0}/jbQHKJ9=7u}9M`l~+:%NI-K/c+6>([!]~jaS01CfKE' );
define( 'SECURE_AUTH_SALT', 'A_aLDE/m[h ).-58d6FpnUUQ -fP_J~miA:B(5l5U{m o$$f]Ngu=zG2]A/YYFs$' );
define( 'LOGGED_IN_SALT',   'xlV!<Vc#B$gk`A+w-K!}wV*$Y4YT.x;bV:Fqn<t-2+a?)fE^#`ctEBcoUI>&i(=6' );
define( 'NONCE_SALT',       'EpKrr6CRsr$.Sp]%VKenh:kQ%^UYWydbNZ_r)rI[K#tJ_eGs(s*OR)EgP~F>w0A?' );

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
