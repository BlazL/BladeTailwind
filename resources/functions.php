<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;


define('IS_VITE_DEVELOPMENT', true);
define('BT_VERSION', '0.1.1');
define('BT_ROOT', str_replace(ABSPATH, '/', dirname(__FILE__,2)));
define('BT_PATH', dirname(__FILE__,2));
define('BT_URI', home_url(BT_ROOT));

require_once(BT_PATH . '/inc/bootstrap.php');
include BT_PATH . '/inc/inc.vite.php';

bt();



