<?php

if ( isset($_POST['username']) && isset($_POST['password']) ) {
 $username = $_POST['username'];
 $password = $_POST['password'];
 $password_hash = md5($password);
 
 if ( !empty($username) && !empty($password) ) {
 	$query = "SELECT * FROM user WHERE username='$username' AND password='$password_hash'";
 	
 	if ($result = $mysqli->query($query)) {
 		if ($result->num_rows == 0) {
 			echo 'Invalid username or password.';
 		} else {
 			$row = $result->fetch_assoc();
			// echo "Welcome " . $row['first_name'];
			$user_id = $row['id'];
			$_SESSION['user_id'] = $user_id;
			header('Location: index.php');
 		}
 		
 		$result->close();
 		// $mysqli->close();
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