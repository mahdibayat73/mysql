<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myfirsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ( $conn->connect_error ) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to delete a record
$sql = "DELETE FROM MyGuests WHERE id = 8";

if ( $conn->query($sql) == true ) {
    echo "Record deleted successfylly";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();