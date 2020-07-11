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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'france' );

/** MySQL database username */
define( 'DB_USER', 'Abdulmohsen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sarah@2005' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FDmPYs&(K{S)F_!(9BtcDP42AKi3G|EP1PC%=^:5!gT#p6ZA&#IwL@y3H:loVNNY' );
define( 'SECURE_AUTH_KEY',  'AnI>$C;BuXqVF^HO?ZP^cVKrg8#8#HxmMfDNtFa+P b^){X[>IddzCB+,} &T%0s' );
define( 'LOGGED_IN_KEY',    'MQ$Jk<ykOkTHqn) 4QOKt?t1HydckYL#JKFR3a=~SI50Z<14C>3.NzM!Soj_teTs' );
define( 'NONCE_KEY',        'v*LC?Cx44!/eV0X99VvW; e0{D?_H>Y6pIOWEy<K69>v`b{f36|slOe9CwIpE$S8' );
define( 'AUTH_SALT',        '2]|{POR#^Z%5AtsE$$Y[(ET<TszSk:>!4a-kG+<_Qdn^1WiAhJo%EN~I}=}*7qL_' );
define( 'SECURE_AUTH_SALT', ':n;pA8S8[kVQ1!g>0f!6s|FX1Re$MTi<_zh4AL5cYqaLlT.(NG(!*k*aoC}<t;RA' );
define( 'LOGGED_IN_SALT',   'yEq3Cpk2eRIF|_v%D*(5oU)l[s)cN|/Y|]iBYZ!hn)gN0]vHgX(2G&EPHNL.:unh' );
define( 'NONCE_SALT',       'T5kF7g{RbS,LyMtX$6Yf8.=6f=_C{|RiR15~L@<@cdTUu#/4p6fk!)ShxMwGDc{s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
