<?php
include 'header.php';

if(isset($_POST['update']))
{

// $Lokale = $_POST['namn'];
// $otte = $_POST['08150915id'];
// $ni = $_POST['09351035id'];
// $ti = $_POST['10451145id'];
// $tolv = $_POST['12151315id'];
// $tretten = $_POST['13251425id'];
// $fjorten = $_POST['14301530id'];

$Lokalenr = $_POST['lokalenrid'];
$otte1 = $_POST['tilgængelig'];
$ni1 = $_POST['09351035id'];
$ti1 = $_POST['10451145id'];
$tolv1 = $_POST['12151315id'];
$tretten1 = $_POST['13251425id'];
$fjorten1 = $_POST['14301530id'];

// $sql = "UPDATE Lokale SET 08150915 = $mandag, 09351035 = $tisdag WHERE LokaleNr=$namn";
// $retval = mysqli_query( $sql, $conn );
$sql = "UPDATE Lokale SET otte = '$otte1' WHERE LokaleNr = '$Lokalenr' ";

// , tisdag = '{$tisdag1}', onsdag = '{$onsdag1}', torsdag = '{$torsdag1}', fredag = '{$fredag1}'
if(mysqli_query($conn, $sql) )
{
  echo "Updated data successfully\n";
  print '<script type="text/javascript"> window.location = "udkast2.php"; </script>';
} else {
    die('Could not update data: ' . mysqli_error($conn));

  }
}

// }
// mysqli_close($conn);

?>
