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

//Select and display data form table
$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname = 'Bayat' ";
$result = $conn->query($sql);

if ( $result->num_rows > 0 ) {
    //Output data of each row
    while ( $row = $result->fetch_assoc() ) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 Result";
}

$conn->close();