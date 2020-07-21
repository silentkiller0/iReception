
<?php 
session_start();
?>
<script type="text/javascript" src="../../Ressources/bootstrap/js/jquery.js"></script>
<link rel="stylesheet" href="../../Ressources/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="../../Ressources/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../../Controllers/Search_commandes/show_code.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.8.0/JsBarcode.all.js"></script>



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
<!--
$_SESSION["qty"]

Views/Add_commandes/valide_commande.php?fournisseurs=5&code_commande=cmd-087&qnt=2


  -->

          <div class='header_buttons'>
            <a href="../../Views/Add_commandes/valide_commande.php?fournisseurs=<?php echo $_GET['fournisseurs']; ?>&code_commande=<?php echo $_GET['code_commande']; ?>&qnt=<?php echo $_GET['qty']; ?>"><i class="fa fa-arrow-left" aria-hidden="true" id='header_back'></i></a>
                        <a href="../../Controllers/Login/logout.php"><i class="fa fa-power-off" aria-hidden="true" id='header_logout'></i></a>
          </div>
          <img src='../../Ressources/images/logo.png' class='logo' />
          <div class='inputs_container text-center'>

            <div  class='commande_ref'>
              <label id="barcode_"><?php echo $_GET['ref_Ligne_Commande'];?></label>

            </div>

<?php 

echo $_GET['code_commande'].'-';
echo $_GET['qty'].'-';
echo $_GET['fournisseurs'].'-';
?>

            <?php
                /*
                // les ref de commandes nous arrive en String, on l'explode pour récuperer un tableau pour pouvoir l'exploiter

                $ref = explode(",",$_GET['ligne_commande']);

                $i =1;

                while($i<=intval($_GET['qty'])){

                  echo "<div class='print_container'>
                        <span id='palette' class='inputs'>".strval($ref[$i-1])."</span>
                        <button class='button_print' onclick='show_code(".$ref[0].")'><i class='fa fa-print' id='icons_print' aria-hidden='true'></i></button><br>
                        </div>";
                  $i=$i+1;

                  }*/
           
                ?>


        <div class=text-center>

            <div class='print_container '>
              
                    <span id='palette' class='inputs text-center'> <svg class="barcode" id='bc' jsbarcode-format="CODE128" jsbarcode-value="" jsbarcode-textmargin="0" jsbarcode-fontoptions="bold"></svg></span>

                 
                   


                    <script>
                       
                       console.log($('.commande_ref').text())
                        $('.barcode').attr('jsbarcode-value',$('#barcode_').text());
                        JsBarcode(".barcode").init();
                        print(JsBarcode(".barcode").init());
                    /*
                                    popup = window.open();
                                    popup.document.write(JsBarcode(".barcode").init());
                                    popup.focus(); //required for IE
                                    popup.print();*/
                    </script>

                </div><br>
                <button class='button_print text-center' onclick='print()'><i class='fa fa-print' id='icons_print' aria-hidden='true'></i></button><br>
                  

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
</body>
</html>

<style>



@media print {
    body * {
        visibility: hidden;
    }

    .print_container,  .print_container *{
        visibility: visible;
    }

}
 



  #bc{
      margin-top: 3%;
      width:100%;
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
  .commande_ref {
    background-color: #384D61;
    height: 30px;
    margin-bottom: 10px;
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
    margin-bottom: 0px;
    width: auto;
    height: 200px;
    padding-left: 0px;
    left: 0;
    margin-top: 10px;
   
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
    bottom:20;
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
