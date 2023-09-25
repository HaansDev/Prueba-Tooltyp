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
define( 'DB_NAME', 'cf14092023' );

/** Database username */
define( 'DB_USER', 'cf14092023' );

/** Database password */
define( 'DB_PASSWORD', 'FIej06733)x' );

/** Database hostname */
define( 'DB_HOST', 'd406.dinaserver.com' );

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
define( 'AUTH_KEY',         '[gXe`VgBG!N3}>T 37eI36e#.s?|)fjo(Xb|8$sq5g/.H/.(fC)]<D9-ONMu=fgS' );
define( 'SECURE_AUTH_KEY',  'Tbf?8aF~5>v>8?!/FnJ%mtiN$L6z?$CcGu}Uw.w,sb4Fb$ZtWwlZu-B?]dpY5rUE' );
define( 'LOGGED_IN_KEY',    'ff`Bnp4Y<+].kp:Ewr#bf%=?D{YaTn<SN2Z& $]@{gCZX;c2HIF oj!0Jj:|sKF<' );
define( 'NONCE_KEY',        'ci>nZh9Zp5@~Arefq/Go-NIFOu-5#M.OZ<V#4qfxN;z;M#Eqyadbl?X+xbkwULmP' );
define( 'AUTH_SALT',        'O&e7sK+97J;^S! DSL6t|]fo`cE^aT{`BP(YP.CCQ1fD>POarN,H|+#CKGc0C*-g' );
define( 'SECURE_AUTH_SALT', '6gd;4uW=JjB &q x7xE!Xv*vl1ow(f>Dd#bKVYzzo#-wC~|]4XLhw,B<&HR?a1Z@' );
define( 'LOGGED_IN_SALT',   'l?N^h&5dOeJ~D]Q7XISF>4<&*l10?$9*MuMn.4C.Hh8y]VKh t 4i<,R>x|z[*zT' );
define( 'NONCE_SALT',       '[ag8pkuh{<MqSD^|3np`,GG%q5*h&Hx=leb0bMlo@4N>M=sNehi|n5gQ0}|O7X+~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dev_';

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
