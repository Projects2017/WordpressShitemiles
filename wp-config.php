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
define('DB_NAME', 'wordpressp1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ut6yp[M[cLg;VlcQyY7rPkNR@y326M0+J@Wcn,d}CCN0E!;L4M^<=L9kd.3Ky,,%');
define('SECURE_AUTH_KEY',  'e(BH&u#Q4>J[74H,Paa<{mRa(:s1j[7.6Rjmc?TMaF#GpVzjT}TDIa( v!{jQ,RC');
define('LOGGED_IN_KEY',    'k_D6TAPj~w>C_6Q1vALTs;5~qe>xyvK[|I9UaUHHI^JEP0!;}cfG@N}.`o[aa+yo');
define('NONCE_KEY',        'K;pD#T5!C&iW|yoA#};%o&Ex[eY&9Dkb%I5#CiIkB^T mM&HqI7HRj:i6/)<isp~');
define('AUTH_SALT',        'UpXp<qr~Ph|}|7hf<mR46Ik}?:K7Gc#3Kvcy1[E3m{$5T,4e zOcpj+n$1yU~b-,');
define('SECURE_AUTH_SALT', 'Ch=DbVoHO`B<z}-WX{0(,l<n&#fpP[Q{_h-}o15>#Qs%dXE_PH3zak }B5R~S_j#');
define('LOGGED_IN_SALT',   'lQ)1cY[cJC+qEVRO)waTIU/-/<.;W$j#Tfb|R+p8Z6)~,S0Eb=4cZ@n[(Zv>du^<');
define('NONCE_SALT',       'h5iH4@o/gkhoj5V;QL~S-$4M4wW8bcIN>?.O~{.y)QtQ?L>THS(1[j]O&Y (_X@U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_wp';

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
