<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'promise');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootpass');

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
define('AUTH_KEY',         'J{Is m0=FW73p{X=2+VG8yhpe*/p<50:+!hS68{;uL(ni[9:5>-;^x*jvq Uu>GF');
define('SECURE_AUTH_KEY',  'X||?@S):sh]F0^BcP*NOlYX>XLyxh?EmYmR.p9xlREFV=f&^ =YLn)}CxU,.3f2K');
define('LOGGED_IN_KEY',    'bRI0>xIg[++?8b{*5L+H&Kq2v(dq{>=kD>Z: [BxK:%!dN>?&{{4rQYT*W/}o7:-');
define('NONCE_KEY',        '#|LfA-6<]L!~Bd35k7Qn 6-q[3j}+Q#mCh8x-+hUIftSn+@z@-}9-KVs d /iDz3');
define('AUTH_SALT',        'aviF;<%z I-uJ&h]{TMFDN)bSOfcME0EZ|3S26IH&j>9qRdAX9vDPNawcgDtJSo1');
define('SECURE_AUTH_SALT', 's5s2oaP__ZOYG^22$bZ)-|e|~`++3 oyFU3]v|{^3PwM~3XH-PCX]]Xi$4zP9W~9');
define('LOGGED_IN_SALT',   'dA;[lm:Y+|dM[w9(-aLH0u6z`*Rm6q3iI/:>7B]llmH5aPpynEZH!R*+I;qUfN!;');
define('NONCE_SALT',       '2D#60tYSzG$I=8xDy}T3u|4kjWEq~*XG`|W/37K@OBQ{|)a$kjBtY{$6?rT&_8)D');

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
