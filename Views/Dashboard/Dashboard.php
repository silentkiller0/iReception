<?php
include("../../Controllers/Login/auto_checking.php");
?>

<script type="text/javascript" src="../../Ressources/bootstrap/js/jquery.js"></script>
<link rel="stylesheet" href="../../Ressources/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="../../Ressources/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iReception</title>
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col-1 col-md-1"></div>
      <div class="col-10 col-md-10">

        <div class='form_login text-center'>
        <div class='header_buttons'>
            <a href="../../Controllers/Login/logout.php"><i class="fa fa-power-off" aria-hidden="true" id='header_logout'></i></a>
          </div>
          <img src='../../Ressources/images/logo.png' class='logo' />
          <div class='inputs_container text-center'>
             <a href="../Search_commandes/rechercher_commande.php">   <button class='button'><i class="fa fa-search" id='icons' aria-hidden="true"></i></button><br>
             <a href="../Add_commandes/add_commande.php"><button class='button'><i class="fa fa-plus" id='icons' aria-hidden="true"></i></button></a><br>
              <a href="../List_commandes/rechercher_list_commande.php"><button class='button'><i class="fa fa-list" id='icons' aria-hidden="true"></i></button><br>
          </div>
        </div>
      </div>


      <div class="col-1 col-md-1"></div>
    </div>
  </div>

  <div class='footer'>
    <div class='footer_rad'></div>
    <center><label class='footer_text'>© Produit développé par Anexys</label></center>
  </div>




</body>

</html>

<style>
  .form_login {
    margin-top: 30%;
    width: 100%;
  }

  #icons {
    font-size: 40px;
    color:#384D61
  }

  .logo {
    width: 100%;
    margin-bottom: 10%;
    margin-top: 1%;
  }

  #header_logout {
    font-size: 25px;
    color: #F27F54;
    position: absolute;
    right: -20px;
    top: 45px;
    z-index: 100;
  }

  .inputs_container {
    margin-top: 5px;
  }

  .button {
    background-color: #F27F54;
    width: 100px;
    border-style: solid;
    border-color: #384D61;
    border-width: 3px;
    border-radius: 50%;
    margin-bottom: 10px;
    color: #384D61;
    height: 100px;
  }

  .footer {
    position: absolute;
    top: 0;
    background-color: #384D61;
    width: 100%;
    height: 50px;
    color: #F27F54;
    vertical-align: middle;
  }

  .footer_text {
    position: relative;
    top: 5px;
    z-index: 100;
  }

  .footer_rad {
    z-index: 0;
    position: absolute;
    top: 40px;
    width: 100%;
    height: 30px;
    background-color: #ffffff;
    border-style: solid;
    border-width: 0px;
    border-radius: 40px;
  }
</style>
