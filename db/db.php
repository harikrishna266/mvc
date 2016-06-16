<?php
class db{

		public $db;
		protected $servername = "localhost";
		protected $username = "root";
		protected $password = "";
		protected $dbname= "admin";

		
		function __construct() {
			$this->connet();
		}

		function connet() {
			$this->db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		function selectByArgument($tablename,$arguments) { 
			$queryString = "";
			$querytable = "Select * from $tablename where ";
			$data = [];
			foreach($arguments as $key=>$val) {
				$queryString .= $key."=? AND ";
				array_push($data, $val);
			}
			$queryString = substr($queryString,0,-4);
			$stmt = $this->db->prepare($querytable." ".$queryString);
			$stmt->execute($data);
			$data =$stmt->fetchAll(PDO::FETCH_ASSOC);
			// print_r($data);
			if(!$data){
				echo "<script>alert('Wrong Login Details, Try Again!')</script>";
			}else{
				echo "<script>alert('Success!')</script>";
			}
		}


	}

?>