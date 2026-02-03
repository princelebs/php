<?php

	if(isset($_COOKIE["username"]))
	{
		echo "HI",$_COOKIE["username"];
	}
	else
	{
		echo "COOKIES IS NOT SET";
	}
?>