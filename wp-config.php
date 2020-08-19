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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         '29L_KHwvf^jV+` d8l/:aN0HokIAw 9BQgBbSfar8)Z!6aoI?9z)WG@E-veq3^/m' );
define( 'SECURE_AUTH_KEY',  'noueS*9:1f#Y(l#BW;Ic(48M]ZgJgetA/8 MH.FOM:wtTk2*wFmu@C+WnL{}Ld]e' );
define( 'LOGGED_IN_KEY',    '&HO}RtboePa|z/1:J8P95$P2Uvo+!(t,<M0<S)kgD8V%rv64t}E?$NNY,:INsOL)' );
define( 'NONCE_KEY',        '+D<VL @]7p]?6z>u*K8O3!U`:!(K1^o}689deK8WrcqaVFrn<JIdbq WO3Q1Fl~a' );
define( 'AUTH_SALT',        'Tp{@@X/=r50,GVTMro~}3.*02!5WV$eUXPwthB:24^!~e}vH<>A?sSp-[0%(}5@t' );
define( 'SECURE_AUTH_SALT', 'HrV6aEXk/.{0Q-n7T[Z+J!9thfU-[/GJI*i]W|94`#>NWit[J$IVFso.4wMg`qpY' );
define( 'LOGGED_IN_SALT',   '.d6Sui6)o!=Mk:?H]Sqv`c!90>>z^.jU$WtL:av72#*uSAi{vT;n1 (xG:FGz Qp' );
define( 'NONCE_SALT',       '(/I<qixY.| [^Jn8vc[bsmd^spko2 V[W3U29u@&URF8O!&h0hxgR}-dj)eTQLMY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
