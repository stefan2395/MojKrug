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
define('DB_NAME', 'h-o');

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
define('AUTH_KEY',         '6][go0.^}[wtvTTll0TT)to9Utd?pr6Bf(4AS5+o_Ao/>/l{Yq5R*zc G0Kt7@F@');
define('SECURE_AUTH_KEY',  'i~`PhcAoF!`RuY_gQ&+r|]NT(Pkhfq#Y/SN|D6~a(dR}9d_BRD%.l.oh<ZRL1?9g');
define('LOGGED_IN_KEY',    'M]m;hevN7U/[`S{5,J?se`blDLV7yNq[lgTFDuGRqu@TAbUzqcLU5ck$Pkcmx}p!');
define('NONCE_KEY',        '4BQh/%w(V)[yGI4-G=$2D=[#/v*M+|w9eA/o%o 93Nag{IodX|m}rjVBy;ka@c^m');
define('AUTH_SALT',        'cQguYjG:C-)73A+CDxK p!n*iAL:Fw4C*5NcAb})ggm]VvRGyFS@%OE5B{+=:PpD');
define('SECURE_AUTH_SALT', 'GKzH2Lz2oD.o=kQ>]9q*gw4sm[w9p]yj9QpI/}5Z<]8]p,7,X*X9LIko |+dEUj2');
define('LOGGED_IN_SALT',   '<D]LNB+7eAs|NacPJu>%&xprHig%o%q?gsi`cjfKCUv.>%S[FyH =QDjpoJi_[=c');
define('NONCE_SALT',       '|d)FU4R%SQKy@5/X5:^Ufe5q2G>9<EEu4a2Em@nH`V4%YBMJkS.U|QH]y&.4N=$0');

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
