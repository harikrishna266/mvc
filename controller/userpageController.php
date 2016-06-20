<?php
	
 	class userpageController extends db {
 		

 		function __construct()
 		{
 			parent::__construct();

 		}

 		function view() {
	 			$err='';
				if($_POST) {
					$data = $this->submit();
					if($data) {
						$err = 'Invalid credentials';  			
						} else {
							$err = 'success';
						}
				}
				require('./views/userpage/userpage.php') ; 
	   	}

   	 	function submit() {
	   		$postData = getPostData();
	   		$loginArray = array('startwork'=>$postData["basicexample1"],'stopwork'=>$postData["basicexample2"],'comment'=>$postData["comment"]);
	   		$data = $this->insert('userpage',$loginArray);
	   		return $data;
		}
	}	 	
?>