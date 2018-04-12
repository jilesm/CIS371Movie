<?php 
session_start();

<<<<<<< HEAD
//require("auth.php");
$l=mysqli_connect("34.224.83.184", "student4", "phppass4", "student4");

if(mysqli_connect_errno()){
    echo "Connect could not be made" .mysqli_error();
}
=======
require("auth.php");
>>>>>>> parent of d3ece6e... Update home.php

$result = mysqli_query($l,"select * from movies2");
?>

<html>
<head>
<<<<<<< HEAD

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

<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
        <title>Movie Ratings</title>
=======
	<title>Movie Ratings</title>
>>>>>>> parent of d3ece6e... Update home.php
</head>

<header>
<?PHP require("menu.php");?>
</header>

<body>
<<<<<<< HEAD
        <div id="chart_div" style="width: 900px; height: 500px;"></div>
<?php

require("menu.php");

=======
<?php 
>>>>>>> parent of d3ece6e... Update home.php
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