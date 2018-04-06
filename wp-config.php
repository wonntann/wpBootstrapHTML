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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z113rt0gMwR ZZ?<mM.wFy;4`2=?zDbaZ7Y>ny)U6+tPy2<0d;RP9S(4vH1rYfJ?');
define('SECURE_AUTH_KEY',  '-r#N5HbR;}$rQC_Ok|Pv*q^e:%<f&<ia_<FU#!QuU-lXups}>,^M[$p=iR1c=L+h');
define('LOGGED_IN_KEY',    'F!Rsd6&/4JA>>itcm!mKS2684JO{A~o@q#C?4cJvsck4vG @.Wx,%{-F}{y65;,q');
define('NONCE_KEY',        'R`t^}qw} J^0O6b+6@>D#sLnlnX3qZ7GNNY/=#;+{}gMg.i%gyrySd)iEx8e/O0i');
define('AUTH_SALT',        'CUB!{P=7VMmH}b.kZZOhs:w*A4$o8Vwf7Z8]`^.t*eD9<yPi^T;F]|LS97N8sRN}');
define('SECURE_AUTH_SALT', '3Y[-(xXvm+~cX!lMunaAKUmWZAR kWcUMf#{5|U:Q15PaBU Z<V_u-l+g=7N5@>/');
define('LOGGED_IN_SALT',   '#=fS6}_4RRV*tOK*w90m)CG,W_S3KiguFAgj>p(Q&3+kMh40vH3z<)L-S=#)@jwF');
define('NONCE_SALT',       '<9^M6dUH,n|F/Ni9xKwpYew&c96>Uzc+g+?D3/{E6XX:8t`o;iOu9}NMW~a1c}SR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
