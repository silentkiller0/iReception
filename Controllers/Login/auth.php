<?php
try {
        $url=$_GET['server']."/api/index.php/login?login=".$_GET['username']."&password=".$_GET['password'];
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
                foreach ($data as $item){
                    if($item['code']==200){
                        echo $item['token'];
                    }else{
                        echo 'login incorrect';
                    }
            }
        }else{
            echo 'login incorrect';
        }
    }
        curl_close($ch);
} catch (\Throwable $th) {
    echo 'login incorrect';
}
?>