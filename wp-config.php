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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'kucheriavii' );

/** Database password */
define( 'DB_PASSWORD', 'std::CIN' );

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
define( 'AUTH_KEY',         'lSgsS9VH<`Sd/W`5S> ZB^D3_f|%fhHRS%[Rb W17_*5pEMi;nR=UNC>my_{GBYh' );
define( 'SECURE_AUTH_KEY',  'cm/qsQ2GPxVI9FDZP6{::a/`5<0Mr<.jE(Tj|uHL;PonPA>-UqAW%UtYNAoh=AX.' );
define( 'LOGGED_IN_KEY',    'g Eio=Xr2A>.vp+QzQ[b&s:S%7j[Ukh9U_#5qw=hL;gGSs$[)(^q76VhBi|Uc4Sv' );
define( 'NONCE_KEY',        'LE4c?9)0j8}P_D~+p]Rr]-DW=o}dZ?O; BQ(TTv1J+R*MMzzR-]ndGPx3)RY>=Sm' );
define( 'AUTH_SALT',        '#w^&)POOQ70[LOZ0307_ PJ*ATcgj^T=~dFP#9Sj0)b^wvI=1<~g_A7tiPbJ$n@Q' );
define( 'SECURE_AUTH_SALT', '7Pxh}1T{=fO`WV$zHO,R^u+%;8y48WhG_j&Ac2g$46]TeuJqvJ~G+~pR3tWgH0>l' );
define( 'LOGGED_IN_SALT',   '*sGYdmspP%%zU+Ji(?[58KpT{GioifPGja~nKmlY9}iq6?2p|(G{XL0r&>.|imYL' );
define( 'NONCE_SALT',       'Ix_AAW.5y`sgHC)5ivw;Avk_S=E5b(?;Yg-Td($C%36Bn48]2ruRpGV_l*mb X<7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
