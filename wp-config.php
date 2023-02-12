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
define( 'DB_NAME', 'Sunaina_arts' );

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
define( 'AUTH_KEY',         'HQKm 7.},}R?cLA)hoBq` A?mV|h~j&>{C>cjoe6m71:3x<.Wz4eW~<Q<a1IJp0f' );
define( 'SECURE_AUTH_KEY',  '*L=,vEqe<sMo=VMUE<Z~15NpW;xnX6GnmUmN8K4-M2y uJBPM]5`e_I,;X0q9(Y+' );
define( 'LOGGED_IN_KEY',    '%Z{=9F*$Rv:6_i#VD:%1E{z!Ey7PO $<6_#su&E%XJ~zWz3-Dbv;>}GkxZR8kkc+' );
define( 'NONCE_KEY',        '?][&1[/Egx~77TDQ]/;,vI.yI6[AXUJjT~`d<6O7-7_FH$mf#_ZoZfZ3kU;NoRK ' );
define( 'AUTH_SALT',        'G6.Yn},$-C^kh+_>oc-/Vu<}Kb.X@)uRosBR7L>:$1,1_G7GhV5v8-G<De_(n!`L' );
define( 'SECURE_AUTH_SALT', 'C^L<e4un!91FFeT4Kn &pOk/Wk+DNN>qkZW`NZG/K;8zex+&~R;N%oz^ww~H_<mN' );
define( 'LOGGED_IN_SALT',   'EHa]+W$^QVsU`Z,!3X8`FwI]UxBG%`7A])2xQB%GlN}[(6r&p,2>VD(kcQEN73hR' );
define( 'NONCE_SALT',       'DAy08d,~) /z@[|d?NYbZF:U_(OR#|- bYZtMJ:@t|;,}4u6HA;c#rR7/q|ao/:s' );

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
