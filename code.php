<?php

// function addUser() {
//     $sql = "INSERT INTO users (name, age, city)
// 	VALUES ('John', '11', 'john@example.com')";

// 	if ($conn->query($sql) === TRUE) {
// 	    echo "New record created successfully";
// 	} else {
// 	    echo "Error: " . $sql . "<br>" . $conn->error;
// 	}
// }
include 'config.php';

$sql = "SELECT name, age, city FROM users";
$result = $conn->query($sql);
$users = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"]. " " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
