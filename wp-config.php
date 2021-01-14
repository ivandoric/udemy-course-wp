<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DATABASE NAME' );

/** MySQL database username */
define( 'DB_USER', 'DATABASE USER' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DATABASE PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// Change this to reflect your setup
define( 'WP_HOME', 'YOUR HOME URL' );
define( 'WP_SITEURL', 'YOUR SITE URL' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GrlS$ch^mp6/fad,8G>k|9U%i=#VOuT4yB%P$(RxHz4Lh,Lc00C&z;en~gSpNGh.' );
define( 'SECURE_AUTH_KEY',  'G7?XNDLHZKmTq871Kx8ZQcfEW2B7v$~!Ic&BvH-]%5Nn;A1l45x{8i+&kgh5xRdy' );
define( 'LOGGED_IN_KEY',    'XAkTNU&0&ni*S]uRm0V6~*d4Y&.B8k1N-gm$$F)VLos=N;^ Y!mQKVTBT^fuSy}+' );
define( 'NONCE_KEY',        '+v>(IL]DhTx0QAI< qQt8#DYqV<N>Ic)Yfq8~`$fEa;<U=tH#,jfCy%`^O2otHIl' );
define( 'AUTH_SALT',        'CIca);#DPuH%Rm0C>hN|w+9&![g0MVTYI@H[(2aaxh<V[GG_ rc/9Ym:2S:8/JU!' );
define( 'SECURE_AUTH_SALT', 'W+wQ_g`t!MrSKcQ9:P}C(Z)IoecDKu2*<Up^3RLP`[SW*BuYNGaAMiK7^CB||d|?' );
define( 'LOGGED_IN_SALT',   '9O5aqd0B;jfR5~Pmr7n5FPY>9ySCTb]HPL~a,mv6<}.RfAG(:#mqsNTc.KKWm#sZ' );
define( 'NONCE_SALT',       'ZX*%Oy]Mk+xpw6G./:sqcKe:uSyB1piT/h20iw,((bxBfnHoGz>ZQ=a(!vz!Tp5B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
