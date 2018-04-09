<?php 
session_start();

require("auth.php");

?>

<html>
<head>
	<title>Movie Ratings</title>
</head>

<body>
<?php 
$l=mysqli_connect("34.224.83.184", "student4", "phppass4", "student4");

if(mysqli_connect_errno()){
    echo "Connect could not be made" .mysqli_error();
}

$result = mysqli_query($l,"select * from movies2");

echo "<table border='1' cellpadding=10>";
echo "<tr><th>Movie Name</th></tr>";



while($row = mysqli_fetch_array($result))
{
//     echo "<tr>";
//     echo "<td>" . $row['movieName'] . "</td>";
//     echo "</tr>";

    echo '<td><input type="checkbox" value="" name="additem[]" /> '. $row['movieName'] . '</td>';
    echo '</tr>';
}
echo "</table>";

mysqli_close($l);
?>
</body>

</html>