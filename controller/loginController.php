<?php
	
 	class loginController extends db {
 		

 		function __construct()
 		{
 			parent::__construct();

 		}

 		function view() {
	 			require_once('./views/login/login.php') ; 
	 			
	   	}
   	 	function submit(){
	   		$postData = getPostData();
	   		$loginArray = array('admin_username'=>$postData["admname"],'admin_pass'=>$postData["admpass"]);
	   		$this->selectByArgument('adminus',$loginArray);
   	 	}
 	}
?>