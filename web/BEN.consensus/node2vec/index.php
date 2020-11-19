<?php
    $url=explode('/',$_SERVER["REQUEST_URI"]);
    if($url[3]=='')
    {
        include '../../choice.php';
    }
    else 
    {
        include '../../plot.php';
    }
?>