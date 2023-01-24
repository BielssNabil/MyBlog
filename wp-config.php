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
define( 'DB_NAME', 'wpblog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '7G%Nnf<+9JefUr7$B(*1*D1j@H,qEJp,XB2w-Yj &tFF/VvEu/Q2h`?Pd^ll<L?5' );
define( 'SECURE_AUTH_KEY',  'TZKKmgvnKQNFscKJ]y-1=<0M`7<E9)!Su X8Du,Q 1S{d- ?K&>K_o2>2<_#@das' );
define( 'LOGGED_IN_KEY',    'p0_r{S`[4mwkqOw/IL(Zc*=[^ucZIN@h Mz=GpxC0`K;1M*aq,x*RN+hb(KSF<(.' );
define( 'NONCE_KEY',        'cpUlx90.L2U>Z/LxM$;ni,h&RY0:_]% 5;IEyCSD-3dsHDisT|VE#k5/&MB;_E:C' );
define( 'AUTH_SALT',        'ucr^+3;KZ4K0|T.O;a9[jy^#`q;:{|F#!EILbgxA==|Yvd9q##Uzv<#67[Jrg20Q' );
define( 'SECURE_AUTH_SALT', '!!.3_Ka^d5wk+b0$&Gt;~NoF<mV_[YiN$qpml_!fIQb~HApt>Sokx5`o:k+b Z.U' );
define( 'LOGGED_IN_SALT',   'Ke]4GY>)=w`>6KU}wb~qSOFdF[Vf8v*)Me|B,`MzLFNQy_zh]FzYlA}2)}PMqHS`' );
define( 'NONCE_SALT',       '85:t&B;d_hS]nc#py3<v*[o]=+[*c*f ekL*iQ93Le$,&~Rm1L,:o&/(?(^p>u]`' );

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
