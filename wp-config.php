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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'nf~qlQ1?K7P}`OQRE(+#zA)DP{]8;XXU1LVtEauJ~;DqpQEga!jF[@`tv^1Or6<E' );
define( 'SECURE_AUTH_KEY',  'CCT$#_}I(Un>_p$<oNzk=a< lh$(5E5`*cBMv~a `>Wf)/nA?D_6}<o/_f^][pfu' );
define( 'LOGGED_IN_KEY',    ' ~#`Z6 `1#E:>JT B->q!*Xo+p@oxQ:}^g6;Kut`{>jYnqkU#`oBm71M-}=p6 5x' );
define( 'NONCE_KEY',        ' dy1u,cVj)2U={n{XT6KZVf1 { SX@ABmXd b5=-m>6^O@8Z@s09JR(q&j|Db.Gj' );
define( 'AUTH_SALT',        'KHW*_J_| CP4HMRweQ(*wv|y&ji3OlMdq+Ri/[DIGo]2m)1GJt4*KNc;>E5t-]C2' );
define( 'SECURE_AUTH_SALT', 'C^{t5+KVW&9/uK8=pnLpr|eEcd<tRdRr6]r9J_x,i<^CCR5LIArx]%s|su{Q?F|/' );
define( 'LOGGED_IN_SALT',   ' y`T@%AM&16i)ssI{K9//~mM2Q0<rV3cQNLhh=s5dVshFJ,M:@d_M gnQ?S)}WRa' );
define( 'NONCE_SALT',       '$~9:R=QlzQ1jHJ8NP&K*B:,Rt9{!^7Nh]H|!rFk-[ZaRD|g_uC)5+5uNXz7}<kmY' );

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
