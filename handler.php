<?php 
require_once("status.php");
require_once("query.php");

class Handler extends Status {

	function getData() {
		$list = new Lists();
		$rawData = $list->data();
		echo json_encode($rawData);
	}


	
	
}
?>