<?php
	define("SERVER","localhost");
	define("DATABASE","qlbanhang");
	define("USERNAME","root");
	define("PASSWORD","");

	class DataProvider
	{
		public static function execQuery($sql)
		{
			$connection = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE) or die("Could not connect to " .SERVER . ".");
			
			mysqli_select_db( $connection,DATABASE);
			mysqli_set_charset($connection,"utf8");
			
			$result = mysqli_query($connection,$sql);
			if(!$result) die("Query failed: " . mysqli_error($connection));
			
			mysqli_close($connection);
			return $result;
		}
	}
?>
