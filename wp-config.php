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
define('DB_NAME', 'db_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'php');

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
define('AUTH_KEY', '5=lv`Qa](Dj2n@MiSPjq2++qp[H> d:d4chy-0^cKbfpxM9yu}*+P`l-||DItgKJ');
define('SECURE_AUTH_KEY', 'Q$iCQ|?fD3..spTl~|$^NE/m|dD{W2x|Ba-EH?`?{IgsrNUp`hx%HY#2)Yvswt`#');
define('LOGGED_IN_KEY', ',+-B6|lOOn^A^Q--i+!W&<[Wv<oW#ySpi%<9Y<#^&$= tdt~1(K*)>mu3A^se5wN');
define('NONCE_KEY', 'Q+Re2doT7q+yj}G{+?85ip7@4#PkMVOo$9Q(Z_36YNi`3H0y9:_L$J &Ay~}G?2+');
define('AUTH_SALT', 'H_%mBy{s.bDs[|-98YnR5lY_z1=$oTD4TDkXJ4U<-vq}+ikTRMuv5H[<5c7UrhK&');
define('SECURE_AUTH_SALT', 'uQdJ.=ZLe+/=&TOH5@-;-*}o={w^y*_l!/[FVv?:`-h9GX?$_zVy-d~`{KDg-@2J');
define('LOGGED_IN_SALT', 't;^m<)}qC[zqK*|TNt+s|b?`|Lt{paKev|2mv[@yq.5))Ha&,U-a*|V-fdGp43^c');
define('NONCE_SALT', '@T!kz?hH:#<EF?qU5j3o=/^__HUcQ5gr;]np<Oo=#Tw>>OU.fbD%4C5j}/OvH4_Q');

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


 /** Désactivation des révisions d'articles */
define('WP_POST_REVISIONS', 0);

 /** Désactivation de l'éditeur de thème et d'extension */
define('DISALLOW_FILE_EDIT', true);

 /** Intervalle des sauvegardes automatique */
define('AUTOSAVE_INTERVAL', 7200);

 /** On augmente la mémoire limite */
define('WP_MEMORY_LIMIT', '96M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
