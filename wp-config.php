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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'TE%s;9&n>;T++O1#uA(,l;xzQ&Bze)K!*Ng+Xkw$3`b`N*_gN}%UQzGdO|LT1R[c' );
define( 'SECURE_AUTH_KEY',   'uDu-U2*pB!ZW_tquigE2{ldgvSDCP|uqxJ<_y# @VcCJM*hJ?9%ea`#r9-<#e]IK' );
define( 'LOGGED_IN_KEY',     'F4c|Gui~UQ$[D4woZSF{g1J;K|zEnD:>XrF^&Dlb6nSXxi|OiwZbR7LU)X1b%k>9' );
define( 'NONCE_KEY',         'EGQf3IJ1L.-#QirhL#J_ajop_WD1>Xp[zQ+jtoE:$qWw+;zo;3Ma~R~w1|q&nVl4' );
define( 'AUTH_SALT',         ']4!hM?4t +x49H:2r/V^LFT&K{B5?dyls4AyE_zX,,HP{Ps^H+9JM!x@Wdp{5s(u' );
define( 'SECURE_AUTH_SALT',  'uTa;C~ 6>:e*s8Zf/.=@ZJ7F9fwz^p72iL>c4.j1OZ&$TfoZ.H1u7W!ZW`SCj!jt' );
define( 'LOGGED_IN_SALT',    'Whnb7O<K~R fb6 4Q35?=V|DFIJeb^~`4dW9VN`CD7+iJe;~Y@xft5l*UJ+|cpFl' );
define( 'NONCE_SALT',        'NORZs*y?v!:/rz]3k_jyseaVG_62K[xa3G`]s[qte.UxNX>|[a^h~l.~3tX9ODvt' );
define( 'WP_CACHE_KEY_SALT', 'T(o(k:;s;![UYu;zCS[onDRB6i+PX,->C2Zg+9`.voy]Z)Y!&q0qe@ruAjpd$Bbi' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
