<?php
		$a=10;
		$b=5;//20
		$loggedin=false;
		
		echo "<h3>Logical Opratores</h3>";
		
		if($a > 5 && $b <10)
		{
			echo "AND(a>5&&b<10):True<br>";
		}
		else
		{
			echo "AND(a>5&&b<10):False<br>";
		}
		if($a>15||$b<10)
		{
			echo "OR(a > 15 || b < 10):True<br>";
		}
		else
		{
			echo "OR(a > 15 || b < 10):False<br>";
		}
		if(!$loggedin)
		{
			echo "NOT(!$loggedin):True<br>";
		}
		else
		{
			echo "NOT(!$loggedin):True<br>";
		}
?>	