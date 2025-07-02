<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'guttenberg-test' );

/** Database username */
define( 'DB_USER', 'yanka' );

/** Database password */
define( 'DB_PASSWORD', 'zyrffiz21021999' );

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
define( 'AUTH_KEY',         '0@ip6pjIy4V25| BB,i&xFjQa,FuDi[$M&h*[+<SDDWN._JM#`bMvD@XZc}xbRHH' );
define( 'SECURE_AUTH_KEY',  'O!R bc%5K|mz%.T-OzRG+AX!G9Q6)^CyJTxyZeW/qyWRs77lE6(!e{5uzVv$qYKH' );
define( 'LOGGED_IN_KEY',    'rD$<A-AuC|EX>!UKt.-Q$R.Ql!a<}WdgJ:EU`2+=7g9!wJpARAuH~/}ib?8dD-Ij' );
define( 'NONCE_KEY',        'p?]Szw?#W(8@I0RNaijbowvc-njQ?PrDZA}GNr4|)S{z{t@&/izj#0 )=`YcaeJ4' );
define( 'AUTH_SALT',        '&&/A!TmQ:o@*asCwDNU!x1DJL@3a]CDa}/!}pCDb?FHAZzxR/+B#_t/c,}KJ7%@{' );
define( 'SECURE_AUTH_SALT', '*ur-cv0#,9H94+uv7K-U?8A&ROewC>=C_sNd#Z:8[N2{TY_,RA}5>0s4N*!&RKS>' );
define( 'LOGGED_IN_SALT',   '#`zI0bB;/M7TE7btlH|Y635GV)(zT_Tr<_,ED:OI&!3P/CCopA]-8uCb^U.[-lUd' );
define( 'NONCE_SALT',       'V3+HH3@zd)!o~E|25*T~o-54s? JC&oeZ1`Xd7bbr.k4?9JtXcKr!~(LvfoOQ9lf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpilms_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
