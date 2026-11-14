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
define( 'DB_NAME', 'AnkitX' );

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

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'M8WaImIBgu5huLpx1B0Pv5B0Z6LTEiEGKgkcjVF5fRtf8yzDWX2TCLvpMkt4fjRn' );
define( 'SECURE_AUTH_KEY',  'JzhdmL1Auy1529YnrxPdg7n7yZfUQ5RlrCnh1DGuWGV4SxiN03Rit7KoIz3gSlZr' );
define( 'LOGGED_IN_KEY',    'kUQtB42f9oDj67YlUZqwoxFEho9y5CJ3ADcGl2zACADz47mC5LysisqtX3NMXrRA' );
define( 'NONCE_KEY',        '8dtbfd6a7aB9Lon55Sk4pcuk1CIG1oC5dyeb53CoiDuxJfHbBB9tAZeGG7g3aR4v' );
define( 'AUTH_SALT',        'Z1966kGIdULJLktEBZUHSu6zdgDyjLui6WSeXRfzZKTcFHE6WZFUCB7X9tAFqspj' );
define( 'SECURE_AUTH_SALT', '6CbtJYbKIfFv9NcChWlVmTNNCR2tMy3AQJXTDhdAHmWRvvKQRjJG3LNHiRfOu8sw' );
define( 'LOGGED_IN_SALT',   'YXLDkNL3yZobMKMae5Dov0drbRURAqh1VE9sba2CtU2OMqJAcS2jeZIjB4pJIRbq' );
define( 'NONCE_SALT',       'wbA2xu52NwOiWhNRdJON3MaEUmeSp4bste4loJHkdxmtsV72e6aJpd32dvJWoDEq' );

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
