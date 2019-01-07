<?php
include '../header.php'; // includes Headernl.php(Database info and login)





$klasse = $_POST['klasse']; //Gets the klasse from input on register page
$Navn = $_POST['Navn']; //Gets the first name from input on register page
$Efternavn = $_POST['Efternavn']; //Gets the last name from input on register page
$preHashPass = $_POST['pw']; // Gets the password from input on register page
$preHashPassC = $_POST['cpw'];// Gets the confirm password from input on register page
$password = hash('sha1', $preHashPass); // Hashes the Password
$passwordC = hash('sha1', $preHashPassC);// Hashes the Confirm Password


$sql = "INSERT INTO Bruger VALUES (NULL,'{$klasse}','{$Navn}','{$Efternavn}','{$Password}','f')"; //Makes sql query for inserting user
// $check="SELECT * FROM mellowMembers WHERE klasse = '{$klasse}'"; // Makes sql query that searches database for matching klasse
$rs = mysqli_query($conn,$check); // Runs sql connect and check query
if ($klasse != "" && $Navn != "" && $Efternavn != "" && $preHashPass != "" && $preHashPassC != "") {
  if ($password == $passwordC) {
    if (mysqli_query($conn, $sql)) {
      print '<script type="text/javascript"> window.location = "../Front.php"; </script>';
    } else {
      echo "Error: could not connect, try again later: " . mysqli_error($conn);
    }
  } else {½
    print '<script type="text/javascript">alert("Passwords are not identical"); window.location = "../Front.php"; </script>';
  }
} else {
  print '<script type="text/javascript">alert("All fields are MANDATORY!!!"); window.location = "../Front.php"; </script>';
}


// if ($klasse != "" && $Navn != "" && $Efternavn != "" && $preHashPass != "" && $preHashPassC != "") { //Checks if inputs are empty, if empty, runs javascript alert saying all fields are mandatory
//   if ($password == $passwordC) { //Checks if the two hashed passwords are identical, if not runs javascript alert that says passwords are not identical
//     if (mysqli_query($conn, $sql)) { //if all above are true, inserts data into database and directs you to login page.
//         print '<script type="text/javascript"> window.location = "FrontLogin.php"; </script>';
//       } else {
//         echo "Error: could not connect, try again later: " . mysqli_error($conn);
// }    }  } else {
//       print '<script type="text/javascript">alert("Passwords are not identical"); window.location = "../home.php"; </script>';
// } } else {
//   print '<script type="text/javascript">alert("All fields are MANDATORY!!!"); window.location = "../home.php"; </script>';
// }

mysqli_close($conn);



 ?>
