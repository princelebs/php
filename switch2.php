<?php
		$n=$_POST['num'];
		switch($n)
		{
			case "red";
			case "Green";
			case "Blue";
			echo "You Select RGB Color";
			break;
			case "Orange": echo "Favourite Color Is Orange";
			break;
			default : echo "INVALID COLOR";
			break;
		}
?>