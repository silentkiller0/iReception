<?php
session_start();
try {
        $url= $_SESSION["server"]."/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27".$_GET['refCommande']."%27&DOLAPIKEY=".$_SESSION["token"];

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
                    
     
                    
                    $ch = curl_init();
                    $info = curl_getinfo($ch);

                    //##############################################
                    
                    
                            $url3= $_SESSION["server"]."/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%3D%27".$item['id']."%27&DOLAPIKEY=".$_SESSION["token"];
                            $ch3 = curl_init();
                            curl_setopt($ch3, CURLOPT_HEADER, 0);
                            curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch3, CURLOPT_URL, $url3);
                            $response3 = curl_getinfo($ch3, CURLINFO_HTTP_CODE);
                            curl_setopt($ch3, CURLOPT_URL, $url3);
                            $content3 = curl_exec($ch3);
                            if ($content3){
                                $info3 = curl_getinfo($ch3);
                                $data2 = json_decode($content3,true);

                                if($info3['http_code'] ==200){
                                    array_push($tab,$item['ref']);
                                        array_push($tab,$item['qty']);
                                        array_push($tab,$item['id']);

                                    $tabref = array();
                                  
                                    foreach($data2 as $i){
                                      array_push($tabref,$i['ref']);
                                    }
                                   //var_dump($data3);
                                    array_push($tab,$tabref);
                
                                    $json = json_encode($tab);
                                    print_r($json);
                
                            

                                     

                                }
                        }
                   
                  

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
