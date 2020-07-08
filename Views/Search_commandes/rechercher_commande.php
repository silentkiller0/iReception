<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


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
          <img src='images/logo.png' class='logo' />
          <div class='inputs_container'>
            <input  id='nb_commande' class='inputs' placeholder='Numero de commande'>

            <a href="show_commande.php"><Button class='button_search'  id='icon'><i class="fa fa-search" aria-hidden="true"></i></Button></a>

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

#header_back {
  font-size: 25px;
  color: #F27F54;
  position: absolute;
  left: -20px;
  top: 45px;
  z-index: 100;
}

#header_logout {
  font-size: 25px;
  color: #F27F54;
  position: absolute;
  right: -20px;
  top: 45px;
  z-index: 100;
}

#icon{
  font-size: 40px;
}
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
    border-color: orange;
    border-radius: 10px;
    margin-bottom: 15px;
    margin-top : 70px;
    width: 100%;
    height: 60px;
    padding-left: 15px;
  }

  .inputs_container {
    margin-top: 20px;
  }


  .button_search {
    background-color: #F27F54;
    width: 105px;
    border-style : solid;
    border-color: #34495E;

    margin-left: 50px;
    border-width: 3px;
    border-radius: 50%;
    margin-top: 20px;
    color: black;
    height: 105px
  }

  .button {
    background-color: #384D61;
    width: 100%;
    border-style: solid;
    border-width: 0px;
    border-radius: 10px;
    margin-top: 20px;
    color: orange;
    height: 50px
  }

  .footer {
    position: absolute;
    top: 0;
    background-color: #384D61;
    width: 100%;
    height: 50px;
    color: orange;
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
