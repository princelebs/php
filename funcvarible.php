<?php 
		function fun1()
		{
			echo "Function One Call";
		}
		function fun2()
		{
			echo "<br>Function Two Call";
		}
		$f1="fun1";
		$f1();
		$f2="fun2";
		$f2();
?>
<?php
		function showarguments()
		{
			$count = func_num_args();
			echo "<br><br>Number Of Argument Passed:$count<br>";
			echo "<br>1st Argument is:".func_get_arg(0)."<br>";
			echo "<br>2nd Argument is:".func_get_arg(1)."<br>";
			echo "<br>3rd Argument is:".func_get_arg(2)."<br>";
		}
		showarguments(10,20,30,40,50);
?>
<?php	
		function addno()
		{
			if(func_num_args()==2)
			{
				$a = func_get_arg(0);
				$b = func_get_arg(1);
				return $a+$b;
			}
			else
			{
				echo "Enter Only Two Numbers";
			}
		}
		echo "<br> Total is ".addno(20,50);
?>		