<?php

/**
 *  Mysql Functions 
 * 	Created by: Khondamirbek (khondamirbek@gmail.com)
 */
class Mysql
{
	
	private $servername;
	private $username;
	private $password;
	private $database;
	private $conn;
	private $port;
	private $error = null;
	private $dbconnect;
	private $result;
	private $status;
	
	function __construct($Servername, $Username, $Password, $Database) {
		$this->servername = $Servername;
		$this->username = $Username;
		$this->password = $Password;
		$this->database = $Database;
	}

	public function Connection()
	{
		# code...

		// Create connection
		$this->conn = @mysqli_connect($this->servername, $this->username, $this->password, $this->database);

		// Check connection
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		} 
		# echo "Connected successfully";
		return $this->conn;
	}

	public function mysqlQuery($sql){

		$this->result = @mysqli_query($this->conn, $sql);
		if (!$this->result)
			# code...
			return $this->result;
	}

	public function fetchAll() {
		$result = array();
		while($row = @mysqli_fetch_assoc($this->result)) {
			$result[] = $row;
		}
		return $result;
	}



}


?>