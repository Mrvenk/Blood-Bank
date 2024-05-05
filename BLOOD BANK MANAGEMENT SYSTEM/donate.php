<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "blood";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$bloodtype = $_POST["bloodtype"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];

$query = "INSERT INTO donor (name, bloodtype, gender, phone) VALUES ('$name', '$bloodtype', '$gender', '$phone')";

if ($conn->query($query) === TRUE) {
    echo "Donor added successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
