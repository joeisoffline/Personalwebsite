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
define('DB_NAME', 'montanaWP');

/** MySQL database username */
define('DB_USER', 'jma');

/** MySQL database password */
define('DB_PASSWORD', 'password1');

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
define('AUTH_KEY',         '}l-_@w*Gn}n92s@0N+?#:JS>l@*;|L/M(Y,h=ezO q:#]nG7@`NGeC_Aw)q/sJoF');
define('SECURE_AUTH_KEY',  '&;hn~3zR~c_(%CipIdkigVafUkT3sq+4A%@Hs$~_9@[)^A4R!$s:+9FM$I_:N]ta');
define('LOGGED_IN_KEY',    'y-@_?ZZ9_7kCOIQRdVVO`QWE16n[KQ?}sGUf~wtGIO{YM++=31yR$s6AmJIqd*P,');
define('NONCE_KEY',        'ktk@k~iTbbT8&w)NN{lPt?Q>Xe*.vZc]C$4LB#%?z[OS)%D=.H65Q8%I,5jWnB37');
define('AUTH_SALT',        '+:^<yenmm}3Y(lNJ.IrB66!Q+,n@-Q6J#M;PsR? *4d#op%xs}YLOipJn+HQwD~D');
define('SECURE_AUTH_SALT', 'M-pBV}`r^J9D4%[E(S02U.I^zX/{sP=:S08i{[O3mcQ{_EfTT(EWA89vvL[;]8iM');
define('LOGGED_IN_SALT',   '3ts9ronDQ!:1&[(iJRMRM%Cm6`ql1UbC!0Ka@+6)C<tOL{OFa1Ucx55]CNisor!h');
define('NONCE_SALT',       'jg!+rT,W!x@h:=`J63a_7/h(yuah*~Nj)ti#`hBR/__r`DnW>$}!Fwm3IBl<!XX3');

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
