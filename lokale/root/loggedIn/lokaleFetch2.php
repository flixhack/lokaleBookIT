<?php
include '../header.php'; //includes Header.php

$conn = mysqli_connect($servername, $username, $password, $database);

$query="SELECT * FROM Lokale ORDER BY id DESC"; // Makes sql query that selects all messages from our database

$result1 = mysqli_query($conn, $query); //Connects to database and runs the sql query above

while($extract = mysqli_fetch_array($result1)) { // while loop that connects to database and runs the sql query above
	$html .= '<table>';
	$html .= '<tr>';
		$html .= '<td>' $extract['LokaleNR']'</td>'
	$html .= '</tr>'


	// echo "<span>" . $extract['LokaleNR'] . "</span>: <span>" . $extract['08150915'] . "</span>: <span>" . $extract['09351035'] . "</span>: <span>" . $extract['10451145'] . "</span>: <span>" . $extract['12151315'] . "</span><br />"; //Displays the messages on the chat page
}
