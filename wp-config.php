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
define('DB_NAME', 'newmaturDBgape2');

/** MySQL database username */
define('DB_USER', 'newmaturDBgape2');

/** MySQL database password */
define('DB_PASSWORD', '6Zt6LGVjB');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^XAQE7Q${,7j$x#+HWSi2HDSHt#*2exq*t9TLe]A6]Aq*y{Xq|4[Voh-GVRhV!1:C');
define('SECURE_AUTH_KEY',  '0ov|NY{TiqA<X7MEUIu<^3fyOdS~1]Dp_+p~KeWp5OH5P+;#6m+pi+HWTi2#6Rk0');
define('LOGGED_IN_KEY',    '4o@|odo0GR-[5ds~GYj{BMv,crn@JcUJc>74Nz>@v>UkgvFVJexEXPi;E2{Eq.$.');
define('NONCE_KEY',        'V-8RZ!5Ck~|Ohp1KW~:9d3Fn$>Mg7NJYNz},8k@v|zFVRk0JC0Gv|euATLAP*{Aq');
define('AUTH_SALT',        '{}v$rUgU7J7,}!ovkRYqXeTLIXLy{.6i$u.yEXQjIAIy<^3fUjDS_1:Dpdtp~Od');
define('SECURE_AUTH_SALT', 'YBt5LW~;9ex_Ham]DPt<2X*LAPNd:C8OCo!-:Zol-p5OGZ#91#5l-x#SleSh1Hgv');
define('LOGGED_IN_SALT',   '<.mXEMA<K::Gs#~t_Ohat9SL9O~;]9l~xl+LaWm6L9v>UkgvFVJCV!4}Gsgws!Ng');
define('NONCE_SALT',       '[~]Oht1a#-]_5h+t_SiWPi;DcrBRF8R!0}Cocso@JcVo4[84K-[|5[Voh-GV.3jy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
