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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms' );

/** MySQL database username */
define( 'DB_USER', 'cms' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~&f__VKyY*X7&o_#N^Hb*G7u;jZt<8QX$m0#3/ye7&0&*05-]%Q{e10*brr^5:8&' );
define( 'SECURE_AUTH_KEY',  '*Z):.$Sy^92%mLsc.rGdB7>((@}C3;HIwMum^2UV:ZR(<kmJ6KU!u6E<ZI_E}Zyx' );
define( 'LOGGED_IN_KEY',    'GZh/_=AswU!oNI!E.4jY!1O)ax$x`iF]p6jaFQbJ)@ p5!!_79?5d|?wwI]BrMe~' );
define( 'NONCE_KEY',        'uMeR%nI;xEAQd6=y}Tm20LtR{Mx#FeTg>eoD!,74vyqvoOlFBCAE%DM2.kiT#@< ' );
define( 'AUTH_SALT',        '3 Uzu#b*DWsMt3;0>w^1d#5?v8{;>juL.QsC-q2yWx#3Q|JXxg^H%RowXoo};gOW' );
define( 'SECURE_AUTH_SALT', 'Y)QJ_|E8^MXhcVt]BtUeG`UyU3s;QK0A?GOW&{Eo<SAc{9Ke<aANon1Su{,fY+Ib' );
define( 'LOGGED_IN_SALT',   'tK%w<DEf-XV .@?i$I;*~<H^* 4O -g6208huK5R4SQNAIeWo$R/D5>KPKa_{Pv]' );
define( 'NONCE_SALT',       '`CmB3bO|7T?JSBq|oM}HM=&m&@f(zE[%=fq}xHNAAN)qeFo>LjS%Qi_Cn)Ag/B(X' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
