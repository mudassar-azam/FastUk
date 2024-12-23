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
define( 'DB_NAME', 'i6444563_wp3' );

/** MySQL database username */
define( 'DB_USER', 'i6444563_wp3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A.waMFfXIaYRhHbhopj79' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'r36rNEUkGwaaSMveojtXERsIKgJT9xmxT2R0Zbs3Us2KhMV4kuTUR5YlOJ4F6wZa');
define('SECURE_AUTH_KEY',  '5NHytoVXdJU3JC9vZ8tCSxeMyiaUbSJ3ggxrWw5sm6rLoci0c4Oh8CMVMAa1W1oR');
define('LOGGED_IN_KEY',    'zn6Y3rCSsV3TecGD5PUJKj3QWEFkVKwCp7ITYCNb1LIA0mlMDgnmIc3BnBTneZga');
define('NONCE_KEY',        'bRSDK6n7moOMHxuENtDkyqw2Q3eVhXyTFxV5dkXMWB2u5ix1S7G86oVl8wild83p');
define('AUTH_SALT',        'IMYw3oEbbIex0KQLeJePEfD667zuIQEIJ8wENnNVObldfYMGUht2geb1Btcu2cTs');
define('SECURE_AUTH_SALT', 'm6l5mH2rpGYlCcNII5tJUYA6aJ0u4nQwHvFcxg8krc1gouyyx3lS7gkwBFpoSIwL');
define('LOGGED_IN_SALT',   'adCSdQ3H7YJsJTDoP6fSjXaIQq5VdG1s2ETWRRkW9Pf3gKbxIFvtxyY8paJGGXAv');
define('NONCE_SALT',       'WU5gUzH9LYm4uBq6EtQOnjmo9JkXuribTh6D5vKOC0b5gqzfZ6wolihqFMW0NJPO');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
