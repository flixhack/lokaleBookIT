<?php
include 'header.php';
include 'stylesheet.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <link href="/Programmering/loggedIn/style.css" rel="stylesheet" type="text/css">
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
  <!-- <link href="style2.css" rel="stylesheet"> -->
  </head>
  
<div class="container-1">
  <div class="box-1">

    <body class="text-right">
      <link href="CSS.css" rel="stylesheet" type="text/css">
      <img src="../logo2.png" alt="Title" style="width:660px;height:88px;">
      <form name="login" action="login.php" method="POST">
        <form class="form-signin text-right">

        </form>
      </form>

    </body>
  </div>
  <div class="box-2">

  </div>
  <div class="box-3">
    <div class="Fornavn">
      <input type="text" name="Navn" id="Navn" style="position:sticky;" class="form-control" placeholder="Fornavn" required autofocus>
    </div>
    <div class="Efternavn">
      <input type="text" name="Efternavn" id="Efternavn" style="position:sticky;" class="form-control" placeholder="Efternavn" required autofocus>
    </div>
    <div class="Password">
      <input type="password" name="Password" id="Password" style="position:sticky;" class="form-control" placeholder="Kodeord" required autofocus>
    </div>
    <div class="Opret">
      <A HREF="signUp/signUpSite.php" class="format text-text">Opret bruger</A>
    </div>
  </div>
  <div class="box-5">
      <div class="Husk-mig">
        <div class="checkbox mb-3 text-center">
          <label>
            <input type="checkbox" value="Husk-mig"> Husk mig
          </label>
        </div>
      </div>
    <div class="Login">
      <input type="submit" value="Login" text="Login">
    </div>
   </div>
</div>







<div class="container-2">
  <div class="box-4">
    <p class="sansserif">Velkommen til lokalebooking på Aarhus Gymnasium. <br /> Denne webside er en service, der kan hjælpe dig <br /> med hurtigt at få et overblik over ledige lokaler på skolen <br /> samtidig med at give dig en mulighed <br /> for at reservere det lokale
      du har brug for. </p>
  </div>
</div>
</html>
