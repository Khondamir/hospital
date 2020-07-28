<?php
/**
 * Get Search Data From Database
 * Created by Khondamir (khondamirbek@gmail.com)
 */
class SearchData
{
	private $db;
	
	function __construct($db)
	{
		# code...
		$this->db = $db;
	}

	public function get_session_id()
	{
		# code...
		if(isset($_SESSION)){
			return $_SESSION['id'];
			print_r($_SESSION['id']);
		}
	}


	public function searchResult($search){
		$query = "SELECT register_num, name, surname, fath_name, otdel FROM main
  					WHERE name LIKE '%".$search."%'
  					OR surname LIKE '%".$search."%' 
  					OR fath_name LIKE '%".$search."%'";

  		$this->db->mysqlQuery($query);
  		$this->result = $this->db->fetchAll();
  		return $this->result;
	}
	

	public function getAnalyse1_result($person_id)
	{
		# code...
		$query = "SELECT * FROM analiz_a1 WHERE reg_no=".$person_id."";
		$this->db->mysqlQuery($query);
		$this->result = $this->db->fetchAll();
		return $this->result;
	}
}

?>
