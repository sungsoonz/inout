<?php 
require_once '../init.php';
require_once APP_ROOT . '/lib/common.php';

session_destroy();
header('Location: '.$http_referer);

?>