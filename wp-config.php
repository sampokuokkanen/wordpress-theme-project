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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '#*vs=|X1oEN!RDH1NKE~9Lc!p}Wyn?|krLt*zcP,k;sl*pyegcj+`AQAL!$|ih[]');
define('SECURE_AUTH_KEY',  'i2q=Un9;Z|=mB)6[6LEDFSO-FaN=BXQ9e3#U)Dlg1)e4WjZ@,_@gAS|eXU|`U>5n');
define('LOGGED_IN_KEY',    '|>n,^3BD?K5>64^v5DxS#raNpSnGRX:wDdq!-o,u[N_we8X6hbr-m2X:,JFF07jF');
define('NONCE_KEY',        '^Pnbl,@.1i/s@{q-R|Rm1ls.|3D(yj,Z+Evi.l^=j6(v~qxH=#vAuf9tq+#Lfyg=');
define('AUTH_SALT',        '$BxS{jOg lw#MdgI;j+=U)L: I;Y%[JQ3YtBS$0yq-,wXdyVYGKg^[|eU>Y|DNto');
define('SECURE_AUTH_SALT', '%Patun@$sXF$3i+IHO5.4^5/yKsaUK*y(r^8j03J;qmi-;5=gQ?-p)R2y[:P~<57');
define('LOGGED_IN_SALT',   '4`=eKQQx6`W/EmIqhACo6DMQLtZ|e>uoIV?5Z|UYzWR6n{E+/7f?#1`cGN17+2#+');
define('NONCE_SALT',       ')vK)bSd_LiV}$mJZNXzicw&4EA7hj4k!z(mu-Et22*u7A|kpZhfY It/c;YgLk}=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'word1';

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
