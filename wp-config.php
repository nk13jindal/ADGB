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
define( 'DB_NAME', 'adgb_db' );

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
define( 'AUTH_KEY',         'bgcR|g{2uFP_eD:]G!45Lq*W (3jpaq=vU EiV,R(Sz</r1H$c?^h3_UvlU#>/p#' );
define( 'SECURE_AUTH_KEY',  'FoqQ>ipShn;O^pbPQN(U=||i }4V8QeakK:k!.aT{SQ;5PVag<eG[F-prQjV;4,N' );
define( 'LOGGED_IN_KEY',    'SSZiI0;mHa9JOX9.PCiaIN|;`X!=oaJrL=T9c@+/V?qC}_iJP_f]%pT>tk@c/9LN' );
define( 'NONCE_KEY',        'jEMbN*5b-&x!g-5Tx[n^<mXy21M[!!gic!qEEirtum9fyB_`d3;[[NH5&&)Gl;AP' );
define( 'AUTH_SALT',        '7)^whC<(7UY&~[XS8C$*IE,{o#!5+imB-%u=YSdTccU`g5OtlD1K$V,}7Z[$7,x#' );
define( 'SECURE_AUTH_SALT', '3+;4aF#KqSft;dlW1(Ob h`N?nX@W}Y7tAQ_jF4VXQ`r;ErDw(pyKmS;~;RrK~Z,' );
define( 'LOGGED_IN_SALT',   '=h]~CJ^|Cs%b$fB>It59?tFS%qZVP{x! #9`wH.HJdN6RLGy)Kz3yy!,4[mN%sRE' );
define( 'NONCE_SALT',       '5{mo:IZu9Lcl7)jtzYT.,zS1p(FHdm61lGP/b.;1dr<XUT[[YdhJda/K3<r<wW]1' );

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
