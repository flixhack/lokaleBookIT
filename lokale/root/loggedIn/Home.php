<?php
include '../header.php';
include 'checkSession.php';
include 'HTMLIncluder.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php print($_SESSION[loggedIn]); ?>
    <div class="icon-bar">
      <a class="active" href="Home.php"><i class="fa fa-table"></i></a>
      <a href="chitchat/chat.php"><i class="fa fa-envelope"></i></a>
      <a href="Notifications.php"><i class="fa fa-bell"></i></a>
      <a href="Settings.php"><i class="fa fa-gear"></i></a>
      <a href="../destroySession.php"><i class="fa fa-sign-out"></i></a>
    </div>

<h1> Oversigt over lokaler </h1>
  </body>
</html>
