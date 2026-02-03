<?php 
		$num=$_POST['n'];
		if($num!=0)
		{
			if($num>0)
			{
				echo "NUMBER IS +VE";
			}
			else
			{
				echo "NUMBER IS -VE";
			}
		}
	else
	{
		echo "ZERO";
	}
?>		