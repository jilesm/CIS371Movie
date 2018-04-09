<?php 
session_start();

require("auth.php");

?>

<html>
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
	    
    function drawMaterial() {
      var data = google.visualization.arrayToDataTable([
        ['City', '2010 Population'],
        ['New York City, NY', 8],
        ['Los Angeles, CA', 37],
        ['Chicago, IL', 26],
        ['Houston, TX', 20],
        ['Philadelphia, PA', 15]
      ]);

      var materialOptions = {
        chart: {
          title: 'Population of Largest U.S. Cities'
        },
        hAxis: {
          title: 'Total Population',
          minValue: 0,
        },
        vAxis: {
          title: 'City'
        },
        bars: 'horizontal'
      };
      var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
      materialChart.draw(data, materialOptions);
    }
	</script>
    
	<title>Movie Ratings</title>
</head>

<body>
	<div id="barchart_material" style="width: 900px; height: 500px;"></div>
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
