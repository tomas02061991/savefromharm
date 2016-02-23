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
define('DB_NAME', 'SaveFromHarm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '#C00ki3s');

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
define('AUTH_KEY',         '*M8rh]/T||Y,9I$Lx1rqe8_>nKqgkh_v$ CiXvp;-x+p1!w_k9o^mN&HkPvb!v>D');
define('SECURE_AUTH_KEY',  ',Iqfw7AgK>I<6(vsM>%cM@8(@-<[83Dp!%0^dKsYV:=ue/q,XGG1TuNDfa@`?FW+');
define('LOGGED_IN_KEY',    'KAVNjI+?|7rkuf;-Y9b6UOGEL!+{SF#l$aRq^,,D>n0h$)I/lWu3X 3*O<Qb67Y6');
define('NONCE_KEY',        'Ng)O<e+ZbLK@IR 6#XAZrW2CU6;[0W+XlZ=7uIqZPyihIb+$1U_Pf Rw9astqS};');
define('AUTH_SALT',        'E_ B(j-|CPQG!2:S-j#lJIAGg+|<)-jFl`/X W+!ow@!Pn+ScpTfzS{0dLUyn&(7');
define('SECURE_AUTH_SALT', '>etR/QE&&$Fw~FDm+o~zhof<rZ8~t>C}#5vhIb9GE}>>w*-h8xMIVjgd fy-I#rL');
define('LOGGED_IN_SALT',   '&YTYrvHfULQ@#4)G(R*TI+:?aBH5Pgy2x&MCrJn] d%)cf>E|B~Vm@HlB@^Q<)L~');
define('NONCE_SALT',       'E2^Ow.6-,0A#;@1B2IrhAbr1=D@FP[@LBg7&?j<e^2]<.d.iW@%lNKJ@.Na]NZG;');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','ssh2');
define('FTP_USER','root');
define('FTP_PASS','#C00ki3s');
define('FTP_HOST','127.0.0.1:22');
