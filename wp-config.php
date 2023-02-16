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
define( 'DB_NAME', 'tukaan_nona' );

/** Database username */
define( 'DB_USER', 'tukaan_nona' );

/** Database password */
define( 'DB_PASSWORD', 'FHTAoT]?4Csy' );

/** Database hostname */
define( 'DB_HOST', '185.105.239.240' );

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
define( 'AUTH_KEY',         ')~mz&b0Mw)+*p!I=2F/DzI*c:BtVS_p9M}<Dr&^ YpMc.[WwnHT6~hLpMM/hi|!k' );
define( 'SECURE_AUTH_KEY',  'z%L_|EW0?qGKYS}@$4OZi&>Si;`I0&s$H2.s8.uCa+$?1W#X2@j8f$K0SsbN!gcX' );
define( 'LOGGED_IN_KEY',    'l!Ycz|^wg=0nl:PnJo08T7kBJ;,..E2sWuuJF]Fk;G1Xe5yyk);6BC`ys;NOD+[X' );
define( 'NONCE_KEY',        ';c;DPj. a5ijAuki8Her=r z)Ow0antdG#*x<~i+V*/Yph;:I(A?r~8 4K^ME-eW' );
define( 'AUTH_SALT',        '<FgKO/2H$bIdv>!8:|w6eH_)`Zoo.xG/Bt%J]-d[H!u]DZZtA+{qO+}L)9p`D0=D' );
define( 'SECURE_AUTH_SALT', 'JSBP(Z wsR<_ULk!{updeFw=,)6VI[XB#6.b%%JponKV.bug@ws<TRW)U(pn,c#p' );
define( 'LOGGED_IN_SALT',   '%FIh]_a]8)7 @bW?9o.;I-h% +3-xE[#`P6[O`6l<Sg0rlxYDO&Jjmz2!$>9.-;m' );
define( 'NONCE_SALT',       'K@PbZpYI$nZ:PF#$[?s|}Rw_u=BYIeDAY$`D>IH(Z~D*fB>$otse?DiTFrO|Ew^,' );

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
