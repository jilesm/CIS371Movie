<?PHP

session_start();

session_destroy();

require("menu.php");
echo "You are now logged out.";

?>
