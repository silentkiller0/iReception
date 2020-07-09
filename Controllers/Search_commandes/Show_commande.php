<?php

try {
//$url = file_get_contents($_GET['server']."/api/index.php/login?login=".$_GET['username']."&password=".$_GET['password']);
// http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27"CMD-50"%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080
$url = file_get_contents("http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27".$_GET['refCommande']."%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080");


$data = json_decode($url,true);

foreach ($data as $item){
      return $item;
    }



} catch (\Throwable $th) {
    echo 'Error commande';
}

?>
