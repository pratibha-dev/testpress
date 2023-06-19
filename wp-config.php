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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_press' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*6Y9rKU`U^P-oB-c]P4TPn+%%k~(j~*fO+hC]une{nu:/K;CsLxqol.m5_)lbl+d' );
define( 'SECURE_AUTH_KEY',  'MH>Yr1|`uCa)h,sJp|Z2_U6j~j}|8VIuKL+3!` [?.:ZojQ_,SdSc _Fu1X W)cT' );
define( 'LOGGED_IN_KEY',    'R^g,D_+l My#@$9ueV[/dVD!JtoH7{_AMtfU@yAw9JJqq0Phb-Z; [NAMuD,@+Y.' );
define( 'NONCE_KEY',        'vBnBj9ai&:Xzrl,gu`A<Pl^J^Z/Ov-5fQ%A!76,O|kh(bIZd:]hk~)TGBj=Xp-VC' );
define( 'AUTH_SALT',        'lZd5KTPxR@@YUT1 LpRzVcq*$Z#2x^@{]MU?V8k`+(1*9ur5&X<B/Qj8:+AA:iy/' );
define( 'SECURE_AUTH_SALT', '$hcoV]uJ6QfFh@}a^f]ULTpyFLE*f[yTOK3fW)T.j=@{)svX`EEvI)nVJpf3n:{5' );
define( 'LOGGED_IN_SALT',   '}M`9*lBOTX-f8W8oaZWj8eIyg9p}7Sh;mP+bdT3;uHWYXFfi[Sxz= =(ix;B<LtE' );
define( 'NONCE_SALT',       'HX]c2cvn^CG(B/KdRv|1#ypSc%) ,y]N ]&:<N7zN&86>Wm(eQ:I+8_}2}Gofuze' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
