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
define( 'DB_NAME', 'doantotnghiep_wp_oto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'o7(d-J+hL/_GXch93 *zTh4L6bf{&r7]GJDmb8#|+8Sz5 UG*M|uYX(hBSi>$k/f' );
define( 'SECURE_AUTH_KEY',  '!qQ`@3@Rt/*{S1GuI@Bte})Fo]m>NZ{$/h5~p_[9W#vTId`9c/LSK7lk[fJvk4eC' );
define( 'LOGGED_IN_KEY',    'y.@Vf1!UR`AAf}z~0Wd+h?rNL5v8OIp!ZvQO#Z?nNv!X|K4vE;t;%FS<$/=&.<-&' );
define( 'NONCE_KEY',        '7/7@W9Nx(a~SV1iEEk= TR)0p)V<o0Rj$C:41yVnKq6(@;gH20lPw>zH-l]ZGbA9' );
define( 'AUTH_SALT',        '(K1/1(Dho5X+=nm=`HxPsU/wkn){xYT,gjcqA{s(G}xP@;50Z_QHsS.K6 +GbxyD' );
define( 'SECURE_AUTH_SALT', 'x1FD?!!`p~P&ugW,+Jq$Eo=WB{qJ@>qKy_Zahsn2.VSZsh`+nz$H(_Jy2f*L,AxN' );
define( 'LOGGED_IN_SALT',   '5)93Q9BmR;J?%+&$gT;#&xB9de##2%b`VWdVj%,?!:T^34L/:!Gr[Un5VftzZc]M' );
define( 'NONCE_SALT',       'oS}4%6n~#Q@/V$+Y@`da7pzfOn}?SdkrN>]:KKPw~03Su~HNF*|`q}8vW>xd;@Ds' );

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
