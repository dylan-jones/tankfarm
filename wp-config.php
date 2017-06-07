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
define('DB_NAME', 'tankfarm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'B?r5cG5FJP3]r:lP%DmH26o>)9*Z[v[h,}NAQq$.q3]V*,Lmr:K_:*Ya2Lt#)_L[');
define('SECURE_AUTH_KEY',  'M:TFuoAtzAw#K!YKDv9-B~RxFzk$lFfBsUf7;=fv3W.@/&*FF;OACE<z2T&d^>^[');
define('LOGGED_IN_KEY',    '8R_`BXA ,*d+]b^zj-o!&Af(%{7(6en )[4UHqBhn1Fnt` feQGd$t/W0?axVxf8');
define('NONCE_KEY',        '`a+w5O42,/g$QkjD^Zz|qKkPQIX&G{Zw]P~v,21,})Ngc^{-q4bRH/j9Uy_?~4H*');
define('AUTH_SALT',        'p1>2Bh=*QA6#_=Zcf}; kq3:]J*ODqG5RX5YJBlYy1lnP?5Vhp}w3_-4-cqce(88');
define('SECURE_AUTH_SALT', 'iNjj(<<:bux~1 Kbk!O@watCXagyR`3xVjBej@JkDO2y[m$LlS;)E(~,^pRop;.i');
define('LOGGED_IN_SALT',   '+Z#rEE3Up*H>qVC`or8XNYh#Do~?oET*C5:$#lU1o|1s>An&#)YMg4=KWYrei=B:');
define('NONCE_SALT',       'tM=P^JrnNBMX#,+XQE#;Eb!C;s(Ry3R6_G3?{/V|GmKdzMh3Bp9n_1o*tNBO}0g}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tf_';

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
