<?php 
$data = array(
    'ref' =>  $_GET['code_commande'],
    'qty' => $_GET['qnt'],
    'id_fournisseur' => $_GET['fournisseurs']
);
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
echo $response;
?>
