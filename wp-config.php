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

// Producción
// define( 'DB_NAME', 'id15927606_dbmonserrate' );
// define( 'DB_USER', 'id15927606_adminmonserrate' );
// define( 'DB_PASSWORD', '&2IQacnxfvYjW*ku' );

/** The name of the database for WordPress */
define( 'DB_NAME', 'dbmonserrate' );

/** MySQL database username */
define( 'DB_USER', 'admindb' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '0+myF[Mgn<8?AXAyK(5?8uQ_XIvpknA0/.ETfQ=]>;&W>(tl.KHdVstVvMv[f,m/' );
define( 'SECURE_AUTH_KEY',  '9+yxf0_?f.jtU< VmqSG7gbrdp]bk.5-5l vYA*Dy):+XOe38BkAn*qkEC9eCx6N' );
define( 'LOGGED_IN_KEY',    'StTFCL.;:DxE!J~H*PO^TG{vTL61(*tZ-uEqa<z<62L_e&HtUgWDXu7X}b36X5|y' );
define( 'NONCE_KEY',        '`NAAGnTw+j)A,Rb}t8*{+i.j&nO#8aYs/zCbrW6$Iel`mnpjH^MV$^g`])=O2(1@' );
define( 'AUTH_SALT',        '{w8ZK3__LFZQUt>=P{_&~$IPd]lF#Y@^XUT?I^mBe&!8p*.h3$zY/%3S7,J@yf3+' );
define( 'SECURE_AUTH_SALT', 'zJi>/&m9mO3G]Q!TLox$>!(8t|_X0@.@02HhRi`XAZTX7A=^YGUnn9^*&V.$>ON8' );
define( 'LOGGED_IN_SALT',   'q[8Kt0{fq=4]Ds3KnuuC)>t*U6su)t/_ *L+8]}rK8i2f=aWjxbd$*} kftXO8!&' );
define( 'NONCE_SALT',       '}]ofnC=nP&dCUW:$|9O3S2<L.[~.o0uS7i^Cfir*l:0!=y2z/v/-?HGtNUiXq{,f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'msrt_';

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
