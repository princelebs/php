<?php 
		$num=$_POST['n'];
		if($num>0)
		{
			echo "NUMBER IS +VE";
		}
		else if($num<0)
		{
			echo "NUMBER IS -VE";
		}
		else
		{
			echo "ZERO";
		}
?>