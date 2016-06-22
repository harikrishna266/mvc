<?php

class adminController extends db {
	
	function __construct() {
	 	parent::__construct();
		
	}

	function view() {
		$session = getSession();
		$err='';
		 if($_POST){
			$data=$this->submit(); 
		 		if(!$data){
					$err = "Success";
		    	} else {
					$err = "Error";
				}
			}
			$val = $this->value();
			require('./views/adminpage/adminpage.php');
	}

	function submit() {
		$postData = getPostData();
	   	$userArray = array('username'=>$postData["usename"],'password'=>$postData["usepass"]);
	   	$data=$this->insert('usertable',$userArray);		
		return $data;
	}

	function value() {
		$val=$this->select('usertable');
		return $val;
		//print_r($val);

	}
}
?>