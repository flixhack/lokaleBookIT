<?php
include '../header.php';
include 'stylesheet.php';
?>

<html lang="en" dir="ltr">
  <head>
    <title>Opret bruger</title>
  </head>
  <body>
    <p style="font-family:quantify"><font size="7" color="white">Lokalebooking</font></p>
    <!-- Creates all the labels for the register page -->
    <!--<p class="sansserif" style="position:absolute;TOP:240;left:527"> Fornavn</P>
    <p class="sansserif" style="position:absolute;TOP:265;left:517"> Efternavn</P>
    <p class="sansserif" style="position:absolute;TOP:290;left:541"> Klasse</P>
    <p class="sansserif" style="position:absolute;TOP:315;left:528"> Kodeord</P>
    <p class="sansserif" style="position:absolute;TOP:340;left:473"> Bekræft Kodeord</P>-->

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
      <input type="password" placeholder="Kodeord" name="pw" id="pw"><br>
      <input type="password" placeholder="Bekræft kodeord"name="cpw" id="cpw"><br>

      <input HREF="../Front.php" type="submit" value="Opret bruger">
      </form>
  </div>
  <div class="box-4">

  </div>
</div>
