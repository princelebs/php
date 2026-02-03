<?php 
		$num = $_POST['n'];
		$n=1;
		while($n<=10)
		{
			$num1=$n*$num;
			echo $num."*".$n."=".$num1."<br>";
			$n++;
		}
?>        							