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
define('DB_NAME', 'server_database');

/** MySQL database username */
define('DB_USER', 'odomenic');

/** MySQL database password */
define('DB_PASSWORD', 'odomenic21');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'E][3Cpw^=L,qS_mf4?IU4Ud;BVg4<Bc$aW0jMTg(3K|7o|L*%QNij|FM%+*)FID]');
define('SECURE_AUTH_KEY',  'Gq{j%X+UKsJz|dJ{-2v s(`#WD<4;efY`Gj;RBn#FfhP+!,q=u3#Z]lruoI||df>');
define('LOGGED_IN_KEY',    'wj0E0@BuyOGKzSA+eDm~,+jJjJ>;AOP:&#1G?Vdgy@Ciu|dp/s6 pk bjgHK-9ot');
define('NONCE_KEY',        'u8/frc|G( h/-]JeN}|o$erm^Y@X(`_<{l3QqZMspt/J[]/74-~=&HL12(|[rbJ,');
define('AUTH_SALT',        '~~L~Y-~DV*9*]BD+1WaRSs+UN<5F?J;%~Ms^abjo25Qu.rV)R(rYoCGl$|VVReiw');
define('SECURE_AUTH_SALT', 'byqs&&!i|ROv9wMG?PqEQC+_,vSjSg y b6BS]-E-|v~zxgMCL,[aXkTNbds9#`o');
define('LOGGED_IN_SALT',   '305lHYho$2*q62${k<g8+?1|rK.EzQnzQ_g=-P}|h0s6M8&*BT]JDJNoe=0z0X|O');
define('NONCE_SALT',       'm!L]t<RV7h 0/_uU^8pZ9h{d1VjS,/HKcAOh3rCb-#)aXd|S)/TpY4c`m{wSV2$C');

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
