<?php
include("../../Controllers/Login/auto_checking.php");
?>
<script type="text/javascript" src="../../Ressources/bootstrap/js/jquery.js"></script>
<link rel="stylesheet" href="../../Ressources/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="../../Ressources/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../../Controllers/Add_commandes/Sending.js"></script>
<script type="text/javascript" src="../../Controllers/Search_commandes/show_code.js"></script>
<script type="text/javascript" src="../../Controllers/Add_commandes/Checking_commande_add.js"></script>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iReception</title>
</head>

<body>
<?php
            if($_GET['qnt']){
              $qt=$_GET['qnt'];
            }else{
              $qt=0;
            };
            ?>

  <div class="container">
    <div class="row">
      <div class="col-1 col-md-1"></div>
      <div class="col-10 col-md-10">

        <div class='form_login'>
          <div class='header_buttons'>
            <a href="javascript:history.go(-1)"><i class="fa fa-arrow-left" aria-hidden="true" id='header_back'></i></a>
            <a href="../../Controllers/Login/logout.php"><i class="fa fa-power-off" aria-hidden="true"
                id='header_logout'></i></a>
          </div>
          <img src='../../Ressources/images/logo.png' class='logo' />
          <div class='inputs_container text-center'>


          <input type="text" value="<?php echo $qt; ?>" id="total_chq">
              <div class='print_container'>
                    <span class='inputs_cmd' ><?php echo $_GET['code_commande']; ?></span>        
                    <button class='button_print_cmd' id='ref_Ligne_commande' onclick='show_code(ref_encodedcmd)'><i class='fa fa-print' id='icons_print' aria-hidden='true'></i></button><br>
                     </div>


              <script>
                var ref ="<?php echo $_GET['code_commande'].'-P'; ?>";
                var refcmd ="<?php echo $_GET['code_commande']; ?>";
                var ref_encoded=encodeURI(ref);
                var ref_encodedcmd=encodeURI(refcmd);
                var qt=$('#total_chq').val();
                console.log(qt);

//show_code(ref_encodedcmd,qt)
            </script>
            
            
            <div id="new_chq">
              <?php

              
              $i =1;


            while($i<=intval($_GET['qnt'])){
              ?>
              
            

            <?php
              //onclick='show_code('".$_GET['code_commande']."-P".$i."')'
              echo "<div class='print_container' id='new_".$i."'>
                    <span class='inputs'>".$_GET['code_commande']."-P".$i."</span>        
                    <button class='button_print' id='ref_Ligne_commande' onclick=show_code(ref_encoded+".$i.")><i class='fa fa-print' id='icons_print' aria-hidden='true'></i></button><br>
                     </div>";
              $i=$i+1;


            /*  echo "<div class='print_container'>
              <span id='palette' class='inputs'>".strval($ref[$i-1])."</span>
              <button class='button_print' id='ref_Ligne_commande' onclick='show_code(".$ref[0].")'><i class='fa fa-print' id='icons_print' aria-hidden='true'></i></button><br>
              </div>";*/

              }

            ?>
            </div>

            <div class='buttons_container text-center'>
            <button class='button_nav' id='moins' onclick="remove()"><i class="fa fa-minus" id='icons'
                  aria-hidden="true"></i></button><br>
              <button class='button' id='valider' onclick="valider(<?php echo $_GET['fournisseurs']; ?>)"><i class="fa fa-check" id='icons' aria-hidden="true"></i></button><br>
              <button class='button_nav' id='plus' onclick="add('<?php echo $_GET['code_commande']; ?>')"><i class="fa fa-plus"
                  id='icons' aria-hidden="true"></i></button><br>
            </div>
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

  <div id='test'></div>




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

  .commande_ref {
    background-color: #384D61;
    height: 30px;
    margin-bottom: 20px;
    border-style: solid;
    border-width: 2px;
    border-color: #F27F54;
    border-radius: 10px;
    color: #F27F54;
 
  }

  .print_container {
    display: flex;
    flex-direction: row;
    margin-bottom: 40px;
  }

  

  .buttons_container {
    display: flex;
    flex-direction: row;
    justify-content: center;
  }

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
    height: 40px;
    position: absolute;
    left: 0;
    margin-top: 10px;
    text-align: left;
    padding-left: 10px;
    padding-top: 5px;
    padding-bottom: 5px
  }


  .inputs_cmd{
    border-style: solid;
    border-width: 2px;
    border-color: #F27F54;
    border-radius: 10px;
    margin-bottom: 15px;
    width: 100%;
    height: 40px;
    position: absolute;
    left: 0;
    margin-top: 10px;
    text-align: left;
    padding-left: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    background-color:#384D61;
    color:#F27F54;
  }

  .inputs_container {
    margin-top: 10px;
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

  .button_nav {
    background-color: #F27F54;
    width: 50px;
    border-style: solid;
    border-color: #384D61;
    border-width: 3px;
    border-radius: 50%;
    margin-bottom: 10px;
    color: #384D61;
    height: 50px;
    margin-top: 25px;
    margin-left: 5px;
    margin-right: 5px;
  }

  #icons {
    font-size: 40px;
  }

  #icons_print {
    font-size: 30px;
  }

  .button_print {
    background-color: #F27F54;
    width: 60px;
    border-style: solid;
    border-color: #384D61;
    border-width: 3px;
    border-radius: 50%;
    margin-bottom: 10px;
    color: #384D61;
    height: 60px;
    position: absolute;
    right: -5;
  }


  .button_print_cmd {
    background-color: 'gray';
    width: 60px;
    border-style: solid;
    border-color: #384D61;
    border-width: 3px;
    border-radius: 50%;
    margin-bottom: 10px;
    color: #384D61;
    height: 60px;
    position: absolute;
    right: -5;
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