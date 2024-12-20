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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '-zb_&q3*hp+]SI~mD&y$,k-. T1R8z99PT[#d{>tbo)6{&8?(]KIH}Xcv+PBjuK0' );
define( 'SECURE_AUTH_KEY',  ']Uk0o?5K$?f(6oGp}rC=QjY`VDV<_Ag,2(ep`+(dB;ci}@z:!h$7F$_T-;J_Wuvu' );
define( 'LOGGED_IN_KEY',    'OY#HW7@5tr8?olg~/KpzPy&5/gqQ!s80mdyt[y4/>fpgC`zFwf;5S?}S(viSBp<F' );
define( 'NONCE_KEY',        'CxsQOUgXt_x>Q=(Q29&Pn~Nr@F*UCSC@i/|_7A}2{o]?]ZMyj_N1FY~:5eZ%3#j?' );
define( 'AUTH_SALT',        'W)=@ i7xZL9|e^_p#e;I]FLcJ |Nw`[/d #EG#lx@_fy?{(HvbE.~.95fk,1 ^`{' );
define( 'SECURE_AUTH_SALT', 'pv*A3Wp17F#c9?^k8/S(>tZQ:^&;n=B{+C|tdg~+*}MRN&~3qG-X4&}NSD_9,.?Z' );
define( 'LOGGED_IN_SALT',   'u.__&zE7xjZNd.3i2GowBV0sa}![jyZ)Dg@S,HVJ%GiaI{j!rG-- )eLVk(:hR7i' );
define( 'NONCE_SALT',       's/%*DfF=63>t57]|$R`6tM>zMl!lcT?dp?trK6L8/|O^K?t8&<dZ2A9A#ZJeEzf=' );

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
