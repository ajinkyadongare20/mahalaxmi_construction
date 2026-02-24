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
define( 'DB_NAME', 'mahalaxmi_construction' );

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
define( 'AUTH_KEY',         'yPwWT=<Qb5;n=%!i4c:D0{<+{lO1nY(([wXwr{l_*p%x8lD#H#e3caDod$I8bdr2' );
define( 'SECURE_AUTH_KEY',  '+yeuR~5SZ_~@]1*Y)E%0=&fQo.,FEu4Lb@]MAF:`$hhC*|dNk4}!?#ncH4J*.u?>' );
define( 'LOGGED_IN_KEY',    '`;.!;uuz:QNaq1EP+*:{u<>1{es)=#Yz=vLl|iS@UIN#qDA_>cZMu2:&FU(-P7ud' );
define( 'NONCE_KEY',        '4Ae6ycS2.1s{=>clIbvkmawl0}[)^&jbAhKw(vW&2g)q*)xdly]^J2p9b&?z0f)i' );
define( 'AUTH_SALT',        'V~8rsdvf;4(ID(R5C^[WB16FS= LpSJJR|`=BTU~=0aadH|grxo%Ri>5~U.Lqtm3' );
define( 'SECURE_AUTH_SALT', '(WD8``Q<-nPK0OqyUONZC;wXNVm(@KCox9n~sn,~d$m^ja5Zx^o;tS@il_0&+KmC' );
define( 'LOGGED_IN_SALT',   'K-V+pp/8-GW*VP1Liu82=!-UD{9!U{-t1$N/:OgtR(O<p|H[[}#AvhvOF%Lm,|6i' );
define( 'NONCE_SALT',       'm<|im7$)^gM8%_bIBx/L9iOR>ib(NP6/]!0?1TUX-;ffay^[;^ L:gtNSz72=@wd' );

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
