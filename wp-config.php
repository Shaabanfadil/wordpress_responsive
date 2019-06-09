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
define( 'DB_NAME', 'responsive' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'SdWK=l*!.>Co6C-PDGj{!ZDc`ba7I_O&sU22SA%K/6rseRj.~WCxf4)X@Nm4(Pwm' );
define( 'SECURE_AUTH_KEY',  '_wt!dx!**WVoe?qEo,s_`>pDf{oq[~O7?s.P{RiS!,SJ*SZl-#%fSrX-*|Um37.W' );
define( 'LOGGED_IN_KEY',    'ndKel2jjzFUg4gy1~w!q]pM&ppH6%k+#.WC}k-e8(@CI]C6^ lH49+~Pk(uArDbu' );
define( 'NONCE_KEY',        'wqkI3:*Y%H?!zwTI]>nMg->BZKfmTH-x{6:`e@4p`K9jA80mO4fcwo+Gf|oZ@87=' );
define( 'AUTH_SALT',        '5Cwga+)3G%1?u_t;0&j&a(-hDR)U(k?&wVoZAp?W)i-ic{.ca-=<6T$Hoz_!7WV6' );
define( 'SECURE_AUTH_SALT', '-{6pOS7(+A(w{x0C[ae`]1mg7;<e=P+9X)V*f#do4o^M~+>QgEP c^>zTxk^G6In' );
define( 'LOGGED_IN_SALT',   '1fY?$kM jL*#ISR[>5&Qk(nf]zFb-|MxyDW evg5*oDF?]Ej!9p~d4e2_FAgmFj+' );
define( 'NONCE_SALT',       'ZSo8>BQGLquvUeOoAS-Ia}!bo)?OxLY;E9XFk!Q6#mpQkepRm.E0xJ:J]ZL>bS/[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rv_';

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
