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
define( 'DB_NAME', 'nutech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wY]cY,#]YnB$5oCH_#g+(.W?!m~*e$wyXIiV2K*_L47-CyK9[;WDIEL|+:_*4h/9' );
define( 'SECURE_AUTH_KEY',  '{w:07@?a }2oSql!F9v{sh.Tc!_D]s/cVgchDTj?$]i10iYe~&V!V}}-U_EX44W?' );
define( 'LOGGED_IN_KEY',    '!35:`iX@*.G3?B]l_`^K/R}}aIDD ne5_U>y$l)I@BA8H9Zve]/GkAg`1um$pE~}' );
define( 'NONCE_KEY',        '[39Z9vg0K.6Ls`EQ<9OW?t<V-eg0p`bPr29})MT]fWybVTiXx++;!^&R;E@j52Fx' );
define( 'AUTH_SALT',        'fR/5Qy5}+O_G14su2MII%k{0c./Df_qi?3>eb?8w|}p`R=qo,ECD.Y]DxC@,)Bt}' );
define( 'SECURE_AUTH_SALT', '} IVj./h&6tw!l?^Ba+%dsI47AY@8s!+K3(OEX5j6_#:GU;:da1iDHW^q6[@yygD' );
define( 'LOGGED_IN_SALT',   '`W8r$`lt]XzWn%<bTTj!L)bZ>{-V$uKuc<%%<zjysqc:W)=qi^.W9woOg4JLrx%Z' );
define( 'NONCE_SALT',       'hII&c.aeBRb.R*RLB:WjNxhR-e4&=Eew)zB2Es)Zp]U%Q`NK-KT!;,);5@HMLwW^' );

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
define('WP_ALLOW_MULTISITE',true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
