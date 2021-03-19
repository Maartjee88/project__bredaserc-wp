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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oRg1+c3qY2Jk7dVyJNcGe9CLaMNRqQluV9ShgB9quOG+YgkXHK8Kzk0oCFhYWQty4z+qQ9CTwK/DeAn+EVC53w==');
define('SECURE_AUTH_KEY',  'cvhZOAtQMYwTdHkCG0+Gsz3vElTtJKXxVGSueUfoX2iMOBO4kS88t/2zsbxtGe0BKPP2TnFG0K3ChmCxyPE7eQ==');
define('LOGGED_IN_KEY',    'CTSwHJV1dwShhJA0yrjz2OVByYEYwIFdMYHVVyS6MZ8h2Cqz47xflEM4ccRKQlttFiEXt1kohlEk0OVMAvr5Ow==');
define('NONCE_KEY',        'VN5GKS7RI6wyKDQW9It7p9TQBzAnMujaFOztP10Kn4cknknbnwPAnOEGUOpRnLrpbCFwY/UgHdSZU6eICYdjQQ==');
define('AUTH_SALT',        '1N4PNpvZ1x36ljRTf79SzBSLG/tItLGtNfe7qtA9XXp3iOncvUIQB11nUooAS87+3Kt6tovNO/wjbwiQoY6tQg==');
define('SECURE_AUTH_SALT', 'y27SkWFJvLx7xhYVAHCDx3DmquA+Cn6MR9Al5RnAlKMEP3hRsSSfwPJQY82knFGOuAsxiXgwZndOsrwGC7YdQg==');
define('LOGGED_IN_SALT',   'jO7s1fVhWtb+QWGgzU6emcDAqCoai2XYMDTRtalIWPNp28xxfl5lXmYttlmBT9sAcqdrPnGaYrIHl8oim32u9Q==');
define('NONCE_SALT',       'JDhAWZj9rtSjRNeZI0gg2YLaLj3Tk66hN3U0zBUPhndYAOLEJO+Dg95RbKcSQphXJfBxv5jeKptokb4lwAx/BQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
