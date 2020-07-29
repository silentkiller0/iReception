
<?php/*
//session_start();
try {

    //$url = file_get_contents($_SESSION["server"]."/api/index.php/ireceptionapi/fournisseurs?sortfield=t.rowid&sortorder=ASC&DOLAPIKEY=".$_SESSION["token"]);
    $url = file_get_contents("http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/emplacement?sortfield=t.rowid&sortorder=ASC&limit=100&%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080");
    $data = json_decode($url,true);
    //var_dump($data[1]['allee']);
    
    $i=0;

    while ($i<count($data)){
        //echo $data[$i]["allee"].'   ';
        echo "<option id='".$data[$i]['id']."' value='".$data[$i]['name']."'>".$data[$i]['name']."</option>";

        $i++;
    }
} catch (\Throwable $th) {
    echo 'Server error';
}*/
?>

<?php
session_start();
try {

    //$url = file_get_contents("http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/emplacement?sortfield=t.rowid&sortorder=ASC&limit=100&%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080");
    $url = file_get_contents("http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/emplacement?sortfield=t.rowid&sortorder=ASC&limit=100&%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080");
    $data = json_decode($url,true);
    foreach ($data as $item){
        echo "<option id='".$item['id']."' value='".$item['allee']."'>".$item['allee']."</option>";
    }
} catch (\Throwable $th) {
    echo 'Server error';
}
?>