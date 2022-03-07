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
define( 'DB_NAME', 'angelang_phew_task' );

/** Database username */
define( 'DB_USER', 'angelang_user' );

/** Database password */
define( 'DB_PASSWORD', 'Q3LQFGQLue2HwNC' );

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
define( 'AUTH_KEY',         'ZCatm:CW=,C7{jpl%5E*<%`T2agYPK?rsZVSR=!-$9d;/OiTwV9{v+r,@Yc<Pth&' );
define( 'SECURE_AUTH_KEY',  'k&<V+C}l+=Bp^6<9M1/_Wm$Hf^az?2B+W}:Zm`&l>w.^wqfXqt*0!r!*u7.4FeyR' );
define( 'LOGGED_IN_KEY',    '_di5e2Aufz8juV0eGT7WH6aDp}^#HZNMIKn$rF?a /MO>]&.E`K]W)3i.o$({0qE' );
define( 'NONCE_KEY',        'Xbvr6+iItgn%0<em/p?vK@H4>v#G/:04s=WW_4|9CS2gjM;+PCb~76v{kqX0E{i^' );
define( 'AUTH_SALT',        'dq-K{[WgayMcL9*Y)kXOi4*s{pSNQs[*fE,Obro!V(u}6gWyqz8Os:-e]l@l6p(m' );
define( 'SECURE_AUTH_SALT', 'w4+lqCe$gR%9 ~q:{bGGUj}PjX_RM*Ukg31ityrQ(TkwOoolMTSc299T[g3kHSmX' );
define( 'LOGGED_IN_SALT',   '7;m1 BBd%5PB`1qYi!GfF]+sAu.KU)y;h`%:*w5i9l0Wn=1j=58X+)t}i8(Gov63' );
define( 'NONCE_SALT',       '-*n~vLfYZDgrPJ#`Y#.<N%&>[1jcD!v~OH?9KZ<8{YIW_=dk+`Bg10v3*Q{cpx&B' );

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
