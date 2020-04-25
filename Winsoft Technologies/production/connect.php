<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="winsoft_payroll";

// Create connection
$connect = new mysqli($servername, $username, $password,$database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
//echo "Connected successfully";
?>