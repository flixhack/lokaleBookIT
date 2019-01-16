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
    <img src="logo2.png" alt="Title" style="width:660px;height:88px;">
      <!--<form name="login" action="login.php" method="POST">-->
      <form class="form-signin">
  <!--<input type="text" style="position:absolute;TOP:35px;left:670px" placeholder="Fornavn" name="Navn" id="Navn"><br>
  <input type="text" style="position:absolute;TOP:35px;left:850px" placeholder="Efternavn" name="Efternavn" id="Efternavn"><br>
  <input type="password" style="position:absolute;TOP:35px;left:1030px" placeholder="Kodeord" name="Password" id="Password"><br>-->
        <h1 class="h3 mb-3 font-weight-normal">Opret bruger</h1>

            <label for="inputFornavn" class="sr-only"/label>
            <input type="fornavn" id="inputFornavn" class="form-control" placeholder="Fornavn" required autofocus>

            <label for="inputEfternavn" class="sr-only"/label>
            <input type="efternavn" id="inputEfternavn" class="form-control" placeholder="Efternavn" required autofocus>

              <label for="inputKodeord" class="sr-only"/label>
              <input type="kodeord" id="inputKodeord" class="form-control" placeholder="Kodeord" required autofocus>

              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="husk-mig"> Husk mig
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  <!--<input type="select" style="position:absolute;TOP:35px;left:760px;WIDTH:70" name="klasse" id="Klasse">
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
</select> -->
    <input type="submit" value="Login" style="position:absolute;TOP:35px;left:1210px;WIDTH:60;HEIGHT:22">
    </form>
  </body>

  <!--<A HREF="signUp/signUpSite.php" class="format">Opret bruger</A>-->


  <p class="sansserif">Velkommen til lokalebooking på Aarhus Gymnasium. <br /> Denne webside er en service, der kan hjælpe dig <br /> med hurtigt at få et overblik over ledige lokaler på skolen <br /> samtidig med at give dig en mulighed  <br /> for at reservere det lokale du har brug for. </p>
</html>


 <!-- style="color:#ffffff;position:absolute;TOP:60px;left:850px" -->
