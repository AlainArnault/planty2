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
define( 'DB_NAME', 'planty2' );

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
define( 'AUTH_KEY',         '.ga -1%q14#,w,K{L%xxJXB4Mtrd2VuB(|~8P@CPq58s,kuAr~@EmAQRU`  esu;' );
define( 'SECURE_AUTH_KEY',  'BGq76#2dQ[kJXU={r|-8>7ovg{fvxh(5sNN?kE>VCK0/C:l5qC5%QFRz5*K_tUgX' );
define( 'LOGGED_IN_KEY',    '>Iqq2-#IkBe{v.?m9xu;Ay%pI,We@7]_{]uqy6-c9Z)lS=)XnHaPq*4*AmHKUXVV' );
define( 'NONCE_KEY',        '{w!Y(W9u]79$}f1sKJvO9@JA]:)`Kj:7>u{%k 0&n)8iig~c+56%RxO}r!h{;6] ' );
define( 'AUTH_SALT',        '/1,%>=x~aIQ*(C!H~jcEqf?QdG>J3Uh4`vOi*iu4{=//A{W34]$Or=[?H08-Xo,c' );
define( 'SECURE_AUTH_SALT', '9m$dv`&:>r{W,o*aFTbtn9:kyc Gf(50S^;sZyRxuFV`76)cd!W6EjE@ush#t(|V' );
define( 'LOGGED_IN_SALT',   'Y99EdgM?:SCoMIL7W16N3I;NYTY@W6kozCk!tu}3:5~!4*$P<1TJ^KzB7:}/]`/-' );
define( 'NONCE_SALT',       'fCttO_e(/aIRH60|z1Ppt?.Z>Uot>OxBEVzb$b*EvqM!V4v%<>SQz21F_^yyna)U' );

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
