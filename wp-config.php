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
define('DB_NAME', 'projeto_temaswpdois');

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
define('AUTH_KEY',         '_]Yy_ki<;6deYi-CWl#E4N;5ZBK%-LrP2BJ$JEygO5cnMQ)s/-[9Z`{+Ef-m#y/O');
define('SECURE_AUTH_KEY',  '6O/k^yPo`4ffYO}l.gIWuk/t7amd9W~2r?Sa[}sJ.%O4BEwcrL,&/mNrLh7&X*&*');
define('LOGGED_IN_KEY',    ')zj6_q2`|^SwgP.W~Nb3wBVwiz%VMI&/F-`3SG~!OJv<uI)HbyNz}~)RkFbeB-GS');
define('NONCE_KEY',        '=FuD,tpE}|=Q{D]s1j^MM35DKDuNc+{<MirS3&V=_@Hmb,IUg{7$PCKu_.wXOeYm');
define('AUTH_SALT',        'Jz4M)8Au<4< bGOnx1-fHNW@GW7cBI/HM*(K>AwS^JS(x-:3Q=J[!1H{v{(qoIL{');
define('SECURE_AUTH_SALT', 'NKP!)ThyXz5j5Tn{(J)U)+w=Qr;E^BcjIpak([<&wY2NpMI8{O8=lw &QE?X6N>Z');
define('LOGGED_IN_SALT',   '9-(6EW>R-t^5 SCBSFm{_ghvFw1CaVa||=6sP|9H<L%7eFOsK`L!D%qNZH:_A.G5');
define('NONCE_SALT',       'H([ubUiKj@&vea!lcjv2Tl2l.@qm/xu.7HXNfV5bk4AMw;agz*zd(B&Ew/YS|q=Y');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
