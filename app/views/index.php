<?php
require_once APP_ROOT . '/lib/common.php';
require_once VIEW_ROOT . '/templates/header.php';

if (loggedIn()) {
	echo 'You\'re logged in <a href="../app/views/logout.php">Log out</a>';
} else {
	include VIEW_ROOT . '/login.php';
}


require_once VIEW_ROOT . '/templates/footer.php';


?>