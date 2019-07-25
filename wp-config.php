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
define( 'DB_NAME', 'db_desa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zsx-zPcd' );

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
define( 'AUTH_KEY',         '$T>Kl5)QyO8)nW`Nb7CM^oaALExy&6#V<M];~R0qfPiCunjBlo>)9fRQ_uxF|IdG' );
define( 'SECURE_AUTH_KEY',  'GB7Cg_09~>7q6iR3$jcO:8dB/]2KQ*fF,HV&6)U$&gd}B[$hv-bZxIsP:ziUDOT,' );
define( 'LOGGED_IN_KEY',    't%)`*S7p?:)K}{X)i$Qf5(F36@$/iJcpj#[g%)JC3Z2L7}MS.s+JRswL6:dd##ob' );
define( 'NONCE_KEY',        '5Lx<IS)<{@&) zMDGAhfL7@[LN*ttp, MVIyehEpQ]vyAg[n71Dt>RW4D3i9xPsU' );
define( 'AUTH_SALT',        '}=X;_Dkp1O.a`Eimh0_YIJbdq/`?w qX{OV!3hP!=4&E/S|hu_BvL)Az%BMq`1Au' );
define( 'SECURE_AUTH_SALT', '?xa+A,Mut}6-r2_VGlqVR!9vxE6is%>o][luuRZEwehr4Qum``JXMhe,&~eEzcTy' );
define( 'LOGGED_IN_SALT',   'Rq35_oqO9;2Hcvy?$dp=Wi.`hM*%M!^tyC7:/k3is.#!2n|!Z6@r&PO{^P=mS9#Y' );
define( 'NONCE_SALT',       'rdDe]SxJh>R{uguRN~1;i3n<Wm@;>xjLlU/3yy!8C18k:WyxG)4abQ{)}o+VJ%2>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lumpangang';

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
