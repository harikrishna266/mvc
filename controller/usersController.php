<?php
class usersController extends db {
	function __construct() {
		parent::__construct();
	}

	function view() {
		$error = '';
			if($_POST) {
					$data = $this->submit();
					if(!$data) {
						$error = 'Invalid credentials';  			
						} else {
							//$error = 'success';
							header('location:../userpage/view');
						}
					}
		require_once('./views/userslogin/userslogin.php');
	}

	function submit() {
		$postData = getPostData();
	   	$userArray = array('username'=>$postData["usname"],'password'=>$postData["uspass"]);
	   	$data=$this->selectByArgument('usertable',$userArray);
	   	return $data;
	}
}