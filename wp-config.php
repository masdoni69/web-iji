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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yA+.C9E1(45.Z%Rqn2+f?6;HQOJSn`FkVK.u=+:r6jEDyIl6:~;>g3{6GH&F>!eS' );
define( 'SECURE_AUTH_KEY',  ':Vc.I68eT?&SypNwLn_~F Vz|RW0gcb+CtX<mx<Hm9{+Cv#0fFh2bqJEn?:m<8Jq' );
define( 'LOGGED_IN_KEY',    'Z#:eA@K0U7b[~PJ<YD>d]AzTCF2;5zR0Gh~O!P|17&YW~xs1;ZmpI &PUFh^I`vb' );
define( 'NONCE_KEY',        'lL&(I?qOeA+/S=d`8/(DJp{k4.)%&:5PN^qnG)d!;!Baeg<Me=0Qs@$F^}%aC_+-' );
define( 'AUTH_SALT',        'O[g*SD<O+b,c$nF&Q:Ok<C/ln/3Mxt!YFsun)6gYVsuwi725Bs2R$pv|/<^iG ,|' );
define( 'SECURE_AUTH_SALT', '48{V$B<@_Pb9fLGcQ:;/3)vsUI,s?j=~3G_STE%!k0jU.e)qwOrZ FM9ZxajKNSl' );
define( 'LOGGED_IN_SALT',   'F@hdi4riwU2#Oo1D+A^J!]h1kx)9[g>]:UkNV,LC#Hypw7W(#nR&UZY- XqL>C S' );
define( 'NONCE_SALT',       '+7!`@Lm|3k]$3brej#eW?_JuYi_A>l9- :`Rct@[lD)s@,0YJjQ0tdNmc0Zs6ugo' );

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
