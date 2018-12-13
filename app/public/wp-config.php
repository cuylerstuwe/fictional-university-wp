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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'ksZrM1YfpzCG9hzwaI2cAyf6o5/8tOpHoqRt9cWpxOGKVe/0FNeLNO9ZVcg/yAH/tP5TsOEUEoCRVBnHDSvjtg==');
define('SECURE_AUTH_KEY',  '7mh293DEGnQwkBDBZj4QXQqveug38ZWU7IOmyyV1m0TF8EMji/Fblqw1wL9YlxI9SSj/1NmN+XBnyf7WtSpp4A==');
define('LOGGED_IN_KEY',    'D6Dzwrb2d4zDLmXshEAjwkKcWFBoUO+J4mJ9D4PCJQkc7cGSuog9IL+kEaTKdHZqwPmv8TNGWy1GrXTniVSoXw==');
define('NONCE_KEY',        'ybAPuipP9JSUkIg1vdVcZlzZINkvKyWCU4rsFG+QXV65iFL/jLLk0MCaiRvMbO3hwtjj8OCRT8AU3reXeqZkew==');
define('AUTH_SALT',        'c2lD5NKAteCaFFFuHyOTpd53tg63tjLbTfZfkcbHfG+U2czEv1C5qtN+2mrcWExFUEeFxdwAZdwFohPdP5baCw==');
define('SECURE_AUTH_SALT', 'xQFV+N9SBZxHcLxbMDthhDeO6caJlOug3gU1qg6dCf1QzfJLl0CsFMxPrLvHXA4gqGU+OKlWd784tKT7Q+BFoQ==');
define('LOGGED_IN_SALT',   'KzszFKQmW2pOXjxQZpyc70Z4CcEwGgyfUEB1hvCA13il4CjwEGSpeyreLxC5KCsHyYiIL2hB+zzyeTCTKMYcIQ==');
define('NONCE_SALT',       'eayJgrpPayvS2AQPrf5nWIWp2DGWZy5o6A17GxQj00ydgEgqUral+OsylwQJMcyY8vAep24x1FWwgV0QjP88vQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
