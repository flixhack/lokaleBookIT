<?php
 if ($_SESSION["loggedIn"] == "0") { //Checks that your logged in, if not it redirects you to front page
  header("location: ../Front.php");
?>
