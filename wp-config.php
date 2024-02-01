<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'mypill' );

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
define( 'AUTH_KEY',         'bTyPdd5)B/(_%s!427!JEX0TqacWt~CMNjvU?O#2&Z{yv,j]}/z)WO& Wz5w5P$D' );
define( 'SECURE_AUTH_KEY',  'BJV(a}ot~dF{i%;u)bZNoa%qCgFp{*+=94jSdCWEeI6k^#)KGM@$vC<`}AUq+>1I' );
define( 'LOGGED_IN_KEY',    'HT_cyr,-}C]dV3wLkmQ7f-s.Ct_#rx4S.9_;l|UU!u%%u4{u:Ody-<vd)3+Bplt@' );
define( 'NONCE_KEY',        'XwpA(#^ 0fS.HdK|>atq9sS[0u.[x$ui$CwWa=Nn#Y+3a}T~$-|F:{[L}> /#$@6' );
define( 'AUTH_SALT',        'Dm$v{B2Kl2|2Eogq[JO%nl,9=QSw7Prii$F%N)e(56Z[m&JCfY,#WN]lVh7A6:$Q' );
define( 'SECURE_AUTH_SALT', ';-}v`9jhVmamWi,&y6y 3+%K?ajT$*FsS`]3~OdwP%Lw3JS10Qmu+Jvl)r Z(d(L' );
define( 'LOGGED_IN_SALT',   '%F&f^fSzN lNBiMSg(S{ t$|4Ch3l*kk%i;4.1*}a`s.N<v4+UK:wpMh g=2V[EQ' );
define( 'NONCE_SALT',       '!4`hWZHY7;H6yAkB2T_S`Un0j|]DqHC92d#T}Uf(s|o+)~pxOIqhm52sS4GfW/:<' );

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
