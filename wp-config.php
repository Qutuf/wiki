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
define( 'DB_NAME', 'wiki_db' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6!C|V+!-`Gn[s5eB/b@tDmnN7K-G,uUk@>a)83<QG0 tjF}uz$}!*P-crb28pb<,' );
define( 'SECURE_AUTH_KEY',  'Vfiqj.Iu_rR(c6q=Lo:%I0+nL.?>,8oVlUIw[q|6a]!0_1BrM0iFJ<$.84-|:oM~' );
define( 'LOGGED_IN_KEY',    'g2# #Z|$6oy;x^tpK8nY`f=s@T^E%)e6)lfIV}FF^~GZ}]*o#5m1M{ !S/ flgqj' );
define( 'NONCE_KEY',        'U4C+@=I=FLX6_E])+yHKv&89 lbzBN* lr`Njz@:$y*&[(@.Jg.2!LUxQH%n-g5$' );
define( 'AUTH_SALT',        'x6?E?UpnN|>|9U]PAD~5_E8{X(CKel$l?H?!-pN=6K{Xb>qeAdOS:QNcv@8*b/2z' );
define( 'SECURE_AUTH_SALT', '}Y# 2~.fIi!7i&I{=_xlab/#6_@60kPGWt~vY79sFtabaG=Jctg7/O&k#gm}(]Vt' );
define( 'LOGGED_IN_SALT',   '~F[x=.]zffg&AglJ5j&0v@%ck,Ob]@Dh($B#IR,V;9Hgml<&<srIe<q#=hdXsKHW' );
define( 'NONCE_SALT',       'f_P?A}/9*?+vgkY]U9EW5AP,H^2 7m6F)#^NUQ%FAw;s``</QPYMf9Z9X~*Rg`A8' );

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
