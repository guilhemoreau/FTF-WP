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
define('DB_NAME', 'msgx_wp_ftf');

/** MySQL database username */
define('DB_USER', 'msgx_ftf');

/** MySQL database password */
define('DB_PASSWORD', 'FTFMDP2016');

/** MySQL hostname */
define('DB_HOST', 'msgx.myd.infomaniak.com');

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
define('AUTH_KEY',         'pHvMAz=U&2$F3]yBb!pcSCmayy&]If9m<Ii~ppKKxNoRFy`U{G2BGOb UH4+8Czz');
define('SECURE_AUTH_KEY',  '50WE)X5SdR=p;Q(Yd0XsosBGO*15n5}a++vp=^rLdFP(AfI6UJU>PLRACPNerUHD');
define('LOGGED_IN_KEY',    'Z )LQ(u$eDsP~;0t.A0&7Tw2xq-q[Bdjv,H&fl-CxPA+r(xm<EAw%0reG_:i)oMO');
define('NONCE_KEY',        '`u|vt<tC!Qj[,SqzEW}2pU}-CH(J![!<|J9Zu&<)vr$Ez 16w%Aa-`qY~pZwpmBg');
define('AUTH_SALT',        'YufB<z;}ec}qpmLf4ID1<vi$Os*?p{!tr;_s:}Gna!uQ|W1q.P%`97=W38QM*r)-');
define('SECURE_AUTH_SALT', ']2rQVh|y|KY#htZwd=19jDgJkCYO1cd}-F$B5`8qc)4|m0/9[)`8-G+(HJ0BNgF3');
define('LOGGED_IN_SALT',   'm_xOENo##n-w@.:[(VXyHatvKM%,}3L>iu(87jhu/G;h^6/ _CPn@cK|Egr%9M~;');
define('NONCE_SALT',       'mZ6~~g?|<*&b(D>Z^>iqsb|]~EF`+/Ho-{~`0wKMC|l*Sz#HauYTS1X/OGrHmdR!');

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
