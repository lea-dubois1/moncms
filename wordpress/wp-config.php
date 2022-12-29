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
define( 'DB_NAME', 'lea-dubois_wp_qinyc' );

/** MySQL database username */
define( 'DB_USER', 'wp_1w1i0' );

/** MySQL database password */
define( 'DB_PASSWORD', 'B3F#98Gus_TLpQ9F' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '+rDqN667!z)2s9|l8I/18&sp4wq|4-jHN[I&QnvGp7#9278%8lG[l~wwB4L*L0Y0');
define('SECURE_AUTH_KEY', 'O3_~If:1plf-M160A/vr;GSp(89R5&)G80+2SC!75EMh_uVM+2@43fyW[SOL7nw0');
define('LOGGED_IN_KEY', 'n~-8b::|J90bw0]7/Z#*VY6n6;U3BDK65Q66ku:~#48[xLKLj/Un]!:wjC(DCbfN');
define('NONCE_KEY', '2w4Afmz8i36~3rY%jxFP&V&iSaj239-8F9@~6v]f:xu/ly*6f0@uGT7Q7%jHZB!&');
define('AUTH_SALT', 'f_js9pE3ABt195[(J9mG1Z~K2h8siTJh42#R;Q_-&Z-*4(]2l69Id7&6O6O8a[sw');
define('SECURE_AUTH_SALT', 'zNov@paVh~&Gc]@;42rn7@Xsv03#2~KWt2~dM9Zj3Oi+l0&4J0o069*LLoFx2S1o');
define('LOGGED_IN_SALT', '1+-13Mdfknzh2):7Ah9S;ZGzLfvK%%_)i9x5~Se+t5oC%#Mvtq14]I!tei;924nS');
define('NONCE_SALT', 'Q0PhQ8bAEc1;+Njr1z*7y!]a/!lt~NQGeO;*Z@/1P)(MO&69kk*1P9o85f2xF/r:');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'om9fkRX_';


define('WP_ALLOW_MULTISITE', true);
define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
