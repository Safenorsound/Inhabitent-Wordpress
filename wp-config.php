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
define('DB_NAME', 'inhabitent');

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
define('AUTH_KEY',         '+un0@q722O:j=[JvXhCc)IMz0#MPnCShy[yN}yffQYHIvVcA4aSs4J$B3p30Y=NQ');
define('SECURE_AUTH_KEY',  '^NB.RV^:Z9gmfxlFtu9<)~4^/p_5R)_n42x:L61`R/Tqso&&GKHmQ 4P#J?ZLAvv');
define('LOGGED_IN_KEY',    '<pOtBuxS0Ln1h3PNA Ba|{GRgE~(3x-]Oe&sU`b=jdnRt>o1j.NTHtBQ}CISybvM');
define('NONCE_KEY',        'UTIxeZ~}atbaO0b`gd/8+y=!HQh8@2WB,;I$1/OdF4]Gb5JvMjg1xc]!?LgDE;fd');
define('AUTH_SALT',        '18G4fAM=et9o^ud&|wu^9kqAwb~H[YH&`i#j,k;5Z!gI^~JG..U@T94sg;nd@kq}');
define('SECURE_AUTH_SALT', 'hBg~d==zn_mcyP%ZY3`$7VFFm8v+Zaz!+|A<.Cf!r`yp+0T Uf>2 Xc]c-?^^OIJ');
define('LOGGED_IN_SALT',   '!|U2Edtr2$>[3.5o1QCCrc11/6(;>,`e9@<]gvaR^=f%{[GBk}il=,((.6Un9{^+');
define('NONCE_SALT',       '#9XbV4@k4;,;:]RK.y$0>_yYkT[.+xAN2.P`=<ptJCS5_aP{<qt;7clbYT*/C+< ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'inhabitent_';

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
