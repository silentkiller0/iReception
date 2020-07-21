<?php 

session_start();
$data = array(
    'allee' =>  $_GET['allee'],
    'rayon' => $_GET['rayon'],
    'etage' => $_GET['etage']
);


//echo $_GET['allee'].'-'.$_GET['rayon'].'-'.$_GET['etage'].'-'.$_GET['id'];


# Create a connection
$url = $_SESSION["server"]."/api/index.php/ireceptionapi/emplacement/".$_GET['id'];

$ch = curl_init($url);

# Form data string
$postString = http_build_query($data, '', '&');
# Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'DOLAPIKEY: ecee5974867c0d45c5b8475a0cc2b9db2182f080')                                                                       
); 
# Get the response
$response = curl_exec($ch);
echo $response;
?>
