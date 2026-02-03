<?php 
		$num = $_POST['n'];
		$n=1;
		do
		{
			$num1=$n*$num;
			echo $num."*".$n."=".$num1."<br>";
			$n++;
		}
		while($n<=10)
?>        							