<?php 
require_once __DIR__ . '/../lib/common.php';

session_destroy();
header('Location: '.$http_referer);

?>