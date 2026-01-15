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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ADme`fCl?TsYm2%eZ#-?1s[HK.B=O)a7QWRF=]!lVe k1Fvy3oo^=cX~sNO]-<xY' );
define( 'SECURE_AUTH_KEY',   '38*^+ u=QY!Mkqw]+nP@6-}@ F[Gn92-SQw0u?XpAj!IyS|,/m{x[4*!:>#hANsl' );
define( 'LOGGED_IN_KEY',     '<nEWcDvd,-/bARmv)Lzaon|$mhcb.4f6^g|Y,t<[v>I|Tj<i]sL9I!`Tm]<:]r{7' );
define( 'NONCE_KEY',         'fn^x>^>:G9Ee#@0dSWVk?x5gEXaqDEd@%poEB$}1HoZF:e;}yPZ&4.Y9^ql=im]e' );
define( 'AUTH_SALT',         'Yo-7xFCF3oc&:78ZNr4%BX=/7>-sF#K:zsq4A&Cj_cV,#R#in3f|{EnIc`Xh=&cU' );
define( 'SECURE_AUTH_SALT',  'd3D$Yz?fLiS}p7L2i>l!DR3&{}Gy[*`0)3m;B&FWCS`dy~IG@NMT<ha){iGAa$L:' );
define( 'LOGGED_IN_SALT',    'O}I;NYqBR{YkW>sm3Xm<98?-/vHX/GEQi;^459>=Y{`|xi?q1T2k{X;f5AtwDrOK' );
define( 'NONCE_SALT',        ';WqMVFwdj#:+A#LhQBMIRPk`!^(k|;ZIaVuyNQT7DYctT>e.91/B&1M%~n+i~RfR' );
define( 'WP_CACHE_KEY_SALT', '`nwdB]/Sv(sd> q+45y&J~$^*:-k3DVmM[>E=Tv1,m1aa7f) .Xce{<5J1G{-Ow6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
