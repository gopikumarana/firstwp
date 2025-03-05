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
define( 'DB_NAME', 'wpmain' );

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
define( 'AUTH_KEY',         '9?>Wba04`5U0 W8lw0jD6/lKy/06l8$7IfQ8&cBMKp!KX^`2$}2B*en<hd4U}Fh-' );
define( 'SECURE_AUTH_KEY',  'HMG])=W8o4<d{[}[H9te`Z$5~FcSKElItvfVKU#H|Y|NJ_{@DFZNTtX<eN5!w6ey' );
define( 'LOGGED_IN_KEY',    'uTNsuO8rNvM]]0] Dum.2g w#2y}vwx &h-0KMB=4See~*Y]xs|;qw(RCY>}ruL`' );
define( 'NONCE_KEY',        'hvylA$n+9dyPbs8_z+2MQv@@[2 )kJQn)cjwWE/|^wepR:wbr)%xFye7$u4]oefN' );
define( 'AUTH_SALT',        'v(_Zez0lfbv@ `AXZa1;F@k/ib=&A;y?jUIlb9c}N;[<nh~Cfb<Z_RmT_zu3{7~]' );
define( 'SECURE_AUTH_SALT', 'yj2V3AKJq0mOUE|N2Yjr6|%b0w/$RQC@`JW_tL$`.%C5A.-21i?4%gM14O2@5%Y4' );
define( 'LOGGED_IN_SALT',   '4#{b?6VkC}+k2?db<1gK[5;/*kVs`J:|F<$y6.3|_U=;mONbP;3EQ41f<]x(AS>s' );
define( 'NONCE_SALT',       '8)e|{Lq;1/Umq2i.)6=s4_1,I;DT^}dFE(V+9|d#p&#u=[OD|--%*AgeXxpka_+u' );

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
