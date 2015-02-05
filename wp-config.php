<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'k4-HOC.?ORYNcU0=~5Ti2 jMB5=@G|~/G|AEqLi9p{>Y%c-|2@lWHw3|1@Fmkw:E');
define('SECURE_AUTH_KEY',  '?R+ 9<B#L6mBL9L)FSd]],qd]Ba[uD?Tt.HQg-{FXu|[?H`yT!0GqWL.r_.+q?[~');
define('LOGGED_IN_KEY',    'Tyl+}]CS^MHo D>0L1KTXg~R?tJkEMOB(g6BBpId-f :cMI.|_kHI;}K3;+N|AjS');
define('NONCE_KEY',        'y0Ku5!#*,KExr#g.V*EMBi4?}0WZbknVRH#t$WK|04 <]!Zx>:Gx;^vRE5u-`]1;');
define('AUTH_SALT',        '2%2R-#ff<`+[7gT(.7+VCAU[G;de%4mx0PporKxg[W?Wk|8cK+&B>TzC]%;aVZ;]');
define('SECURE_AUTH_SALT', ':i3wPk]/C9d<DXk@Ii<KHdLy~/}i+p]ct+I/,j8s}TzVE&,tC^6 zj!lTW+{S|+j');
define('LOGGED_IN_SALT',   'S%cmtrK[ilU%b~Gn{h=05G/9OFCIke]K<w MoWoX4Q2Iigb>ng.h~:gJh6=ext#~');
define('NONCE_SALT',       '|9e+o<#Vd;qi3J]#XB5c(6wPREWROsk`t~z{nI[[p|?iWI);FY+W%$Ls~fp.{cL ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
