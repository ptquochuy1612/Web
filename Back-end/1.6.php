<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php
		include_once("DataProvider.php");
		if(isset($_POST["user"]))
		{
			$user = $_POST["user"];
			$pass = $_POST["user"];
			$sql = "exec proc usp_LOGIN " . $user . " " . $pass;

			$ad = DataProvider::execQuery($sql);
			if($ad = 1)
			Header( "Location: http://admin.php" );
			else if ($ad = 0)
			 Header( "Location: http://member.php" );
			else
			echo "<script type='text/javascript'>alert('Sai ten dang nhap hoac mat khau');</script>";
		}
	?>
</body>
</html>