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
define( 'DB_NAME', 'easyestate' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'kingmelwin2001' );

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
define( 'AUTH_KEY',         '-$BgP3ml[hID,<!a0p]]n%XD5c*^xjMWTyjifuqO)t^*P+i-pBo(WVEeVhiun7*k' );
define( 'SECURE_AUTH_KEY',  '#?#KD>%)*`(e6L;7B,!y@A.|cTj%-aSrbnB|?kgGpag:r`E!}$`tPyGuK@>? A({' );
define( 'LOGGED_IN_KEY',    ')-Y-|k#V^y:+uI`{J^X#}2C_!csu/T.5~1BmeZ-KE%=seIWI S5mVg<ZsPcSxx,G' );
define( 'NONCE_KEY',        'adu&w`5Gx<+^:`h)i:0iw,(v[cPvkkb,dA#bEHliH,I6Wr(MA9*+(zLZ]oM1AUWu' );
define( 'AUTH_SALT',        'SKSEEe>U:R<>!o t>};H tF=s+Kb)?G[&=)&:aOM2/~iz!Fw6o,,?9f@usWAd`GY' );
define( 'SECURE_AUTH_SALT', 'fyG7}>o^g~&L2^z!!exQUA;Z8N2g0I:3pCE:%v7cc:w:Yq~$Q9ELS,T<SE!X_q]c' );
define( 'LOGGED_IN_SALT',   '`W`5nI/v7mR[((mX2th%:v,n*=u>a^${e:D{)^{s}-4LtK{ _h$*Fn.m3Xk%>b*p' );
define( 'NONCE_SALT',       '@N~y?)>ckfr$m,e;b)0Uc)^9O{:3bw$Y[k`ohRkUd*$dVn{zoeHKoP$s2SiwjER3' );

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
