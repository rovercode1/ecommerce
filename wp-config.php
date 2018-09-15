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
define('DB_NAME', 'ecommerce-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ijh~AaS<:*n!$ItIADLpJA~h7-3*mRrU]B7^e>{RN/f!Qr30v`rexpo.[6(>{emy');
define('SECURE_AUTH_KEY',  '<zSlDn[UZF>u_Zg[,oqkk&*@kDNJ@ulp*`2HGY6OMoc#-R,8%]=IJmh,4ac9fNe[');
define('LOGGED_IN_KEY',    '*DtMZHPt4l@u^=4L?cp&y>:9 :*Ka`pM*hN[J,5<`a:-&Uz}AB8{5@}^nB?fUIyO');
define('NONCE_KEY',        'WQUAAQx-;~//wgU.Pzgw!|l1Ab@4<&qdF~~Va x4Z|!58l$q!fqdVPgy?S%kf2]d');
define('AUTH_SALT',        'kH;wf+1&*$;*%jK2D|K]c)dxQwvBI.M$;V,G5!%jQun!76ziXd9ixH=gvqR.67?-');
define('SECURE_AUTH_SALT', 'IBRbxc>i(1mXu9%c)qJmg&H+?*7@2x=Y7@h&AOz}B:WxN?3epE_h^l]$6bd^oM-e');
define('LOGGED_IN_SALT',   'k.Ad/Fd<I?W5tg`!Cov4;EFqC}U[wCG>}[H$a4-~azgDp(1373?Ds&KZ1}5;~*o(');
define('NONCE_SALT',       '4N:y$r?&Hu+cA 0{#=po<|]p0Ac<@F3fw3;a-P`6(PR~e7l$&jeubc_.r$f3sX?5');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
