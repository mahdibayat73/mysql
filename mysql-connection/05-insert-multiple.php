<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myFirsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ( $conn->connect_error ) {
    die("Connection failed." . $conn->connect_error);
}

// Insert multiple data to table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ( $conn->multi_query($sql) === true ) {
    echo "New records created successfully";
} else {
    echo "Error: " . "<br>" . $conn->error;
}

$conn->close();