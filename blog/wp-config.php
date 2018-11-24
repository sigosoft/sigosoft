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
define('DB_NAME', 'sigoswvq_sigoblog');

/** MySQL database username */
define('DB_USER', 'sigoswvq_sigoblo');

/** MySQL database password */
define('DB_PASSWORD', 'sigoblog');

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
define('AUTH_KEY',         '!2lhP)];U ~9){pD2fe2Jg+p[:D@jI%i<[+MNkd`DF1k^nO-7Gp`1i=I>N_m=uK ');
define('SECURE_AUTH_KEY',  'zFUd-YX{)>bM~WoG}($<C@i[$rf0w-r&H6w/S<L.~V}7E2q#3y,y1Vi%}!HvZC)2');
define('LOGGED_IN_KEY',    '>4@]qbr6H=jQ)biKD4TYAK1f4$=GB2*d.uO_*ux~|%|pAsyY-R?&`2-#<V*SyMc[');
define('NONCE_KEY',        '!+od(E},XJbRlNzH@oFaz#[6rLU#64*[WM}1f]8Jdv~R{;#o_jtmnd5H/W5]rxe$');
define('AUTH_SALT',        ',hFq5vuf4 h[_h[=d*n9J12G@&%/(2Q6/)@q[[P_.2a<?^Rll%lR%15#-}._X[zZ');
define('SECURE_AUTH_SALT', 'fmD`{#~R#da%SZQC/16um/;`&JT:1f}>Xy!(x.&|R9]yw[b34y+y4WBd:QptGc,N');
define('LOGGED_IN_SALT',   'vDp_|Nn$ElI*g!x.}dq2Y)yJ|kL=/Y/ +~>D75QO$~tyysLq|g];KLq?8Jkq6zwg');
define('NONCE_SALT',       'VQ $XpT%u;bpwf9rJB,Majj21U=C$W&$^YnWv<y;yx?Pf(<3q:NNg%-sWqBqkZY1');

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
