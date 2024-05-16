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

// sql to update record
$sql = "UPDATE MyGuests SET lastname = 'Doe' WHERE ID = 6";

if ( $conn->query($sql) === true ) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();