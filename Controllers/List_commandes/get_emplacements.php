<?php
session_start();
try {

    $tab = array();
    $url = $_SESSION["server"]."/api/index.php/ireceptionapi/emplacement?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_ligne_commande%3D".$_GET['id_emplacement']."&DOLAPIKEY=".$_SESSION["token"];
    $file=file_get_contents($url);
    $data = json_decode($file,true);
    foreach($data as $item){
        array_push($tab,$item['allee']);
        array_push($tab,$item['rayon']);
        array_push($tab,$item['etage']);
        array_push($tab,$item['id']);
    }

    $json = json_encode($tab);
    echo $json;
} catch (\Throwable $th) {
    echo 'Server error';
}
?>