<?php
	
 	class loginController extends db {
 		

 		function __construct()
 		{
 			parent::__construct();

 		}

 		function view() {
	 			$error='';
				if($_POST) {
					$data = $this->submit();
					if(!$data) {
						$error = 'Invalid credentials';  			
						} else {
							
							$_SESSION['user'] = $data;
							$error = 'success';
							header('location:../admin/view');
						}
				}
				require('./views/login/login.php') ; 
	   	}

   	 	function submit() {
	   		$postData = getPostData();
	   		$loginArray = array('admin_username'=>$postData["admname"],'admin_pass'=>$postData["admpass"]);
	   		$data = $this->selectByArgument('adminus',$loginArray);
	   		return $data;

		}
		function logout() {
			session_destroy();
			header('location:./view');
	}
	}	 	
?>