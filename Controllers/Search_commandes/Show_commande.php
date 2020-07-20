
<?php
try {
<<<<<<< HEAD
       // $url= $_SESSION["server"]."/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D".$_GET['refCommande'];
        $url ="http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27cmd-01%27";
=======
        $url="http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27".$_GET['refCommande']."%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080";

>>>>>>> parent of 5ed2426... last edit
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'DOLAPIKEY: ecee5974867c0d45c5b8475a0cc2b9db2182f080')                                                                       
        );  
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
                    
>>>>>>> parent of 5ed2426... last edit
                    $ch = curl_init();
                    $info = curl_getinfo($ch);

                    if(file_get_contents('http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27'.$item['ref'].'%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080')){
                        $file = file_get_contents('http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/commandes?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=ref%3D%27'.$item['ref'].'%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080');
                    }else{
                        echo 'commande non existante';
                    }
                 
                     if(file_get_contents('http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%'.$item['id'].'%3D%2020&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080')){
                          $file2 = file_get_contents('http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%'.$item['id'].'%3D%2020&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080');
                     }else{
                         echo 'pas de ligne commande';
                     }
                    
<<<<<<< HEAD
                    
                           // $url3= $_SESSION["server"]."/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%3D%27".$item['id']."%27&DOLAPIKEY=".$_SESSION["token"];
                            $url3 = "http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%3D%27157%27";
                            $ch3 = curl_init();
                            curl_setopt($ch3, CURLOPT_HEADER, 0);
                            curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch3, CURLOPT_URL, $url3);
                            curl_setopt($ch3, CURLOPT_HTTPHEADER, array(                                                                          
                                'DOLAPIKEY: ecee5974867c0d45c5b8475a0cc2b9db2182f080')                                                                       
                            );  
                            $response3 = curl_getinfo($ch3, CURLINFO_HTTP_CODE);
                            curl_setopt($ch3, CURLOPT_URL, $url3);
                            $content3 = curl_exec($ch3);
                            if ($content3){
                                $info3 = curl_getinfo($ch3);
                                $data2 = json_decode($content3,true);

                    $file=file_get_contents('http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande%3D%27157%27&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080');
=======

                    $file=file_get_contents('http://82.253.71.109/prod/bdc_v11_04/api/index.php/ireceptionapi/ligne_commande?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=id_commande='.$item['id'].'&DOLAPIKEY=ecee5974867c0d45c5b8475a0cc2b9db2182f080');
>>>>>>> parent of 4d6de4d... affichage ligne commande fix
                    $data2 = json_decode($file,true);
                    array_push($tab,$item['ref']);
                    array_push($tab,$item['qty']);
                    array_push($tab,$item['id']);

                                if($info3['http_code'] ==200){
                                    array_push($tab,$item['ref']);
                                        array_push($tab,$item['qty']);
                                        array_push($tab,$item['id']);

                    $tabref = array();
                    foreach($data2 as $i){
                      array_push($tabref,$i['ref']);
                    }
                    array_push($tab,$tabref);

                                     

<<<<<<< HEAD
                                }
                        }
                        //var_dump($data);       
                        return $data;
=======
                    $data2 = json_decode($file,true);
                    $data3 = json_decode($file2,true);
                    array_push($tab,$item['ref']);
                    array_push($tab,$item['qty']);
                    array_push($tab,$item['id']);


                    $tabref = array();
                  
                    foreach($data3 as $i){
                      array_push($tabref,$i['ref']);
                    }
                   //var_dump($data3);
                    array_push($tab,$tabref);

                    $json = json_encode($tab);
                    print_r($json);
>>>>>>> parent of 5ed2426... last edit

=======
>>>>>>> parent of 4d6de4d... affichage ligne commande fix
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
