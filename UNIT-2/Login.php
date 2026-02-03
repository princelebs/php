<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>
</body>
</html>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["username"];
    $pass = $_POST["password"];

    // Hardcoded username & password (for learning only)
    if ($user == "admin" && $pass == "admin") {
        $_SESSION["user"] = $user;
        header("Location: Dashboard.php");
        exit();
    } else {
        echo "Invalid login";
    }
}
?>