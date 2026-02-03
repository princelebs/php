<?php

$str  = "Hello World";
$str2 = "   PHP Programming   ";

echo "1. strlen(): " . strlen($str) . "<br>";
echo "2. str_word_count(): " . str_word_count($str) . "<br>";
echo "3. strrev(): " . strrev($str) . "<br>";
echo "4. strpos(): " . strpos($str, "World") . "<br>";
echo "5. str_replace(): " . str_replace("World", "PHP", $str) . "<br>";
echo "6. strtolower(): " . strtolower($str) . "<br>";
echo "7. strtoupper(): " . strtoupper($str) . "<br>";
echo "8. ucfirst(): " . ucfirst("hello") . "<br>";
echo "9. lcfirst(): " . lcfirst("Hello") . "<br>";
echo "10. ucwords(): " . ucwords("hello world") . "<br>";
echo "11. substr(): " . substr($str, 0, 5) . "<br>";
echo "12. trim(): '" . trim($str2) . "'<br>";
echo "13. str_repeat(): " . str_repeat("PHP ", 3) . "<br>";
echo "14. str_pad(): " . str_pad("PHP", 10, "*") . "<br>";
echo "15. str_shuffle(): " . str_shuffle("HELLO") . "<br>";
echo "16. str_split(): <pre>";
print_r(str_split("PHP"));
echo "</pre>";
echo "17. explode(): <pre>";
print_r(explode(" ", $str));
echo "</pre>";
$arr = array("I", "Love", "PHP");
echo "18. implode(): " . implode(" ", $arr) . "<br>";
echo "19. strcmp(): " . strcmp("Hello", "Hello") . "<br>";
echo "20. htmlspecialchars(): " . htmlspecialchars("<h1>Hello</h1>") . "<br>";

?>


