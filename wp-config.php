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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/okorole2/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'okorole2_wp998');

/** MySQL database username */
define('DB_USER', 'okorole2_wp998');

/** MySQL database password */
define('DB_PASSWORD', '50pVp-79S]');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '20devnimfyx4yefdmlqvrwn7jvzaimg1f77vkqyss5rasqy6zznzj1fof2nycpld');
define('SECURE_AUTH_KEY',  'yyba49aiu0s9kihdhtnhbzfdl8im1bciiln9szrkjte8xz0zlntp2ewcxibbmcwq');
define('LOGGED_IN_KEY',    '1nqvt5jlod9ssdr3f7o1y2bu9q2gxb79qyxxxeekxomj53kchogjncsbr0lrecd7');
define('NONCE_KEY',        'rldfkbd5xtszjkguj4mxt1oq5uzcnigsncmx8henf4cu7wd40ysdprhtln9jonjf');
define('AUTH_SALT',        '2ayn47di8woolgvgt1hyapnuyh6vrajkjauiuar0cvcgtdjfpo01xlaqiq3tgbtt');
define('SECURE_AUTH_SALT', 'jykoqr1vamgkr3xv4trzh7t1hmod8x6s4x6zytskzphfkuypr2y0knv1cnt1vjoe');
define('LOGGED_IN_SALT',   'doxrs1abxiai9cp3vkhbcb52epktdm4ai3dzhhvuv11yfz8kunyax3mws5osnei6');
define('NONCE_SALT',       '6uoyjpxo2gfeihtad5ikvqswocsmmd2sicmkpdx57yz80gh3oqyzypanglaixfpz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpc8_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
