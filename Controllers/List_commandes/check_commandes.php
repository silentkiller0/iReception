<?php
session_start();
try {
    $url = $_SESSION["server"]."/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%22".$_GET['ref_commande']."%22&DOLAPIKEY=".$_SESSION["token"];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_setopt($ch, CURLOPT_URL, $url);
    $content = curl_exec($ch);
    if ($content){
        $error = curl_error($ch);
        $info = curl_getinfo($ch);
        if($info['http_code'] ==200){
            echo 'valide';
    }else{
        echo 'not valide';

    }
}
} catch (\Throwable $th) {
    echo 'Server error';
}
?>