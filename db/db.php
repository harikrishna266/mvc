<?php
class db{
	function store(){
			session_start();
			$con = mysql_connect("localhost","root","");

			mysql_select_db("admin",$con);
			if(isset($_POST['admlogin']))
			{
				$u = $_POST['admname'];
				$pass = $_POST['admpass'];
				$_SESSION['admin']=$u;
				$p = $pass;
				$q = "SELECT * FROM adminus WHERE admin_username='$u' AND admin_pass='$p'";
				$cq = mysql_query($q);
				$ret = mysql_num_rows($cq);
				if($ret == true)
				{
					echo "<script>alert('Wrong Login Details, Try Again!')</script>";
				}
				else
				{
					echo "<script>alert('Wrong Login Details, Try Again!')</script>";
				}
			  }
			}
		}
?>