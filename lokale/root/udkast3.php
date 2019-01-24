<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
  <?php

  $servername = "db"; //Sets database info to variables for the sql connect
  $username = "root";
  $password = "Dn91ND1aMw3ZkuENdC1j1J8F";
  $database = "Lokaler";

  $conn = mysqli_connect($servername, $username, $password, $database);
  if(! $conn )
  {
    die('Could not connect: ' . mysqli_connect_error());
  }
  mysqli_select_db('Lokaler');

  $query = "SELECT * FROM Bruger";
  $result = mysqli_query($query) or die(mysqli_error());
  ?>


  <form method="post" action="<?php $_PHP_SELF ?>">
  <table width="400" border="0" cellspacing="1" cellpadding="2">
  <tr>

  <?php

  while($row = mysqli_fetch_array($result)) {

  $Navn = $row['Navn'];
  }
  ?>


  <td width="100"></td>
  <td><?=$Navn?></td>


  <tr>
  <td width="100"> </td>
  <td> </td>
  </tr>
  <tr>
  <td width="100"> </td>
  <td>
  <input name="update" type="submit" id="update" value="Update">
  </td>
  </tr>
  </table>
  </form>



  <?php

  if(isset($_POST['update']))
  {

  $navn = $_POST['navnid'];

  $sql = "UPDATE Bruger SET Navn = '$Navn'";
  $retval = mysqli_query( $sql, $conn );

  if(! $retval )
  {
    die('Could not update data: ' . mysqli_error());
  }
  echo "Updated data successfully\n";

  }

  mysqli_close($conn);
  ?>

  </body>
</html>
