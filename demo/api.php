<?php
    $filename='data.dat';
    header('Content-type:text/html;charset=utf-8');
    if(!file_exists($filename)){
        echo $filename.'数据文件不存在';
    }
    $data=file_get_contents($filename);
    $data=explode(PHP_EOL,$data);
    $result=$data[array_rand($data)];

    $result=str_replace(array("\r","\n","\r\n"),'',$result);
    //echo $result;
    echo 'document.write("'.htmlspecialchars($result).'");';

?>
<!--<script src="http://127.0.0.1/api/yiyan/api.php"></script>-->
