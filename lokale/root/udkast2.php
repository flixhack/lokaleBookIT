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

  $Lokale = $row['LokaleNr'];
  $otte = $row['otte'];
  $ni = $row['09351035'];
  $ti = $row['10451145'];
  $tolv = $row['12151315'];
  $tretten = $row['13251425'];
  $fjorten = $row['14301530'];

  ?>


  <td width="100"></td>
  <td><?=$Lokale?></td>
  </tr>
  <tr>
  <td width="100">08.15-9.15</td>
  <td><input name="08150915id" type="text" value="<?=$otte?>"></td>
  </tr>
  <tr>
  <td width="100">09.35-10.35</td>
  <td><input name="09351035id" type="text" value="<?=$ni?>"></td>
  </tr>
  <tr>
  <td width="100">10.45-11.45</td>
  <td><input name="10451145id" type="text" value="<?=$ti?>"></td>
  </tr>
  <tr>
  <td width="100">12.15-13.15</td>
  <td><input name="12151315id" type="text" value="<?=$tolv?>"></td>
  </tr>
  <tr>
  <td width="100">13.25-14.25</td>
  <td><input name="13251425id" type="text" value="<?=$tretten?>"></td>
  </tr>
  <tr>
  <td width="100">14.30-15.30</td>
  <td><input name="14301530id" type="text" value="<?=$fjorten?>"></td>
  </tr>

  <?php } ?>
  <tr>
  <td width="100"> </td>
  <td> </td>
  </tr>
  <tr>
  <td width="100"> </td>
  <td>
  <input name="update" type="submit" id="update" value="Reserver">
  </td>
  </tr>
  </table>
  </form>



  <?php

  if(isset($_POST['update']))
  {

  $Lokale = $_POST['namn'];
  $otte = $_POST['08150915id'];
  $ni = $_POST['09351035id'];
  $ti = $_POST['10451145id'];
  $tolv = $_POST['12151315id'];
  $tretten = $_POST['13251425id'];
  $fjorten = $_POST['14301530id'];

  // $sql = "UPDATE Lokale SET 08150915 = $mandag, 09351035 = $tisdag WHERE LokaleNr=$namn";
  // $retval = mysqli_query( $sql, $conn );
  $sql = "UPDATE Lokale SET otte = '$otte' WHERE LokaleNr = '$Lokale' ";

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
