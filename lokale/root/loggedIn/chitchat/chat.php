<?php
include '../../header.php';
//include '../checkSession.php';
include '../HTMLIncluder.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <div class="icon-bar">
       <a href="../Home.php"><i class="fa fa-table"></i></a>
       <a class="active" href="chitchat/chat.php"><i class="fa fa-envelope"></i></a>
       <a href="../Notifications.php"><i class="fa fa-bell"></i></a>
       <a href="../Settings.php"><i class="fa fa-gear"></i></a>
       <a href="../../destroySession.php"><i class="fa fa-sign-out"></i></a>
     </div>

     <select style="position:absolute;TOP:300px;left:600px;WIDTH:200" name="klasse" id="klasse">
     <option value="Marta">16xaa</option>
     <option value="16xab">16xab</option>

     </select>

   </body>
</html>
