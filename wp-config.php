<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', false ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define('DISALLOW_FILE_MODS',false);
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'ID204245_planetplus');

/** MySQL database username */
define('DB_USER', 'ID204245_planetplus');

/** MySQL database password */
define('DB_PASSWORD', '9PhT3dSxfsS6');

/** MySQL hostname */
define('DB_HOST', 'ID204245_planetplus.db.webhosting.be');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-/J(u-@q^^}/_q*cX!sGi<;e>OT_!?I&~0Yi).|();<FQ+TA%nO5%-xLPQ-Ib4Au');
define('SECURE_AUTH_KEY',  ')W%+,fCBG3|ap6MC7|L..@Q7UWt6pax;%?-)+~CA@>;Lp->o0?q.EtNA^c2}k<2!');
define('LOGGED_IN_KEY',    '?=?NUhY^^b^4=d3,!zor$exm|rxODb2ryZ^lHSx4<i?fvzznMiBDl{t6f>rU!V6P');
define('NONCE_KEY',        '-{}4A L:#I=oypqp92=ZdDJA1LH[<;/huR$&.az.|E?Qk}<+<]GTiKO0*IkGL;QB');
define('AUTH_SALT',        '2)eSwVMfaamC):B|scN;d0y`f-e+Xc^7^x&?6wE#1A}$0E!mR=C[gkn!xPp}bn-L');
define('SECURE_AUTH_SALT', ',2a^p`O>hP]0|~)C>8|&*;Wk.G6p#&p,I86;`f4-[2j!q5S.@NN.5=Xi+!RyyH0G');
define('LOGGED_IN_SALT',   ')VXho59/wJj:!#EiU5aw{gue8e]H6|uILB~0L0Jr|NQO9j4tt)`Y[PgB]Uz+YU<o');
define('NONCE_SALT',       'Fzk^QMOxdchw$WE53S1J<t7vti>|pE.?#RiX E9(c;V`hgiHyJ|g~V6;:f }>e_:');

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
// Disable all types of automatic updates
define( 'AUTOMATIC_UPDATER_DISABLED', true );
// Disable core updates
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
