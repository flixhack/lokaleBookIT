<?php
session_start(); //Starts session
session_unset(); //Unsets the session variable loggedIn
session_destroy(); // Destroys the session
header("location: Front.php"); //redirects you to front page
 ?>
