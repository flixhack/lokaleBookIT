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
  // mysqli_select_db('Lokaler');

  $query = "SELECT * FROM Lokale";
  $result = mysqli_query($conn, $query) /*or die(mysqli_error())*/;
  ?>


  <form method="post" action="<?php $_PHP_SELF ?>">
  <table width="400" border="0" cellspacing="1" cellpadding="2">
  <tr>

  <?php

  while($row = mysqli_fetch_array($result))
              {

  $namn = $row['LokaleNr'];
  $mandag = $row['otte'];
  $tisdag = $row['09351035'];
  $onsdag = $row['10451145'];
  $torsdag = $row['12151315'];
  $fredag = $row['13251425'];
  $lørdag = $row['14301530'];

  ?>


  <td width="100"></td>
  <td><?=$namn?></td>
  </tr>
  <tr>
  <td width="100">08.15-9.15</td>
  <td><input name="08150915id" type="text" value="<?=$mandag?>"></td>
  </tr>
  <tr>
  <td width="100">Tisdag</td>
  <td><input name="tisdagid" type="text" value="<?=$tisdag?>"></td>
  </tr>
  <tr>
  <td width="100">Onsdag</td>
  <td><input name="onsdagid" type="text" value="<?=$onsdag?>"></td>
  </tr>
  <tr>
  <td width="100">Torsdag</td>
  <td><input name="torsdagid" type="text" value="<?=$torsdag?>"></td>
  </tr>
  <tr>
  <td width="100">Fredag</td>
  <td><input name="fredagid" type="text" value="<?=$fredag?>"></td>
  </tr>
  <tr>
  <td width="100">Fredag</td>
  <td><input name="fredagid" type="text" value="<?=$lørdag?>"></td>
  </tr>
  <?php } ?>
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

  $namn = $_POST['namn'];
  $mandag = $_POST['08150915id'];
  $tisdag = $_POST['tisdagid'];
  $onsdag = $_POST['onsdagid'];
  $torsdag = $_POST['torsdagid'];
  $fredag = $_POST['fredagid'];

  // $sql = "UPDATE Lokale SET 08150915 = $mandag, 09351035 = $tisdag WHERE LokaleNr=$namn";
  // $retval = mysqli_query( $sql, $conn );
  $sql = "UPDATE Lokale SET otte = '$mandag' WHERE LokaleNr = '$namn' ";
// $sql = "INSERT INTO Bruger VALUES (NULL,'{$klasse}','{$Navn}','{$Efternavn}','{$password}','f')";
  // if (mysqli_query($conn, $sql)) {
  //   echo "Updated data";
  // } else {
  //   echo "Error: could not connect, try again later: " . mysqli_error($conn);
  // }
  // , tisdag = '{$tisdag1}', onsdag = '{$onsdag1}', torsdag = '{$torsdag1}', fredag = '{$fredag1}'
  if(mysqli_query($conn, $sql) )
  {
    echo "Updated data successfully\n";
  } else {
  die('Could not update data: ' . mysqli_error($conn));

  }
}
// }
// mysqli_close($conn);

  ?>
  </body>
</html>
