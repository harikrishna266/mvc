<?php

class adminController extends db {
	
	function __construct() {
	 	parent::__construct();
		
	}

	function view() {
		if($_POST){
		$data=$this->submit();
		}
		require_once('./views/adminpage/adminpage.php');
	}

	function submit() {
		$postData = getPostData();
	   	$userArray = array('username'=>$postData["usename"],'password'=>$postData["usepass"]);
	   	$data=$this->insert('usertable',$userArray);		
		return $data;
	}
}
?>