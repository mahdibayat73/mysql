<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myFirsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ( $conn->connect_error ) {
    die("Connection failed" . $conn->connect_error);
}

// Select data from table
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

// Display data
if ( $result->num_rows > 0 ) {
    // Output data of each row
    while ( $row = $result->fetch_assoc() ) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    } 
} else {
    echo "0 Results";
}

$conn->close();