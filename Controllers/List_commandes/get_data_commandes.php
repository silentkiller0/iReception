
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
            $data = json_decode($content,true);
                $tab = array();
                foreach ($data as $item){

                    //$file=file_get_contents($_SESSION["server"].'/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%3D'.$item['id'].'&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080');
                   
                    $url3= $_SESSION["server"].'/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%3D'.$item['id'].'&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080';
                    $ch3 = curl_init();
                    curl_setopt($ch3, CURLOPT_HEADER, 0);
                    curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch3, CURLOPT_URL, $url3);
                    $response3 = curl_getinfo($ch3, CURLINFO_HTTP_CODE);
                    curl_setopt($ch3, CURLOPT_URL, $url3);
                    $content3 = curl_exec($ch3);
                    if($content3){
                        $info3 = curl_getinfo($ch3); 
                        
                        if($info3['http_code'] ==200){   
                            ///////////////////////////////
                            $data2 = json_decode($content3,true);
                            array_push($tab,$item['id']);
                            array_push($tab,$item['qty']);
                            $tabref = array();
                            $tabpos = array();
                            foreach($data2 as $i){

                                array_push($tabref,$i['id']);

                            }
                            array_push($tab,$tabref,$tabpos);
                            $json = json_encode($tab);
                            ////////////////////////////
                        }

                    }
                   
                   
            }
            echo $json;
    }else{
        echo 'not valide';

    }
}
} catch (\Throwable $th) {
    echo 'Server error';
}

?>
