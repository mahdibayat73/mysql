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

// Prepare and bind
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Set parameters and execute
$firstname = "Big";
$lastname = "Family";
$email = "bigfamily@gmail.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();