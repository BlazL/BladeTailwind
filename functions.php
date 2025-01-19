<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  



define('IS_VITE_DEVELOPMENT', true);

define('BT_VERSION', '0.1.1');
define('BT_PATH', dirname(__FILE__));
define('BT_URI', home_url(str_replace(ABSPATH, '', BT_PATH)));

require_once(BT_PATH . '/inc/bootstrap.php');
include "inc/inc.vite.php";

bt();



