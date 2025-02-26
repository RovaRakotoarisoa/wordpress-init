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
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         'Jks.6zPvmU[Aw_i=)6VfhJ@LXuaR0B[sSo;y9Gf38lv?2bER?$0GsaQ,g;Ru=_27' );
define( 'SECURE_AUTH_KEY',  '$o|U{y4;Z)2p+Yc.,0`u2<tLXFK4ZcEC]M_Lfsx4eKkeDq*;4Nrpa|F)|lxh7U]/' );
define( 'LOGGED_IN_KEY',    'M!-b4F0U_mVZj>O&U<MZj;|;m!*G&*:^$iFjKMM*dR=dJ=)Z}rd|n([6AER_P2O)' );
define( 'NONCE_KEY',        'eAg^E5}XSARRM|&@q|d4a[=Xb#j`aNG@4=(/^xJvI<,e@.:d:U{V~9yphY#-m;)L' );
define( 'AUTH_SALT',        'u~V`A0*=E(?g31QTVIG[8i]} takLbhn]It]&xsyXFk%*4qHYJua=~|TQRwsK,:s' );
define( 'SECURE_AUTH_SALT', 'g60cn%v7@xzR?gbT98kubyaY&}tStJ>mfgSxFmr=y-2xc.Ax0y&)~Q>d3*,-2Wn ' );
define( 'LOGGED_IN_SALT',   'XpK3:8%siGcN>PzKjDOnK4KxctK1o22*M&?imoK,wBGm;G52.)A,i]>l$r6wUC,8' );
define( 'NONCE_SALT',       'FF?ROgDRvwo9;e~hq2){dJPHEF`8 <~e4xLOp}zI9d4L/g96_8aUZj9?25W%691>' );

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
