<?php
include 'header.php';
// include 'stylesheet.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <link href="style2.css" rel="stylesheet" type="text/css"> -->
    <title>LokaleBooking - Aarhus Gymnasium</title>
    <style>

    a.format {
        float: right;
        color: #ffffff;
        padding: 150px;
}
select {
width: 100%;
padding:3px 3px;
border: 1px;
border-radius: 0px;
background-color: #ffffff;
}
    </style>

    <link href="signin.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<img src="logo2.png" alt="Title" style="width:660px;height:88px;">

</script>
  </body>
<form name="login" action="login.php" method="POST">
  <input type="text" style="position:absolute;TOP:35px;left:670px" placeholder="Fornavn" name="Navn" id="Navn"><br>
  <input type="text" style="position:absolute;TOP:35px;left:850px" placeholder="Efternavn" name="Efternavn" id="Efternavn"><br>
  <input type="password" style="position:absolute;TOP:35px;left:1030px" placeholder="Kodeord" name="Password" id="Password"><br>

  <input type="submit" value="Login" style="position:absolute;TOP:35px;left:1210px;WIDTH:60;HEIGHT:22">
</form>

  <A HREF="signUp/signUpSite.php" class="format">Opret bruger</A>

  <p class="sansserif">Velkommen til lokalebooking på Aarhus Gymnasium. <br /> Denne webside er en service, der kan hjælpe dig <br /> med hurtigt at få et overblik over ledige lokaler på skolen <br /> samtidig med at give dig en mulighed  <br /> for at reservere det lokale du har brug for. </p>
</html>


 <!-- style="color:#ffffff;position:absolute;TOP:60px;left:850px" -->
