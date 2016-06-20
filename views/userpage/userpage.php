<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
  <head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="../css/jquery-ui-timepicker-addon.css" />
		<style type="text/css">
			*{ font-size:12px; font-family:verdana; }
			h1 { font-size:22px; }
			.wrapper { width:900px; margin:0px auto; padding:15px;background-color:#eee; }
			input { width:250px; border: 2px solid #CCC; line-height:20px;height:40px; border-radius:10px; padding:5px; }
		</style>
	</head> 
	<body>
	<p><b><?php echo $err; ?></b></p>
		<div class="wrapper" align="center">
		<p align="right"><a href='../users/view'>logout</a></p>
			<form method="post" action="../userpage/view">
			<div class="example-container">
				<p><b>Start date and time</b></p>
				<div>
					<input type="text" value="" id="basic_example_1" name="basicexample1" />
				</div>					
			</div>
			
			<div class="example-container">
				<p><b>End date and time</b></p>
				<div>
					<input type="text" value="" id="basic_example_2" name="basicexample2" />
				</div>
			<p><b>Comments: <textarea name="comment" placeholder="comment"></textarea></b></p>

			</div>
			<input type="submit" value="Submit" name="usub">
		
	 	</div>
		
		<!--loading jQuery and other library-->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../scripts/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="../scripts/jquery-ui-sliderAccess.js"></script>
		<script type="text/javascript" src="../scripts/script.js"></script>
	</form>
<br><br>
	<table align="center" border="2" bgcolor="#00CC99">
			<tbody>
			  	<tr>
					<td align="center">
			  			<p>START DATE & TIME </p>
			  		</td>
			  		<td align="center">  
						<p>END DATE & TIME
					</td>
			  	</tr>
				<tr>
					<td align="center">  
					
					</td>
				</tr>
			</tbody>
		</table> 
	</body> 
</html>