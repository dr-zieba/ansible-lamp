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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.1.153:3306' );

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
define( 'AUTH_KEY',         '02d$m.T|xI+JInY>sbs-u0MKo>3nZ!jEjaEFPhm Mv+R@hr59>aT?y67m4W.6<ha' );
define( 'SECURE_AUTH_KEY',  'Od@v}sv<-jhgD0XZ]C&:-+B>rlB [lIa4)ibO*KeH5ts!dp;szG^ <n`CTD;]N^|' );
define( 'LOGGED_IN_KEY',    'TJ!hHhF9Rs[MgjnMcZ1,5)]mN-6!n8Z)MMR~Q|5_8Copf4G1uhK+SUq}*5P4g[0d' );
define( 'NONCE_KEY',        'j04tTX|vbY?F`NMZ@t?n1`y6[&Fu6>:7v-Wf9PGK4x13d(U,1E^`zNR`cRU]H4pz' );
define( 'AUTH_SALT',        '8)vL6)7d7.!=Kp.fxn7pL7/j7Z@roIR{!,X/;r.N1nF+U]cb!TeBx:#ub@j`9LmW' );
define( 'SECURE_AUTH_SALT', 'e_41nN@/o?+2AWD,<4$e]x<!u=|`X4R@QB&W;P.(H?J#dd=~>aPnXs7XCC=yMt)~' );
define( 'LOGGED_IN_SALT',   'u<saKsxwjUK}P+r`vUNYMS]D6+KV!8=Z&%n}}z4{u`f|OgHxoJCPawudR>}33?=E' );
define( 'NONCE_SALT',       'W<p`S-UWLd9uB&YD]U<y4:}Bti2?j74^I1 2[4XaWG39LSxk1sY^nX~jy6#=,`4t' );

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
