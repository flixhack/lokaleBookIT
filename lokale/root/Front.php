<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LokaleBooking - Aarhus Gymnasium</title>
  </head>

<div class="container-1">
  <div class="box-1">

    <body class="text-right">
      <link href="CSS.css" rel="stylesheet" type="text/css">
      <p style="font-family:quantify"><font size="7" color="white">Lokalebooking</font></p>
      <form name="login" action="login.php" method="POST">
        <form class="form-signin text-right">
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
        </form>
      </form>

    </body>
  </div>
  <div class="box-2">

<div class="container-2">
  <div class="box-4">
    <p class="sansserif">Velkommen til lokalebooking på Aarhus Gymnasium. <br /> Denne webside er en service, der kan hjælpe dig <br /> med hurtigt at få et overblik over ledige lokaler på skolen <br /> samtidig med at give dig en mulighed <br /> for at reservere det lokale
      du har brug for. </p>
  </div>
</div>
</html>
