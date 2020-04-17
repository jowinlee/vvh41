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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_forum' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm3]29?8H$:_[~e</}g9~#E?l_Hf+Ea-OPC{<zj%F8y;}Fg+#HF)>.b+ vWP)VQt,' );
define( 'SECURE_AUTH_KEY',  'Ax0F_olayEX^  xC1g+i9U7z24.].%Oqj/%I||`[oH?DmZf=CT>[u~WWT~.DX2*.' );
define( 'LOGGED_IN_KEY',    '~v)TE(p-NV^F6Tar4dv3K:n,DXb<ibf ,].$R9,g=ME!/U~@Sv7>uJ2:>K-QhMnI' );
define( 'NONCE_KEY',        'vSn=`Y@53ab`V(%~UkHVxWXM[,3b/pR:/S vDTmN_|B}Rd1&T-!vSF:noZmFq++%' );
define( 'AUTH_SALT',        'K(#L0?#zz|oncH}Alv52BZVx|<EQnqdVsZCqig}Yi=2Nu+e)z,(UwEC4&M|,(U;R' );
define( 'SECURE_AUTH_SALT', ' 5kj[XyFv+iZ5{4qg.OQ<MH5aIqr6p&@d~xZ+l_1du]}6t&-]NK=Q:$nS<!#%7)}' );
define( 'LOGGED_IN_SALT',   'Q<bFFTOc79(PGM3RctI5p|k<y72>vl@%m3(waX6w0=I W8b[fZh?pnD6A (~=w^U' );
define( 'NONCE_SALT',       'RwNFfl[)#`i~Vbk7Io;7V{vq`v6]3gMm?/MT!k}m794qkCW0@$DBT#<GM,1=gxI&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
