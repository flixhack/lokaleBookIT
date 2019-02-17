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
<h1> Beskeder </h1>
     <select style="position:absolute;TOP:300px;left:600px;WIDTH:200" name="klasse" id="klasse">
     <option value="Marta">16xaa</option>
     <option value="16xab">16xab</option>

     </select>

     <form name="form1">
     Din besked: <br />
     <textarea id='output' name="msg" style="color: black; background-color: #ffffff" rows=5 cols=30></textarea><br />
     <input id="Send" type="button" class="button" color="" value="Send" onclick="submitChat();" /> <!--A button which runs the submitChat function when pressed. This function uses  XMLHttpRequest (XHR) objects to interact with our server, so we can retrieve data from a URL without having to do a full page refres -->
     </form>
   </body>
</html>
