<?php
session_start();
require("auth.php");
$l=mysqli_connect("34.224.83.184", "student4", "phppass4", "student4");
$result = mysqli_query($l,"select * from movies2");

if(mysqli_connect_errno()){
    echo "Connect could not be made" .mysqli_error();
}
if($bAndtheB = mysqli_query($l,"select count from movies2 where movie_id='beauty'")){
                while($objBandB=mysqli_fetch_object($bAndtheB))
                {
                //echo "$objBandB->count";
                $outputBandB= $objBandB->count;
		}}
if($despic = mysqli_query($l,"select count from movies2 where movie_id='despicable'")){
                while($objDespic=mysqli_fetch_object($despic))
                {
                //echo "$objDespic->count";
                $outputDespic= $objDespic->count;
                }}
if($fate= mysqli_query($l,"select count from movies2 where movie_id='fate'")){
                while($objFate=mysqli_fetch_object($fate))
                {
                //echo "$objFate->count";
                $outputFate= $objFate->count;
                }}
if($guardians= mysqli_query($l,"select count from movies2 where movie_id='guardians'")){
                while($objGuardians=mysqli_fetch_object($guardians))
                {
                //echo "$objGuardians->count";
                $outputGuardians= $objGuardians->count;
                }}
if($it= mysqli_query($l,"select count from movies2 where movie_id='it'")){
                while($objIt=mysqli_fetch_object($it))
                {
                //echo "$objIt->count";
                $outputIt= $objIt->count;
                }}
if($Logan= mysqli_query($l,"select count from movies2 where movie_id='logan'")){
                while($objLogan=mysqli_fetch_object($Logan))
                {
                //echo "$objLogan->count";
                $outputLogan= $objLogan->count;
                }}
if($spider= mysqli_query($l,"select count from movies2 where movie_id='spider'")){
                while($objSpider=mysqli_fetch_object($spider))
                {
                //echo "$objSpider->count";
                $outputSpider= $objSpider->count;
                }}
if($spider= mysqli_query($l,"select count from movies2 where movie_id='spider'")){
                while($objSpider=mysqli_fetch_object($spider))
                {
                //echo "$objSpider->count";
                $outputSpider= $objSpider->count;
                }}
if($star= mysqli_query($l,"select count from movies2 where movie_id='star'")){
                while($objStar=mysqli_fetch_object($star))
                {
                //echo "$objSpider->count";
                $outputStar= $objStar->count;
                }}
if($Thor= mysqli_query($l,"select count from movies2 where movie_id='Thor'")){
                while($objThor=mysqli_fetch_object($Thor))
                {
                //echo "$objThor->count";
                $outputThor= $objThor->count;
                }}
if($wonder= mysqli_query($l,"select count from movies2 where movie_id='wonder'")){
                while($objWonder=mysqli_fetch_object($wonder))
                {
                //echo "$objWonder->count";
                $outputWonder= $objWonder->count;
                }}
?>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="home.css">
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
        data.addColumn('string', 'Movie');
        data.addColumn('number', 'Number of Students');
        data.addRows([
          ['Beauty and the Beast',<?php echo $outputBandB;?>],
	  ['Despicable Me 3', <?php echo $outputDespic;?>],
	  ['Fate of the Furious', <?php echo $outputFate; ?>],
          ['Guardians of the Galaxy: Vol 2.', <?php echo $outputGuardians; ?>],
          ['IT', <?php echo $outputIt; ?>],
	  ['Logan', <?php echo $outputLogan; ?>],
          ['Spider-Man: Homecoming', <?php echo $outputSpider; ?>],
          ['Star Wars: The Force Awakens', <?php echo $outputStar; ?>],
          ['Thor: Ragnarok', <?php echo $outputThor; ?>],
          ['Wonder Woman', <?php echo $outputWonder; ?>]
	  ]);
 // Set chart options
        var options = {'title':'Top Movies of 2017 and who saw them',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
        <title>Movie Ratings</title>
</head>
<header>
<?PHP require("menu.php");?>
</header>

<body>
        <div id="chart_div" style="width: 900px; height: 325px;"></div>
<?php 

echo "<table  border='1' cellpadding=10>";
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


?>
</body>

</html>
