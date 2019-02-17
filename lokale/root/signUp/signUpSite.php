<?php
include '../header.php';
?>

  <html lang="en" dir="ltr">

  <head>
    <title>Opret bruger</title>
    <link href="box.css" rel="stylesheet" type="text/css">
  </head>

  <div class="container-1">
    <div class="box-1">

      <body>
        <a href="/Programmering/Front.php">
        <img src="../logo2.png" alt="Title" style="width:484px;height:66px;">
        </a>
      </body>
    </div>
  </div>

  <div class="container-2">
    <div class="box-2">

    </div>
    <div class="box-3">
      <form name="form" action="Opret.php" method="POST">
        <input type="text" placeholder="Navn" name="Navn" id="Navn"><br>
        <input type="text" placeholder="Efternavn" name="Efternavn" id="Efternavn"><br>
        <input type="password" placeholder="Kodeord" name="pw" id="pw"><br>
        <input type="password" placeholder="Bekræft kodeord" name="cpw" id="cpw"><br>
        <select name="klasse" id="klasse">
      <option hidden="">Vælg klasse</option>
      <option value="16xaa">16xaa</option>
      <option value="16xab">16xab</option>
      <option value="16xac">16xac</option>
      <option value="16xad">16xad</option>
      <option value="16xae">16xae</option>
      <option value="16xaf">16xaf</option>
      <option value="16xaj">16xaj</option>
      <option value="16xap">16xap</option>
      <option value="16xar">16xar</option>
      <option value="17xaa">17xaa</option>
      <option value="17xab">17xab</option>
      <option value="17xac">17xac</option>
      <option value="17xad">17xad</option>
      <option value="17xae">17xae</option>
      <option value="17xaj">17xaj</option>
      <option value="17xap">17xap</option>
      <option value="17xaq">17xaq</option>
      <option value="17xar">17xar</option>
      <option value="18xaa">18xaa</option>
      <option value="18xab">18xab</option>
      <option value="18xad">18xad</option>
      <option value="18xae">18xae</option>
      <option value="18xaj">18xaj</option>
      <option value="18xap">18xap</option>
      <option value="18xaq">18xaq</option>
      <option value="18xar">18xar</option>
      </select>
        <input HREF="../Front.php" type="submit" value="&thinsp;Opret bruger&thinsp;">
      </form>
    </div>
    <div class="box-4">

    </div>
  </div>
