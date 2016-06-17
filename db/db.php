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
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $data;
		}

		function insert($tablename,$arguments) {
			$queryString1 = "";
			$queryString2 = "";
			$querytable1 = "Insert into $tablename ";
			$querytable2 = "values";
			$data = [];
			foreach ($arguments as $key=>$value) {
				$queryString1 .= "`" .$key. "`,";
				$queryString2 .= "?,";
				array_push($data,$value);
			}
			$queryString1 = substr($queryString1,0,-1);
			$queryString2 = substr($queryString2,0,-1);
			$stmt = $this->db->prepare($querytable1."(".$queryString1.")".$querytable2."(".$queryString2.")");
			$stmt->execute($data);
		}	

	}

?>