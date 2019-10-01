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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/////moi tao them
//define( 'SMTP_HOST', 'server.a2hosting.com' );  // A2 Hosting server name. For example, "a2ss10.a2hosting.com"
//define( 'SMTP_AUTH', true );
//define( 'SMTP_PORT', '465' );
//define( 'SMTP_SECURE', 'ssl' );
//define( 'SMTP_USERNAME', 'user@example.com' );  // Username for SMTP authentication
//define( 'SMTP_PASSWORD', 'password' );          // Password for SMTP authentication
//define( 'SMTP_FROM',     'user@example.com' );  // SMTP From address
//define( 'SMTP_FROMNAME', 'Kelly Koe' );     
////add_action( 'phpmailer_init', 'send_smtp_email' );
////function send_smtp_email( $phpmailer ) {
////    $phpmailer->isSMTP();
////    $phpmailer->Host       = SMTP_HOST;
////    $phpmailer->SMTPAuth   = SMTP_AUTH;
////    $phpmailer->Port       = SMTP_PORT;
////    $phpmailer->SMTPSecure = SMTP_SECURE;
////    $phpmailer->Username   = SMTP_USERNAME;
////    $phpmailer->Password   = SMTP_PASSWORD;
////    $phpmailer->From       = SMTP_FROM;
////    $phpmailer->FromName   = SMTP_FROMNAME;

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{xEn8yHyGd#Yj;sRK1yQq2k5Um6hr|ig]f$c#hn31Okg2>$;mE*-cQ(gzOkImN:~' );
define( 'SECURE_AUTH_KEY',  ']:;AHE}&#u`zu TsdyTsbFU]wYi6 oh.M,l~PhvY}^Tptd+7(>SG~C;7;$Z8tuaK' );
define( 'LOGGED_IN_KEY',    '<+hQR`BRim~uPr5((LHBr)r;$<EK9SyiX}U(}loS,}li0.G0C>$(m;F&3FLn2zH~' );
define( 'NONCE_KEY',        'IT)!cV+AM[#MVNbV$d3V`SWyZvHU0oLWiR>)Nu6MzlD(2h-v7xDrhk@@q*s=W=O|' );
define( 'AUTH_SALT',        'CdJxJfV0@>,+gi&0Zx8I5[o9V%|A2nSSDX&v&!Nf.pYPo)!CmWjN~!L) g/<=:[<' );
define( 'SECURE_AUTH_SALT', 'hguaS9F;O7SY#ZEw:k:&i2d`E7h1V~p[prULSD}2`kkXq5&QzpnjM;XP_(Xjt-{m' );
define( 'LOGGED_IN_SALT',   '=%7UzPh>/=mpq=NtUr~o,-y=Hm%Z5a(Nx%./R<+e&><:xrd3VXAnZ/iBxXv$[%LG' );
define( 'NONCE_SALT',       '8nE5p<Ynp?!1?Sg~=sz;lF@uYeDT$.iA?#I:@?&9_zpR`42q)S:e^.YE?!9I/dx[' );

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
