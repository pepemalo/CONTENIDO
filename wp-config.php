<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gestores_contenido' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8080' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AM,>wu|eV=A6X 9%IlK7nVkx0t4v~y_ @Z=+;4S(,fg$g,/DU.sI/OXO(B|9u!`7' );
define( 'SECURE_AUTH_KEY',  '<)@gAOnlI0)YGuH`E[hkrDIl.]uUoW.4U^(P~N;>|8-q+#q$+KH%@m1HQ+uzjUoI' );
define( 'LOGGED_IN_KEY',    '#B9_3*]vU!K=9.Z]t.:<{3n-,`0T7};AuR1Wr[jx30/S:lRd<1D-c|OGT4+: 8 ^' );
define( 'NONCE_KEY',        '+J&$]2?&O!]Gv3MQ$0[4E$gu~dU8qRV7D1PfwlyvU]r@fU3jkuUbMH>+S%m}C:yE' );
define( 'AUTH_SALT',        'y5#B<sSw:XSQp:f{sg_453p!}cX# klU/V0cT:n/Y/-p</*hkge[!]D]rXq6r6l%' );
define( 'SECURE_AUTH_SALT', '`RJIF}(I}X%HknJ&Ad&pbcZkoZNQe$`S5JBC}!y2f9TN-`;Hp5_B5iA,E9a/jJQs' );
define( 'LOGGED_IN_SALT',   'HumTt.;QXEVeJ[TC<D^Zz1`LgskLR]P ~vP!b?Dkx.Y8E_=e)edVUhWh15WJ1o%g' );
define( 'NONCE_SALT',       '%Zuj9qzn9Tf`8PlV~n90%odWI{.9T.P-jtgu<We}R7K55PU2V!WW<<wQe[$D>HU-' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
