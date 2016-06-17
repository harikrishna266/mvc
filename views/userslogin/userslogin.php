<title>Users Login</title>
<div align="center">
	<form method="post" action="../users/view">
		<p><?php  echo $error; ?></p>
		<table border="2" bgcolor="#00CC99">
			<tbody>
			  	<tr>
					<td align="center">
			  			<p>Username : <input type="text" name="usname" placeholder="Username" style="border-width:thick"></p>
			  		</td>
			  	</tr>
				<tr>
					<td align="center">  
						<p>Password : <input type="password" name="uspass" placeholder="Password" style="border-width:thick"></p>
					</td>
				</tr>
		  
			    <tr>
					<td align="center">
				 		 <p>&nbsp;&nbsp;&nbsp;<input type="submit" value="Login" name="uslogin">&nbsp;</p>
					</td>
				</tr>
			</tbody>
		</table>   
	</form>
</div>