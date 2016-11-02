<?php

spl_autoload_register(function($class) {
	require_once 'core/' . $class . '.php';
;});

// require_once 'core/App.php';
// require_once 'core/Controller.php';
// require_once 'core/DB.php';
require_once 'config.php';

?>