<?php

/**
 * 
 */
class SaveData
{
	private $db;
	function __construct($db)
	{
		# code...
		$this->db = $db;
	}

	public function login_check()
	{
		# code...
		$query = "SELECT type FROM login_for_analiz  WHERE login = '".$_POST['inputLogin']."' AND password = '".$_POST['inputPassword']."'";
		$this->db->mysqlQuery($query);
		$this->result = $this->db->fetchAll();
		$type = $this->result;

		if(isset($_SESSION)){
			session_destroy();
		}
		
		if(empty($type)){}
		elseif ($type[0]['type']==1) {
			# code...
		session_start();
		$_SESSION['id'] = 1;
		return 1;		
			
		}elseif ($type[0]['type']==2) {
			# code...
		session_start();
		$_SESSION['id'] = 2;
		return 2;
		}else{
			return 0;
		}		
	}

	public function get_session_id()
	{
		# code...
		
		session_start();
		return $_SESSION['id'];
	}

	public function analyse_a1()
	{
		# code...
		$query = "INSERT INTO analiz_a1 (fio, date, reg_no, otdel, palata, a6, a7, a8, a9, a10, a11, a12, a13, a14, a15, a16, a17, a18, a19, a20, a21, a22, a23, a24, a25, a26, a27, a28) VALUES ('".$_POST['fio']."', '".$_POST['datetime']."', '".$_POST['reg_no']."', '".$_POST['otdel']."', '".$_POST['palata']."', '".$_POST['a1_6']."', '".$_POST['a1_7']."', '".$_POST['a1_8']."', '".$_POST['a1_9']."', '".$_POST['a1_10']."', '".$_POST['a1_11']."', '".$_POST['a1_12']."', '".$_POST['a1_13']."', '".$_POST['a1_14']."', '".$_POST['a1_15']."', '".$_POST['a1_16']."', '".$_POST['a1_17']."', '".$_POST['a1_18']."', '".$_POST['a1_19']."', '".$_POST['a1_20']."', '".$_POST['a1_21']."', '".$_POST['a1_22']."', '".$_POST['a1_23']."', '".$_POST['a1_24']."', '".$_POST['a1_25']."', '".$_POST['a1_26']."', '".$_POST['a1_27']."', '".$_POST['a1_28']."')";
		try {
			$this->db->mysqlQuery($query);
			return true;	
		} catch (Exception $e) {
			echo 'query is not correct';
			return false;
		}
	}



	public function analyse_a2($value='')
	{
		# code...
		$query = "INSERT INTO analiz_a2";
		$this->db->mysqlQuery($query);
		return true;

	}





}

?>