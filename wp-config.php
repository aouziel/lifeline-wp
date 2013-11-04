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
define('DB_NAME', 'lifeline-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Goldy25');

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
define('AUTH_KEY',         'k|*F`^SCOn`Yn6FGMK~{7lAejp9$43;-AQbh.ZnRVD=<bIiI(V}Y^:)k]^m1|[MA');
define('SECURE_AUTH_KEY',  '.`~8]|4BHb|0+QgBehDX9Npc(zau*<d$h<#o8t[^+n-ni)7Jsh8F}~eu?iPi#Frv');
define('LOGGED_IN_KEY',    'jR0S).^lx Mx>bCcb6+[&=)5|;bHer:w~|>#opbIU6rU-Y&jmO)5)Wf@IJWMi^TB');
define('NONCE_KEY',        '|$Gn(|fp6z[S~Rgs5#3.4e44n/nF+*L+6L|xD^mEXMFbZ&/t]6eY >6(|REbpu8-');
define('AUTH_SALT',        '+9YVInof~0X-4!1(#K2.tI>CYh%mJD2TFNv>]U0}FPC|-w%[=&cOWQ7]4>.|z+`e');
define('SECURE_AUTH_SALT', '^mtA2ztd&umqiH&6 5{JOVh L0(qBz69f,#}Cnj$O0``uHk*C~tD!(/v/gI!+V>?');
define('LOGGED_IN_SALT',   '!m&Pb#crH qS];7/Cj=GSQU#Kzd(E6`g9NdG@hpb~w#rZ3]p4#-S+m&.Lpl?#?6q');
define('NONCE_SALT',       '!5oO<5<Le10-n+S(6*3;-&IPKzX1c<1Q7SUH8C~abYHq+j&cQ9r~&yGjhmX ,$;{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
