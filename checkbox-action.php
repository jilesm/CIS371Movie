<?PHP
require("home.php");
	
if (isset($_POST['beauty'])){
	mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'beauty'");
	}
if (isset($_POST['despicable'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'despicable'");
        }
if (isset($_POST['fate'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'fate'");
        }
if (isset($_POST['guardians'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'guardians'");
        }
if (isset($_POST['it'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'it'");
        }
if (isset($_POST['logan'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'logan'");
        }
if (isset($_POST['spider'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'spider'");
        }
if (isset($_POST['star'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'star'");
        }
if (isset($_POST['Thor'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'Thor'");
        }
if (isset($_POST['wonder'])){
        mysqli_query($l, "UPDATE movies2 SET count = count + 1 WHERE movie_ID = 'wonder'");
        }



?>
