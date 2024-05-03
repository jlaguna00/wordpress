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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lxeqq#J(Z{!Kf(~G}C@N@erm6&G>}<XhGo@4EGT$RL5sBdL?>}{Ax}c}`EgU)F]?' );
define( 'SECURE_AUTH_KEY',  '>1gRI(~/NhpXUPQ&dFr[1x:Vt`R|h23BWNCN{YD_~Y;{[&%s?X(id9iiUZc>19Yl' );
define( 'LOGGED_IN_KEY',    'sl<Bc=Nlf<xf`~R5$%QW2=qgpS2 3itG$ZzJXg/`#)R3Yf>?><-~kJ ojawG=@Tc' );
define( 'NONCE_KEY',        '4> [}NqIRVaiji}H02?gvTRZJ^{=WnGRJh2 *i>VClwGVhC x:Q:Kh?hNgXe C#r' );
define( 'AUTH_SALT',        ')E2J,dbBRo|<?YXL|hPu+9+#MGg{ScI/HKhaLU/D9 .Hyv)W:8s2ZxU}@#)a6O~8' );
define( 'SECURE_AUTH_SALT', 'v}F(|8b-pT/?*B^:!9!%/OLAL4@Is|!f7y%_;fCo;1ASdb1I`<RxY?4.3twaq-&c' );
define( 'LOGGED_IN_SALT',   'e2W9Ks|oWHAfF*3>jQyrxuAjGyU](,p`6fWT`OeNWVCU=Nzmk=bs>YUi[v$(i^yV' );
define( 'NONCE_SALT',       'f|bjwx}+?+l#[OKc#;[[*KGgkz`ta^~T rt$ coAfBf5N=X&degM:efv,j)194;,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
