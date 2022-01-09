<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
//-------------------------------------------
if(isset($_GET['client']))
{
$slave_id = $_GET['id'];
//--------------------------------------
$querry_secs = "SELECT text FROM chat WHERE slave_id='$slave_id'";
$result4 = mysql_query($querry_secs, $connect);
while($row = mysql_fetch_array($result4) ){
 $text = $row[0];
}
echo $text;
}
?>