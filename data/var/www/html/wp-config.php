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
define('DB_NAME', 'eb3kitlearning');

/** MySQL database username */
define('DB_USER', 'eb3kitlearning');

/** MySQL database password */
define('DB_PASSWORD', 'tik3be4DB');

/** MySQL hostname */
define('DB_HOST', 'training-db');

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
define('AUTH_KEY',         'eE+}L;1-A8kf2tZP<`a&)aLAs?1^NDwCE)7A,DEoE8-*8H,:RLD%VE#35THhCEIh');
define('SECURE_AUTH_KEY',  'aJ]Jx#rS5`E&$#b01CzxfPwYark)AqP7-pVW[=+^d]~Rk7xk!)JZ~@zcl=%1K, X');
define('LOGGED_IN_KEY',    '_Dn([DM/xm&Is+]ng_RI1aIQ4iRk:llJ6AQg2b;02?}RlS1AU3b:NZqk.v9A,jA=');
define('NONCE_KEY',        '( d1}3si?-vlz3*t^4a;/SV%MxAiEu4W&tG#,se:X.HVstlGBUUplz:Ej]r^c.JY');
define('AUTH_SALT',        '|UQzMWjM]c|Fe^05%gO^RnzS8xj=:=~JJH+:CN( ~=ruJq{Cz N$VJ2L:^{FVYD?');
define('SECURE_AUTH_SALT', 'T<!k2-<3/i=O^;GQ3$zDa-OPa.~D0g/.X~ZiJFXSp@9{i^b`Iyz:G/=A+sZY>#3e');
define('LOGGED_IN_SALT',   '][vKs{ktgsO##v[CYV}E 8B4Wfm|ZY[IWd30wPTQh;x+?G8c#:KEj@q5>)rGQnkH');
define('NONCE_SALT',       ';?:I`Vxfmk8$90bFtSJI2>(plet]j}Lje{?Cg{{i{=5OaB  `h[Nj^S&kuYNB^j|');

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
define('WP_DEBUG', false);

define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
