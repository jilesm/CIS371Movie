<?PHP
$l=mysqli_connect("34.224.83.184","student15","phppass15","student15");
/*
$url = $_POST['launch_presentation_return_url'];
$query=parse_url($url,PHP_URL_QUERY);
parse_str($query, $out);

$course_id=$out['course_id'];
$course_title=$_POST['context_title'];
$course_batchUID=$_POST['context_label'];
$user_id=$_POST['user_id'];
$name=$_POST['lis_person_name_full'];

preg_match_all('/\//', $url,$matches, PREG_OFFSET_CAPTURE);  
$clientURL = substr($url, 0, $matches[0][2][1]);
*/

//$course_id=$_GET['course_id'];
$course_id="_3_1";
$clientURL="http://bb.dataii.com:8080";

require_once('classes/Rest.class.php');
require_once('classes/Token.class.php');

$rest = new Rest($clientURL);
$token = new Token();

$token = $rest->authorize();
$access_token = $token->access_token;

$columns = $rest->readGradebookColumns($access_token, $course_id);
$c=$columns->results;

//print_r($c);
//die();
foreach($c as $row)
{
    if ($row->name == "Total")
    {
     $finalGradeName=$row->name;
     $finalGradeID=$row->id;
     $finalPossible=$row->score->possible;
     break;
    }
}


$grades = $rest->readGradebookGrades($access_token, $course_id, $finalGradeID);

$g=$grades->results;
foreach($g as $row)
{
    //echo $row->userId . " has " .$row->score." ouf of ".$finalPossible." points. ";
    $user = $rest->readUser($access_token, $row->userId);
    echo $user->name->given." ".$user->name->family. " has " .$row->score." ouf of ".$finalPossible." points. ";
    echo "<pre>";
    print_r($user);
    echo "</pre>";  

    //$query goes here
    
    $query = 'insert into users (id,userName,externalID,created,dataSourceID,available,givenName,familyName) values ("'.$user->id.'","'.$user->userName.'","'.$user->externalId.'","'.$user->created.'","'.$user->dataSourceId.'","'.$user->availability->available.'","'.$user->name->given.'","'.$user->name->family.'")';

    mysqli_query($l, $query); 
}
$newQuery = 'select * from users';
mysqli_query($l,$newQuery);


?>
