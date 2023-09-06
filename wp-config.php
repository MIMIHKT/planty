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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'h4pywHQ53fos27SCtHvXEyJHokxlhCLuCGSi20rB3C3IuJ00VrmU3yVSmEQhm5zhwAcxkIg2TeQogeKiGaPTpQ==');
define('SECURE_AUTH_KEY',  '5HgB+4blV3kd+jpJjQmOlGOQw6aRWMIv6IsS/jjW/knOmKPVu9E4VXMT4Q/apzLPaAxq94NJUcBx2BA+1GXjhQ==');
define('LOGGED_IN_KEY',    'qB+xMYOL8GOVlOKH/5T/5CwrnrSbzwvGh+zOs22GYEjXuXYnmFat9GDecKiQbQG+7IXHO7oZyq030zHuw1wxGg==');
define('NONCE_KEY',        '/KSQExMv0k+EWb18GZ9M4SMWNTeSnWOhoUzQMVH6ThZiWFVw75xXK9aUGDJkP8M5e20JqnJOhL84EQolWs2q0Q==');
define('AUTH_SALT',        'AghvrZjcVaDy/PD+wjay45xQYzJdbcZf6R3Q9ZKfrBufjQfmXqUp4vQyw54Dmhj64+69JiOKJduqVzXSPlDkpw==');
define('SECURE_AUTH_SALT', 'sPSoSgq2EG2L1dpkMajB+4iiFhICgwXsooYsjpNXLA+Fhr3mZy2Wy87DKpyRck1wXSH6TlYloOdJUCkhtXGttw==');
define('LOGGED_IN_SALT',   'md2oEV/rCwQqFWzgJWnJPGsWCbZaOeuqR71zRzG2eGT+T6RKqaQbRQ4iLCLzBbtBJYZeybv7K/OdnxqhTIkXLg==');
define('NONCE_SALT',       'eMU5Y59QWntXMBFchun8KPV9Knn2Xj3Gns03uYCbPiUO9aMOfNL+YmMV5WuUUVMkpWajbQZ3lftDmqtxTcN+uA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
