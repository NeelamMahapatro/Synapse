<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb="axiom";

// Create connection
$conn = new mysqli($servername, $username, $password,$mydb);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//mysqli_select_db("epreuve",$conn)  or die("Could not connect to Database");
?>