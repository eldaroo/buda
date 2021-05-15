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
define( 'DB_NAME', 'buda' );

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
define( 'AUTH_KEY',         'JDExmMk_]0Q^bh_`q*i2~B}!GE18YS/B?,<Sy|ASno%C]B7~tBJis:iiPyj;WFnF' );
define( 'SECURE_AUTH_KEY',  ']/S&xp{0]Fl&,#XC3p?AH4h! S!@9LHa~Vz@Hr9K*WGy^OO3>vGL/M/8i1%$0QTs' );
define( 'LOGGED_IN_KEY',    'Epjn[M>%jlc cT9:.$sK8(wJ+V>WEm2OG^!OTc))z[UHg.=7s|BzK14$Pa{|sK>=' );
define( 'NONCE_KEY',        '9gCG)x8bWz1DHKq;_f|Pf6!|)V(5%lN|j@OQ.nXOriu-(.^>6Sn1=i7yP8?oX#<f' );
define( 'AUTH_SALT',        '#CiB&2xviFcn<$yNlbwHcj,P3v3eO`SAlco+}DIQ aG[mj<=TMZs3saI6bLyP{0C' );
define( 'SECURE_AUTH_SALT', 'p!/thS [~j ,:ahbw?.A5Q7>JXCkK>W{&uTI19AayqhMOXnfsh.(+@Pu5QLouXLs' );
define( 'LOGGED_IN_SALT',   '+Vw%Am@]v2Vj#:SJ(K$$3$t?aL>x&r4wAC>7`x*4{u{s%<O6sh-GCG`}d~`m_YxX' );
define( 'NONCE_SALT',       '`$,|:GU<<P0i[XF|k^54dpwl?$vLdkU3edKb7dhsB41?yL}T*^ekcugrnfV}$Eyk' );

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
define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
