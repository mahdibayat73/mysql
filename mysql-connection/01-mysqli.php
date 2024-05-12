<?php 

$serverName = "localhost";
$userName = "root";
$password = "root";

// Create connection
$conn = new mysqli($serverName, $userName, $password);
if ( $conn->connect_error ) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myFirsDB";
if ( $conn->query($sql) === TRUE ) {
    echo "Database created successfully";
} else {
    echo "Error creating databse: " . $conn->error;
}

$conn->close();