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
define('DB_NAME', 'mstreetarts');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'n27Yzq3st');

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
define('AUTH_KEY',         '~CfT38Ps@~3UO[hbFx>NZFPginSOVXT}.N (-sk;1:X)kPxlv[<Q^^wgv)|KjN7P');
define('SECURE_AUTH_KEY',  'hh?6sT642-|[j*i+hJ{T33QleqY3]X>o>2N3|RMc&*[+3.TdaU4Lp}@ZJf~3[C4;');
define('LOGGED_IN_KEY',    'F7u0!:~Zwg_.;Rz`dHpuMLE}Vu y3Sw+fx7Ksac!^cCtPzt3-T!asV_02&ou{_ek');
define('NONCE_KEY',        '<;^4;FR=WIW<$tfE8w1kt>OLn4j@WwD{G2M6A,Qm{pzCOe(<KAIHsbb3U1yYtbqu');
define('AUTH_SALT',        '&qnfLgvu-4t@cjXo+f42EslnP5u;!!3U|3lUS8wX/tB ]zZ~>G`z=?!gev~s/-@[');
define('SECURE_AUTH_SALT', 'bASJvm_4V*es5vbc57Dedqt/q>/Acg0B`m{CDY[xC{8`~BO[^WZv>M%rl{T2uZpx');
define('LOGGED_IN_SALT',   'W|gpaxx|cg?HgAN0rO8;x?)cN]}|m}@Ut-^]Rf#Rw)ex~HoR9v3RsV%GH95-2ex$');
define('NONCE_SALT',       '%5WD_k3D-)5&bky]lskqZ^HpW]$eVW)w3I`e=19(3e2%;p~yP;CLUq[pMFtnn1e`');

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
