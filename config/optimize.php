<?php
if (!defined('ABSPATH')) {
    exit;
}
define('AUTH_KEY',          'EoFV{HjE3b%M+@I@K4OkHD8DR8@#{~@ZLO-y13K<p-4kF&G;1j$.)57*{J8ao]F?');
define('SECURE_AUTH_KEY',   'Qyb$;C0nD%f_(@}=T{QSA<L/#uzFxtZSlP)}32MF%_O3O8:g&*=;M-![,|FZ4/2s');
define('LOGGED_IN_KEY',     'U|X{efp}KI0z7EDnu73Swj_bLETn^DkQrp}^aKKv&r -!{|9^~%/fM6$SUOR$g_Q');
define('NONCE_KEY',         'TZ6mBt`)HAV+@G8FzE:CM#+M+rW*y(;f3Ka8@&q+W3wo_*E!W3P$qqQ^SI22T@P=');
define('AUTH_SALT',         'ej&}:6vouNEiX,?h?9#9j(@CINu+SU/26d1$(MP2FH#CM70{,5ZYq,p6!.e3`s{t');
define('SECURE_AUTH_SALT',  '1m%5V. )2dE`]M.|Z[Lg;0xxfYM^voI<Vl!lViHMRGd<FBK_Nssgj<I,{Q/Y;Q[+');
define('LOGGED_IN_SALT',    'K4vzTS6+wRkOVf0BDeQzPj@(.TE!WcZpTGwk$(5b/_pVNN1KMc1xBCBBw,6Wk am');
define('NONCE_SALT',        '5s[%:G}0*%quJ|/$jWa$?lkSsi!x6cRSefOC(yU~4:D(UO~,y5c0*{R oZ0$gSds');
define('WP_CACHE_KEY_SALT', 'kEsye<`~]5U8b(>)i3=ZRTbY<Cf<i3j3mA/4183:[vd1n/u[azs)[Y=*l}Nj 2!,');

// Thiết lập cookie
//------------------------------------------------------------------------------------- 
// define('COOKIE_DOMAIN', 'https://' . $_SERVER['HTTP_HOST']);
// define('COOKIEPATH', preg_replace('|https?://[^/]+|i', '', 'https://' . $_SERVER['HTTP_HOST'] . '/'));
// define('SITECOOKIEPATH', preg_replace('|https?://[^/]+|i', '', WP_SITEURL . '/'));
// define('ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin');
// define('PLUGINS_COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', WP_PLUGIN_URL));
//------------------------------------------------------------------------------------- 
//Tối ưu cho Wordpress core.
//-------------------------------------------------------------------------------------
//	Skip wp-content when upgrading to a new WordPress version.
// define('CORE_UPGRADE_SKIP_NEW_BUNDLED', TRUE);
// 	Disabling WordPress' Automatic Update 
// define('AUTOMATIC_UPDATER_DISABLED', FALSE);
// 	Disallow edit file
// define('DISALLOW_FILE_EDIT', TRUE);
//  Tối ưu cho Wordpress core.--------------------------------------------------------
// ( Bật/tắt upload plugin )
//---------------------------------------
// //Disable Plugin and Theme Update and Installation 
// define('DISALLOW_FILE_MODS', true);
// // Disallow unfiltered_html for all users, even admins and super admins 
// define('DISALLOW_UNFILTERED_HTML', false);
//---------------------------------------
// Thời gian tự động save bài viết
// define('AUTOSAVE_INTERVAL', 160); // Seconds
// Tự động xóa rác sau khoảng  ngày
define('EMPTY_TRASH_DAYS', 5); // 5 days
//-------------------------------------------------------------------------------------
//Các thiết lập tối ưu theme
//-------------------------------------------------------------------------------------
//Gọp JS
// define('CONCATENATE_SCRIPTS', true);
// activate JS compression
// define('COMPRESS_SCRIPTS', true);
// define('COMPRESS_CSS', true);
// define('ENFORCE_GZIP', true);

// Giới hạn memory
define('WP_MEMORY_LIMIT', '128M');
define('WP_MAX_MEMORY_LIMIT', '128M');
// Cho phép Cache 
define('WP_CACHE', false);
//Lưu lại query để xem các query của các function bao gồm plugin. xem thêm https://wordpress.org/support/article/editing-wp-config-php/#save-queries-for-analysis
define('SAVEQUERIES', true);
//Disable Cron and Cron Timeout
// define('DISABLE_WP_CRON', true);
// define('WP_CRON_LOCK_TIMEOUT', 60);
//Automatic Database Optimizing
define('WP_ALLOW_REPAIR', true);
// Giới hạn bản lưu post = 3
define('WP_POST_REVISIONS', 3);
//------------------------------------------------------------------------------------- 
//Khai báo môi trường Web
//-------------------------------------------------------------------------------------
define('WP_ENVIRONMENT_TYPE', 'staging');
//-------------------------------------------------------------------------------------
