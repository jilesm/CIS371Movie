<?php 
session_start();

require("auth.php");

?>

<html>
<head>
	<title>Movie Rates</title>
</head>

<body>
<?php 
require("menu.php");
echo "Welcome ".$_SESSION['auth'];
?>


</body>

</html>