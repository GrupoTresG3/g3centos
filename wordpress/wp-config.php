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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'e6[Nu`rNBkJ=#1bxy>5*fKls*!|eE$E=/yK7Z/Mot0ZGw9HufcQV>g~lx5#8L%(n');
define('SECURE_AUTH_KEY',  '!skYli5kks~[#ke18kS01./zfr/SM1$`Ey?0|V1e_wX@9) -_^ZQ}DaIo9D&S>?}');
define('LOGGED_IN_KEY',    'JTeP8PDwr0[-JejE;<UwgQh3><b[.^XU@?n@E=`h|@IR!rh`az(.Pt&t7=gTijpY');
define('NONCE_KEY',        'RxR0c?4]qmBYx0RaA[$<q ;As~KU?V?6oaN3l_ *Xl%hm UKuZ%/<)c4BA|fv]wz');
define('AUTH_SALT',        '9<,U)5P_lftx`*K|Dp)9!u*6J=^IC{&rI3: Y2vU` GM541tiGyD|-`9m0LZEKa]');
define('SECURE_AUTH_SALT', 'xRx~h@]rEu7M+/sm KuB<~,dxp#1Pqh&a@<W@uhg(++S&:F:58.&_ku1F=5PmG9_');
define('LOGGED_IN_SALT',   '^wKqoO&#/T4VTa+6qQt<J,Sr,Z{8W1&4#mxyXJs>QA.BB00+DH/f-37%@Sw!2x$3');
define('NONCE_SALT',       'M5BCBM9lX4aZN5,cS]P^gcJ{gir<&T=-o~^o:9m2Fjr?~>W-b>$5*1Cxl>m_xd_S');

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

