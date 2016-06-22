<?php
	
 	class userpageController extends db {
 		

 		function __construct()
 		{
 			parent::__construct();

 		}

 		function view() {
 			$session = getSession();
	 			$err='';
				if($_POST) {
					$data = $this->submit();
					if($data) {
						$err = 'Invalid credentials';  			
						} else {
							$err = 'success';
						}
				}
				$user = $this->user();
				require('./views/userpage/userpage.php') ; 
	   	}

   	 	function submit() {
	   		$postData = getPostData();
	   		$loginArray = array('startwork'=>$postData["basicexample1"],'stopwork'=>$postData["basicexample2"],'comment'=>$postData["comment"]);
	   		$data = $this->insert('userpage',$loginArray);
	   		return $data;
		}

		function user() {
			
			$loginArray = array('username');
			$user = $this->selectByArgument('usertable',$loginArray);
			return $user;
		}
	}	 	
?>