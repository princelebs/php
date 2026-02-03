<?php 
		$flowers = array(
		"Rose" => array("color"=>"Red","price"=>10),
		"Lily" => array("color"=>"White","price"=>50),
		"Sunflower" => array("color"=>"Red","price"=>100)
		);
		foreach($flowers as $f => $details)
		{
			echo "$f : color=".$details["color"].",price=".
			$details["price"]."<br>";
		}
?>