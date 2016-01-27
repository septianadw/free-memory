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
define('DB_NAME', 'homestead');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         ',|lgxihL<e4Ulg E-y=`[OqM%I>Mml,~V<j7P-;m<n1{g*y@8v7;5s--]eke%pL<');
define('SECURE_AUTH_KEY',  'bnd*w>ESxmx+Q+qB,x).N[ ]H`ibHA1;5d_KSuT-y44m*=}Kmh :i1q]!BEdN K3');
define('LOGGED_IN_KEY',    'F+!e@kG1Zd&hz52Y&DIikRWteO%ll~7?n{51|XK:[8498Im@{g<S%5.U.G/CR$^]');
define('NONCE_KEY',        'j2>vs,3P=B[s[AeV<-aJ+e= kQ1OPC`Wu4|{I-NGK,/Zc|&i7bMZQhGDQj65i_o.');
define('AUTH_SALT',        'UaQ@jgz*w-O OuC&.]Cp=<i=C}d^Jxiy<AI=c_MNbS6|ahXY DSxJBU2C!)N0Hl,');
define('SECURE_AUTH_SALT', '}9#Jn}>/3(kXI}tw)G3O7VhkA|-^?K5t($mq0pW[T!_+ dxD@<8!~WoAsq],f3?V');
define('LOGGED_IN_SALT',   'H_e[#By(>>#e9XAg+52Cp8;iyWa:CaGWUuM>BhU&{=|p]Xv7PFujZ(rrjtD#a~#@');
define('NONCE_SALT',       'w`N~Kw:Icz2AhO8w#zaU0~ARefcGI|UzBq|p_4$B67LT|GLq+c)n,-$3_CZ*QNV&');

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
