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
    <link href="style2.css" rel="stylesheet">
  </head>
</script>
  <body class="text-center">
    <!-- <img src="logo2.png" alt="Title" style="width:660px;height:88px;"> -->
      <form name="login" action="login.php" method="POST">
      <form class="form-signin">
  <!--<input type="text" style="position:absolute;TOP:35px;left:670px" placeholder="Fornavn" name="Navn" id="Navn"><br>
  <input type="text" style="position:absolute;TOP:35px;left:850px" placeholder="Efternavn" name="Efternavn" id="Efternavn"><br>
  <input type="password" style="position:absolute;TOP:35px;left:1030px" placeholder="Kodeord" name="Password" id="Password"><br>-->
        <h1 class="h3 mb-3 font-weight-normal">Opret bruger</h1>

            <!-- <label for="Fornavn" class="sr-only"/label> -->
            <input type="text" id="Fornavn" class="form-control" placeholder="Fornavn" required autofocus>

            <!-- <label for="Efternavn" class="sr-only"/label> -->
            <input type="text" id="Efternavn" class="form-control" placeholder="Efternavn" required autofocus>

              <!-- <label for="Kodeord" class="sr-only"/label> -->
              <input type="password" id="Password" class="form-control" placeholder="Kodeord" required autofocus>

              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="husk-mig"> Husk mig
                </label>
              </div>
              <input type="submit" value="login" text="login">

    <!-- <input type="submit" value="Login" style="position:absolute;TOP:35px;left:1210px;WIDTH:60;HEIGHT:22"> -->
    </form>
  </form>
</body>

  <A HREF="signUp/signUpSite.php" class="format">Opret bruger</A>


  <p class="sansserif">Velkommen til lokalebooking på Aarhus Gymnasium. <br /> Denne webside er en service, der kan hjælpe dig <br /> med hurtigt at få et overblik over ledige lokaler på skolen <br /> samtidig med at give dig en mulighed  <br /> for at reservere det lokale du har brug for. </p>
</html>


 <!-- style="color:#ffffff;position:absolute;TOP:60px;left:850px" -->
