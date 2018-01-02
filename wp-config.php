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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'naturo');

/** MySQL database username */
define('DB_USER', 'pma_gaetan');

/** MySQL database password */
define('DB_PASSWORD', 'estelle53');

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
define('AUTH_KEY',         's7DO~fxTT<c?m,)0.3ni;7Ja8lGfhL8^$@+:HaVAq`r[3^=nz8kQVszK^$+=xPU0');
define('SECURE_AUTH_KEY',  'rcmgf;Eg^u@N,@JPDDPIyTfv?@CoQ!ILzGbg@X@b#Kg^^p`yCfiw=C2qiGt@Q7#}');
define('LOGGED_IN_KEY',    ' #:%5D_Mg`*WfyXeNt)jb1Hyrh$:>1!>UQdCt(Z-:.M5 hA3N)hO@3PI6(>#7u:]');
define('NONCE_KEY',        'ZMW?1U;h D&*_w_{}m$1q#Mt% }U}GbZ<|L6Ub?zXk K~VbkTD~6d`l:k%Y{lU>o');
define('AUTH_SALT',        '@tZEk4ljTl9U[lLhj<ZnIe~B.@>1u<u(Nd,Cca !4>Sw%U$SFe$WD]2UDU^tx3V}');
define('SECURE_AUTH_SALT', 'I~~T},WlD4gRGh>_KZ^CkoC9$64:&rrXWWy&qCmN8l#6qYjnZlOBZMB0&3(/V%1v');
define('LOGGED_IN_SALT',   'P>I&b^|!P]/ PL1@i+RLs)E|K3ipRC:@}8xWEy.104S~)t#.K]6&ZkIkv!H[Iq7r');
define('NONCE_SALT',       'xs[*y<??q&D)0#e?5m:,HceXf1=O7mM}YO9:})$I|n$`JB8JWY<1Jvpes4Ctm!VX');

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
define('WPLANG', 'fr_FR');

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
