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
define( 'DB_NAME', 'bulma' );

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
define( 'AUTH_KEY',         '_]p<=hIvPZX>TQ?rVsH4]T%H1fG%RR#R@IHL4xoYH$#h_C zk{UMs+HG3C[{/(td' );
define( 'SECURE_AUTH_KEY',  'R12vt[KZo12|MxBTKq^X&Lr+ ISn3D0ut7R@UbHy4_&tvUz^Y9kBllA@M]5$og;v' );
define( 'LOGGED_IN_KEY',    '/GgbAhiU=%<k&fAJUBcD~@RxpZe@%;PX9di6F=nN]cMgz2zC7[e2@0`%&W`m>-G)' );
define( 'NONCE_KEY',        '9;F+CI9s}^dbP)?8`DE8N9opUd~^b-H2a{/G=1kci@J d|OQ%Mo2#2mJp.eb=PLB' );
define( 'AUTH_SALT',        '*//p4W`B>gj}h>A+D=Mu,5-DjQrDp[P1P* LjUQBmDR(D<IJ=!{{Sa4fByY59H.K' );
define( 'SECURE_AUTH_SALT', '8>h2YE-pBRcElx(f~GT610|ML>@)T`*(jCi<h8XT=D-),G:{Q6C<fUWuNZkFEdG5' );
define( 'LOGGED_IN_SALT',   '8a55>b$mu|8gvj`jml]:2c6b49RO3}<3[P0S`E*9la*ceH09|m!`tSSo,h~K4GA1' );
define( 'NONCE_SALT',       '-EhEeTZ/uTcA$]e;H8.4`At6Zu(}wXVa(@2~?/#Do^1P*JTLLc{./Khk6.*~n;GT' );

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
