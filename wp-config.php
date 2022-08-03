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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'melitzadesarrollando' );

/** Database username */
define( 'DB_USER', 'eWQ4xUxDyyUPkE0p' );

/** Database password */
define( 'DB_PASSWORD', 'xu5UOk1obEs7f28V' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'nK2@,aD+TEx#aRdEzGB7lOOJ#.=PRL5vC;zBWt2Z+#/)fAXp{Gz|%Kk-H7D^AKsA' );
define( 'SECURE_AUTH_KEY',   '%+1*S8II+$T/mLx{l|l^n&gT?#?_+o+?*X8jR*wcqTq~^qTVp`r|A_}^QZ{hr`/;' );
define( 'LOGGED_IN_KEY',     'T<cDqrw4KpL6.B.# w>9s,0e-2Rf)4(UKUD-3F`ij7E?DklHm01XeIp=4)_9n!^v' );
define( 'NONCE_KEY',         '_n4|$BdDevvzOV%n.>4hN u,)`*0+9Cc&8NDA@:{/3hQuL_`R(Z2i4).$VETb~)G' );
define( 'AUTH_SALT',         'P9IeNf@^-xTsO#7<J%^q7H;OKR+1mKg~Y^ODRP3Ihb3x;f(=l6E-MC5VJBlrn)B`' );
define( 'SECURE_AUTH_SALT',  'L0h`x=cL5{UE%9}b:hav0CZ$aX0U(u0::<$)1HY|I1!bP]d?/Cb-o.z.lD1$`x-5' );
define( 'LOGGED_IN_SALT',    'y#_OsuC?,$1-*#!Hq %6;AQmXWN;~.Eqc?lk-4w y3t{PzuZI8> d_WLo(Bf}4Hs' );
define( 'NONCE_SALT',        '<5[R_NismsXD0Bx>[{,&}IlmWisg~I$q^_z| (zl^E=xlrYpuX$WM]z{,ZA!awTr' );
define( 'WP_CACHE_KEY_SALT', '@;,r6sGU193y9YQ@q lf%)H;.U@5:zTUJ/Zi._)UrJPrCOhBlI$?tI4($u?5o>xK' );


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
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
