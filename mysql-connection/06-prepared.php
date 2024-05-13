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
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Set parameters and execute
$firstname = "Ali";
$lastname = "Alipoor";
$email = "alipoor@gmail.com";
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();