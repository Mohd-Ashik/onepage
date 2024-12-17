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
define( 'DB_NAME', 'onepageprojectdb' );

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
define( 'AUTH_KEY',         'WP8[q&ZM;*Zore^}r$9OO+,>j-U/Yi1B4TvOh;6J,6So3n^7q4ImnU8&Uw^xDN:2' );
define( 'SECURE_AUTH_KEY',  '`gY6x;& w]AzCLCAv+y{P34R{8k9Y_jIk)I/U+${*Y!r7+ty%|KcJEe]qh2,i%O|' );
define( 'LOGGED_IN_KEY',    '*oc{3ig$`|~(=EIRu^.{J/CUV>H4Ix>g?p1nt8a`D<w8$9b->Mf,}9*snL4!QBrV' );
define( 'NONCE_KEY',        'W{}M<8:l8cM[,z5W2kT}FRor<`=)!q*[BYV1g.lN_@:c%$t@H?O7X1NEcX.LTQlJ' );
define( 'AUTH_SALT',        '2pe3LDYsL:S46U%E?B9KWAI]]ifAW!/aEXt(f=!-M[k624IC?+O;L=tb@Q=Y_z{t' );
define( 'SECURE_AUTH_SALT', 'd|z(1W.&rv.Y6cW+Uj8<}C)[%f-7?uzIMK$?WYTDZ?0]MN|bOaZG~{3}{ByG,s_Y' );
define( 'LOGGED_IN_SALT',   'OS@Xm%Ngt/9SpnT6oQ.ucC%GPZf_#g7K/4!r~Mls@->NgT@_eSp#_e.,wT1 :JT!' );
define( 'NONCE_SALT',       '$7 2q04Gbe|T}ElYGa]UKwp_t:kq6;U&h.|li?vwZ1ud-X/{KXMY0`e0^vKt&iT]' );

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
