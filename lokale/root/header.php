<?php
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
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
  </head>
</html>
