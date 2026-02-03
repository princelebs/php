<?php
	session_start();
	if(isset($_SESSION["username"]))
	{
		echo "HIII , ".$_SESSION["username"];
	}
	else
	{
		echo "SESSION REMOVE";
	}
?>