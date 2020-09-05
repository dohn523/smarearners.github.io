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
define( 'DB_NAME', 'epiz_26662359_w615' );

/** MySQL database username */
define( 'DB_USER', '26662359_3' );

/** MySQL database password */
define( 'DB_PASSWORD', '(600d(pS7H' );

/** MySQL hostname */
define( 'DB_HOST', 'sql304.byetcluster.com' );

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
define( 'AUTH_KEY',         'be7lfsxktutl2fzfhjcbqnkpoln0xdva8a5jpsxpozcn3jybdfdknj0qmhdxzbz4' );
define( 'SECURE_AUTH_KEY',  'b8hoeai48onvs6zdamq0awwe2it3max5lwagnzixwivma6iitlzwsdzai4qm90bn' );
define( 'LOGGED_IN_KEY',    'lka1ugxswnrgciecm0u7e41fpf89jtip9f0kmcr4pfttyznu8tri9mdwwfyxmvwp' );
define( 'NONCE_KEY',        'gblwtznx9fzgvg5vmfszls6hsnaydhdsxjt8bbuxi5rxwik3ovn9bg3pjnwolp9a' );
define( 'AUTH_SALT',        '6secswbye8nn4kvt1sasjbqiuy3kihf7q30sdlq1jcwydfk2tjmbjg0hxrgpgnxl' );
define( 'SECURE_AUTH_SALT', 'btszm0bokoz65go5dyysazglxp1mnqv1x4rp4ub9nuomd0tm1hhkimqmor6s3fdn' );
define( 'LOGGED_IN_SALT',   'pyggtafcvsddw0j7fyy7novwkdnyzfjclytb4iyuf359pkrplvlcg3gds7nz2ryj' );
define( 'NONCE_SALT',       'r2vxluithfsqnfvyofdjrmxgmdspzjrss6pruwc9j5ofpznpkbtb7nfiat32ajh5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwt_';

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
