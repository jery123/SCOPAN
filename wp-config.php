<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scopan-m-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:4000' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PlV?A&`uEm*g18>lx`Mn?6*@X1~{V-QF(pEYf}}4I_3:&~J~j)+{2/Cb[XoONU5y' );
define( 'SECURE_AUTH_KEY',  'F&Eg0D~/79AqY]YaI2 [Xpdc5;=%ZkF^qEtm4<=6dnsNLf}57g!]!!r5ZPNJR&+E' );
define( 'LOGGED_IN_KEY',    'Cl:TI#ExW=Q1d->z30xByxtbQpd;GC30VH0;6;X8J;xXCw,kmqZUtq{6F7if`8.h' );
define( 'NONCE_KEY',        ':TY+O|ou}<:)Q=!F9+^f<$]=/L_YY[M=QhTD;=Vz-KHks/#O+@.t5[/pM[b6o8o;' );
define( 'AUTH_SALT',        'H}Y.IwX$d~{h>5huOOoe|a^v]oN&vs?:fa!>8Cj4t*)x8/;STUcycew;UwKHIFob' );
define( 'SECURE_AUTH_SALT', 'yMf)#%.U%V_7,:~otNi~<Rs)JmF$6~.R+~YS)ogyGQ=|vW5%*>.>YVqN vZsPV2a' );
define( 'LOGGED_IN_SALT',   'XGU)Nhu*Q*.Ibj0/}vBL~tGG4,c3slXQY;2IQB?5_4w+47lMdO*1YLf9ijfr|?`6' );
define( 'NONCE_SALT',       'P-8he?6KrgorI`s)jrNU@-3^b-/w5/=n]uP]%Yh),OVZ$<M,Bb2Bo!L.HG:a|F{d' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
