<?php

require_once (__DIR__ . '/..') . '/../lib/common.php';
require_once (__DIR__ . '/..') . '/../database.php';

if (loggedIn()) {
	echo 'You\'re logged in <a href="../app/views/logout.php">Log out</a>';
} else {
	include __DIR__ . '/../login.php';
}


?>