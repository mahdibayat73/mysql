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

//Insert data to table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Kobra', 'Mosavi', 'kobra.mosavi@gmail.com')";

if ( $conn->query($sql) === TRUE ) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();