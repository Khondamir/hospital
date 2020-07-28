<?php
	include '../config/db_conn.php';
	include 'data_fetch.php';
	
	$operation = $_GET['operation'];
	$result = null;

	//get data thruogh incoming rout
	$data = new SearchData($db);
	try{

		if(isset($_GET['value'])){
			$result = $data->$operation($_GET['value']);
		}else {
			# code...
			$result = $data->$operation();
		}

	}catch (Exception $e){
	    header($_SERVER["SERVER_PROTOCOL"] . ' 500 Server Error');
	    header('Status:  500 Server Error');
	    echo $e->getMessage();
  	} 
  	echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>