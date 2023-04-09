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
define( 'DB_NAME', 'landing-wp-lj' );

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
define( 'AUTH_KEY',         '3jt~k#J41O!^yLem|,>Bp]`0.4L:eBUMwskUm# .=ncy15MGpw8C#j;Qd!PeCB;f' );
define( 'SECURE_AUTH_KEY',  'J#>5#:=`FT!2jFW<7}JknC%HwlFmYsg%}l)Evns=S{2#i{+5E{7uo=I9oS2~_Djv' );
define( 'LOGGED_IN_KEY',    'mA5F5^jF!Y>-rBKUBbrx*.7_-E;Yc_6|+%6uU+otMZQ1(,Y?zab!! z`| >n;%Nj' );
define( 'NONCE_KEY',        '|o@5~%{ 8xpZ(T}M-3}}oA?YFVp,xy btK?dS|$#8yhKu!za`Hgwe9T/ZW1;#}ou' );
define( 'AUTH_SALT',        '>$FS1ArN@Ps>2;r:2kRZ!b$FQf5AhXl,G_d1IOQY+(4^w8Y15[r>U8lXR/9g:jei' );
define( 'SECURE_AUTH_SALT', '2k4Y<m<k??z]svZ[I)7MF`N{V?*OpW/!oc,~Gp}ALLb%f`.v<5|Hi0qqLCCQpl@%' );
define( 'LOGGED_IN_SALT',   '`bg *KI4~d{Gee_]C%YT(-}+!FCU<dkK-At-xWN|&k:Bu7X~xf(SuwM^&wm_:W]D' );
define( 'NONCE_SALT',       'klMH(cV#FLNY1Q7ggdX8#Pib]5u#;sYd}sJ@gf-z%uUI$VRVl0|quR$3*x(lNJ(,' );

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
