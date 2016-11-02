<?php

if ( isset($_POST['username']) && isset($_POST['password']) ) {
 $username = $_POST['username'];
 $password = $_POST['password'];
 $password_hash = md5($password);
 
 if ( !empty($username) && !empty($password) ) {

 	$user = DB::getInstance()->query("SELECT * FROM user WHERE username = ? AND password = ?", array($username, $password_hash));
 	
	if (!$user->count()) {
		echo 'Invalid username or password.';
	} else {
		$user_id = $user->first()->id;
		$_SESSION['user_id'] = $user_id;
		header('Location: index.php');
	}
 		
 } else { 	
 	echo 'You must enter a username and password.';
 }

}


?>

<form action="<?php echo $current_file; ?>" method="POST">
	<label>Username</label>
	<input type="text" name="username">
	<label>Password</label>
	<input type="password" name="password">
	<input type="submit" value="Login">
</form>