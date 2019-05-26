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
define( 'DB_NAME', 'dev-test' );

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
define( 'AUTH_KEY',         '7DS_dcJw!t)5%3/%v.A_~=l6W:HDI*nM4m1BQ%07&y}lmeheoP[0F?=eiMh)l%0k' );
define( 'SECURE_AUTH_KEY',  's}hS3pvY(Tz`_T@:xUx73QR-6:y4w#3e0H6C3yba`=VNd=Z+ip{[q/|UskC._/~{' );
define( 'LOGGED_IN_KEY',    'wN%aqNA>?tVT>!JD&eiMGxnYwn2e.dZ1!*5PD}Yn)Rg^jqG7aeSBPy%xS.E( R{n' );
define( 'NONCE_KEY',        '2n,=yMP`arS</W([%t`v9ec/+I`6<$tf5?=jG`Z6oQ9lgy3N+gIU@:q/={+@TrK8' );
define( 'AUTH_SALT',        'E6hNOjfdOIJbiDJJ_]#z{^w OPqNoeA(,Pt},Dn~tU.sgERowbI:XSBQZkE,%I=6' );
define( 'SECURE_AUTH_SALT', '@eQ6aTGBRn*CYHOT|Q|_,rzu-3@l.>2RdF;hyXHW8`H=V|xPx4~Iv92#V<P`BN)b' );
define( 'LOGGED_IN_SALT',   'C}Mkq(qeN291^eRK`${SKkzy6W}{Tc[EPLMSzPOdRV?f}aPAo|IUQa|)Lp~]WTH(' );
define( 'NONCE_SALT',       'tb4@`N8o$VZ1R =mrSOSgO9)h`X0q@zhz]ZN`U}eq]+S[JGq6Cd3U2u[.S&oF9O-' );

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
