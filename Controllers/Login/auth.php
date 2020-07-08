<?php
try {
$url = file_get_contents($_GET['server']."/api/index.php/login?login=".$_GET['username']."&password=".$_GET['password']);
$data = json_decode($url,true);
foreach ($data as $item){
        if($item['code'] == 200){
            echo $item['token'];
        }else{
            echo 'login incorrect';
        }
    }
} catch (\Throwable $th) {
    echo 'login incorrect';
}

?>