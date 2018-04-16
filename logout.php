<?PHP

session_start();

session_destroy();

require("menu.php");
echo "You are now logged out.";

?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
</body>
</html>
