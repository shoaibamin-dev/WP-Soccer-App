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
define( 'DB_NAME', 'soccer' );

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
define( 'AUTH_KEY',         'iHZVoCWrHQ* Y$a>mPxd8j].v1%aIKck4dAB;/[n{&RcB^{=T2k5)sNMX+7*>;Jh' );
define( 'SECURE_AUTH_KEY',  '<fv>>[,7>.X%PzT:.!Kfe25s}W<5*D&D[7SNF1cz@Y=&Ik?&HfLY?F^a_#~H9:MD' );
define( 'LOGGED_IN_KEY',    'MHOXIN[:Q(lSAt0d[:Ll%JCAtv3p++xR O~Pid_D=TWe1gep5xkkKpu.Eq2#$sv7' );
define( 'NONCE_KEY',        ',?Y`|qtE<Qk*_i!u3lDl89/[[r;%(?]key#0L>/g<jg.Yt%.|E?oKO(rMqU89, v' );
define( 'AUTH_SALT',        '4+u/0K?`lXe:<v KEoM9o{n]ZyN4;wghB,2S.|,P-Gs$Sk9V$*:@i$Ph[`wE~IV ' );
define( 'SECURE_AUTH_SALT', 'q&L;rRV{WwNb}%OHp>gXHGM-9KN):x3c!:)9byY]>yzOWrQuBJ?H^0tAJ[4ITR`G' );
define( 'LOGGED_IN_SALT',   '>}ud]*101&2pTw,;BOosa.CLT}K7AzKQX[[<DQFTC22U1&]VE:FyRq92/;bdpEU:' );
define( 'NONCE_SALT',       '+TIA&J>p,8FH.3hn!k+/&#5XD^xfif~9>JCz-3]%.>PjRXwvY5R4pPCvR9ACVi7,' );

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


@ini_set('upload_max_size','1000M');
