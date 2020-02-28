<?php
$view = "";
if(isset($_GET["view"])){
	$statusCode = 200;
     $view = $_GET["view"];
}else{
	$statusCode = 404;
	$rawData = array('error' => 'No sites found!');   
	exit;
}

switch($view){
    case "all":
		require_once("handler.php");	
		$json = new Handler();
		$json->getData();
        break;
    case "" :
	    return ;
         break;
}













?>