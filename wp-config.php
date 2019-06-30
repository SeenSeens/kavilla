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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kavilla' );

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
define( 'AUTH_KEY',         'pW(2$~${;(!Nm#Q3DX3(_>)b^S2m9zBW=hCHo?D$h?%Vvo}7QJ0!D`4}vK>q<l&=' );
define( 'SECURE_AUTH_KEY',  ',^rJ~ *MRF0MLg$^{av!3Ojq}=~(,)Rxl3 c:jJOGH@28c_dT0`K_/XATymceh@g' );
define( 'LOGGED_IN_KEY',    'nCwV~a !@JOts,2$F&EHvLQoM+Eg{pgp@:K(TKi&&(2pbLfDBiIM?I /_ddR`VK0' );
define( 'NONCE_KEY',        '[;rN/B_%Y{_iWO@=16X{6w.:x&#v?=niOD#|ZdxjAYb:Y/GAJT?X5s[;J|#bgA5V' );
define( 'AUTH_SALT',        '@,}mV899K<3MCZu<;0$9$b#~2!E746:ha`3MpU0p|RA]`]v7q]y}Np6*FH%V0/:}' );
define( 'SECURE_AUTH_SALT', '+M29lO04tE|Uc#I?FZAO7sbwh+MW|S&O|ntzEks@YLCQ!iGlTp0W(Yg0cw!1J$@s' );
define( 'LOGGED_IN_SALT',   'd/, pggQBv*0>d>R@dEYhQH/V.|/]k:U%wJ34?2yh43`e7[HH?!#}Os{t*hw##p&' );
define( 'NONCE_SALT',       'On- Vn@dR@qNpc.NcJO(myGlU)7nV)~(6!h1CW%-xxtSlZ#Bbj{AcXx.yU]^tB((' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
