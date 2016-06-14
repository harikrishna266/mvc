<?php
	require_once('./db/db.php');
 	class loginController extends db {
 		
 		function __construct()
 		{
 			print "Login page\n";
 		}

 		function view() {
	 			require_once('./views/login/login.php') ; 
	 			$db1=new db();
	 			$db1->store();
	   		}

 	}



?>