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
define( 'DB_NAME', 'wp-site' );

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
define( 'AUTH_KEY',         'sSM{.=?#!G-i:~NbOc~<_|5YTQ*?4k)$FAYgSPXIE`c3([_D&g|!xQ0/t7OCV^&+' );
define( 'SECURE_AUTH_KEY',  'eY0`h}GOqx!#AGojMV@kDD;Tm_lsx@}+c2D%p9@-x5FpP9&eBXn)%6;VMeTo8[0-' );
define( 'LOGGED_IN_KEY',    '@=DQO)zaXC G+,zw<&A-TLJ!?[ApK~<Ou=}W09PRL!9:#&`lzCScqF #E+axN/{&' );
define( 'NONCE_KEY',        'kBr5+%.b/XE m~#r)HNN],&{@W$1g9D!9WP_iK>6<+:EES_`6.R|i=;1>ugCRasb' );
define( 'AUTH_SALT',        'pMjm?ZH;F0wIk#bckiI400dd`oV0GnNv+JOIUFSgT$!3b)RLV7HWi5e8sho(}rs1' );
define( 'SECURE_AUTH_SALT', 'SIzR@=7~tfSG {W+ ySj&JjKi1w+rJnSlhgB<;2S9gNtz3eDw4=@G{*P3aKrhF4;' );
define( 'LOGGED_IN_SALT',   '/_2nDxO@OJDcHc-8>4s.R#`FubOc!tM-)e<hlMrr.t! dv<UN)-V DN3><u8(:R3' );
define( 'NONCE_SALT',       '{PpJO7b{mbH&la4gUk#.Z0w <3H(oWN3n%&Yk6e&Ua5]@[Q2 E97f&#,(QzkuP;M' );

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
