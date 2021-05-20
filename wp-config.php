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
define( 'DB_NAME', 'buda2' );

/** MySQL database username */
define( 'DB_USER', 'darioegeaa' );

/** MySQL database password */
define( 'DB_PASSWORD', 'perrosorete' );

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
define( 'AUTH_KEY',         'U|,PX$xcj-,u&qP2J:O#4EOIV}ir!E$qoO9=X=66ordj&Z7^Kn`&`u$oe439@0Y:' );
define( 'SECURE_AUTH_KEY',  'RJF:}`1n>iAY!%Z/93Z}OM@dST,PvBvTw%%fQP=2yz W|MeMR%uw=$)FTJ^a/h=s' );
define( 'LOGGED_IN_KEY',    'M%V@&IfSYt8N7+Y>hfXuj[:f+JygZS:Zjgt- myDzjfA9JXH?{v~hy-8CGcR_XF.' );
define( 'NONCE_KEY',        '=9h#=]F/,~d1$=*?d$WvMV&1,#;aKR}Y<=b`8w}8Pr>FW{.Z,c#ASbAQe~r[o+-(' );
define( 'AUTH_SALT',        'qEay#T.^ 2;}Jy65cWh~?Ze5n`,g:iM|[kB)2KGb33dQreY9(;UI&rh,ZstB9%<i' );
define( 'SECURE_AUTH_SALT', ' xX!@DeK93]wzus]|Ux&:WKjb.R^C-u8kEB)xqK|Eq:[@GS>WUC=hz9E_9k,j#O]' );
define( 'LOGGED_IN_SALT',   'e$xw qpzb.XR>([>pD{5zr<ghM/)#Aw7k]&n^_6XNu(&O:2)[Eqbsyhno/xpfbUB' );
define( 'NONCE_SALT',       '^~(g h1A=so46>% &q*Uc%UMX1Pnlg4%{kl=))#fT%s-UP8,2A;ZwM`SF(V,ozzy' );

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
