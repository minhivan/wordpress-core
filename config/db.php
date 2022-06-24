<?php
if (!defined('ABSPATH')) {
    exit;
}

//	Thiết lập Database
//-------------------------------------------------------------------------------------
define('DB_NAME', "");                             //wordpress
/** MySQL database username */
define('DB_USER', "");                      //wordpress
/** MySQL database password */
define('DB_PASSWORD', "");              //password123!
/** MySQL hostname */
define('DB_HOST', "localhost");                                 //database-one:3306
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */

$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
    $_SERVER['HTTPS'] = 'on';
}

define('DB_COLLATE', '');
//-------------------------------------------------------------------------------------
//	Thiết lập table riêng cho User
//-------------------------------------------------------------------------------------
define('CUSTOM_USER_TABLE', $table_prefix . 'users');
define('CUSTOM_USER_META_TABLE', $table_prefix . 'usermeta');
//-------------------------------------------------------------------------------------
//Khai báo thư mục Wordpress
//-------------------------------------------------------------------------------------

/* Move content directory */
define('WP_CONTENT_DIR', ROOT_DIR);
define('WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST']);

/* Move wpcore directory */
define('WP_SITEURL', WP_CONTENT_URL . '/' . CORE);
define('WP_HOME', WP_CONTENT_URL);

/* Move plugins directory */
define('WP_PLUGIN_DIR', ROOT_DIR . '/' . MODULES);
define('WP_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . MODULES);
/* Move mu-plugins directory */
define('WPMU_PLUGIN_DIR', ROOT_DIR . '/' . MUMODULES);
define('WPMU_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . MUMODULES);

//-------------------------------------------------------------------------------------