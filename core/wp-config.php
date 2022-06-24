<?php

include dirname(__FILE__) . '../../router.php';
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');
/** Location of your WordPress configuration. */
require_once(ROOT_DIR . '/' . CONFIG . '/config.php');

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
       $_SERVER['HTTPS']='on';