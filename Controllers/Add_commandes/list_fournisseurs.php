<?php
session_start();
try {

    //$url = file_get_contents($_SESSION["server"]."/api/index.php/ireceptionapi/fournisseurs?sortfield=t.rowid&sortorder=ASC&DOLAPIKEY=".$_SESSION["token"]);
    $url = file_get_contents($_SESSION["server"]."/api/index.php/thirdparties?sortfield=t.rowid&sortorder=ASC&DOLAPIKEY=".$_SESSION["token"]);
    $data = json_decode($url,true);
    foreach ($data as $item){
        echo "<option id='".$item['id']."' value='".$item['name']."'>".$item['name']."</option>";
    }
} catch (\Throwable $th) {
    echo 'Server error';
}
?>