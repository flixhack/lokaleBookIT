<?php
//Link til siden: https://felix.jespermathiassen.dk/Lokaler
session_start(); //Starts session

$servername = "db"; //Sets database info to variables for the sql connect
$username = "root";
$password = "Dn91ND1aMw3ZkuENdC1j1J8F";
$database = "Lokaler";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
