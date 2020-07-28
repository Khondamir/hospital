<?php

	include "mysql.php";
	$db = new Mysql("localhost", "root", "", "hospital");
	$connect = $db->Connection();

	$connect->query("SET NAMES 'utf8'"); 
	$connect->query("SET CHARACTER SET utf8");  
	$connect->query("SET SESSION collation_connection = 'utf8_unicode_ci'"); 
?>