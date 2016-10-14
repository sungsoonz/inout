<?php
// Connect to MySQL
$mysqli = new mysqli('localhost', 'root', 'root', 'inout');


if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


if ($mysqli->query("CREATE TABLE User") === TRUE) {
    printf("Table was successfully created.\n");
}

//선재 테스트
if ($result = $mysqli->query("SELECT * FROM Customers")) {
	
	printf("Select returned %d rows.\n", $result->num_rows);

	while($row = $result->fetch_assoc()) {
		echo "<p>" . $row['CustomerID'] . " - " . $row['Firstname'] . '</p>';
	}

	/* free result set */
	$result->close();
}

$mysqli->close();


// if (!$db_selected) {
//   // If we couldn't, then it either doesn't exist, or we can't see it.
//   $sql = 'CREATE DATABASE inout';
// 
//   if (mysqli_query($sql, $con)) {
//       echo 'Database inout created successfully \n';
//   } else {
//       echo 'Error creating database: ' . mysqli_error($con) . "\n";
//   }
// }

$mysqli->close();

?>


