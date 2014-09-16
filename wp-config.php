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
define('DB_NAME', 'photo.nathanbirrell.me');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't$D-YI]nj2Ht+2p_)3Tj:@d^A2lFpJu^-xoEFI!2ZNV=8wNZR9/*zbMUw-#,CRK,');
define('SECURE_AUTH_KEY',  '&l@i)<P-l5yVpjmZX?#1`L9|lp*GSU.go]|;oI[~#`9+Zw$*p_pj!{5SOSAJ+9oS');
define('LOGGED_IN_KEY',    '!9#FZwu]gVN9E6i/i,sSs:y^|:z3cp1mCWIq3KazZe}% VSUmTk|! %%(CZ|6X-N');
define('NONCE_KEY',        'Q:NY{_,^=t!z6.wW6701IfMNY&]S9xu9+*SBOQq;9xwJd,1i,G[c>Xu[>}@~|>Ow');
define('AUTH_SALT',        '8!Mi,U;K.KJ6MDF{bU{}X+D%qB)3<[||B%FC5t|iQew.nM3.ht0r{h=k-]#[pik$');
define('SECURE_AUTH_SALT', 'VEJq Wn6.Ob3:8Vq3/Zq<3r}#qt21#!S+!_mQ68-LaU}rTxAL-)G;U0+KO8i;1l@');
define('LOGGED_IN_SALT',   'cCHV{cFrOUriZK6}$aEJU$n+-hpPk1X#b7_`7srd8H R5o2dsBhc#hp1o^c5k(Yt');
define('NONCE_SALT',       '[wg^;Ka?7V|5 >k!K@ifM`Y#e8gVomj5(kv&QO-<+K[:HW]e+g];XL6Av7x_YPP~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
