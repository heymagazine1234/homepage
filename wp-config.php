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
define( 'DB_NAME', 'heymagazine_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Jg64x+0w#?u2By~p(*ji/ E6pLrO%)91r@@5|UW#qPq,!+$puBo+e;R46vM>W<WX' );
define( 'SECURE_AUTH_KEY',  '+WSm],S(34TKZV[lbtUSCbH0SG?>[ZF[*pi.GdF7-pTKe|r Os^.@9>Fy<iqhaoY' );
define( 'LOGGED_IN_KEY',    'mCs6RiwU8W8;1GovR[!F}=Nc`[gt?[gUSMudI;nno{Z`M$*r)T0rw(7@T;l8{t^@' );
define( 'NONCE_KEY',        'XB|`g@-^e2,w|)Hk~gjC|@KvgGEpnX?(oiru8/=,cauj_Ae&tB5S*JHh%7zYzB3;' );
define( 'AUTH_SALT',        'y@^N6:/~q{Mk`nitI32<0xVH}KPV^Dn*Dp;!)4^=&*v)d]pB-Mr%t+,{vOiz( Fo' );
define( 'SECURE_AUTH_SALT', '}Xkh=Al&};v.Bl ex>A!g&e<wI[@1lGUS 5RB4%|TT-53QA)`>.Gp^jc8;LfUlQ^' );
define( 'LOGGED_IN_SALT',   'ok-W.LQb|m4P<{.$Y@o2(a+G=Q#?0}G:)2t?c3u@u2X`%5Q$q^;K3e8+s()vn/fz' );
define( 'NONCE_SALT',       '-T7?psw2R!CDDaMoXPK`bGVk^j M`xHQ}JaQx=bj VSRlFE,Lcv!NhfsU;RJ,^yM' );

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
