<?php

   if (isset($_COOKIE['visit'])) 
   {
       
   echo $_COOKIE['visit'];
   }
   else
   {
       echo "your cart is empty <br>";
       echo "<a href=cookies.php>Go Home</a>";
   }
   if (isset($_POST['s1'])) 
   {
       setcookie("visit","",time()-(3600));
       header("refresh:0;pass.php");

       
   }
       
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>
<form method="post">
   <input type="submit" name="s1" value="remove">
</form>
</body>
</html>
