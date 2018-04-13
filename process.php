<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$login = false;

if ($username == "admin" && $password == "welcome")
{
    $login = true;
   
}
else {
    $login = false;
}

if ($login == true)
{
    $_SESSION['auth'] = $username;
}
else {
    $_SESSION['auth'] = "";
}

if ($login == true)
{
    header("location: home.php");
die();
}

?>

<html>
<head>
</head>
<body>
<?php 
require("menu.php");

if ($login == true)
{
    echo "You are logged in! Welcome $username";
    
}
else 
{
    echo "You are not logged in.";
}
?>
</body>
</html>

