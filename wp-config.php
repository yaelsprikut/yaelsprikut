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
define('DB_NAME', 'yaelsprikut');

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
define('AUTH_KEY',         '[F(uq[oYHA, >S!(}0mni43:Gz0wg<{r`~uzI&hzVzMfD5?{@%(q*@!lhT!*}6pV');
define('SECURE_AUTH_KEY',  '4D4Fx]k;l1ky89%e[*=f`T=msj6QToQF(bauv!LQ;KdKbC__qN]m!XOBGDKOWkcP');
define('LOGGED_IN_KEY',    '>@Id;4_pc|WJ4y+sM~sOD5k_UYa`-W<^P=j4.Xk/+cQf5<N(JT2<2aHLG^AyC(Y?');
define('NONCE_KEY',        'iYc`D;{4ec Gu{l#k_L0H!#!c>>UhA!r8LA=a2zX*sPoKY#E7/!/2v3e@#XeYt7d');
define('AUTH_SALT',        'jU^}x2!hCZ}{U!0lSlHTD%2j`Jf)!@lj,whZthf dzlCu y)B&3TU Lg6{!n%mJ4');
define('SECURE_AUTH_SALT', 'cZ=VMW[=kt s=pJSjfjNLm,q(|(>NFE!AIU`=?L,91K$7]ZFC*e&a;[FpWENx1vd');
define('LOGGED_IN_SALT',   'K ;61U.!~{[@jR;CyVSvgLF,[%8f]lcuZ1 b[[;yn.AbA=(+H)*:PX8V 7Z6@ag>');
define('NONCE_SALT',       '$4G3~rSezzBT!]*@C)qow;,-$3*-|jV@@>=%S%T LIrN,-iM)Cge<DZxj,q-lCX^');

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
