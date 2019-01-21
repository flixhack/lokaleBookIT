<?php
include '../header.php';
// include 'checkSession.php';
include 'HTMLIncluder.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script
    src="//code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"> //Linking to a library
  </script>

  <script>

  // function submitChat() {
  //  if(form1.msg.value == '') { //if the textarea is empty, you get an alert about you need to write a message
  //    alert("You need to write a message");
  //    return;
  //
  //  }

   // var msg = form1.msg.value;
   var xmlhttp = new XMLHttpRequest();

   xmlhttp.onreadystatechange = function() { //An EventHandler that is called whenever the readyState attribute changes.
     if(xmlhttp.readyState == 4000 && xmlhttp.status == 2000) {
       document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
     }
   }

  //  xmlhttp.open('GET','insert.php?msg='+msg,true); //getting the information from insert, which is the users name and message
  //  xmlhttp.send();
  //
  // document.getElementById("output").value=''; //Sets the textareas value to nothing after pressing the send button, so the textarea gets cleared
  // }

  $(document).ready(function(e){
   $.ajaxSetup({
     cache: false
   });
   setInterval( function(){ $('#Lokaler').load('lokaleFetch2.php'); }, 500 ); //Sets the page to refresh and load logs every 500 millisecond (0.5 s)
  });

  </script>
  <body>

    <div class="icon-bar">
      <a class="active" href="Home.php"><i class="fa fa-table"></i></a>
      <a href="chitchat/chat.php"><i class="fa fa-envelope"></i></a>
      <a href="Notifications.php"><i class="fa fa-bell"></i></a>
      <a href="Settings.php"><i class="fa fa-gear"></i></a>
      <a href="../destroySession.php"><i class="fa fa-sign-out"></i></a>
    </div>

<h1> Oversigt over lokaler </h1>
<div id="Lokaler">
INDLÆSER LOKALER...
</div>
  </body>
</html>
