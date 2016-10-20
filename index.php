<?php

require (__DIR__.'/inc/core.inc.php');
require (__DIR__.'/inc/connect.inc.php');



if (loggedIn()) {
	echo "You're logged in.";
} else {
	include (__DIR__.'/inc/loginform.inc.php');
}


?>