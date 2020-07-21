<?php 

session_start();
$data = array(
    'ref' =>  $_GET['code_commande'],
    'qty' => $_GET['qnt'],
    'id_fournisseur' => $_GET['fournisseurs']
);


//$_SESSION["qty"]=$_GET['qnt'];

$url = "http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes";
$ch = curl_init($url);
# Form data string
$postString = http_build_query($data, '', '&');
# Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'DOLAPIKEY: ecee5974867c0d45c5b8475a0cc2b9db2182f080')                                                                       
);                
# Get the response
$response = curl_exec($ch);
//echo "commande :".$response;


  ####################################################

  try {

    $url_id = file_get_contents("http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27".$_GET['code_commande']."%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080");
    $data5 = json_decode($url_id,true);
    //var_dump($data5);
    $id_commande=$data5[0]['id']; //Cheker
    $x = 0;
    $tab2 = $_GET['ligne_commande'];
    var_dump($tab2);
    
    
    while ($x<count($tab2)){

        $data_l = array(
            'ref' => $tab2[$x],
            'id_commande' => $id_commande
        );

        
        
        $url_ligne = "http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/ligne_commande";
        $ch_l = curl_init($url_ligne);
        # Form data string
        $postString = http_build_query($data_l, '', '&');
        # Setting our options
        curl_setopt($ch_l, CURLOPT_POST, 1);
        curl_setopt($ch_l, CURLOPT_POSTFIELDS, $postString);
        curl_setopt($ch_l, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_l, CURLOPT_HTTPHEADER, array(                                                                          
            'DOLAPIKEY: ecee5974867c0d45c5b8475a0cc2b9db2182f080')                                                                       
        );                
        # Get the response
        $response = curl_exec($ch_l);
        //var_dump($response);
        //echo "ligne_commande".$response;


        ######### POST EMPLACEMENT VIDE #############

        $url_e = file_get_contents("http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref=%22".$tab2[$x]."%22&%27&DOLAPIKEY=".$_SESSION["token"]);
        $data6 = json_decode($url_e,true);
      
        $id_ligne_commande=$data6[0]['id'];

        $data_empla = array(    
            'allee' => "test", 
            'rayon' => null,
            'etage' => null,
            'id_ligne_commande' => $data6[0]['id']

        );
        
      
        $url_empla = "http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/emplacement";
        $ch_e = curl_init($url_empla);
        # Form data string
        $postString = http_build_query($data_empla, '', '&');
        # Setting our options
        curl_setopt($ch_e, CURLOPT_POST, 1);
        curl_setopt($ch_e, CURLOPT_POSTFIELDS, $postString);
        curl_setopt($ch_e, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_e, CURLOPT_HTTPHEADER, array(                                                                          
            'DOLAPIKEY: ecee5974867c0d45c5b8475a0cc2b9db2182f080')                                                                       
        );                
        # Get the response
        $response4 = curl_exec($ch_e);
        var_dump($response4);

     


        $x=$x+1;


    }
    //var_dump($data_l);
    //echo $response4;

    



 
} catch (\Throwable $th) {
    echo 'Server error';
}

/*
//var_dump($_GET['ligne_commande']);
# Create a connection

$url = 'http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes';
$ch = curl_init($url);
# Form data string
$postString = http_build_query($data, '', '&');
# Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'DOLAPIKEY: ecee5974867c0d45c5b8475a0cc2b9db2182f080')                                                                       
);                
# Get the response
$response = curl_exec($ch);
//echo "ligne_commande".$response;*/


?>
