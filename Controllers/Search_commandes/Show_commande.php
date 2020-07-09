
<?php
try {
        $url="http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27".$_GET['refCommande']."%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080";

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
                //var_dump($data);

                $tab = array();
                foreach ($data as $item){

                    $file=file_get_contents('http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%3D'.$item['id'].'&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080');
                    $data2 = json_decode($file,true);
                    array_push($tab,$item['ref']);
                    array_push($tab,$item['qty']);
                    array_push($tab,$item['id']);


                    $tabref = array();
                    foreach($data2 as $i){
                      array_push($tabref,$i['ref']);
                    }
                    array_push($tab,$tabref);

                    $json = json_encode($tab);
                    print_r($json);

            }
        }else{
            echo 0;
        }
    }
        curl_close($ch);
} catch (\Throwable $th) {
    echo 0;
}
?>
