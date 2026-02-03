<?php

	$nam = "first";
	$cont = "<center><h1>Cookie Is Set <br> Welcome To Php </h1> </center>";
	
	$exp = time()+(60);
	setcookie($nam,$cont,$exp);
	if(isset($_COOKIE['first']))
	{
		echo $_COOKIE['first'];
	}
	else
	{
		echo "<center><h1> Cookie Expire Thay Gai Refresh Karo:)</h1></center>";
	}
?>