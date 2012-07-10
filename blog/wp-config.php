<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heroku_4df4848a7b64279');

/** MySQL database username */
define('DB_USER', 'bb79d75d503278');

/** MySQL database password */
define('DB_PASSWORD', 'e51415b1');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-east.cleardb.com');

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
define('AUTH_KEY',         '&4-&Kz7eUUc%B7m+`~Sz7jBMcTuis?M-h:WJl+A#4T^cs)*s-;]pFh>T~Y|fHYeD');
define('SECURE_AUTH_KEY',  '#x,c^>QX|5({N=aQ}&i{N3DX++inhuFC;v;&F?d<gE |LTu_llvzEGM`)zr_L/pE');
define('LOGGED_IN_KEY',    '@F,&rL|D+GD27!~:V+.,)Su_4=]uO>C$2Sb+vO.=?;|32{=/-Yk}Q55RM~`G+hGs');
define('NONCE_KEY',        'Jo7|;D0tZ8nC0GrIt4,,Bf=)-1I6n[.r}|6`jUxTeSRMiCK#PSZ!ze1R3o}bY6(R');
define('AUTH_SALT',        'tqm`*LY&t?-zKM09`~]4@:-ruB6Wn(%aP*mlnOC8_!P6~/b2LL&WxyR<UxJs,S+z');
define('SECURE_AUTH_SALT', 'N-I)2>G@_M&6=^;`L75E|7Ua{b.D$$EXte$l}h%zC~lojhLX3VbV4wK|s>xB^%+c');
define('LOGGED_IN_SALT',   '=scN~wJ|;F?1MmbpOAx)SHxR!bIKz+dfN<?SQ{Z%X*Ts?_#<gDR?h|:6n(.b,xl;');
define('NONCE_SALT',       'Jc{;6qzA<.DwDESd0<{Y-q~.wC6i1`g|j%c[6.|u)|Q`M+nd[R, 8vH&TqlxjAb|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
