<?php
$DangerWords = array("warning","dangerous","careful","caution");
$c = 0;

$message = 'Hi there take caution warning!!! dangerous careful';
 foreach ($DangerWords as $Dangerword):
    $trial = stripos($message,$Dangerword);
    
    if($trial != true){
        $c++;
        echo 'Word '.$c.' didnt match <br> <br>';
    }else{
        $c++;
        echo 'Word '.$c.' matched <br> <br>';
    }
 endforeach;
 ?>
<style>
    body{
        background: #ccc;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    *{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #000;
        font-size: 20px;
    }
</style>