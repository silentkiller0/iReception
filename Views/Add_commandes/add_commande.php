<link rel="stylesheet" href="../../Ressources/../../Ressources/bootstrap/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
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

        <div class='form_login'>
          <div class='header_buttons'>
            <a href="Dashboard.php"><i class="fa fa-arrow-left" aria-hidden="true" id='header_back'></i></a>
            <i class="fa fa-power-off" aria-hidden="true" id='header_logout'></i>
          </div>
          <img src='../../Ressources/images/logo.png' class='logo' />
          <div class='inputs_container text-center'>


            <select class='inputs' id='fournisseurs'>
              <option value="fournisseurs 1">fournisseurs 1</option>
              <option value="fournisseurs 2">fournisseurs 2</option>
              <option value="fournisseurs 3">fournisseurs 3</option>
              <option value="fournisseurs 4">fournisseurs 4</option>
            </select>



            <input type='text' id='code_commande' class='inputs' placeholder="Code Commande">
            <input type='text' id='qnt' class='inputs' placeholder='Quantité'>
            <a href="valide_commande.php"><button class='button'><a href="valide_commande.php"><i class="fa fa-arrow-right" id='icons'
                  aria-hidden="true"></i></a></button></a><br>
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

  .header_buttons {}

  #header_logout {
    font-size: 25px;
    color: #F27F54;
    position: absolute;
    right: -20px;
    top: 45px;
    z-index: 100;
  }

  #header_back {
    font-size: 25px;
    color: #F27F54;
    position: absolute;
    left: -20px;
    top: 45px;
    z-index: 100;
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

  #icons {
    font-size: 40px;
    color: #384D61
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
