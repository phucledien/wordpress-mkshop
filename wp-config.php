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
define('AUTH_KEY',         '1Affc>7=AFhF_fSvTqCY_|U8z}Q1F(BvZEmSq!2AReew]DMg@JtY.;S3Ef$iwZ1$');
define('SECURE_AUTH_KEY',  '5|DPnDgN6 fm]ZNQ@>)3h-,USUidh:J!i$#@jK/Iua!An^+MnpIZ=ED;o7JsaP_c');
define('LOGGED_IN_KEY',    '4_]ehi!N{9aOmmUSyHddfJiYR!N~(Oh(?fuv{-@~fW2:ll hPnCPmW<A`obsT_If');
define('NONCE_KEY',        'Gh?yY]G~V;6t^3)nuSOd`xg]f4U@b2!u0SdBA,S$D!D59?&bdE+t H&Ms/nOowwC');
define('AUTH_SALT',        'l?xWPsoYHCPwDpXAaio%PBilCMcb|OhwqW][=%KIrJ+AVW$U=7LA6i369lJm14*F');
define('SECURE_AUTH_SALT', ')4JJWg1NpEPnXpkZ#<Yb*yVU5u9| @z:ZhJ{Y&cmZ]vzYl;6~IIB$dgR B)&B0#,');
define('LOGGED_IN_SALT',   'x,qIs9+iU,#k<lkfcC7b7<xJlhm/f([7~=i>YH8YzoO!ZE<OO:I6r,bUc6)#>ls&');
define('NONCE_SALT',       '3}iMIX<B_NYc/H, s3#o;IFUFl8fs N=! oJx%^]B!VPky22j)M|tXn1P<X`@DjW');

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
