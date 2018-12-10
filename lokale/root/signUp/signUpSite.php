<?php
include '../header.php';
include '../stylesheet.php';
?>

<html lang="en" dir="ltr">
  <head>
  <title>Opret bruger</title>
  <style>
  select {
  width: 100%;
  padding:3px 10px;
  border: none;
  border-radius: 0px;
  background-color: #ffffff;
}
</style>
  </head>
  <body>
    <img src="../logo.png" alt="Title" style="width:660px;height:88px;">
    <!-- Creates all the labels for the register page -->
    <p class="sansserif" style="position:absolute;TOP:240;left:527"> Fornavn</P>
    <p class="sansserif" style="position:absolute;TOP:265;left:517"> Efternavn</P>
    <p class="sansserif" style="position:absolute;TOP:290;left:541"> Klasse</P>
    <p class="sansserif" style="position:absolute;TOP:315;left:528"> Kodeord</P>
    <p class="sansserif" style="position:absolute;TOP:340;left:473"> Bekræft Kodeord</P>

      </body>
    <!-- Creates all the input fields for register page and tells the submit button to run 'CreateUserScript.php' -->
    <form name="form" action="Opret.php" method="POST">
      <input type="text" style="position:absolute;TOP:250px;left:600px;WIDTH:200" name="Navn" id="Navn"><br>
      <input type="text" style="position:absolute;TOP:275px;left:600px;WIDTH:200" name="Efternavn" id="Efternavn"><br>
      <select style="position:absolute;TOP:300px;left:600px;WIDTH:200" name="klasse" id="klasse">
      <option value="16xaa">16xaa</option>
      <option value="16xab">16xab</option>
      <option value="16xac">16xac</option>
      <option value="16xad">16xad</option>
      <option value="16xae">16xae</option>
      <option value="16xaf">16xaf</option>
      <option value="16xaj">16xaj</option>
      <option value="16xap">16xap</option>
      <option value="16xar">16xar</option>
      </select>
      <input type="password" style="position:absolute;TOP:325px;left:600px;WIDTH:200" name="pw" id="pw"><br>
      <input type="password" style="position:absolute;TOP:350px;left:600px;WIDTH:200 " name="cpw" id="cpw"><br>

      <input HREF="../Front.php" type="submit" value="Opret bruger" style="position:absolute;TOP:375px;left:600px;WIDTH:200;HEIGHT:20">
      </form>


  </body>
</html>
