<?php
session_start();
if(isset($_SESSION["token"])){
  header("Location: ../Dashboard/Dashboard.php");
  exit();
}
?>
<script type="text/javascript" src="../../Ressources/bootstrap/js/jquery.js"></script>
<link rel="stylesheet" href="../../Ressources/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="../../Ressources/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="../../Controllers/Login/Checking.js"></script>
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

        <div class='form_login'>
          <img src='../../Ressources/images/logo.png' class='logo' />
          <div class='inputs_container'>
            <input type='text' id='server' class='inputs' placeholder='Serveur' value='http://82.253.71.109/prod/bdc_v11_04'>
            <input type='text' id='username' class='inputs' placeholder="Nom d'utilisateur" value="admin">
            <input type='password' id='password' class='inputs' placeholder='Mot de passe' value="anexys1,">
            <input type='submit' id='submit' class='button' value="S'authentifier" onclick="auth()">
            <div style="color:red" class='text-center'><b id='auth_message'></b></div>
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

  .logo {
    width: 100%;
    margin-bottom: 10%;
    margin-top: 3%;
  }

  .inputs {
    border-style: solid;
    border-width: 2px;
    border-color: #F27F54;
    border-radius: 10px;
    margin-bottom: 15px;
    width: 100%;
    height: 60px;
    padding-left: 15px;
  }

  .inputs_container {
    margin-top: 20px;
  }

  .button {
    background-color: #384D61;
    width: 100%;
    border-style: solid;
    border-width: 0px;
    border-radius: 10px;
    margin-top: 20px;
    color: #F27F54;
    height: 50px
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
