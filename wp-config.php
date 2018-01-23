<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['cleardb'][1];  // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $service['credentials']['name']);

/** MySQL database username */
define('DB_USER', $service['credentials']['username']);

/** MySQL database password */
define('DB_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['hostname'] . ':' . $service['credentials']['port']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'oCl8a;a,{Bp97XI[tR=2Q13KyF|v!8mK8UdbEX5H0~UrGhKRPsJXFNQQKUwQ8FDN');
define('SECURE_AUTH_KEY',  '?%bjHq-o4z64(|2#I|yx8Kdw4Gb/k2BK{br$(6o+{Nw`$JE|?]P:^rmqsl}sy3Mg');
define('LOGGED_IN_KEY',    'Pq@3++M2BH,zh,~Oh<HsAmQhPCGpVT1;j26J4i66WQtH=5a,Lp-`QFaiOkzav?w&');
define('NONCE_KEY',        'grm-y;=U0Kt]&HB$fLFK<nGl8Vl,<jtu0[d:kHR]jg-Suy]e} cQ$H|*CKUcq@R|');
define('AUTH_SALT',        'j#A~jOIj2#MqO -^rHN2lSfnH8G f_j0s:%Qd<Af}o6$MP>/B1UxQ!k6|k[=^+^~');
define('SECURE_AUTH_SALT', ']~5<,Q{g+A.LERhht06[{f<T8K?0*RFEKy|t_ivq|hmoLr#H!#4;pLG2gDKlgbwY');
define('LOGGED_IN_SALT',   '8~()zN;FXdiYNGEH>+?:wI.+B>e2OFDeYjhXatSQWc|pZGlGZK<[_7T$^GC8lifc');
define('NONCE_SALT',       '26K:L0w>.Gb7[5+=}m8Q,UWo[QV*2| 62e41D}E_opP*0F~/cF+n* T!J:5Pa_$R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
