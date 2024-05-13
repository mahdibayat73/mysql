<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myFirsDB";

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ( $conn->connect_error ) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data to table
$sql = " INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mahdi', 'Jabinpoor', 'jabinpoor@gmail.com')";

// Run query
if ( $conn->query($sql) === true ) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();