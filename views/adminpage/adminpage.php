<!DOCTYPE html>
<html>
<head>
	<title>Administrator Page</title>
</head>
<body>
<p align="center">Welcome to admin page!!</p>
<form action="../admin/view" method="post">
<div align="center">
<table border="2" bgcolor="#00CC99">
			<tbody>
			  	<tr>
					<td align="center">
			  			<p>Username : <input type="text" name="usename" placeholder="Enter Username" style="border-width:thick"></p>
			  		</td>
			  	</tr>
				<tr>
					<td align="center">  
						<p>Password : <input type="password" name="usepass" placeholder="Enter Password" style="border-width:thick"></p>
					</td>
				</tr>
		  
			    <tr>
					<td align="center">
				 		 <p>&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" name="usesub">&nbsp;</p>
					</td>
				</tr>
			</tbody>
		</table>  
	<br><br>

<table border="2" bgcolor="#00CC99">
			<tbody>
			  	<tr>
					<td align="center">
						<p>Select User : </p>
						<select>
							<option></option>
						</select>
			  		</td>
			  	</tr>
				<tr>
					<td align="center">  
						<p>Total time : <input type="password" name="totaltime" style="border-width:thick"></p>
					</td>
				</tr>
					</tbody></table>
</body>
</html>