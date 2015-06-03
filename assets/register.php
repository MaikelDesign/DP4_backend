<?php
// Put this code in first line of web page.
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_SESSION['logged_in']) == true){
	header('location:pages/login_succes.php');
}

?>

<!DOCTYPE html>
<html>
	<head><!-- begin head-->
		<meta charset="UTF-8">	
		<meta name="viewport" content="user-scalable=0, initial-scale=1.0"><!-- scaleable for mobile devices -->
		<link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>	
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>	
		<script src="javascript/javascript.js"></script>
		<title>Registreer pagina</title>
	</head><!-- eind head -->
	<body><!-- begin code -->

<?php

?>	
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
			<form name="form1" method="post" action="pages/checkRegister.php">
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="3"><strong>Member Register </strong></td>
						</tr>
						<tr>
							<td width="78">Username</td>
							<td width="6">:</td>
							<td width="294"><input name="myusername" type="text" id="myusername" placeholder="Username"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input name="mypassword" type="text" id="mypassword" placeholder="Password"></td>
						</tr>
						<tr>
							<td>Re-set password</td>
							<td>:</td>
							<td><input name="setpassword" type="text" id="mypassword" placeholder="Password"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type="submit" name="Submit" value="Register"></td>
						</tr>
					</table>
				</td>
			</form>
		</tr>
	</table>


	</body><!-- eind code-->
</html>
