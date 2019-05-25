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
define('DB_NAME', 'amigosde_wo8193');

/** MySQL database username */
define('DB_USER', 'amigosde_wo8193');

/** MySQL database password */
define('DB_PASSWORD', 'Ub2dQWXPoVS9');

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
define('AUTH_KEY', 'z;XonU{@Sm$F^+%sjnpnxzG[A!mznUOyuHnZ!<rCVsq=TNY=dxiXWOFBce<!^xYWQ-cXSWlyLkZ?mjQvI;([X%%Zj]W*=xMzxByYGH?fg=S|zHeBhZF_^Ywwh]dhA}Os');
define('SECURE_AUTH_KEY', 'WhYC|/zia_l<&=ooez%-Op+aq|NFnA={z$j%(^C*}?GpYL?}Tfq-}lhtzfna&@PawYHH[Hg<DXRa%f|aCjI)x|y|]X[rkTy[^+??SK_h@s(R>j/CY[WOxP&-&{d;$SUN');
define('LOGGED_IN_KEY', 'ec&WnQ<G*^)>h)pOM}ZpGBmOu(Syd*uB{scRw]!S]>K<-si;Y]DNEj=ul;VV/(/=^yeFBQowtj(ELbFEkvsh|&n*}DQBIZqqBQW{OyRxEG@gh?=xt!^+n>vJx^bHqzn@');
define('NONCE_KEY', 'y/$<JYxB;^u|?-uqh+)ND-lSHW_yD)ommXnPtq<P+$lRT)VUK!rhX<t=a|k{=o%{iOB{?VIn(ed!u;%Nm_-r;Zpmgla>awmJXNnOrYY)(QxT=wAKuxFy(?K$d?%yRUwI');
define('AUTH_SALT', 'ffL*PHN%eT@DzbTs=mGw^/>s>TpA/%-o@g*@zTmD-Z@FhOTkuK=ht*D(uXd!aP[Z?wfcvO_pEWB?T+uL!|ZVyN-A}f;BlY}ZrK>vn{/o[/BYIqHZn]IU/]jTr[kuzjqI');
define('SECURE_AUTH_SALT', 'xilZzI+Swqg<}<%Y?;moqTkpP|iuDyK%@d%{lc{A+NSwa|jI%Y]PohJ!FO^RSFunV/wWPX%doVhCHnhl$X<]iz<h]ZAtOqzJ*{WP(VsrZ/++LD=WFPcfdT@iv$_TxB/)');
define('LOGGED_IN_SALT', 'cZoQ_*-H)Uh]EV}tT&Y-J}|IRf=C=kVlT&UrARiGBOcXk&E!P%xmtmaeqViZf;rH*LlVLOj;;U[{vwv+@KhYYBX(hN&c{rs(t-qeq>tsc)HwzM_{}jPluG[+[ToA%hC;');
define('NONCE_SALT', 'W?Emk_!NhMg?z{%SkaRYZjppvFHZ+=JOBXzr)OaS->m]lQYerbakxbFlig|?]+q*?Z|p?}K)BD^+vcrNYCWGaQ>*xtumCflUC^<*_s^yBL^=e=>&(OMdk)}aB/B(RMux');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ylxh_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
