<?php
    $url=explode('/',$_SERVER["REQUEST_URI"]);
    $db=mysqli_connect('','','',$url[1]);
	$db->query("set names utf8");
	if(!$db)
	{
		die('ERROR'.mysqli_error());
	}
?>