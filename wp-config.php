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
define( 'DB_NAME', 'dev_foysal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'hBoD!k*{~<3^*.!gr)@%m9xUm>1}j&3Q&~iK %t[27IwdX3L*Gw#b[+-pD?k~z&T' );
define( 'SECURE_AUTH_KEY',  'k]-4QpR_I9E1%;Jso1}@Qb]Y#]n~qmYp,0j5Q3imK#lSNqz=A/_I-qj[c,LC#Gmh' );
define( 'LOGGED_IN_KEY',    '1C_!+7q-;VRCu %TvNR`Gp*,:=4a-*[s_;uo4iyD5?`9V>sc8JS#R3V_ 0>,#=Kg' );
define( 'NONCE_KEY',        'GZ[z!}(BU()CIXdz.3H>L}r@/p?h(CCqQ&<-gj?D,=;6zjN@XD)aXvMrq}vPn;X>' );
define( 'AUTH_SALT',        '^grk26@a5W9$J|58]@e$f8HKpIF0iFRhv3h@nj[#Ho?T$o81mz#3fQDG,:cD1cmu' );
define( 'SECURE_AUTH_SALT', '0F_DF0DSu1B7O#a=$q2H]a|mPq@in*-f;Ra+&.-n#we4#{%W-WT[dY(slRv@j$|m' );
define( 'LOGGED_IN_SALT',   'msAsZ7/U,(bz9&T^xlhp*v.-!!Fy^PS[=mAuZ=SVsfqZ>%EUpb=*mJbcf?;+yGgq' );
define( 'NONCE_SALT',       '#hdfS. KEZkKO?[)W.|tzEPg-f%=MG,qS0EpU}z/{cHaPF1_l@y/rliBnCF.-DyI' );

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
