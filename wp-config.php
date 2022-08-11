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
define( 'DB_NAME', 'electsun_db' );

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
define( 'AUTH_KEY',         'f[Je7VLL,g1;+xkE6W{PQ@T1[t2ehw};|P7~J16]f8T? d_O=Qz1 WFl8cTsNYj4' );
define( 'SECURE_AUTH_KEY',  '}i>:0E#M0w%*G/F/HwX(iql}_-[TjU+46<-2+l/vgHu|+bBVcEd4V>kYMCc-VI>m' );
define( 'LOGGED_IN_KEY',    'gYaId|kIpR,Z.E/R,#-iAj$&<!mzf K4]5<wCyz7o PVfg!C?kz38~BiI~F0 Zkc' );
define( 'NONCE_KEY',        ':)KX{lboQ|g/XvSN&_OOvf 9.^>*j$K%)~gC2Rr?WL,)&YV#K8M`o>k*{_$g1UPl' );
define( 'AUTH_SALT',        'nOw]R1O*pZoBh~A4El@)jvcz2XSo:ghpeuYK{)W$R +[Loz8P1-^mjSRDN9r)g{U' );
define( 'SECURE_AUTH_SALT', 'v0CUIL3rVr%B9C5{LZVpdbjxS3&Zl y|L_^Sg76sT4]s1nNHFH>U00LXZa[;5ut$' );
define( 'LOGGED_IN_SALT',   '7VY+Cy#HukCGB_zni>:c~>k:E-F-6d*=nv]N?h}4Y.$Y{,kZph,6vGkH|.m.&M5>' );
define( 'NONCE_SALT',       '[JtEMB!sE-w_dFJk&:=$30iCj?`l%u$.HUjs(1=35Mo8TfiWjR~#[1<Ls<hNmEcU' );

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
