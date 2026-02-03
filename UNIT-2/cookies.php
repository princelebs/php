<?php
if (isset($_POST['s1'])) 
{
   $a = $_POST['n1'];
       $name="visit";
       $content = "<img src=birds.webp height=25% width=auto >";
       $exp = time()+(60);
   
       setcookie($name,$content,$exp);
       
       header("refresh:0;pass.php");
       //echo $_COOKIE['visit'];
       
       //header("refresh:0;pass.php");
   // code...
}
       //header("refresh:0;pass.php");
   
   ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>
   <table border="4">
       <tr>
           <td align="center">
       <form action="" method="POST">
       <input type="image" src="birds.webp" name="j1"><br>
       <input type="number" name="n1" min="1">
       <input type="submit" value="ADD to Cart" name="s1">
       </form>
       </td>
       </tr>
       </table>
</body>
</html>



