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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ujianori_wp269' );

/** Database username */
define( 'DB_USER', 'ujianori_wp269' );

/** Database password */
define( 'DB_PASSWORD', '.41Ss5pr2[' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'qgth8h7urwpbqebvz5ikqh7qfchhmdvhfmc9hskmlp6hetgx8xr9wbdb6splk4df' );
define( 'SECURE_AUTH_KEY',  '0y39t2vzvgh8t8zrvk6bh2p5fdjwitwlalpyzclybhdwnyudw73dm2mymjaharhc' );
define( 'LOGGED_IN_KEY',    'lwbtt8p8nwist2mfoxoq86cj0utosi1dn6bysw1vpw2qmrg1mtx75wl7zr4bcp0k' );
define( 'NONCE_KEY',        'nuqdqe7rl59rb5vhantpruvuupzdgkk66ayd6mnstal54z31yluwf1tny6miavm8' );
define( 'AUTH_SALT',        '2l3dljugz2hizwdfx6mmxkhbbulzf5bhbwmacqvpyfadhz2h16x7y4mhfw0qm1ey' );
define( 'SECURE_AUTH_SALT', 'l2vujuny32is73hbkxlq3szu459em7gmvzmwg7iztxvb8ht02nsrx69q0bln36w9' );
define( 'LOGGED_IN_SALT',   '5rff3cpiqxswyxtnezsvrytozgsmfdgau4hpikf3psfayyqmeimd4zxjs11hyc6d' );
define( 'NONCE_SALT',       'mpj4jmvzg1x8ia1ctmqjejcdg5d1mvoiil7wte03e96zi2pe2p4ugyg3l1fregvn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdy_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
