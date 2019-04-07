<?php

error_reporting(E_ALL & ~E_WARNING);
//error_reporting(E_ALL);
ini_set('display_errors', 'On');

define ('DB_HOST', 'localhost');
define('DB_USER', 'root' );
define('DB_PASSWORD', '');
define('DB_NAME', 'quotes');

define('STATUS_ACTIVE', 1);
define('STATUS_DELETE', 0);

define('SITE_URL', 'quotes');

define('DEFAULT_CONTROLLER_NAME', 'Main');
define('DEFAULT_ACTION_NAME', 'index');





 